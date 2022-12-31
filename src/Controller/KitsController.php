<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KitsController extends AbstractController
{
    #[Route('/kits', name: 'app_kits')]
    public function index(): Response
    {
        return $this->render('kits/index.html.twig', [
            'controller_name' => 'KitsController',
        ]);
    }
}
