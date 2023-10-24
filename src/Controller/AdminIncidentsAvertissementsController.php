<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminIncidentsAvertissementsController extends AbstractController
{
    #[Route('/admin/incidents/avertissements', name: 'app_admin_incidents_avertissements')]
    public function index(): Response
    {
        return $this->render('admin_incidents_avertissements/index.html.twig', [
            'controller_name' => 'AdminIncidentsAvertissementsController',
        ]);
    }
}
