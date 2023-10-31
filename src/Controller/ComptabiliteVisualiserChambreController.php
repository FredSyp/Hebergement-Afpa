<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComptabiliteVisualiserChambreController extends AbstractController
{
    #[Route('/comptabilite-visualiser-chambre', name: 'app_comptabilite_visualiser_chambre')]
    public function index(): Response
    {
        return $this->render('comptabilite_visualiser_chambre/index.html.twig', [
            'controller_name' => 'ComptabiliteVisualiserChambreController',
        ]);
    }
}
