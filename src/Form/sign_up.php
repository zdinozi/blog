<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class SignForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nick', TextType::class)
            ->add('Password', TextType::class)
            ->add('E_mail', TextType::class)
            ->add('Name', TextType::class)
            ->add('Surname', TextType::class)
            ->add('Register', SubmitType::class);
    }
}