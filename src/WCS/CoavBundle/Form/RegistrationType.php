<?php
/**
 * Created by PhpStorm.
 * User: cyrht
 * Date: 27/01/18
 * Time: 20:52
 */

namespace WCS\CoavBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)

    {
        $builder->add('firstName');
        $builder->add('lastName');
        $builder->add('phoneNumber');
        $builder->add('birthDate');
        $builder->add('creationDate');
        $builder->add('role');
        $builder->add('note');
        $builder->add('isACertifiedPilot');
        $builder->add('isActive');
        $builder->add('reviews');

    }

    public function getParent()

    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()

    {
        return 'app_user_registration';
    }

    public function getName()

    {
        return $this->getBlockPrefix();
    }

}