<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {

        return $this->render('index.html.twig');


        /*
        return $this->render('lista/index.html.twig', [
            'lista' => $posts
        ]);

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/BlogController.php',
        ]);
        */
    }
}
