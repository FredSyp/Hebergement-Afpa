<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DocumentsUtilisateurController extends AbstractController
{
    #[Route('/documents-utilisateur', name: 'app_documents_utilisateur')]
    public function index(): Response
    {
        return $this->render('documents_utilisateur/index.html.twig', [
            'controller_name' => 'DocumentsUtilisateurController',
        ]);
    }
}
