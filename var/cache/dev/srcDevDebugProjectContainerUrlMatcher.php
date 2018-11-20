<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            default:
                $routes = array(
                    '/blog/' => array(array('_route' => 'blog_index', '_controller' => 'App\\Controller\\BlogController::index'), null, null, null),
                    '/blog/add' => array(array('_route' => 'blog_add', '_controller' => 'App\\Controller\\BlogController::add'), null, null, null),
                    '/micro-post/' => array(array('_route' => 'micro_post_index', '_controller' => 'App\\Controller\\MicroPostController::index'), null, null, null),
                    '/micro-post/add' => array(array('_route' => 'micro_post_add', '_controller' => 'App\\Controller\\MicroPostController::add'), null, null, null),
                    '/notification/unread-count' => array(array('_route' => 'notification_unread', '_controller' => 'App\\Controller\\NotificationController::unreadCount'), null, null, null),
                    '/notification/all' => array(array('_route' => 'notification_all', '_controller' => 'App\\Controller\\NotificationController::notification'), null, null, null),
                    '/notification/acknowledge-all' => array(array('_route' => 'notification_acknowledge_all', '_controller' => 'App\\Controller\\NotificationController::acknowledgeAll'), null, null, null),
                    '/register' => array(array('_route' => 'user_register', '_controller' => 'App\\Controller\\RegisterController::register'), null, null, null),
                    '/login' => array(array('_route' => 'security_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null),
                    '/logout' => array(array('_route' => 'security_logout', '_controller' => 'App\\Controller\\SecurityController::logout'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/blog/show/([^/]++)(*:26)'
                    .'|/following/(?'
                        .'|follow/([^/]++)(*:62)'
                        .'|unfollow/([^/]++)(*:86)'
                    .')'
                    .'|/likes/(?'
                        .'|like/([^/]++)(*:117)'
                        .'|unlike/([^/]++)(*:140)'
                    .')'
                    .'|/micro\\-post/(?'
                        .'|edit/([^/]++)(*:178)'
                        .'|delete/([^/]++)(*:201)'
                        .'|user/([^/]++)(*:222)'
                        .'|([^/]++)(*:238)'
                    .')'
                    .'|/notification/acknowledge/([^/]++)(*:281)'
                    .'|/confirm/([^/]++)(*:306)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:345)'
                        .'|wdt/([^/]++)(*:365)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:411)'
                                .'|router(*:425)'
                                .'|exception(?'
                                    .'|(*:445)'
                                    .'|\\.css(*:458)'
                                .')'
                            .')'
                            .'|(*:468)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            26 => array(array('_route' => 'blog_show', '_controller' => 'App\\Controller\\BlogController::show'), array('id'), null, null),
                            62 => array(array('_route' => 'following_follow', '_controller' => 'App\\Controller\\FollowingController::follow'), array('id'), null, null),
                            86 => array(array('_route' => 'following_unfollow', '_controller' => 'App\\Controller\\FollowingController::unfollow'), array('id'), null, null),
                            117 => array(array('_route' => 'likes_like', '_controller' => 'App\\Controller\\LikesController::like'), array('id'), null, null),
                            140 => array(array('_route' => 'likes_unlike', '_controller' => 'App\\Controller\\LikesController::unlike'), array('id'), null, null),
                            178 => array(array('_route' => 'micro_post_edit', '_controller' => 'App\\Controller\\MicroPostController::edit'), array('id'), null, null),
                            201 => array(array('_route' => 'micro_post_delete', '_controller' => 'App\\Controller\\MicroPostController::delete'), array('id'), null, null),
                            222 => array(array('_route' => 'micro_post_user', '_controller' => 'App\\Controller\\MicroPostController::userPosts'), array('username'), null, null),
                            238 => array(array('_route' => 'micro_post_post', '_controller' => 'App\\Controller\\MicroPostController::post'), array('id'), null, null),
                            281 => array(array('_route' => 'notification_acknowledge', '_controller' => 'App\\Controller\\NotificationController::acknowledge'), array('id'), null, null),
                            306 => array(array('_route' => 'security_confirm', '_controller' => 'App\\Controller\\SecurityController::confirm'), array('token'), null, null),
                            345 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            365 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            411 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            425 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            445 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            458 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            468 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (468 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow && !$allowSchemes) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
