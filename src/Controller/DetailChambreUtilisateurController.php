<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailChambreUtilisateurController extends AbstractController
{
    #[Route('/detail-chambre-utilisateur', name: 'app_detail_chambre_utilisateur')]
    public function index(): Response
    {
        return $this->render('detail_chambre_utilisateur/index.html.twig', [
            'controller_name' => 'DetailChambreUtilisateurController',
        ]);
    }
}
