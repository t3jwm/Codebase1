<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class WelcomeController extends Controller {

    public function indexAction() {
        /*
         * The action"s view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        $session = $this->getRequest()->getSession();
        if ($session->has("login")) {
            $login = $session->get("login");
            $userName = $login->getUsername();


            return $this->render("AcmeDemoBundle:Demo:homepage.html.twig", array("name" => $userName));
        }
        return $this->render(
                        "AcmeDemoBundle:Demo:homepage.html.twig", array("name" => ""));
    }

    public function appAction() {
        $session = $this->getRequest()->getSession();
        if ($session->has("login")) {
            $login = $session->get("login");
            $userName = $login->getUsername();
            return $this->render("AcmeDemoBundle:Demo:app.html.twig", array("name" => $userName, "code" => "", "idImage" => ""));
        } else {
            return $this->redirect($this->generateUrl('login_login_homepage'));            
        }
    }

    public function contactusAction() {
        /*
         * The action"s view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        $session = $this->getRequest()->getSession();
        if ($session->has("login")) {
            $login = $session->get("login");
            $userName = $login->getUsername();


            return $this->render("AcmeDemoBundle:Demo:contactus.html.twig", array("name" => $userName));
        }
        return $this->render(
                        "AcmeDemoBundle:Demo:contactus.html.twig", array("name" => ""));
    }

    public function termsAction() {
        /*
         * The action"s view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        $session = $this->getRequest()->getSession();
        if ($session->has("login")) {
            $login = $session->get("login");
            $userName = $login->getUsername();


            return $this->render("AcmeDemoBundle:Demo:terms.html.twig", array("name" => $userName));
        }
        return $this->render(
                        "AcmeDemoBundle:Demo:terms.html.twig", array("name" => ""));
    }

    public function privacyAction() {
        /*
         * The action"s view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        $session = $this->getRequest()->getSession();
        if ($session->has("login")) {
            $login = $session->get("login");
            $userName = $login->getUsername();


            return $this->render("AcmeDemoBundle:Demo:privacy.html.twig", array("name" => $userName));
        }
        return $this->render(
                        "AcmeDemoBundle:Demo:privacy.html.twig", array("name" => ""));
    }

    public function faqAction() {
        /*
         * The action"s view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
        $session = $this->getRequest()->getSession();
        if ($session->has("login")) {
            $login = $session->get("login");
            $userName = $login->getUsername();


            return $this->render("AcmeDemoBundle:Demo:faq.html.twig", array("name" => $userName));
        }
        return $this->render(
                        "AcmeDemoBundle:Demo:faq.html.twig", array("name" => ""));
    }

    public function openImageDashAction($code) {

        $session = $this->getRequest()->getSession();
        if (!$session->has("login")) {
            return $this->redirect($this->generateUrl("account_register"));
        }
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()->getRepository("AcmeDemoBundle:File");
        $file = $repository->findOneById($code);
        if (($file != null) && ($file->userId == $session->get("login")->getUserId())) {            
            $filepath_dash = "/" . $file->root . "/" . $file->path . ".json";
            return $this->render("AcmeDemoBundle:Demo:app.html.twig", array("name" => $session->get("login")->getUserName(), "code" => $filepath_dash, "idImage" => $code));
        }else{
            echo "You can not access this image"; exit;
        }
    }

}
