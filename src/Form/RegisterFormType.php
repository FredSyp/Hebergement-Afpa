<?php

namespace App\Form;

use App\Entity\Personne;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegisterFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mdp', PasswordType::class, [
                'label' => 'Mot de passe'
            ])
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class, [
                'label' => 'Prénom'
            ])
            ->add('email', EmailType::class, [
                'label' => 'Adresse Email'
            ])
            ->add('numTelephone', IntegerType::class, [
                'label' => 'Numéro de téléphone'
            ])
            ->add('dateNaissance', DateType::class, [
                'widget' => 'single_text',
                'html5' => 'false',
                'label' => 'Date de naissance',
                'attr' => [
                    'class' => 'form-control datepicker',
                ]
            ])
            ->add('lieuNaissance', TextType::class)
            ->add('dateMajPers')
            ->add('idCivilite');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Personne::class,
        ]);
    }
}
