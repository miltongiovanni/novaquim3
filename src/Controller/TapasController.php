<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TapasController extends AbstractController
{
    #[Route('/tapas', name: 'app_tapas')]
    public function index(): Response
    {
        return $this->render('tapas/index.html.twig', [
            'controller_name' => 'TapasController',
        ]);
    }
}
