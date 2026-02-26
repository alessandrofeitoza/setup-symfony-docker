<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class ProdutoController extends AbstractController
{
    #[Route('/produto', name: 'app_produto')]
    public function index(): JsonResponse
    {
        $dados = file_get_contents(__DIR__ . '/mock/produtos.json');
        // pegaria dos banco

        $dados = json_decode($dados);

        return $this->json($dados);
    }
}
