<?php

namespace App\Controller;

use App\Repository\ChambreRepository;
use App\Repository\PersonneRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminEspaceLocataireController extends AbstractController
{
    #[Route('/admin_espace_locataire', name: 'app_admin_espace_locataire')]
    public function index(PersonneRepository $personneRepository, ChambreRepository $chambreRepository): Response
    {

        $personnes = $personneRepository->findAll();
        $chambre = $chambreRepository->findAll();


        return $this->render('admin_espace_locataire/index.html.twig', [
            'controller_name' => 'AdminEspaceLocataireController',
            'personne' => $personnes,
            'chambre' => $chambre,
        ]);
    }
}
