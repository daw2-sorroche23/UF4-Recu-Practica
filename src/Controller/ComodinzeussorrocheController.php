<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComodinzeussorrocheController extends AbstractController
{

    /**
     * @Route("/{path}", name="p_paths", requirements={"path"="[Pp][a-z0-9_\/]+"})
     */
	public function index($path): Response
    {
        return $this->render('comodinzeussorroche/index.html.twig', [
            'controller_name' => 'ComodinzeussorrocheController',
        ]);
    }
}
