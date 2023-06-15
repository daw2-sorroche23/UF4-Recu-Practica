<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginzeussorrocheController extends AbstractController
{
    #[Route('/loginzeussorroche', name: 'loginzeussorroche')]
    public function index(): Response
    {
        return $this->render('loginzeussorroche/index.html.twig', [
            'controller_name' => 'LoginzeussorrocheController',
        ]);
    }
}
