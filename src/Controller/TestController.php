<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class TestController extends AbstractController
{
    #[Route('/test', name: 'app_test')]
    public function index(Request $request)
    {
        $params = $request->query->all();
        $string = "les paramètres sont : </br>";
        foreach($params as $key => $value)
        {
            $string = $string . '- ' . $key . ': ' . $value . '<br>';
            return new Response($string);
        }
        return $this->render('test/index.html.twig', [
            'controller_name' => 'TestController',
        ]);
    }
}
