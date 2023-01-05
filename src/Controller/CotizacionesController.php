<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CotizacionesController extends AbstractController
{
    #[Route('/cotizaciones', name: 'cotizaciones')]
    public function index(): Response
    {
        return $this->render('cotizaciones/index.html.twig', [
            'controller_name' => 'CotizacionesController',
        ]);
    }
}
