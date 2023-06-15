<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LogoutzeussorrocheController extends AbstractController
{
    #[Route('/logoutzeussorroche', name: 'logoutzeussorroche')]
    public function index(): Response
    {
        return $this->render('logoutzeussorroche/index.html.twig', [
            'controller_name' => 'LogoutzeussorrocheController',
        ]);
    }
}
