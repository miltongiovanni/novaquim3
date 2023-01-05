<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EnvaseController extends AbstractController
{
    #[Route('/envase', name: 'envase')]
    public function index(): Response
    {
        return $this->render('envase/index.html.twig', [
            'controller_name' => 'EnvaseController',
        ]);
    }
}
