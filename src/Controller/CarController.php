<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Car;
use App\Form\CarType;
use App\Form\SearchForm;
use App\Repository\CarRepository;
use App\Repository\CompanyRepository;
use App\Repository\OpeningRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;


class CarController extends AbstractController
{
    // Cars displayed in cards for customer
    #[Route('/occasions', name: 'occasions_list', methods: ['GET'])]
    public function list(CarRepository $carRepository, Request $request, OpeningRepository $openingRepository, CompanyRepository $companyRepository): Response
    {
        $data = new SearchData();
        $data->page = $request->get('page',1);
        $form = $this->createForm(SearchForm::class, $data);
        $form->handleRequest($request);
        return $this->render('car/list.html.twig', [
            'cars' => $carRepository->findSearch($data),
            'openings' => $openingRepository->findAll(),
            'companies' => $companyRepository->findAll(),
            'form' => $form->createView(),
        ]);
    }
    
    #[Route('/cars', name: 'app_car_index', methods: ['GET'])]
    public function index(CarRepository $carRepository): Response
    {
        return $this->render('car/index.html.twig', [
            'cars' => $carRepository->findAll(),
        ]);
    }

    #[Route('/cars/new', name: 'app_car_new', methods: ['GET', 'POST'])]
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

    #[Route('/cars/{slug}', name: 'app_car_show', methods: ['GET'])]
    public function show(Car $car): Response
    {
        return $this->render('car/show.html.twig', [
            'car' => $car,
        ]);
    }

    // Details of a card for customer
    #[Route('/occasions/{slug}', name: 'occasions_details', methods: ['GET'])]
    public function details(Car $car): Response
    {
        return $this->render('car/details.html.twig', [
            'car' => $car,
        ]);
    }

    #[Route('/cars/{slug}/edit', name: 'app_car_edit', methods: ['GET', 'POST'])]
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

    #[Route('/cars/{id}', name: 'app_car_delete', methods: ['POST'])]
    public function delete(Request $request, Car $car, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$car->getId(), $request->request->get('_token'))) {
            $entityManager->remove($car);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_car_index', [], Response::HTTP_SEE_OTHER);
    }
}