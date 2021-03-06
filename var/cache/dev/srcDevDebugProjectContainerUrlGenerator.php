<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'blog_index' => array(array(), array('_controller' => 'App\\Controller\\BlogController::index'), array(), array(array('text', '/blog/')), array(), array()),
        'blog_add' => array(array(), array('_controller' => 'App\\Controller\\BlogController::add'), array(), array(array('text', '/blog/add')), array(), array()),
        'blog_show' => array(array('id'), array('_controller' => 'App\\Controller\\BlogController::show'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/blog/show')), array(), array()),
        'following_follow' => array(array('id'), array('_controller' => 'App\\Controller\\FollowingController::follow'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/following/follow')), array(), array()),
        'following_unfollow' => array(array('id'), array('_controller' => 'App\\Controller\\FollowingController::unfollow'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/following/unfollow')), array(), array()),
        'likes_like' => array(array('id'), array('_controller' => 'App\\Controller\\LikesController::like'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/likes/like')), array(), array()),
        'likes_unlike' => array(array('id'), array('_controller' => 'App\\Controller\\LikesController::unlike'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/likes/unlike')), array(), array()),
        'micro_post_index' => array(array(), array('_controller' => 'App\\Controller\\MicroPostController::index'), array(), array(array('text', '/micro-post/')), array(), array()),
        'micro_post_add' => array(array(), array('_controller' => 'App\\Controller\\MicroPostController::add'), array(), array(array('text', '/micro-post/add')), array(), array()),
        'micro_post_edit' => array(array('id'), array('_controller' => 'App\\Controller\\MicroPostController::edit'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/micro-post/edit')), array(), array()),
        'micro_post_delete' => array(array('id'), array('_controller' => 'App\\Controller\\MicroPostController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/micro-post/delete')), array(), array()),
        'micro_post_user' => array(array('username'), array('_controller' => 'App\\Controller\\MicroPostController::userPosts'), array(), array(array('variable', '/', '[^/]++', 'username'), array('text', '/micro-post/user')), array(), array()),
        'micro_post_post' => array(array('id'), array('_controller' => 'App\\Controller\\MicroPostController::post'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/micro-post')), array(), array()),
        'notification_unread' => array(array(), array('_controller' => 'App\\Controller\\NotificationController::unreadCount'), array(), array(array('text', '/notification/unread-count')), array(), array()),
        'notification_all' => array(array(), array('_controller' => 'App\\Controller\\NotificationController::notification'), array(), array(array('text', '/notification/all')), array(), array()),
        'notification_acknowledge' => array(array('id'), array('_controller' => 'App\\Controller\\NotificationController::acknowledge'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/notification/acknowledge')), array(), array()),
        'notification_acknowledge_all' => array(array(), array('_controller' => 'App\\Controller\\NotificationController::acknowledgeAll'), array(), array(array('text', '/notification/acknowledge-all')), array(), array()),
        'user_register' => array(array(), array('_controller' => 'App\\Controller\\RegisterController::register'), array(), array(array('text', '/register')), array(), array()),
        'security_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        'security_logout' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::logout'), array(), array(array('text', '/logout')), array(), array()),
        'security_confirm' => array(array('token'), array('_controller' => 'App\\Controller\\SecurityController::confirm'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/confirm')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
