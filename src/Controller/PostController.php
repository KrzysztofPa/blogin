<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PostController extends AbstractController
{

    /**
     * @Route("/", name="app_homepage")
     */

    public function homepage(){
        return $this->render('base.html.twig');
    }

}