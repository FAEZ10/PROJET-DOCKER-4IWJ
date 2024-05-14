<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\TodoRepository;

class ApiTodoController extends AbstractController
{
    #[Route('/api/todo', name: 'app_api_todo')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ApiTodoController.php',
        ]);
    }

    /**
     * @Route("/api/todos", name="api_todos", methods={"GET"})
     */
    #[Route('/api/todo_list', name: 'app_api_todo_list')]
    public function getTodos(TodoRepository $todoRepository): Response
    {
        $todos = $todoRepository->findAll();
        return $this->json($todos);
    }
}
