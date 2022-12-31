<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DistribucionController extends AbstractController
{
    #[Route('/distribucion', name: 'app_distribucion')]
    public function index(): Response
    {
        return $this->render('distribucion/index.html.twig', [
            'controller_name' => 'DistribucionController',
        ]);
    }
}
