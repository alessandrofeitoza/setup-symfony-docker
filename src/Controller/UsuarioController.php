<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

final class UsuarioController extends AbstractController
{
    public function list(): JsonResponse
    {
        // pegaria dos banco

        return $this->json([
            [
                'id' => 1,
                'nome' => 'John Doe',
                'email' => 'john@email.com',
            ],
            [
                'id' => 2,
                'nome' => 'John Doe 2',
                'email' => 'john2@email.com',
            ],
        ]);
    }
}
