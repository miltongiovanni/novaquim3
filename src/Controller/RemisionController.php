<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RemisionController extends AbstractController
{
    #[Route('/remision', name: 'app_remision')]
    public function index(): Response
    {
        return $this->render('remision/index.html.twig', [
            'controller_name' => 'RemisionController',
        ]);
    }
}
