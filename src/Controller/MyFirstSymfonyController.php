<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MyFirstSymfonyController extends AbstractController
{
    #[Route('/my/first/symfony', name: 'app_my_first_symfony')]
    public function index(): Response
    {
        return $this->render('my_first_symfony/index.html.twig', [
            'controller_name' => 'MyFirstSymfonyController',
        ]);
    }
}
