<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ColyController extends AbstractController
{
    #[Route('/', name: 'app_coly')]
    public function index(): Response
    {
        return $this->render('coly/index.html.twig', [
            'controller_name' => 'ColyController',
        ]);
    }
    #[Route('/moncv', name: 'app_coly1')]
    public function cv(): Response
    {
        return $this->render('coly/moncv.html.twig', [
            'controller_name' => 'ColyController',
        ]);
    }
    #[Route('/portfolio', name: 'app_coly2')]
    public function portfolio(): Response
    {
        return $this->render('coly/portfolio.html.twig', [
            'controller_name' => 'ColyController',
        ]);
    }
    #[Route('/contact', name: 'app_coly3')]
    public function contact(): Response
    {
        return $this->render('coly/contact.html.twig', [
            'controller_name' => 'ColyController',
        ]);
    }
}
