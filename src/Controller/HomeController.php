<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {

        // $testavel = 'Budega dificil de configurar';
        // return $this->render('home/index.html.twig', [
        //     'controller_name' => 'HomeController',

        //     'testavel' => $testavel,

        // ]);

        return new Response('Ola pagina home');
    }
}
