<?php

namespace ProjectBundle\Form;

use ProjectBundle\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LinkType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adress')
            ->add('category', EntityType::class, array(
                "class"=>Project::class,
                "choice_label" => "title"))
            ->add('name')  ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectBundle\Entity\Link'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectbundle_link';
    }


}
