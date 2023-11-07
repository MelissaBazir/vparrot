<?php

namespace App\Controller;

use App\Repository\CompanyRepository;
use App\Repository\OpeningRepository;
use App\Repository\ServiceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function index(OpeningRepository $openingRepository, ServiceRepository $serviceRepository, CompanyRepository $companyRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'openings' => $openingRepository->findAll(),
            'services'=> $serviceRepository->findAll(),
            'companies' => $companyRepository->findAll(),
        ]);
    }
}