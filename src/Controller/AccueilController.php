<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/accueil',name: 'app_accueil')]
    public function index(): Response
    {
      // Je crée accueil/index.html.twig
      $prenom='';
        return $this->render('accueil/index.html.twig', [
            'mavariable' => $prenom,
        ]);
    }
}
