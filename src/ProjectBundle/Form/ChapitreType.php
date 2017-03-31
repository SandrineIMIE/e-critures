<?php

namespace ProjectBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChapitreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',null, array (
                'label' => 'Titre',
                'required' => true
                )
//                ,EntityType::class, array (
//                "class"=>'ProjectBundle\Entity\Chapitre',
//                'label' => 'Titre',
//                'required' => true
//                )
            )
            ->add('contenu'
//                ,
//                EntityType::class, array (
//                "class"=>'ProjectBundle\Entity\Chapitre',
//                'label' => ''
//                )
            )
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectBundle\Entity\Chapitre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectbundle_chapitre';
    }


}
