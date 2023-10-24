<?php

namespace App\Controller;

use App\Repository\PersonneRepository;
use App\Repository\RendezVousRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function index(RendezVousRepository $rdvRepository, PersonneRepository $personneRepository): Response
    {

        $rendezVous = $rdvRepository->findAll();
        $personnes = $personneRepository->findAll();
    
        return $this->render('admin_dashboard/index.html.twig', [
            'controller_name' => 'AdminDashboardController',
            'rendezVous' => $rendezVous,
            'personnes' => $personnes // Assurez-vous de passer 'personnes' plutôt que 'personne'
        ]);
    }

    public function redirectToSidebarTabs(): RedirectResponse{
        return $this->redirectToRoute('admin_espace_hebergement');
        return $this->redirectToRoute('app_admin_incidents_avertissements');
        return $this->redirectToRoute('app_admin_chambres');
        return $this->redirectToRoute('app_admin_comptabilite');
        return $this->redirectToRoute('app_admin_rendez_vous');
        return $this->redirectToRoute('app_admin_mise_a_jour_consignes');
    }
}
