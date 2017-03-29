<?php

namespace ProjectBundle\Form;
use ProjectBundle\Entity\Category;
use ProjectBundle\Entity\Rights;
use ProjectBundle\Entity\Tag;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProjectType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title')
            ->add('description')
//            ->add('tags', EntityType::class, array(
//                "class"=>Tag::class,
//                "choice_label" => "name"))
            ->add('statut')
            ->add('tags', EntityType::class, array (
                "class"=>'ProjectBundle\Entity\Tag',
                "choice_label" => "name",
                "multiple"=>true,
                "expanded"=>true,
            ))
             ->add('category', EntityType::class, array(
            "class"=>Category::class,
            "choice_label" => "name"))
            ->add('rights', EntityType::class, array(
                    "class"=>Rights::class,
                    "choice_label" => "type")
    );

//            ->add('createdat')
//            ->add('editedat');
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
