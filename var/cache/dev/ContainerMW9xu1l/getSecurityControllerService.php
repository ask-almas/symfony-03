<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\SecurityController' shared autowired service.

include_once $this->targetDirs[3].'/src/Controller/SecurityController.php';

return $this->services['App\Controller\SecurityController'] = new \App\Controller\SecurityController(($this->services['twig'] ?? $this->getTwigService()));
