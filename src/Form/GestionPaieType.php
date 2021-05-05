<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GestionPaieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('Client', EntityType::class, [
            'class' => Client::class,
            'label' => 'Name Client : ',
            'mapped' => false,
            'required'   => true,
            'attr' => ['class' => 'form-control']
        ])
            ->add('salaire', IntegerType::class,[
                'label' => 'Salaire :  ',
                'required'   => true,
                'mapped' => false,
                'attr' => ['class' => 'form-control']
            ])
            ->add('Payer', SubmitType::class, [
                'attr' => ['class' => 'btn btn-success']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
            'csrf_token_id' => 'gestion_paie_csrf'
        ]);
    }
}
