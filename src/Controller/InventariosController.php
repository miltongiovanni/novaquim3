<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InventariosController extends AbstractController
{
    #[Route('/inventarios', name: 'inventarios')]
    public function index(): Response
    {
        return $this->render('inventarios/index.html.twig', [
            'controller_name' => 'InventariosController',
        ]);
    }
}
