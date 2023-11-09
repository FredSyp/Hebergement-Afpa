<?php

namespace App\Form;

use App\Entity\Centre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class CentreFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomCentre', TextType::class)
            ->add('adresseCentre', TextType::class)
            ->add('compAdresseCentre', TextType::class)
            ->add('siren', IntegerType::class)
            ->add('numTva', IntegerType::class)
            ->add('numTel', IntegerType::class)
            ->add('fax', IntegerType::class)
            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Centre::class,
        ]);
    }
}
