<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.jld4zZf' shared service.

return $this->privates['.service_locator.jld4zZf'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('entityManager' => function () {
    return ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php'));
}, 'userRepository' => function (): \App\Repository\UserRepository {
    return ($this->privates['App\Repository\UserRepository'] ?? $this->load('getUserRepositoryService.php'));
}));
