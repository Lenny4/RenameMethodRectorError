<?php

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    private ?string $username = null;
    private ?array $roles = [];

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(?array $roles): void
    {
        $this->roles = $roles;
    }

    public function eraseCredentials(): void
    {
        // do nothing
    }

    public function getUserIdentifier(): string
    {
        return 'somethingElse';
    }
}

class UserUtils
{
    public static function updateIdentifier(User $user): void
    {
        if (!empty($user->getUsername())) {
            // something
        }
    }
}
