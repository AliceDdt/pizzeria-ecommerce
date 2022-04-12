<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(ProductRepository $prodRepo): Response
    {
        $products = $prodRepo->findAll();

        return $this->render('home/index.html.twig', [
            'products' => $products,
            'title' => 'Home',
        ]);
    }
}
