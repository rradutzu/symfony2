<?php
namespace Form\FormBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class Form extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name','text',array('label' =>'Site name:'));
        $builder->add('url','text',array('label' =>'Site URL:'));
        $builder->add('isActive','checkbox',array('label' =>'Active:', 'required'=> false,));
    }
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Form\FormBundle\Entity\Site',
        );
    }
    public function getName()
    {
        return 'form';
    }
}