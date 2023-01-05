<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GastosController extends AbstractController
{
    #[Route('/gastos', name: 'gastos')]
    public function index(): Response
    {
        return $this->render('gastos/index.html.twig', [
            'controller_name' => 'GastosController',
        ]);
    }
}
