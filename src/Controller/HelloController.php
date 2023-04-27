<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    #[Route("/hello/{param}", methods: ["GET"], requirements: ['param' => '\d+'])]
    public function indexNumber($param): Response
    {
        $title = "utilisateurs";
        $users = ["Mickey","Leo", "Donnie", "Raph"];
        return $this->render('hello/index.html.twig', [
            'action' => 'Hello : Number ' .$param , 'controller_name' => 'HelloController', 'title' => $title, 'array' => $users
        ]);
    }
    
    #[Route("/hello/{param}", methods: ["GET"], requirements: ['param' => '^[a-zA-Z]+$'])]
    public function indexdefault($param): Response
    {
        $title = "utilisateurs";
        $users = ["Mickey","Leo", "Donnie", "Raph"];
        return $this->render('hello/index.html.twig', [
            'action' => 'Hello ! ' .$param , 'controller_name' => 'HelloController', 'title' => $title, 'array' => $users
        ]);
    }
}
