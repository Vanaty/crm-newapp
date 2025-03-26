<?php

namespace App\Security;

use App\Service\ApiService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;

class ApiTokenAuthenticator extends AbstractAuthenticator implements AuthenticationEntryPointInterface
{
    private $apiService;
    private $userProvider;
    private $router;

    public function __construct(
        ApiService $apiService,
        UserProviderInterface $userProvider,
        RouterInterface $router
    ) {
        $this->apiService = $apiService;
        $this->userProvider = $userProvider;
        $this->router = $router;
    }

    public function supports(Request $request): ?bool
    {
        return $request->getPathInfo() === '/login_check' || 
               $request->headers->has('Authorization') ||
               $request->getSession()->has('api_token');
    }

    public function authenticate(Request $request): Passport
    {
        if ($request->getPathInfo() === '/login_check') {
            $content = json_decode($request->getContent(), true);
            if (!$content) {
                $content = $request->request->all();
            }

            $username = $content['username'] ?? null;
            $password = $content['password'] ?? null;

            if (null === $username || null === $password) {
                throw new CustomUserMessageAuthenticationException('Username et mot de passe requis');
            }

            try {
                $response = $this->apiService->login($username, $password);
                if (isset($response['token'])) {
                    $request->getSession()->set('api_token', $response['token']);
                    return new SelfValidatingPassport(
                        new UserBadge($username, function() use ($username, $response) {
                            return $this->userProvider->loadUserByIdentifier($username);
                        })
                    );
                }
            } catch (\Exception $e) {
                throw new CustomUserMessageAuthenticationException('Identifiants invalides');
            }
        }

        $apiToken = null;
        if ($request->headers->has('Authorization')) {
            $apiToken = str_replace('Bearer ', '', $request->headers->get('Authorization'));
        } else {
            $apiToken = $request->getSession()->get('api_token');
        }

        if (null === $apiToken) {
            throw new CustomUserMessageAuthenticationException('Token manquant');
        }

        return new SelfValidatingPassport(
            new UserBadge('user', function() use ($apiToken) {
                return $this->userProvider->loadUserByIdentifier('user');
            })
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($request->getPathInfo() === '/login_check') {
            $targetUrl = $this->router->generate('app_dashboard');
            
            if ($request->headers->get('Accept') === 'application/json') {
                return new JsonResponse([
                    'status' => 'success',
                    'message' => 'Connexion réussie',
                    'redirect' => $targetUrl
                ]);
            }
            
            return new RedirectResponse($targetUrl);
        }
        
        return null;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        if ($request->headers->get('Accept') === 'application/json') {
            return new JsonResponse([
                'status' => 'error',
                'message' => $exception->getMessage()
            ], Response::HTTP_UNAUTHORIZED);
        }

        return new RedirectResponse(
            $this->router->generate('app_login', ['error' => $exception->getMessage()]),
            Response::HTTP_SEE_OTHER
        );
    }

    public function start(Request $request, AuthenticationException $authException = null): Response
    {
        if ($request->headers->get('Accept') === 'application/json') {
            return new JsonResponse([
                'status' => 'error',
                'message' => 'Authentication required'
            ], Response::HTTP_UNAUTHORIZED);
        }

        return new RedirectResponse($this->router->generate('app_login'));
    }
}
