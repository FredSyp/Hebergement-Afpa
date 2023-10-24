<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminChambresController extends AbstractController
{
    #[Route('/admin/chambres', name: 'app_admin_chambres')]
    public function index(): Response
    {
        return $this->render('admin_chambres/index.html.twig', [
            'controller_name' => 'AdminChambresController',
        ]);
    }
}
