<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MateriaPrimaController extends AbstractController
{
    #[Route('/materia/prima', name: 'app_materia_prima')]
    public function index(): Response
    {
        return $this->render('materia_prima/index.html.twig', [
            'controller_name' => 'MateriaPrimaController',
        ]);
    }
}
