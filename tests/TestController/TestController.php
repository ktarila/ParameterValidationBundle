<?php

namespace ktarila\ParameterValidatorBundle\Tests\TestController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    #[Route('/get-request-violations')]
    public function getRequestAction(Request $request): Response
    {
        $queryParameters = $request->query->all();

        return new JsonResponse($queryParameters);
    }
}
