<?php
// src/Controller/IndexController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IndexController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        $inventory = 2;

        return $this->render('index/index.html.twig', [
            'inventory' => $inventory,
        ]);
    }
}