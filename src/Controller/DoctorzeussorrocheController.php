<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DoctorzeussorrocheController extends AbstractController
{
    #[Route('/doctorzeussorroche', name: 'doctorzeussorroche')]
    public function index(): Response
    {
        return $this->render('doctorzeussorroche/index.html.twig', [
            'controller_name' => 'DoctorzeussorrocheController',
        ]);
    }
}
