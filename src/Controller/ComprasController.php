<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ComprasController extends AbstractController
{
    #[Route('/compras', name: 'compras')]
    public function index(): Response
    {
        return $this->render('compras/index.html.twig', [
            'controller_name' => 'ComprasController',
        ]);
    }
}
