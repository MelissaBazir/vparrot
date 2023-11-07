<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    #[Route(path:"/contact", name:"contact_index")]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        // Email sending
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $email = (new Email())
            ->from($form->get('email')->getData())
            ->to('admin@vparrot.fr')
            ->subject($form->get('subject')->getData())
            ->text($form->get('message')->getData());

            $mailer->send($email);
            
            $this->addFlash('success', 'Votre message a bien été envoyé');
            return $this->redirectToRoute('contact_index');
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}