<?php

namespace App\Controller;

use App\Security\User;
use App\Service\ApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(Request $request, AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_dashboard');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/login_check', name: 'app_login_check', methods: ['POST'])]
    public function check(Request $request, ApiService $apiService): Response
    {
        try {
            $data = json_decode($request->getContent(), true);
            if (!$data) {
                $data = $request->request->all();
            }

            if (!isset($data['username']) || !isset($data['password'])) {
                throw new \Exception('Username et mot de passe requis');
            }

            $result = $apiService->login($data['username'], $data['password']);
            
            // Stocker le token dans la session
            $request->getSession()->set('api_token', $result['token']);
            
            // Créer un utilisateur et le token de sécurité
            $user = new User($result['username'], ['ROLE_USER'], $result['token']);
            $token = new UsernamePasswordToken(
                $user,
                'main',
                $user->getRoles()
            );
            
            // Définir le token dans le contexte de sécurité
            $this->container->get('security.token_storage')->setToken($token);
            
            if ($request->headers->get('Accept') === 'application/json') {
                return new JsonResponse([
                    'status' => 'success',
                    'message' => 'Connexion réussie',
                    'redirect' => $this->generateUrl('app_dashboard')
                ]);
            }

            return $this->redirectToRoute('app_dashboard');
        } catch (\Exception $e) {
            if ($request->headers->get('Accept') === 'application/json') {
                return new JsonResponse([
                    'status' => 'error',
                    'message' => $e->getMessage()
                ], Response::HTTP_UNAUTHORIZED);
            }

            return $this->redirectToRoute('app_login', [
                'error' => $e->getMessage()
            ], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(Request $request): Response
    {
        $request->getSession()->remove('api_token');
        $this->container->get('security.token_storage')->setToken(null);
        
        return $this->redirectToRoute('app_login', [
            'success' => 'Vous avez été déconnecté avec succès'
        ], Response::HTTP_SEE_OTHER);
    }

    #[Route('/login/error', name: 'app_login_error')]
    public function loginError(Request $request): Response
    {
        return $this->redirectToRoute('app_login', [
            'error' => 'Erreur d\'authentification. Veuillez réessayer.'
        ], Response::HTTP_SEE_OTHER);
    }

    #[Route('/login/success', name: 'app_login_success')]
    public function loginSuccess(Request $request): Response
    {
        if ($request->headers->get('Accept') === 'application/json') {
            return new JsonResponse([
                'status' => 'success',
                'message' => 'Connexion réussie',
                'redirect' => $this->generateUrl('app_dashboard')
            ]);
        }

        return $this->redirectToRoute('app_dashboard');
    }
}
