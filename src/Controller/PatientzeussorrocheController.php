<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PatientzeussorrocheController extends AbstractController
{
    #[Route('/patientzeussorroche', name: 'patientzeussorroche')]
    public function index(): Response
    {
        return $this->render('patientzeussorroche/index.html.twig', [
            'controller_name' => 'PatientzeussorrocheController',
        ]);
    }
}
