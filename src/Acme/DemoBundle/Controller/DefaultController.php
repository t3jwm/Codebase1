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
        return $this->render('AcmeDemoBundle:Default:index.html.twig', array('name' => $name));
    }

    public function homeAction() {
        return $this->render('AcmeDemoBundle:Default:mypage.html.twig');
    }

    public function crisAction() {
        return new Response('Hi Eminem !');
    }

    /**
     * @Template()
     */
    public function uploadAction() {
        
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $userId = $login->getUserId();
        }
//        $nameImage = $session->get('nameImage');
//        $descriptionImage = $session->get('descriptionImage');
        //clear session????

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
        //$created = Array();
        //
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
            "png" => "image/png"
        );

        /* $_FILES (Binary upload)
          -------------------------------------------------------- */
        $useFILES = isset($_FILES) && count($_FILES);
        if ($useFILES) { // blob
            foreach ($_FILES as $key => $value) {
                $name = str_replace("_", ".", $key);
                $ext = array_pop((explode(".", $name)));
                if (!isset($mime[$ext]))
                    continue;
                $tmp_name = $_FILES[$key]["tmp_name"];
                //$md5 = md5_file($tmp_name);
                $filepath = "{$targetdir}/{$document}.{$ext}";
                //$filepath = "{$targetdir}/{$md5}.{$ext}";
                //$created[] = $filepath;
                move_uploaded_file($tmp_name, $filepath);
            }
        }

        /* $_POST (UTF-8 upload)
          -------------------------------------------------------- */
        $usePOST = isset($_POST) && count($_POST);
        
        if ($usePOST) { // string
            foreach ($_POST as $key => $value) {
                var_dump($value);
                $ext = str_replace("_", ".", $key);
                if (!isset($mime[$ext]))
                    continue;
                list($type, $extension) = explode("/", $mime[$ext]);
                /// Base64 decode.
                if ($type === "image" && $ext !== "svg") {
                    $split = explode(",", $value);
                    $value = base64_decode($split[1]);
                }
                /// Put image data.
                //$md5 = md5($value);
                $filepath = "{$targetdir}/{$document}.{$ext}";
                //$filepath = "{$targetdir}/{$md5}.{$ext}";
                //$created[] = $filepath;
                var_dump("value after: ", $value);
                file_put_contents($filepath, $value);
            }
        }
        die("die here!!");


        /* filesystem.php?type=sketch&file=drawing
          -------------------------------------------------------- */

        $file = new File();

        //if ($form->isValid()) {

        $em = $this->getDoctrine()->getManager();
        $user_class = $this->container->getParameter('user_class');
        $user = $em->getRepository($user_class)->findOneById($userId);
        if (!$user) {
            exit;
        }
        $file->setUser($user);
        $file->setName($nameImage);
        $file->setDescription($descriptionImage);
        $file->setRoot('media');
        $file->setPath($document);

        //---

        $em = $this->getDoctrine()->getManager();


        $em->persist($file);
        $em->flush();
        $imgid = $file->getId();
        $session->set('idImage', $imgid);

        $response = new Response(json_encode(array('IdImage' => $imgid)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    public function downloadAction() {
        $nameImage = $_POST['nameImage'];
        $session = $this->getRequest()->getSession();
        $session->set('nameImage', $nameImage);
        //if trung ten --> confirm
        //alert('sd');exit;
        $response = new Response(json_encode(array('name' => 'hao')));
        $response->headers->set('Content-Type', 'application/json');


        $filenames = array();
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) {
            $login = $session->get('login');
            $userId = $login->getUserId();
            //var_dump($userId); exit;
        }
        $repository = $this->getDoctrine()
                ->getRepository('AcmeDemoBundle:File');
        $products = $repository->findByUser($userId);
        //var_dump(count($products)); exit;


        $em = $this->getDoctrine()->getManager();
        $file_class = $this->container->getParameter('file_class');

        $basePath = '/media';
        //
        //$basePath ='/username';
        $filePaths = array();
        $nameImages = array();
        for ($i = 0; $i < count($products); $i++) {
            $filenames[$i] = $products[$i]->getPath();
            $filePaths[$i] = $basePath . '/' . $filenames[$i];
            $nameImages[$i] = $products[$i]->getName();
            //echo $filePaths[$i];
        }
        $numImage = count($nameImages) - 1;
        //var_dump($numImage); die;
        return $this->render('AcmeDemoBundle:Account:show.html.twig', array('filePaths' => $filePaths, 'numImage' => $numImage, 'nameImages' => $nameImages));

        //prepare BinaryFileResponse
        $response = new BinaryFileResponse($filePath);
        $response->trustXSendfileTypeHeader();
        $response->setContentDisposition(
                ResponseHeaderBag::DISPOSITION_INLINE, $filename, iconv('UTF-8', 'ASCII//TRANSLIT', $filename)
        );
        return $this->render('AcmeDemoBundle:Demo:show.html.twig', array('filePath' => $filePath));
    }

    public function uploadnameAction() {

        $session = $this->getRequest()->getSession();
        $nameImage = $_GET['nameImage'];
        $nameDescription = $_GET['descriptionImage'];
        $session->set('nameImage', $nameImage);
        $session->set('descriptionImage', $nameDescription);
        $response = new Response(json_encode(array('isExist' => 'readyExist')));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * @Route("/admin")
     */
    public function adminAction() {
        return new Response('Admin page!');
    }

}
