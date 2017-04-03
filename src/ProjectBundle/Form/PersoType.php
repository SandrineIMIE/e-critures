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
            ->add('surnom')
            ->add('daten' ,null, array (
                'label' => 'Date de Naissance',
                'required' => true
            ))
            ->add('lieun' ,null, array (
                'label' => 'Lieu de Naissance',
                'required' => true
            ))
            ->add('sexe')
            ->add('statut')
            ->add('mineur')
            ->add('imageFile', VichImageType::class, [
                'required' => false,])

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
