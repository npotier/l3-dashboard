<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
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
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if (substr($pathinfo, -1) !== '/') {
                        return array_replace($ret, $this->redirect($pathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
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

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        // hello
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hello')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::helloAction',));
        }

        // app_default_dashboard
        if ('/dashboard' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'app_default_dashboard',);
        }

        if (0 === strpos($pathinfo, '/fiche')) {
            // fiche_index
            if ('/fiche' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fiche_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\FicheController::indexAction',  '_route' => 'fiche_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'fiche_index'));
                }

                return $ret;
            }
            not_fiche_index:

            // fiche_new
            if ('/fiche/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fiche_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\FicheController::newAction',  '_route' => 'fiche_new',);
            }
            not_fiche_new:

            // fiche_show
            if (preg_match('#^/fiche/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fiche_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_show')), array (  '_controller' => 'AppBundle\\Controller\\FicheController::showAction',));
            }
            not_fiche_show:

            // fiche_edit
            if (preg_match('#^/fiche/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fiche_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_edit')), array (  '_controller' => 'AppBundle\\Controller\\FicheController::editAction',));
            }
            not_fiche_edit:

            // fiche_delete
            if (preg_match('#^/fiche/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_fiche_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fiche_delete')), array (  '_controller' => 'AppBundle\\Controller\\FicheController::deleteAction',));
            }
            not_fiche_delete:

        }

        elseif (0 === strpos($pathinfo, '/manager')) {
            // manager_index
            if ('/manager' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_manager_index;
                }

                $ret = array (  '_controller' => 'AppBundle\\Controller\\ManagerController::indexAction',  '_route' => 'manager_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'manager_index'));
                }

                return $ret;
            }
            not_manager_index:

            // manager_new
            if ('/manager/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_manager_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ManagerController::newAction',  '_route' => 'manager_new',);
            }
            not_manager_new:

            // manager_show
            if (preg_match('#^/manager/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_manager_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'manager_show')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::showAction',));
            }
            not_manager_show:

            // manager_edit
            if (preg_match('#^/manager/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_manager_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'manager_edit')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::editAction',));
            }
            not_manager_edit:

            // manager_delete
            if (preg_match('#^/manager/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_manager_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'manager_delete')), array (  '_controller' => 'AppBundle\\Controller\\ManagerController::deleteAction',));
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

                $ret = array (  '_controller' => 'AppBundle\\Controller\\ProjetController::indexAction',  '_route' => 'projet_index',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($pathinfo.'/', 'projet_index'));
                }

                return $ret;
            }
            not_projet_index:

            // projet_new
            if ('/projet/new' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_projet_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProjetController::newAction',  '_route' => 'projet_new',);
            }
            not_projet_new:

            // projet_show
            if (preg_match('#^/projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_projet_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_show')), array (  '_controller' => 'AppBundle\\Controller\\ProjetController::showAction',));
            }
            not_projet_show:

            // projet_edit
            if (preg_match('#^/projet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_projet_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_edit')), array (  '_controller' => 'AppBundle\\Controller\\ProjetController::editAction',));
            }
            not_projet_edit:

            // projet_delete
            if (preg_match('#^/projet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('DELETE' !== $canonicalMethod) {
                    $allow[] = 'DELETE';
                    goto not_projet_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'projet_delete')), array (  '_controller' => 'AppBundle\\Controller\\ProjetController::deleteAction',));
            }
            not_projet_delete:

        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
