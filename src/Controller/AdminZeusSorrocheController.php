<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminZeusSorrocheController extends AbstractController
{
    #[Route('/admin/zeus/sorroche', name: 'blog_index')]
    public function index(): Response
    {
        $contents = $this->renderView('admin_zeus_sorroche/index.html.twig', [
            'category' => 'Pet',
            'promotions' => ['Dog', 'Cat'],
        ]);

        return new Response($contents);

    }

}


