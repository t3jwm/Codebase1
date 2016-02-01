<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Acme\DemoBundle\Entity\File;
use Acme\DemoBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Acme\DemoBundle\Modals\Login;

class DefaultController extends Controller {

    public function indexAction($name) {
        return $this->render("AcmeDemoBundle:Default:index.html.twig", array("name" => $name));
    }

    public function homeAction() {
        return $this->render("AcmeDemoBundle:Default:mypage.html.twig");
    }

    public function crisAction() {
        return new Response("Hi Eminem !");
    }

    /**
     * @Template()
     */
    public function uploadAction() {

        $session = $this->getRequest()->getSession();
        if ($session->has("login")) {
            $login = $session->get("login");
            $userId = $login->getUserId();
        }
        $user_class = $this->container->getParameter("user_class");
        
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository($user_class)->findOneById($userId);
        if (!$user) {
            exit;
        }
        /*
          ----------------------------------------------------------------
          FILE MANAGER : 1.0.3 : 2014-11-04
          ----------------------------------------------------------------
          SETUP:
          chmod 777 ./media/upload/
          ----------------------------------------------------------------
         */

        $basedir = "/media/upload";
        $userdir = "media"; // logged in username
        $document = sha1(uniqid(mt_rand(), true));
        $targetdir = "{$userdir}";

        @mkdir("{$targetdir}"); // create target dir}

        /* MIME TYPES (supported formats)
          -------------------------------------------------------- */
        $mime = Array(
            "sketch" => "application/zip",
            "json" => "application/json",
            "svg" => "image/svg+xml",
            "thumb.gif" => "image/gif",
            "thumb.jpeg" => "image/jpeg",
            "thumb.png" => "image/png",
            "gif" => "image/gif",
            "jpeg" => "image/jpeg",
            "png" => "image/png",
        );

        /* $_FILES (Binary upload)
          -------------------------------------------------------- */
        $useFILES = isset($_FILES) && count($_FILES);
        if ($useFILES) { // blob
            foreach ($_FILES as $key => $value) {
                $name = str_replace("_", ".", $key);
                $ext = array_pop((explode(".", $name)));
                if (!isset($mime[$ext])) {
                    continue;
                }
                $tmp_name = $_FILES[$key]["tmp_name"];
                $filepath = "{$targetdir}/{$document}.{$ext}";
                move_uploaded_file($tmp_name, $filepath);
            }
        }

        // Read "title" and "Description" info.
        $stringSketchJson = file_get_contents("{$targetdir}/{$document}" . ".json");
        $stringSketchJsonParse = json_decode($stringSketchJson, true);
        
        if ((!$session->has("currentIdImg")) || ($session->get("currentIdImg") == "")) { //New Image
            $file = new File();
            
            $file->setUserId($userId);
            $file->setName($stringSketchJsonParse["metadata"]["title"]);
            $file->setDescription($stringSketchJsonParse["metadata"]["description"]);
            $file->setRoot("media");
            $file->setPath($document);

            $em = $this->getDoctrine()->getManager();
            $em->persist($file);
            $em->flush();

            $imgid = $file->getId();
            $session->set("newIdImg", $imgid);
            $response = new Response(json_encode(array("IdImage" => $imgid)));
            $response->headers->set("Content-Type", "application/json");
            return $response;
        } else {//update (Press button Save)
            $file = $em->getRepository('AcmeDemoBundle:File')->findOneById($session->get("currentIdImg"));
            $file->setPath($document);
            $em->flush();
            
            $response = new Response(json_encode(array("IdImage" => $session->get("currentIdImg"))));
            $session->set("currentIdImg","");
            $response->headers->set("Content-Type", "application/json");
            return $response;
        }
    }

    public function downloadAction() {
        $nameImage = $_POST["nameImage"];
        $session = $this->getRequest()->getSession();
        $session->set("nameImage", $nameImage);
        //if trung ten --> confirm    
        $response = new Response(json_encode(array("name" => "hao")));
        $response->headers->set("Content-Type", "application/json");


        $filenames = array();
        $session = $this->getRequest()->getSession();
        if ($session->has("login")) {
            $login = $session->get("login");
            $userId = $login->getUserId();
            //var_dump($userId); exit;
        }
        $repository = $this->getDoctrine()
                ->getRepository("AcmeDemoBundle:File");
        $products = $repository->findByUserId($userId);
        //var_dump(count($products)); exit;


        $em = $this->getDoctrine()->getManager();
        $file_class = $this->container->getParameter("file_class");

        $basePath = "/media";
        //
        
        $filePaths = array();
        $nameImages = array();
        for ($i = 0; $i < count($products); $i++) {
            $filenames[$i] = $products[$i]->getPath();
            $filePaths[$i] = $basePath . "/" . $filenames[$i];
            $nameImages[$i] = $products[$i]->getName();
            //echo $filePaths[$i];
        }
        $numImage = count($nameImages) - 1;
        //var_dump($numImage); die;
        return $this->render("AcmeDemoBundle:Account:show.html.twig", array("filePaths" => $filePaths, "numImage" => $numImage, "nameImages" => $nameImages));

        //prepare BinaryFileResponse
        $response = new BinaryFileResponse($filePath);
        $response->trustXSendfileTypeHeader();
        $response->setContentDisposition(
                ResponseHeaderBag::DISPOSITION_INLINE, $filename, iconv("UTF-8", "ASCII//TRANSLIT", $filename)
        );
        return $this->render("AcmeDemoBundle:Demo:show.html.twig", array("filePath" => $filePath));
    }

    public function uploadnameAction() {
        $optionAction = $_POST["optionAction"];
        $session = $this->getRequest()->getSession();
        switch ($optionAction) {
            case "getNewIdImg":                
                if ($session->has("newIdImg")) {
                    $response = new Response(json_encode(array("newIdImg" => $session->get("newIdImg"))));
                    $session->set("newIdImg", "");
                    $response->headers->set("Content-Type", "application/json");
                    return $response;
                }
                break;
            case "updateContentWithIdImg":
                $session->set("currentIdImg", $_POST["currentIdImg"]);
                $response = new Response(json_encode(array("status" => "success")));
                $response->headers->set("Content-Type", "application/json");
                return $response;
                break;
            default:
                $response = new Response(json_encode(array("status" => "error")));
                $response->headers->set("Content-Type", "application/json");
                return $response;
                break;
        }
    }

    /**
     * @Route("/admin")
     */
    public function adminAction() {
        return new Response("Admin page!");
    }

}
