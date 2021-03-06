<?php

namespace ProjectBundle\Form;

use ProjectBundle\Entity\Category;
use ProjectBundle\Entity\Rights;
use ProjectBundle\Entity\Tag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProjectType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title', null, array(
            'label' => 'Titre',
            'required' => true
        ))
            ->add('description', null, array(
                'label' => 'Description du Project'
            ))
            ->add('statut')
            ->add('tags', EntityType::class, array(
                "class" => 'ProjectBundle\Entity\Tag',
                "choice_label" => "name",
                "multiple" => true,
                "expanded" => true,
            ))
            ->add('category', EntityType::class, array(
                "class" => Category::class,
                'label' => 'Catégories',
                "choice_label" => "name"))
            ->add('imageFile', VichImageType::class, [
//                'label' => "Image (PNG ou JPG)",
                'required' => false])
            ->add('rights', EntityType::class, array(
                    "class" => Rights::class,
                    'label' => 'Droits',
                    "choice_label" => "type")
            );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ProjectBundle\Entity\Project'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'projectbundle_project';
    }


}
