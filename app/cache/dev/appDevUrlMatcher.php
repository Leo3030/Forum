<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // forum_list_listpage
        if ($pathinfo === '/list') {
            return array (  '_controller' => 'Forum\\Bundle\\HomeBundle\\Controller\\ListController::indexAction',  '_route' => 'forum_list_listpage',);
        }

        // forum_home_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Forum\\Bundle\\HomeBundle\\Controller\\HomeController::indexAction',  '_route' => 'forum_home_homepage',);
        }

        // forum_ask_questionpage
        if ($pathinfo === '/ask') {
            return array (  '_controller' => 'Forum\\Bundle\\HomeBundle\\Controller\\AskQuestionController::indexAction',  '_route' => 'forum_ask_questionpage',);
        }

        if (0 === strpos($pathinfo, '/my')) {
            // forum_myanswer_questionpage
            if ($pathinfo === '/myanswer') {
                return array (  '_controller' => 'Forum\\Bundle\\HomeBundle\\Controller\\AnswerQuestionController::indexAction',  '_route' => 'forum_myanswer_questionpage',);
            }

            // forum_myask_questionpage
            if ($pathinfo === '/myquestion') {
                return array (  '_controller' => 'Forum\\Bundle\\HomeBundle\\Controller\\MyQuestionController::indexAction',  '_route' => 'forum_myask_questionpage',);
            }

        }

        // forum_login_loginpage
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Forum\\Bundle\\HomeBundle\\Controller\\LoginController::indexAction',  '_route' => 'forum_login_loginpage',);
        }

        // forum_signin_signinpage
        if ($pathinfo === '/signin') {
            return array (  '_controller' => 'Forum\\Bundle\\HomeBundle\\Controller\\SigninController::indexAction',  '_route' => 'forum_signin_signinpage',);
        }

        // forum_askquestionajax_askquestionajaxpage
        if ($pathinfo === '/askquestionajax') {
            return array (  '_controller' => 'Forum\\Bundle\\HomeBundle\\Controller\\AskQuestionAjaxController::indexAction',  '_route' => 'forum_askquestionajax_askquestionajaxpage',);
        }

        // forum_signajax_signajaxpage
        if ($pathinfo === '/signinajax') {
            return array (  '_controller' => 'Forum\\Bundle\\HomeBundle\\Controller\\SigninAjaxController::indexAction',  '_route' => 'forum_signajax_signajaxpage',);
        }

        // forum_loginajax_loginajaxpage
        if ($pathinfo === '/loginajax') {
            return array (  '_controller' => 'Forum\\Bundle\\HomeBundle\\Controller\\LoginAjaxController::indexAction',  '_route' => 'forum_loginajax_loginajaxpage',);
        }

        // forum_desc_questionpage
        if (0 === strpos($pathinfo, '/descquestion') && preg_match('#^/descquestion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_desc_questionpage')), array (  '_controller' => 'Forum\\Bundle\\HomeBundle\\Controller\\QuestionController::indexAction',));
        }

        // forum_pose_answerpage
        if (0 === strpos($pathinfo, '/postanswer') && preg_match('#^/postanswer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'forum_pose_answerpage')), array (  '_controller' => 'ForumHomeBundle:PostAnswer:index',));
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
