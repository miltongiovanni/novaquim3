<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EgresoController extends AbstractController
{
    #[Route('/egreso', name: 'app_egreso')]
    public function index(): Response
    {
        return $this->render('egreso/index.html.twig', [
            'controller_name' => 'EgresoController',
        ]);
    }
}
