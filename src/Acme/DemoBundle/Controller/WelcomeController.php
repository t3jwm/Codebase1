<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
class WelcomeController extends Controller
{
    public function indexAction()
    { 
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */
    	$session = $this->getRequest()->getSession();
    	if ($session->has('login')) {
    		$login = $session->get('login');
    		$userName = $login->getUsername();
    		
    		
    			return $this->render('AcmeDemoBundle:Demo:homepage.html.twig', array('name' => $userName));
    		
    	}
        return $this->render(
        		'AcmeDemoBundle:Demo:homepage.html.twig', array('name' =>''));
    }

      
    

    public function appAction()
    {
    	/*
    	 * The action's view can be rendered using render() method
    	 * or @Template annotation as demonstrated in DemoController.
    	 *
    	 */
    	$code = "";
    	$filenames = array();
    	$session = $this->getRequest()->getSession();
    	if ($session->has('login')) {
    		$login = $session->get('login');
    		$userId = $login->getUserId();
    		//var_dump($userId); exit;
    	
    	} else {
    			return $this->redirect($this->generateUrl('account_register'));
    	}
    	$repository = $this->getDoctrine()
    	->getRepository('AcmeDemoBundle:File');
    	$products = $repository->findByUser($userId);
    	//var_dump(count($products)); exit;
    	
    	
    	$em = $this->getDoctrine()->getManager();
    	$file_class = $this->container->getParameter('file_class');
    	
    	$basePath ='/media';
    	//
    	//$basePath ='/username';
    	$filePaths = array();
    	$nameImages = array();
    	for ($i = 0; $i < count($products); $i++) {
    		$filenames[$i] = $products[$i]->getPath();
    		$filePaths[$i] = $basePath.'/'.$filenames[$i];
    		$nameImages[$i] = $products[$i]->getName();
    		//echo $filePaths[$i];
    	}//exit;
    	 
    	$numImage = count($nameImages)-1;
    	//var_dump($filePath); die;
    	
    	// check if file exists
    	/*if (!file_exists($filePaths)) {
    	 throw $this->createNotFoundException();
    	 }*/
    	
    	$session = $this->getRequest()->getSession();
    	if ($session->has('login')) {
    		$login = $session->get('login');
    		$userName = $login->getUsername();
    	
    	
    		return $this->render('AcmeDemoBundle:Demo:app.html.twig', array('name' => $userName,'filePaths' => $filePaths, 'numImage' => $numImage, 'nameImages' => $nameImages,'code' =>$code ));
    	
    	}
    	return $this->render(
    			'AcmeDemoBundle:Demo:homepage.html.twig', array('name' => '', 'filePaths' => $filePaths, 'numImage' => $numImage,'code' =>$code ));
    }
    
    public function contactusAction()
    {
    	/*
    	 * The action's view can be rendered using render() method
    	 * or @Template annotation as demonstrated in DemoController.
    	 *
    	 */
    	$session = $this->getRequest()->getSession();
    	if ($session->has('login')) {
    		$login = $session->get('login');
    		$userName = $login->getUsername();
    
    
    		return $this->render('AcmeDemoBundle:Demo:contactus.html.twig', array('name' => $userName));
    
    	}
    	return $this->render(
    			'AcmeDemoBundle:Demo:contactus.html.twig', array('name' =>''));
    }
    
    public function termsAction()
    {
    	/*
    	 * The action's view can be rendered using render() method
    	 * or @Template annotation as demonstrated in DemoController.
    	 *
    	 */
    	$session = $this->getRequest()->getSession();
    	if ($session->has('login')) {
    		$login = $session->get('login');
    		$userName = $login->getUsername();
    
    
    		return $this->render('AcmeDemoBundle:Demo:terms.html.twig', array('name' => $userName));
    
    	}
    	return $this->render(
    			'AcmeDemoBundle:Demo:terms.html.twig', array('name' =>''));
    }
    public function privacyAction()
    {
    	/*
    	 * The action's view can be rendered using render() method
    	 * or @Template annotation as demonstrated in DemoController.
    	 *
    	 */
    	$session = $this->getRequest()->getSession();
    	if ($session->has('login')) {
    		$login = $session->get('login');
    		$userName = $login->getUsername();
    
    
    		return $this->render('AcmeDemoBundle:Demo:privacy.html.twig', array('name' => $userName));
    
    	}
    	return $this->render(
    			'AcmeDemoBundle:Demo:privacy.html.twig', array('name' =>''));
    }
	public function openImageDashAction($code)
    {
    	/*
    	 * The action's view can be rendered using render() method
    	 * or @Template annotation as demonstrated in DemoController.
    	 *
    	 */
    
    	$filenames = array();
    	$session = $this->getRequest()->getSession();
    	if ($session->has('login')) {
    		$login = $session->get('login');
    		$userId = $login->getUserId();
    		
    		 
    	} else {
    		return $this->redirect($this->generateUrl('account_register'));
    	}
    	$repository = $this->getDoctrine()
    	->getRepository('AcmeDemoBundle:File');
    	$products = $repository->findByUser($userId);
    	//var_dump(count($products)); exit;
    	 
    	 
    	$em = $this->getDoctrine()->getManager();
    	$file_class = $this->container->getParameter('file_class');
    	 
    	$basePath ='/media';
    	//
    	//$basePath ='/username';
    	$filePaths = array();
    	$nameImages = array();
    	for ($i = 0; $i < count($products); $i++) {
    		$filenames[$i] = $products[$i]->getPath();
    		$filePaths[$i] = $basePath.'/'.$filenames[$i];
    		$nameImages[$i] = $products[$i]->getName();
    		//echo $filePaths[$i];
    	}//exit;
    
    	$numImage = count($nameImages)-1;
    	//------Open Imge_dash-------//
    	
    	$repository = $this->getDoctrine()
    	->getRepository('AcmeDemoBundle:File');
    	$image_dash = $repository->findOneById($code);
    	//var_dump($image_dash->getId()); exit;
    	
    	
    	$em = $this->getDoctrine()->getManager();
    	$file_class = $this->container->getParameter('file_class');
    	
    	$basePath ='/media';
    	//
    	//$basePath ='/username';
    	
    
    		$filename_dash = $image_dash->getPath();
    		$filepath_dash = $basePath.'/'.$filename_dash.'.json';
    		
    		//var_dump($filepath_dash);die;
    	
    	
    	
    	
    	//---------------------------//
    	 
    	$session = $this->getRequest()->getSession();
    	if ($session->has('login')) {
    		$login = $session->get('login');
    		$userName = $login->getUsername();
    		 
    		 
    		return $this->render('AcmeDemoBundle:Demo:app.html.twig', array('name' => $userName,'filePaths' => $filePaths, 'numImage' => $numImage, 'nameImages' => $nameImages, 'code' =>$filepath_dash ));
    		 
    	}
    	return $this->render(
    			'AcmeDemoBundle:Demo:homepage.html.twig', array('name' => '', 'filePaths' => $filePaths, 'numImage' => $numImage,'code' =>$filepath_dash ));
    }

}
