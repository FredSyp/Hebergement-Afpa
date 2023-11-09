<?php

namespace App\Controller;

use DateTime;
use App\Entity\Etage;
use App\Entity\Centre;
use App\Entity\Chambre;
use App\Entity\Personne;
use App\Form\EtageFormType;
use App\Entity\RolePersonne;
use App\Form\CentreFormType;
use App\Form\ChambreFormType;
use App\Form\PersonneFormType;
use App\Repository\VilleRepository;
use App\Repository\CentreRepository;
use App\Repository\ChambreRepository;
use App\Repository\EtageRepository;
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
    public function generateAndHashPassword(string $numeroBeneficiaire, UserPasswordHasherInterface $passwordHasher): string
    {
        // Générer le mot de passe
        $motDePasse = 'afpa' . $numeroBeneficiaire . '!';

        // Hacher le mot de passe
        $hashedPassword = $passwordHasher->hashPassword(new Personne(), $motDePasse);

        return $hashedPassword;
    }

    #[Route('/admin/dashboard', name: 'app_admin_dashboard')]
    public function index(ChambreRepository $chambreRepo, EtageRepository $etageRepo, Chambre $chambre, Etage $etage, VilleRepository $repoVille, RendezVousRepository $rdvRepository,CentreRepository $centreRepo, UserInterface $user, Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        $userform = $this->createForm(PersonneFormType::class, $user);
        $dateInscription = new DateTime();
        $rendezVous = $rdvRepository->findAll();
        $userform->handleRequest($request);
        $rolePersonneRepository = $entityManager->getRepository(RolePersonne::class);
        $rolePersonne = $rolePersonneRepository->find(1);

        if ($userform->isSubmitted() && $userform->isValid()) {

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

        $centre = $centreRepo->findAll();
        $center = new Centre();
        $centerForm =  $this->createForm(CentreFormType::class, $center);
        $centerForm->handleRequest($request);

        if ($centerForm->isSubmitted() && $centerForm->isValid())
        {    
            $ville = $repoVille->findOneByCodeInsee(1);
            $center->setidVille($ville);

            $entityManager->persist($center);
            $entityManager->flush();

        }

        $etages = $etageRepo->findAll();
        $etage = new Etage();
        $etageForm = $this->createForm(EtageFormType::class, $etage);
        $etageForm->handleRequest($request);

        if ($etageForm->isSubmitted() && $etageForm->isValid()) {
           
            $entityManager->persist($etage);
            $entityManager->flush();

        }

        $chambres = $chambreRepo->findAll();
        $chambre = new Chambre();
        $chambreForm = $this->createForm(ChambreFormType::class, $chambre);
        $chambreForm->handleRequest($request);

        if ($chambreForm->isSubmitted() && $chambreForm->isValid()) {

            $entityManager->persist($chambre);
            $entityManager->flush();

        }

        return $this->render('admin_dashboard/index.html.twig', [
            'controller_name' => 'AdminDashboardController',
            'rendezVous' => $rendezVous,
            'personne' => $user,
            'centre'=> $centre,
            'etage' => $etages,
            'chambre' => $chambres,
            'userForm' => $userform->createView(),
            'centerForm' => $centerForm->createView(),
            'etageForm' => $etageForm->createView(),
            'chambreForm' => $chambreForm->createView()

        ]);

    }
}