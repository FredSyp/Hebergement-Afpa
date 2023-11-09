<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminRendezVousController extends AbstractController
{
    #[Route('/admin/rendez/vous', name: 'app_admin_rendez_vous')]
    public function index(): Response
    {
        return $this->render('admin_rendez_vous/index.html.twig', [
            'controller_name' => 'AdminRendezVousController',
        ]);
    }
}
