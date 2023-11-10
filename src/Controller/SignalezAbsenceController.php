<?php

namespace App\Controller;

use App\Entity\Absence;
use App\Form\AbsenceType;
use App\Form\RegisterFormType;
use App\Repository\BailRepository;
use App\Repository\AbsenceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SignalezAbsenceController extends AbstractController
{
    #[Route('/signalez/absence', name: 'app_signalez_absence')]
    public function index(SluggerInterface $slugger, BailRepository $repoBail, Request $request, AbsenceRepository $AbsenceRepository,  EntityManagerInterface $entityManager): Response
    {
        // Vérifier si la personne est connecté

        // Si il n'es pas co faire le code suivant :
        // Renvoyer vers la page de connexion ou la page d'acceuil

        // Si oui faire le code suivant :
        $absence = new Absence(); // Créez une nouvelle instance de votre entité Absence
        $form = $this->createForm(AbsenceType::class, $absence); // Créez un formulaire en utilisant le formulaire Symfony que vous avez créé

        // $form->handleRequest($request);

          
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

          //  dd($form);
          $fichier = $form->get('justificatifAbsence')->getData();


          if ($fichier) {
              $originalFilename = pathinfo($fichier->getClientOriginalName(), PATHINFO_FILENAME);

              $safeFilename = $slugger->slug($originalFilename);

              $newFilename = $safeFilename . '-' . uniqid() . '.' . $fichier->guessExtension();


              try {
                  $fichier->move(
                      $this->getParameter('pdf_upload'),
                      $newFilename
                  );
              } catch (FileException $e) {

              }
          $bail = $repoBail->findOneByIdBail(5);
          $absence->setIdBail($bail);
          $absence->setJustificatifAbsence( $newFilename);
            $entityManager->persist($absence);
            $entityManager->flush();

            return $this->redirectToRoute('app_signalez_absence');
        }
    }
        // récuperer les absences de la personne
        $absences = $AbsenceRepository->findAll();
   
        return $this->render('signalez_absence/index.html.twig', [
            'controller_name' => 'SignalezAbsenceController',
            'absences' => (count($absences) != 0) ? $absences : 'vide',
            'form' => $form->createView(),
        ]);
    }
  
}

