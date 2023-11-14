<?php

namespace App\Controller\Profile;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(): Response
    {
        if ($this->getUser()->getRoles() === ['ROLE_ADMIN', 'ROLE_USER']) {
            return $this->render('profile/profile/admin.html.twig', [
                'controller_name' => 'ProfileController',
            ]);
        }
        return $this->render('profile/profile/user.html.twig', [
            'controller_name' => 'ProfileController',
        ]);
    }
}
