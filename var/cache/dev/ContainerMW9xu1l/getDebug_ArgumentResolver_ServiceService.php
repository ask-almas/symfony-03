<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\ServiceLocator(array('App\\Controller\\FollowingController::follow' => function () {
    return ($this->privates['.service_locator.sc3YTAg'] ?? $this->load('get_ServiceLocator_Sc3YTAgService.php'));
}, 'App\\Controller\\FollowingController::unfollow' => function () {
    return ($this->privates['.service_locator.96QgVVq'] ?? $this->load('get_ServiceLocator_96QgVVqService.php'));
}, 'App\\Controller\\LikesController::like' => function () {
    return ($this->privates['.service_locator.Ax_v3bs'] ?? $this->load('get_ServiceLocator_AxV3bsService.php'));
}, 'App\\Controller\\LikesController::unlike' => function () {
    return ($this->privates['.service_locator.Ax_v3bs'] ?? $this->load('get_ServiceLocator_AxV3bsService.php'));
}, 'App\\Controller\\MicroPostController::add' => function () {
    return ($this->privates['.service_locator.q.xJESX'] ?? $this->load('get_ServiceLocator_Q_XJESXService.php'));
}, 'App\\Controller\\MicroPostController::delete' => function () {
    return ($this->privates['.service_locator.Ax_v3bs'] ?? $this->load('get_ServiceLocator_AxV3bsService.php'));
}, 'App\\Controller\\MicroPostController::edit' => function () {
    return ($this->privates['.service_locator.Ax_v3bs'] ?? $this->load('get_ServiceLocator_AxV3bsService.php'));
}, 'App\\Controller\\MicroPostController::index' => function () {
    return ($this->privates['.service_locator.sYnVCWW'] ?? $this->load('get_ServiceLocator_SYnVCWWService.php'));
}, 'App\\Controller\\MicroPostController::post' => function () {
    return ($this->privates['.service_locator.mjfMAA.'] ?? $this->load('get_ServiceLocator_MjfMAA_Service.php'));
}, 'App\\Controller\\MicroPostController::userPosts' => function () {
    return ($this->privates['.service_locator.wHRqjfc'] ?? $this->load('get_ServiceLocator_WHRqjfcService.php'));
}, 'App\\Controller\\NotificationController::acknowledge' => function () {
    return ($this->privates['.service_locator.ECBGt3n'] ?? $this->load('get_ServiceLocator_ECBGt3nService.php'));
}, 'App\\Controller\\RegisterController::register' => function () {
    return ($this->privates['.service_locator.czpZ_vG'] ?? $this->load('get_ServiceLocator_CzpZVGService.php'));
}, 'App\\Controller\\SecurityController::confirm' => function () {
    return ($this->privates['.service_locator.jld4zZf'] ?? $this->load('get_ServiceLocator_Jld4zZfService.php'));
}, 'App\\Controller\\SecurityController::login' => function () {
    return ($this->privates['.service_locator.ypl2DZZ'] ?? $this->load('get_ServiceLocator_Ypl2DZZService.php'));
}, 'App\\Controller\\FollowingController:follow' => function () {
    return ($this->privates['.service_locator.sc3YTAg'] ?? $this->load('get_ServiceLocator_Sc3YTAgService.php'));
}, 'App\\Controller\\FollowingController:unfollow' => function () {
    return ($this->privates['.service_locator.96QgVVq'] ?? $this->load('get_ServiceLocator_96QgVVqService.php'));
}, 'App\\Controller\\LikesController:like' => function () {
    return ($this->privates['.service_locator.Ax_v3bs'] ?? $this->load('get_ServiceLocator_AxV3bsService.php'));
}, 'App\\Controller\\LikesController:unlike' => function () {
    return ($this->privates['.service_locator.Ax_v3bs'] ?? $this->load('get_ServiceLocator_AxV3bsService.php'));
}, 'App\\Controller\\MicroPostController:add' => function () {
    return ($this->privates['.service_locator.q.xJESX'] ?? $this->load('get_ServiceLocator_Q_XJESXService.php'));
}, 'App\\Controller\\MicroPostController:delete' => function () {
    return ($this->privates['.service_locator.Ax_v3bs'] ?? $this->load('get_ServiceLocator_AxV3bsService.php'));
}, 'App\\Controller\\MicroPostController:edit' => function () {
    return ($this->privates['.service_locator.Ax_v3bs'] ?? $this->load('get_ServiceLocator_AxV3bsService.php'));
}, 'App\\Controller\\MicroPostController:index' => function () {
    return ($this->privates['.service_locator.sYnVCWW'] ?? $this->load('get_ServiceLocator_SYnVCWWService.php'));
}, 'App\\Controller\\MicroPostController:post' => function () {
    return ($this->privates['.service_locator.mjfMAA.'] ?? $this->load('get_ServiceLocator_MjfMAA_Service.php'));
}, 'App\\Controller\\MicroPostController:userPosts' => function () {
    return ($this->privates['.service_locator.wHRqjfc'] ?? $this->load('get_ServiceLocator_WHRqjfcService.php'));
}, 'App\\Controller\\NotificationController:acknowledge' => function () {
    return ($this->privates['.service_locator.ECBGt3n'] ?? $this->load('get_ServiceLocator_ECBGt3nService.php'));
}, 'App\\Controller\\RegisterController:register' => function () {
    return ($this->privates['.service_locator.czpZ_vG'] ?? $this->load('get_ServiceLocator_CzpZVGService.php'));
}, 'App\\Controller\\SecurityController:confirm' => function () {
    return ($this->privates['.service_locator.jld4zZf'] ?? $this->load('get_ServiceLocator_Jld4zZfService.php'));
}, 'App\\Controller\\SecurityController:login' => function () {
    return ($this->privates['.service_locator.ypl2DZZ'] ?? $this->load('get_ServiceLocator_Ypl2DZZService.php'));
}))), ($this->privates['debug.stopwatch'] ?? $this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)));
