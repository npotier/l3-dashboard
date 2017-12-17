<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // camille_app_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'camille_app_homepage');
            }

            return array (  '_controller' => 'Camille\\AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'camille_app_homepage',);
        }

        if (0 === strpos($pathinfo, '/manager')) {
            // manager_index
            if ('/manager' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_manager_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'manager_index');
                }

                return array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\ManagerController::indexAction',  '_route' => 'manager_index',);
            }
            not_manager_index:

            // manager_show
            if (preg_match('#^/manager/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_manager_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'manager_show')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\ManagerController::showAction',));
            }
            not_manager_show:

            // manager_new
            if ('/manager/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_manager_new;
                }

                return array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\ManagerController::newAction',  '_route' => 'manager_new',);
            }
            not_manager_new:

            // manager_edit
            if (preg_match('#^/manager/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_manager_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'manager_edit')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\ManagerController::editAction',));
            }
            not_manager_edit:

            // manager_delete
            if (preg_match('#^/manager/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_manager_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'manager_delete')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\ManagerController::deleteAction',));
            }
            not_manager_delete:

        }

        elseif (0 === strpos($pathinfo, '/projet')) {
            // projet_index
            if ('/projet' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_projet_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'projet_index');
                }

                return array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\ProjetController::indexAction',  '_route' => 'projet_index',);
            }
            not_projet_index:

            // projet_show
            if (preg_match('#^/projet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_projet_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_show')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\ProjetController::showAction',));
            }
            not_projet_show:

            // projet_new
            if ('/projet/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_projet_new;
                }

                return array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\ProjetController::newAction',  '_route' => 'projet_new',);
            }
            not_projet_new:

            // projet_edit
            if (preg_match('#^/projet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_projet_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_edit')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\ProjetController::editAction',));
            }
            not_projet_edit:

            // projet_delete
            if (preg_match('#^/projet/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_projet_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_delete')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\ProjetController::deleteAction',));
            }
            not_projet_delete:

        }

        elseif (0 === strpos($pathinfo, '/platform')) {
            // camille_platform_home
            if ('/platform' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'camille_platform_home');
                }

                return array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\AdvertController::indexAction',  '_route' => 'camille_platform_home',);
            }

            // camille_platform_view
            if (0 === strpos($pathinfo, '/platform/advert') && preg_match('#^/platform/advert/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'camille_platform_view')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\AdvertController::viewAction',));
            }

            // camille_platform_add
            if ('/platform/add' === $pathinfo) {
                return array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\AdvertController::addAction',  '_route' => 'camille_platform_add',);
            }

            // camille_platform_view_slug
            if (preg_match('#^/platform/(?P<year>\\d{4})/(?P<slug>[^/\\.]++)(?:\\.(?P<format>html|xml))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'camille_platform_view_slug')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\AdvertController::viewSlugAction',  'format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/user')) {
            // user_index
            if ('/user' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_new
            if ('/user/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

        }

        elseif (0 === strpos($pathinfo, '/fiche1')) {
            // fiche1_index
            if ('/fiche1' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fiche1_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fiche1_index');
                }

                return array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\Fiche1Controller::indexAction',  '_route' => 'fiche1_index',);
            }
            not_fiche1_index:

            // fiche1_show
            if (preg_match('#^/fiche1/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fiche1_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche1_show')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\Fiche1Controller::showAction',));
            }
            not_fiche1_show:

            // fiche1_new
            if ('/fiche1/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fiche1_new;
                }

                return array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\Fiche1Controller::newAction',  '_route' => 'fiche1_new',);
            }
            not_fiche1_new:

            // fiche1_edit
            if (preg_match('#^/fiche1/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fiche1_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche1_edit')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\Fiche1Controller::editAction',));
            }
            not_fiche1_edit:

            // fiche1_delete
            if (preg_match('#^/fiche1/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_fiche1_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche1_delete')), array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\Fiche1Controller::deleteAction',));
            }
            not_fiche1_delete:

        }

        // hello_the_world
        if ('/hello-world' === $pathinfo) {
            return array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\AdvertController::indexAction',  '_route' => 'hello_the_world',);
        }

        // bye_the_world
        if ('/bye-world' === $pathinfo) {
            return array (  '_controller' => 'Camille\\PlatformBundle\\Controller\\AdvertController::byeworldAction',  '_route' => 'bye_the_world',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
