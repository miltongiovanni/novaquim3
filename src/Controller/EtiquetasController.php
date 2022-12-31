<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtiquetasController extends AbstractController
{
    #[Route('/etiquetas', name: 'app_etiquetas')]
    public function index(): Response
    {
        return $this->render('etiquetas/index.html.twig', [
            'controller_name' => 'EtiquetasController',
        ]);
    }
}
