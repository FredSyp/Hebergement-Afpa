<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use DateTime;
use App\Entity\Personne;
use App\Entity\RolePersonne;
use App\Form\PersonneFormType;
use App\Repository\PersonneRepository;
use App\Repository\RendezVousRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AdminDashboardController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]

    public function index(RendezVousRepository $rdvRepository, PersonneRepository $personneRepository, UserInterface $user, Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        $personne = $personneRepository->findAll();
        $rendezVous = $rdvRepository->findAll();
        $user = $this->getUser();
        $form = $this->createForm(PersonneFormType::class, $user);
        $dateInscription = new DateTime();
        $form->handleRequest($request);
        $rolePersonneRepository = $entityManager->getRepository(RolePersonne::class);
        $rolePersonne = $rolePersonneRepository->find(1);

        if ($form->isSubmitted() && $form->isValid()) {

            $hashedPassword = $this->generateAndHashPassword($user->getNumeroBeneficiaire(), $passwordHasher);

            $user->setMdp($hashedPassword);

            $user->setCodeRoles('ROLE_ADMIN');
            $user->setDateInscription($dateInscription);
            $user->setIpInscription($request->getClientIp());
            $user->setTrackerInscription($_SERVER["HTTP_USER_AGENT"]);
            $user->setIdRolePersonne($rolePersonne);


            $entityManager->persist($user);
            $entityManager->flush();

        }

        return $this->render('admin_dashboard/index.html.twig', [
            'controller_name' => 'AdminDashboardController',
            'rendezVous' => $rendezVous,
            'personne' => $user,
            'form' => $form->createView()
        ]);

    }

    public function generateAndHashPassword(string $numeroBeneficiaire, UserPasswordHasherInterface $passwordHasher): string
    {
        // Générer le mot de passe
        $motDePasse = 'afpa' . $numeroBeneficiaire . '!';

        // Hacher le mot de passe
        $hashedPassword = $passwordHasher->hashPassword(new Personne(), $motDePasse);

        return $hashedPassword;
    }

    public function redirectToSidebarTabs(): RedirectResponse
    {
        $routes = ['admin_espace_locataire', 'app_admin_chambres', 'app_admin_rendez_vous'];
        foreach ($routes as $route) {
            $this->redirectToRoute($route);
        }
    }

}
