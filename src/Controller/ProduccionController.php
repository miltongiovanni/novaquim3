<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduccionController extends AbstractController
{
    #[Route('/produccion', name: 'produccion')]
    public function index(): Response
    {
        return $this->render('produccion/index.html.twig', [
            'controller_name' => 'ProduccionController',
        ]);
    }
}
