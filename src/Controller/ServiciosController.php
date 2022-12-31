<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiciosController extends AbstractController
{
    #[Route('/servicios', name: 'app_servicios')]
    public function index(): Response
    {
        return $this->render('servicios/index.html.twig', [
            'controller_name' => 'ServiciosController',
        ]);
    }
}
