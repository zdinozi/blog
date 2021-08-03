<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class main extends AbstractController
{
    public function main()
    {
        return $this->render('blog/main.html.twig');
    }
}