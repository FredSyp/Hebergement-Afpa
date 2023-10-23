<?php

namespace App\Controller;

use DateTime;
use App\Entity\Personne;
use App\Form\RegisterFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class RegisterController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function index(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new Personne(); // Créez une nouvelle instance de votre entité Personne
        $form = $this->createForm(RegisterFormType::class, $user); // Créez un formulaire en utilisant le formulaire Symfony que vous avez créé
        $dateInscription = new DateTime();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $hashedPassword = $passwordHasher->hashPassword($user);
            
            $user->setMdp($hashedPassword);

            $user->setCodeRoles(['ROLE_USER']);
            $user->setDateInscription($dateInscription);
            $user->setIpInscription($request->getClientIp());
            $user->setTrackerInscription($_SERVER["HTTP_USER_AGENT"]);
            $user->setIdRolePersonne(1);
            
            // Enregistre l'utilisateur en bdd
            $entityManager->persist($user);
            $entityManager->flush();

            // Redirection 
            return $this->redirectToRoute('app_login');
        }

        return $this->render('register/index.html.twig', [
            'form' => $form->createView(), // Passez le formulaire à la vue
        ]);
    }   
}
