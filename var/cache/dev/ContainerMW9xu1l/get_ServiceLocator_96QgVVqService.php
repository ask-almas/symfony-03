<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.96QgVVq' shared service.

return $this->privates['.service_locator.96QgVVq'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('userToUnfollow' => function (): \App\Entity\User {
    return ($this->privates['.errored..service_locator.96QgVVq.App\Entity\User'] ?? $this->load('getUserService.php'));
}));
