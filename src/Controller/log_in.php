<?php


namespace App\Controller;
use App\Entity\Users;
use App\Form\log_inFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;
use Doctrine\ORM\EntityManagerInterface;


class log_in extends AbstractController
{
    public function log_in(Environment $twig, Request $request)
    {
        $user=new Users();
        $form=$this->createForm(log_inFormType::class,$user);
        $form->handleRequest($request);
        return new Response ($twig->render('blog/log_in.html.twig',['form_form'=>$form->createView()]));
    }

}