<?php

namespace App\Security;

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    private $username;
    private $roles;
    private $apiToken;

    public function __construct(string $username, array $roles, string $apiToken)
    {
        $this->username = $username;
        $this->roles = $roles;
        $this->apiToken = $apiToken;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function getPassword(): ?string
    {
        return null;
    }

    public function getSalt(): ?string
    {
        return null;
    }

    public function eraseCredentials(): void
    {
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getUserIdentifier(): string
    {
        return $this->username;
    }

    public function getApiToken(): string
    {
        return $this->apiToken;
    }
}
