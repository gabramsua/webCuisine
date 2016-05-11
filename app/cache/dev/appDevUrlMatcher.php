<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

        // intranet_login
        if (preg_match('#^/(?P<_locale>en|fr|es)/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_login')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::loginAction',  '_locale' => 'en',));
        }

        if (0 === strpos($pathinfo, '/createUser')) {
            // intranet_nonExistingUserA
            if ($pathinfo === '/createUserA') {
                return array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::createUserAAction',  '_route' => 'intranet_nonExistingUserA',);
            }

            // intranet_nonExistingUser
            if ($pathinfo === '/createUser') {
                return array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::createUserAction',  '_route' => 'intranet_nonExistingUser',);
            }

        }

        // intranet_homepage
        if (preg_match('#^/(?P<_locale>en|fr|es)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'intranet_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_homepage')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'en',));
        }

        // intranet_logout
        if (preg_match('#^/(?P<_locale>en|fr|es)/intranet_logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_logout')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::logoutAction',  '_locale' => 'en',));
        }

        // intranet_formHistorical
        if (preg_match('#^/(?P<_locale>en|fr|es)/MyHistorical$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_formHistorical')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::myformsAction',  '_locale' => 'en',));
        }

        // intranet_formHours
        if (preg_match('#^/(?P<_locale>en|fr|es)/formHours$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_formHours')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::formHoursAction',  '_locale' => 'en',));
        }

        // intranet_formVacations
        if (preg_match('#^/(?P<_locale>en|fr|es)/formVacations$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_formVacations')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::formVacationAction',  '_locale' => 'en',));
        }

        // intranet_formExpenses
        if (preg_match('#^/(?P<_locale>en|fr|es)/formExpenses$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_formExpenses')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::formExpensesAction',  '_locale' => 'en',));
        }

        // intranet_formRequest
        if (preg_match('#^/(?P<_locale>en|fr|es)/formRequest$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_formRequest')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::formRequestAction',  '_locale' => 'en',));
        }

        // intranet_news
        if (preg_match('#^/(?P<_locale>en|fr|es)/news$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_news')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::newsAction',  '_locale' => 'en',));
        }

        // intranet_incomingForms
        if (preg_match('#^/(?P<_locale>en|fr|es)/incomingForms$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_incomingForms')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::incomingFormsAction',  '_locale' => 'en',));
        }

        // intranet_oldForms
        if (preg_match('#^/(?P<_locale>en|fr|es)/oldForms$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_oldForms')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::oldFormsAction',  '_locale' => 'en',));
        }

        // intranet_tasks
        if (preg_match('#^/(?P<_locale>en|fr|es)/tasks$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_tasks')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::tasksAction',  '_locale' => 'en',));
        }

        // intranet_userManagement
        if (preg_match('#^/(?P<_locale>en|fr|es)/userManagement$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_userManagement')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::userManagementAction',  '_locale' => 'en',));
        }

        // intranet_settings
        if (preg_match('#^/(?P<_locale>en|fr|es)/settings$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_settings')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::settingsAction',  '_locale' => 'en',));
        }

        // intranet_newuser
        if (preg_match('#^/(?P<_locale>en|fr|es)/addUser$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_newuser')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::addUserAction',  '_locale' => 'en',));
        }

        // intranet_newnew
        if (preg_match('#^/(?P<_locale>en|fr|es)/createNew$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_newnew')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::createNewAction',  '_locale' => 'en',));
        }

        // intranet_insertnew
        if (preg_match('#^/(?P<_locale>en|fr|es)/insertNew$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_insertnew')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::insertNewAction',  '_locale' => 'en',));
        }

        // intranet_newtask
        if (preg_match('#^/(?P<_locale>en|fr|es)/createTask$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_newtask')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::createtaskAction',  '_locale' => 'en',));
        }

        // intranet_insertTask
        if (preg_match('#^/(?P<_locale>en|fr|es)/insertTask$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_insertTask')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::insertTaskAction',  '_locale' => 'en',));
        }

        // intranet_f
        if (preg_match('#^/(?P<_locale>en|fr|es)/historical$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_f')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::insertFormAction',  '_locale' => 'en',));
        }

        // intranet_crudnew
        if (preg_match('#^/(?P<_locale>en|fr|es)/editeNew$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_crudnew')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::editeNewAction',  '_locale' => 'en',));
        }

        // intranet_editnew
        if (preg_match('#^/(?P<_locale>en|fr|es)/updateNew$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_editnew')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::updateNewAction',  '_locale' => 'en',));
        }

        // intranet_crudtask
        if (preg_match('#^/(?P<_locale>en|fr|es)/editeTask$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_crudtask')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::editeTaskAction',  '_locale' => 'en',));
        }

        // intranet_edittask
        if (preg_match('#^/(?P<_locale>en|fr|es)/updateTask$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_edittask')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::updatetaskAction',  '_locale' => 'en',));
        }

        // intranet_translation
        if (preg_match('#^/(?P<_locale>en|fr|es)/translation$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_translation')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::translationAction',  '_locale' => 'en',));
        }

        // intranet_testBD
        if (preg_match('#^/(?P<_locale>en|fr|es)/testDoctrine$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_testBD')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::usarDoctrineAction',  '_locale' => 'en',));
        }

        // intranet_bookRoom
        if (preg_match('#^/(?P<_locale>en|fr|es)/bookRoom$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_bookRoom')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::bookRoomAction',  '_locale' => 'en',));
        }

        // intranet_book
        if (preg_match('#^/(?P<_locale>en|fr|es)/book/\\{ date \\}$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'intranet_book')), array (  '_controller' => 'intranetBundle\\Controller\\DefaultController::bookAction',  '_locale' => 'en',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
