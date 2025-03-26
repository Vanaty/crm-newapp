<?php

namespace App\Security;

use App\Service\ApiService;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use KnpU\OAuth2ClientBundle\Security\Authenticator\OAuth2Authenticator;
use League\OAuth2\Client\Provider\GoogleUser;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\EntryPoint\AuthenticationEntryPointInterface;

class GoogleAuthenticator extends OAuth2Authenticator implements AuthenticationEntryPointInterface
{
    private $clientRegistry;
    private $router;
    private $apiService;
    private $userProvider;

    public function __construct(
        ClientRegistry $clientRegistry,
        RouterInterface $router,
        ApiService $apiService,
        UserProviderInterface $userProvider
    ) {
        $this->clientRegistry = $clientRegistry;
        $this->router = $router;
        $this->apiService = $apiService;
        $this->userProvider = $userProvider;
    }

    public function supports(Request $request): ?bool
    {
        return $request->attributes->get('_route') === 'connect_google_check';
    }

    public function authenticate(Request $request): Passport
    {
        $client = $this->clientRegistry->getClient('google');
        $accessToken = $this->fetchAccessToken($client);

        return new SelfValidatingPassport(
            new UserBadge($accessToken->getToken(), function() use ($accessToken, $client, $request) {
                /** @var GoogleUser $googleUser */
                $googleUser = $client->fetchUserFromToken($accessToken);
                
                try {
                    // Authentifier avec Google via l'API
                    $response = $this->apiService->authenticateWithGoogle([
                        'email' => $googleUser->getEmail(),
                        'name' => $googleUser->getName(),
                        'google_id' => $googleUser->getId(),
                        'access_token' => $accessToken->getToken()
                    ]);

                    if (isset($response['token'])) {
                        $request->getSession()->set('api_token', $response['token']);
                        return $this->userProvider->loadUserByIdentifier($googleUser->getEmail());
                    }

                    throw new AuthenticationException('Token non reçu du serveur');
                } catch (\Exception $e) {
                    throw new AuthenticationException('Erreur lors de l\'authentification Google: ' . $e->getMessage());
                }
            })
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        return new RedirectResponse($this->router->generate('app_dashboard'));
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
    {
        $message = strtr($exception->getMessageKey(), $exception->getMessageData());

        return new RedirectResponse(
            $this->router->generate('app_login', ['error' => $message])
        );
    }

    public function start(Request $request, AuthenticationException $authException = null): Response
    {
        return new RedirectResponse(
            $this->router->generate('app_login', ['error' => 'Authentification requise'])
        );
    }
}
