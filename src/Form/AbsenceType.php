<?php

namespace App\Form;

use App\Entity\Absence;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class AbsenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('dateDebAbs', DateType::class, ['attr' => ['class' => 'form-control'], 'label' => false,  'widget' => 'single_text'])
            ->add('dateFinAbs', DateType::class, ['attr' => ['class' => 'form-control'], 'label' => false, 'widget' => 'single_text'])
            ->add('motifAbsence', TextareaType::class, ['attr' => ['class' => 'form-control', 'placeholder' => 'Votre nom'], 'label' => false])
            ->add('justificatifAbsence', FileType::class, [
                'label' => false,
                'mapped' => false,
                'required' => false,
                'attr' => ['class' => 'form-control'],
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        'mimeTypesMessage' => '',
                    ])
                ],
            ])
            //->add('idBail')
          //  ->add('save', SubmitType::class, ['attr' => ['class' => 'btn btn-primary'], 'label' => 'Valider']);
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Absence::class,
        ]);
    }
}
