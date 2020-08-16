<?php

namespace App\Controller\Api;

use Symfony\Component\Routing\Annotation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("api/v1", name="api_v1_usuario_")
 */

class UsuarioController
{
    /**
     * @Route("/lista", methods={"GET"}, name="lista")
     */
    public function lista() : JsonResponse
    {
        return new JsonResponse(["Implementar lista na API"]);
    }

    /**
     * @Route("/cadastra", methods={"POST"}, name="cadastra")
     */
    public function cadastra() : JsonResponse
    {
        return new JsonResponse(["Implementar cadastro na API"]);
    }
}