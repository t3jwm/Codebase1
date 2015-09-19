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

        }

        if (0 === strpos($pathinfo, '/register')) {
            // account_register
            if ($pathinfo === '/register') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\AccountController::registerAction',  '_route' => 'account_register',);
            }

            // account_create
            if ($pathinfo === '/register/create') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\AccountController::createAction',  '_route' => 'account_create',);
            }

        }

        // page_landing
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'page_landing');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => 'page_landing',);
        }

        // page_app
        if ($pathinfo === '/apppage') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::appAction',  '_route' => 'page_app',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_login_homepage
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\AccountController::loginAction',  '_route' => 'login_login_homepage',);
            }

            // login_login_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\AccountController::logoutAction',  '_route' => 'login_login_logout',);
            }

        }

        // upload_image_sever
        if (rtrim($pathinfo, '/') === '/upload') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'upload_image_sever');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DefaultController::uploadAction',  '_route' => 'upload_image_sever',);
        }

        // pnc_updown_download
        if ($pathinfo === '/download') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DefaultController::downloadAction',  '_route' => 'pnc_updown_download',);
        }

        if (0 === strpos($pathinfo, '/restore')) {
            // restore
            if ($pathinfo === '/restore') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\AccountController::restoreAction',  '_route' => 'restore',);
            }

            // restore_confirm
            if (preg_match('#^/restore/(?P<code>[a-z0-9]{32})$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'restore_confirm')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\AccountController::restoreConfirmAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::adminIndexAction',  '_route' => 'admin',);
            }

            // admin_home
            if ($pathinfo === '/admin/index') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::adminIndexAction',  '_route' => 'admin_home',);
            }

            // admin_show
            if (preg_match('#^/admin/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::showAction',));
            }

            // admin_new
            if ($pathinfo === '/admin/new') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::newAction',  '_route' => 'admin_new',);
            }

            // admin_create
            if ($pathinfo === '/admin/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_create;
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::createAction',  '_route' => 'admin_create',);
            }
            not_admin_create:

            // admin_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::editAction',));
            }

            // admin_update
            if (preg_match('#^/admin/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_update')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::updateAction',));
            }
            not_admin_update:

            // admin_delete
            if (preg_match('#^/admin/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'DELETE', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'DELETE', 'HEAD'));
                    goto not_admin_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::directDeleteAction',));
            }
            not_admin_delete:

            // admin_table
            if ($pathinfo === '/admin/table') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::showTableAction',  '_route' => 'admin_table',);
            }

            // admin_gallery
            if ($pathinfo === '/admin/gallery') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::showGalleryAction',  '_route' => 'admin_gallery',);
            }

            // admin_manageGallery
            if (preg_match('#^/admin/(?P<id>[^/]++)/managegallery$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_manageGallery')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::manageGalleryAction',));
            }

        }

        // pnc_management_homepage
        if ($pathinfo === '/dashboard/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::loginAction',  '_route' => 'pnc_management_homepage',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // pnc_management_userhome
            if ($pathinfo === '/user/index') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::indexAction',  '_route' => 'pnc_management_userhome',);
            }

            // pnc_management_usergallery
            if ($pathinfo === '/user/gallery') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::showGalleryAction',  '_route' => 'pnc_management_usergallery',);
            }

            // pnc_management_userprofile
            if ($pathinfo === '/user/profile') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::showProfileAction',  '_route' => 'pnc_management_userprofile',);
            }

        }

        // pnc_management_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\AccountController::logoutAction',  '_route' => 'pnc_management_logout',);
        }

        // pnc_management_mypage
        if ($pathinfo === '/hi') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DefaultController::homeAction',  '_route' => 'pnc_management_mypage',);
        }

        // pnc_management_upload
        if ($pathinfo === '/upload') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DefaultController::uploadAction',  '_route' => 'pnc_management_upload',);
        }

        // pnc_management_download
        if ($pathinfo === '/download') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DefaultController::downloadAction',  '_route' => 'pnc_management_download',);
        }

        if (0 === strpos($pathinfo, '/u')) {
            // pnc_management_uploadname
            if ($pathinfo === '/uploadname') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DefaultController::uploadnameAction',  '_route' => 'pnc_management_uploadname',);
            }

            if (0 === strpos($pathinfo, '/user')) {
                // mana_change_password
                if (preg_match('#^/user/(?P<id>[^/]++)/changepwd$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mana_change_password')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::changepasswordAction',));
                }

                // rename_image_old
                if (preg_match('#^/user/(?P<id>[^/]++)/(?P<imgid>[^/]++)/rename$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'rename_image_old')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::renameImgAction',));
                }

            }

        }

        // rename_image
        if ($pathinfo === '/renameImage') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::renameImageAction',  '_route' => 'rename_image',);
        }

        // delete_image
        if ($pathinfo === '/deleteImage') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::deleteImageAction',  '_route' => 'delete_image',);
        }

        // send_image
        if ($pathinfo === '/sendImage') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\UserController::sendImageAction',  '_route' => 'send_image',);
        }

        // contact_US
        if ($pathinfo === '/contactus') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::contactusAction',  '_route' => 'contact_US',);
        }

        // Terms_of_Service
        if ($pathinfo === '/terms') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::termsAction',  '_route' => 'Terms_of_Service',);
        }

        // Privacy_Policy
        if ($pathinfo === '/privacy') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::privacyAction',  '_route' => 'Privacy_Policy',);
        }

        // open_image_Dash
        if (0 === strpos($pathinfo, '/apppage') && preg_match('#^/apppage/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'open_image_Dash')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::openImageDashAction',));
        }

        // FAQS
        if ($pathinfo === '/faq') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::faqAction',  '_route' => 'FAQS',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
