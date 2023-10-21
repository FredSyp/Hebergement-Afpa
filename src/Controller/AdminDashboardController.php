<?php

namespace App\Controller;

use App\Repository\PersonneRepository;
use App\Repository\RendezVousRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function index(RendezVousRepository $rdvRepository, PersonneRepository $personneRepository): Response
    {

        $rendezVous = $rdvRepository->findAll();
        $personne = $personneRepository->findAll();



        return $this->render('admin_dashboard/index.html.twig', [
            'controller_name' => 'AdminDashboardController',
            'rendezVous' => $rendezVous,
            'personne' => $personne
        ]);
    }
}
