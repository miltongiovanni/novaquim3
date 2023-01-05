<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotaCreditoController extends AbstractController
{
    #[Route('/nota/credito', name: 'nota_credito')]
    public function index(): Response
    {
        return $this->render('nota_credito/index.html.twig', [
            'controller_name' => 'NotaCreditoController',
        ]);
    }
}
