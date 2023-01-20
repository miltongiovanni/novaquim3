<?php

namespace App\Form;

use App\Entity\Permission;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PermissionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('atributo')
            ->add('modulo')
            ->add('fecha_creacion')
            ->add('fecha_actualizacion')
            ->add('perfil')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Permission::class,
        ]);
    }
}
