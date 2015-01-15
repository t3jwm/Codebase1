<?php // src/Acme/DemoBundle/Form/Type/UserType.php
namespace Acme\DemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    	
    	$builder->add('userName', 'text');
        
        $builder->add('password', 'repeated', array(
           'type'        => 'password',
        ));
        
       $builder->add('firstName', 'text');
       $builder->add('lastName', 'text');
        $builder->add('email', 'email');
        $builder->add('language', 'choice', array(
        		'choices' => array('English' => 'English', 'French' => 'French', 'Chinese' => 'Chinese'),
        		'preferred_choices' => array('baz'),
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Acme\DemoBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'user';
    }
}