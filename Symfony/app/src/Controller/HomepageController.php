<?php
// src/Controller/HomepageController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\TodoRepository;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    #[Route('/', name: 'homepage')]
    public function index(TodoRepository $todoRepository): Response
    {
        $todos = $todoRepository->findAll();

        return $this->render('home/index.html.twig', [
            'todos' => $todos
        ]);
    }
}
