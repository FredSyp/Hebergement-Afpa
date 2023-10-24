<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminMiseAJourConsignesController extends AbstractController
{
    #[Route('/admin/mise/a/jour/consignes', name: 'app_admin_mise_a_jour_consignes')]
    public function index(): Response
    {
        return $this->render('admin_mise_a_jour_consignes/index.html.twig', [
            'controller_name' => 'AdminMiseAJourConsignesController',
        ]);
    }
}
