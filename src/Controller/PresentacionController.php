<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentacionController extends AbstractController
{
    #[Route('/presentacion', name: 'app_presentacion')]
    public function index(): Response
    {
        return $this->render('presentacion/index.html.twig', [
            'controller_name' => 'PresentacionController',
        ]);
    }
}
