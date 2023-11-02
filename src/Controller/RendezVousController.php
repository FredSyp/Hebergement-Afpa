<?php
namespace App\Controller;

use App\Entity\RendezVous;
use App\Form\RendezVousType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\RendezVousRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class RendezVousController extends AbstractController
{
    
    #[Route("/rendez-vous", name :'app_rendez_vous')]

    public function index(RendezVousRepository $rendezvousrepo,Request $request , EntityManagerInterface $entityManager)
    {
        $rendezVous = new RendezVous();
        $form = $this->createForm(RendezVousType::class, $rendezVous);
        $rendezvous = $rendezvousrepo->findAll();

        // Gérez la soumission du formulaire
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Enregistrez le rendez-vous dans la base de données
            $entityManager->persist($rendezVous);
            $entityManager->flush();
           
        }

        return $this->render('rendez_vous/index.html.twig', [
            'form' => $form->createView(),
            'rendezVousList' => $rendezvous,
        ]);
    }
 
    
}
