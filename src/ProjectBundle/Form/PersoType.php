<?php

namespace ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class PersoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('surnom',null, array (
                'required' => false
            ))
            ->add('daten' ,null, array (
                'label' => 'Date de Naissance',
                'required' => false
            ))
            ->add('lieun' ,null, array (
                'label' => 'Lieu de Naissance',
                'required' => false
            ))
            ->add('sexe',null, array (
                'required' => false
            ))
            ->add('statut',null, array (
                'required' => false
            ))
            ->add('mineur')
            ->add('imageFile', VichImageType::class, array (
//                'label' => "Image ",
                'required' => false))

            ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectBundle\Entity\Perso'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectbundle_perso';
    }


}
