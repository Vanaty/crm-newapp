<?php

namespace App\Controller;

use App\Service\ApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

abstract class BaseController extends AbstractController
{
    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    protected function handleApiException(\Exception $e): Response
    {
        if ($e instanceof \Symfony\Component\HttpClient\Exception\ClientException) {
            if ($e->getResponse()->getStatusCode() === Response::HTTP_UNAUTHORIZED) {
                return $this->redirectToRoute('app_login');
            }
        }
        echo $e->getMessage();
        return new Response('Ane error occurred', Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
