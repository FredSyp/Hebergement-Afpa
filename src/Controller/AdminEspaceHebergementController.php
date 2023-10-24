<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminEspaceHebergementController extends AbstractController
{
    #[Route('/admin_espace_hebergement', name: 'app_admin_espace_hebergement')]
    public function index(): Response
    {
        return $this->render('admin_espace_hebergement/index.html.twig', [
            'controller_name' => 'AdminEspaceHebergementController',
        ]);
    }
}
