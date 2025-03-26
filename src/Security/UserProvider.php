<?php

namespace App\Security;

use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UserNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class UserProvider implements UserProviderInterface
{
    private $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    public function refreshUser(UserInterface $user): UserInterface
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Invalid user class "%s".', get_class($user)));
        }

        // Récupérer le token de la session
        $session = $this->requestStack->getSession();
        $apiToken = $session->get('api_token');

        if (!$apiToken) {
            throw new UserNotFoundException('Token not found in session');
        }

        // Retourner un nouvel utilisateur avec le même token
        return new User($user->getUsername(), $user->getRoles(), $apiToken);
    }

    public function supportsClass(string $class): bool
    {
        return User::class === $class || is_subclass_of($class, User::class);
    }

    public function loadUserByIdentifier(string $identifier): UserInterface
    {
        $session = $this->requestStack->getSession();
        $apiToken = $session->get('api_token');

        if (!$apiToken) {
            throw new UserNotFoundException('Token not found in session');
        }

        return new User($identifier, ['ROLE_USER'], $apiToken);
    }
}
