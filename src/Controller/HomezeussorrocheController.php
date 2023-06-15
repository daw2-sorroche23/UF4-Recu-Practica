<?php

namespace App\Controller;

use AppBundle\Entity\Users;
use AppBundle\Form\UsersType;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomezeussorrocheController extends AbstractController
{
    #[Route('', name: 'app_homezeussorroche')]
    public function index(): Response
    {
        return $this->render('homezeussorroche/index.html.twig', [
            'controller_name' => 'HomezeussorrocheController',
        ]);
    }
}

