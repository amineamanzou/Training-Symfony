<?php

namespace Training\ArticleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('description','textarea',array(
                'required' => false
            ))
            ->add('url','url')
            //->add('date') On ne donne pas à l'utilisateur le droit de changer la date
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Training\ArticleBundle\Entity\Article'
        ));
    }

    public function getName()
    {
        return 'training_articlebundle_articletype';
    }
}
