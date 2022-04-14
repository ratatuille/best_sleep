<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request): Response
    {
        $formulaire = $this->createForm(ContactType::class);
          $formulaire->handleRequest($request);

        if ($formulaire->isSubmitted()){

            $data=$formulaire->getData();
            
            return $this->renderForm('contact/envoye.html.twig', [
                'data' => $data,
            ]);
        }else {
            return $this->renderForm('contact/index.html.twig', [
                'form' => $formulaire,
            ]);
        }
 
    }
}
