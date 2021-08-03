<?php

namespace App\Controller;
use App\Entity\Users;
use App\Form\SignForm;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class sign_in extends AbstractController
{
    public function sign_up(Environment $twig,Request $request,EntityManagerInterface $entityManager){
        $user=new Users();
        $form=$this->createForm(SignForm::class,$user);
        $form->handleRequest($request);

        return new Response ($twig->render('blog/sign_up.html.twig',['signup_form'=>$form->createView()]));

    }
}