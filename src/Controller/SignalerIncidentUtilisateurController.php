<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignalerIncidentUtilisateurController extends AbstractController
{
    #[Route('/signaler-incident-utilisateur', name: 'app_signaler_incident_utilisateur')]
    public function index(): Response
    {
        return $this->render('signaler_incident_utilisateur/index.html.twig', [
            'controller_name' => 'SignalerIncidentUtilisateurController',
        ]);
    }
}
