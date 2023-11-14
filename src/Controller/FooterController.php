<?php

namespace App\Controller;

use App\Repository\CompanyRepository;
use App\Repository\OpeningRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FooterController extends AbstractController
{
    #[Route('/footer', name: 'app_footer')]
    public function hours(CompanyRepository $companyRepository, OpeningRepository $openingRepository): Response
    {
        $companies = $companyRepository->findAll();
        $openings = $openingRepository->findAll();
        
        return $this->render('_partials/_hours.html.twig', [
            'companies' => $companies,
            'openings' => $openings,
            'controller_name' => 'FooterController',
        ]);
    }

    public function contactDetails(CompanyRepository $companyRepository, OpeningRepository $openingRepository): Response
    {
        $companies = $companyRepository->findAll();
        $openings = $openingRepository->findAll();

        return $this->render('_partials/_contactDetails.html.twig', [
            'companies' => $companies,
            'openings' => $openings,
            'controller_name' => 'FooterController',
        ]);
    }
}