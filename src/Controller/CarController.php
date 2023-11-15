<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Car;
use App\Form\CarType;
use App\Form\SearchForm;
use App\Repository\CarRepository;
use App\Repository\CompanyRepository;
use App\Repository\ImageRepository;
use App\Repository\OpeningRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;


class CarController extends AbstractController
{
    // Cars displayed in cards for customer
    #[Route('/occasions', name: 'occasions_list', methods: ['GET'])]
    public function list(CarRepository $carRepository, Request $request, ImageRepository $imageRepository): Response
    {
        $data = new SearchData();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm::class, $data);
        $form->handleRequest($request);
        $cars = $carRepository->findSearch($data);
        // if Ajax request, we get a Json response
        if ($request->get('ajax')) {
            return new JsonResponse([
                'content' => $this->renderView('car/_cars.html.twig', ['cars' => $cars])
            ]);
        }
        return $this->render('car/list.html.twig', [
            'cars' => $cars,
            'images' => $imageRepository->findAll(),
            'form' => $form->createView(),
        ]);
    }

    #[Route('/profil/occasions', name: 'app_car_index', methods: ['GET'])]
    public function index(CarRepository $carRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $cars = $paginator->paginate(
            $carRepository->findAll(),
            $request->query->getInt('page', 1),
            9
        );
        return $this->render('car/index.html.twig', [
            'cars' => $cars,
        ]);
    }

    #[Route('/profil/occasions/nouveau', name: 'app_car_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $car = new Car();
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //generation of slug
            $slug = $slugger->slug($car->getTitle())->Lower();
            $car->setSlug($slug);

            $entityManager->persist($car);
            $entityManager->flush();

            return $this->redirectToRoute('app_car_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('car/new.html.twig', [
            'car' => $car,
            'form' => $form,
        ]);
    }

    #[Route('/profil/occasions/{slug}', name: 'app_car_show', methods: ['GET'])]
    public function show(Car $car): Response
    {
        return $this->render('car/show.html.twig', [
            'car' => $car,
        ]);
    }

    // Details of a card for customer
    #[Route('/occasions/{slug}', name: 'occasions_details', methods: ['GET'])]
    public function details(Car $car, ImageRepository $imageRepository, OpeningRepository $openingRepository, CompanyRepository $companyRepository): Response
    {
        
        return $this->render('car/details.html.twig', [
            'car' => $car,
            'images' => $imageRepository->find($car->getId()),
            'openings' => $openingRepository->findAll(),
            'companies' => $companyRepository->findAll(),
        ]);
    }

    #[Route('/profil/occasions/{slug}/modifier', name: 'app_car_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Car $car, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(CarType::class, $car);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //generation of slug
            $slug = $slugger->slug($car->getTitle())->Lower();
            $car->setSlug($slug);
            $entityManager->flush();

            return $this->redirectToRoute('app_car_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('car/edit.html.twig', [
            'car' => $car,
            'form' => $form,
        ]);
    }

    #[Route('/profil/occasions/{id}', name: 'app_car_delete', methods: ['POST'])]
    public function delete(Request $request, Car $car, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $car->getId(), $request->request->get('_token'))) {
            $entityManager->remove($car);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_car_index', [], Response::HTTP_SEE_OTHER);
    }
}