<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Repository\PersonneRepository;
use App\Repository\RendezVousRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function index(RendezVousRepository $rdvRepository, Request $request, PersonneRepository $personneRepository): Response
    {
        $rendezVous = $rdvRepository->findAll();
        $personne = $personneRepository->findAll();
        return $this->render('admin_dashboard/index.html.twig', [
            'controller_name' => 'AdminEspaceLocataireController',
            'personne' => $personne,
            'rendezVous' => $rendezVous
        ]);
    }

    public function redirectToSidebarTabs(): RedirectResponse
    {
        $routes = ['admin_espace_locataire', 'app_admin_chambres', 'app_admin_rendez_vous'];
        foreach ($routes as $route) {
            $this->redirectToRoute($route);
        }
    }
}
