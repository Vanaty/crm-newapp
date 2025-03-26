<?php

namespace App\Controller;

use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class GoogleController extends AbstractController
{
    #[Route('/connect/google', name: 'connect_google')]
    public function connectAction(ClientRegistry $clientRegistry): Response
    {
        return $clientRegistry
            ->getClient('google')
            ->redirect([
                'email', 'profile'
            ], []);
    }

    #[Route('/connect/google/check', name: 'connect_google_check')]
    public function connectCheckAction(Request $request, ClientRegistry $clientRegistry): Response
    {
        // Cette méthode ne sera jamais exécutée car le pare-feu s'en occupe
        return new Response('Should not be reached');
    }
}
