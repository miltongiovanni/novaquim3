<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarteraController extends AbstractController
{
    #[Route('/cartera', name: 'app_cartera')]
    public function index(): Response
    {
        return $this->render('cartera/index.html.twig', [
            'controller_name' => 'CarteraController',
        ]);
    }
}
