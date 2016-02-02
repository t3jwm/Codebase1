<?php // src/Acme/DemoBundle/Controller/AccountController.php
namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\DemoBundle\Form\Type\RegistrationType;
use Acme\DemoBundle\Form\Model\Registration;
use Symfony\Component\HttpFoundation\Request;
use Acme\DemoBundle\Modals\Login;
use Symfony\Component\HttpFoundation\Session\Session;
use Acme\DemoBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Acme\DemoBundle\Form\RestoreType;
use Symfony\Component\Form\FormError;
class AccountController extends Controller
{
    public function registerAction()
    { 
        $registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('account_create'),
        ));

        return $this->render(
            'AcmeDemoBundle:Account:register.html.twig',
            array('form' => $form->createView(),'name' => '', 'success' => '')
        );
    }
    
    
   
    // ...
    
    public function createAction(Request $request)
    {   $errs = array();
    	$success ='';
    	$em = $this->getDoctrine()->getManager();
    
    	$form = $this->createForm(new RegistrationType(), new Registration());
    	
    	$form->handleRequest($request);
    	$registration = $form->getData();
    	
    	if(null !== $registration->getUser()) {
    		$registration->getUser()->setIsAdmin('0');
    	}
    	
    	if ($form->isValid()) {
    		$registration = $form->getData();
    		
    		$registration->getUser()->setPassword(md5($registration->getUser()->getPassword()));
    		$em->persist($registration->getUser());
    		$em->flush();
    
    		
    		$success = 'Register success';
    		return $this->redirect($this->generateUrl('login_login_homepage'));
    		
    	} else {
    		
    		$errors = $this->get('validator')->validate( $form );
    		$result = '';
       		foreach( $errors as $error )
    		{
    			// Do stuff with:
    			$error->getPropertyPath();// : the field that caused the error
    			$error->getMessage() ; //the error message
    			$errs[$error->getPropertyPath()] = $error->getMessage();
    		}
    		
    		
    	}
    
    	return $this->render(
    			'AcmeDemoBundle:Account:register.html.twig',
    			array('form' => $form->createView(),'name' => '', 'success' => $success, 'errs' => $errs));
    }
    
    public function loginAction(Request $request) {
    	$success = '';
    	$isLoginSuccess ='';
    	$session = $this->getRequest()->getSession();
    	$em = $this->getDoctrine()->getEntityManager();
    	$repository = $em->getRepository('AcmeDemoBundle:User');
    	
    	if ($request->getMethod() == 'POST') {
    		$session->clear();
    		$userName = $request->get('userName');
    		$password = md5($request->get('password'));
    		//var_dump($password);die;
    		//$remember = $request->get('remember');
    		
    		$user = $repository->findOneBy(array('userName' => $userName, 'password' => $password));
    		if ($user) { 
    			$login = new Login();
                $isAdmin =  $user->getIsAdmin();
                $userid = $user->getId();
                $username = $user->getUserName();
                
    			$login->setUserId($user->getId());
    			$login->setUserName($userName);
    			$login->setPassword($password);
    			$session->set('login', $login);

                $session->set('isAdmin', $isAdmin);
                $session->set('userid', $userid); 
                $session->set('username', $username);
				
				//-----Check New or Old User ----//
                $em = $this->getDoctrine()->getEntityManager();
                $repository = $em->getRepository('AcmeDemoBundle:File');
                $file = $repository->findOneBy(array('userId' => $user->getId()));
                
                if ( $file != NULL) {//If new user
                	return $this->redirect($this->generateUrl('pnc_management_usergallery'));
                } else {//If old user
                	return $this->redirect($this->generateUrl('page_app'));
                }
               
				//-----End Check----------//	
    			
    		} else {//-login fail
    			$isLoginSuccess = 'fail';
    			return $this->render('AcmeDemoBundle:Account:login.html.twig', array('name' => '','isLoginSuccess' => $isLoginSuccess));
    		}
    	} else {
    		if ($session->has('login')) {
    			$login = $session->get('login');
    			$userName = $login->getUsername();
    			
    				return $this->render('AcmeDemoBundle:Account:login.html.twig', array('name' => $userName,'isLoginSuccess' => $isLoginSuccess));
    			
    		}
    		return $this->render('AcmeDemoBundle:Account:login.html.twig', array('name' => '','isLoginSuccess' => $isLoginSuccess));
    	}
    }
    
    
    
    public function logoutAction(Request $request) {
    	$session = $this->getRequest()->getSession();
    	$session->clear();
    	return $this->render('AcmeDemoBundle:Account:login.html.twig', array('name' => '','isLoginSuccess' => ''));
    }

   
    
 /**
     * Send link to confirm changing password
     */
    public function restoreAction(Request $request)
    { 
        /*if ($this->get('security.context')->isGranted('ROLE_USER')) {
            return $this->redirect($request->getSchemeAndHttpHost() . $request->getBaseUrl());
        }*/

        $form = $this->createForm(new RestoreType());

        // If form was submitted
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            $em = $this->getDoctrine()->getManager();
				
            $user_class = $this->container->getParameter('user_class');
            $user = $em->getRepository($user_class)->findOneByEmail($form->get('email')->getData());
            
            if (!$user) {
            	 return $this->render('AcmeDemoBundle:Account:restoreForm.html.twig', array(
                    'form' => $form->createView(), 'name' => '','isLoginSuccess' => '', 'success' => '', 'errs' => 'Cant find the User with your Email' 
        			));
            }
            
            if ($form->isValid()) {
                $token_class = $this->container->getParameter('token_class');
                $token = new $token_class;

                $token->setUser($user);

                $link = $this->generateUrl('restore_confirm', array('code' => $token->getCode()), true);

                $site_name = $this->container->getParameter('site_name');
                $site_email = $this->container->getParameter('site_email');

                $message = \Swift_Message::newInstance()
                        ->setSubject('Change Password Sketchapp ')
                        ->setFrom($site_email, $site_name)
                        ->setTo($user->getEmail())
                        ->setBody(
                        $this->renderView('AcmeDemoBundle:User:mail/restore.html.twig', array(
                            'site_name' => $site_name,
                            'name' => $user->getUserName(),
                            'link' => $link,
                        ))
                );
                $this->get('mailer')->send($message);
				
				// update token
                $em->persist($token);
                $em->flush();

                 return $this->render('AcmeDemoBundle:Account:restoreForm.html.twig', array(
                    'form' => $form->createView(), 'name' => '','isLoginSuccess' => '', 'success' => 'Success, Please check your mail to change password', 'errs' => '' 
        			));
            }
        }
        
        return $this->render('AcmeDemoBundle:Account:restoreForm.html.twig', array(
                    'form' => $form->createView(), 'name' => '','isLoginSuccess' => '', 'success' => '', 'errs' => ''
        ));
    }

    /**
     * Change password if confirmed
     */
    public function restoreConfirmAction(Request $request, $code)
    {
        /*if ($this->get('security.context')->isGranted('ROLE_USER')) {
            return $this->redirect($request->getSchemeAndHttpHost() . $request->getBaseUrl());
        }*/

        $em = $this->getDoctrine()->getManager();

        $token_class = $this->container->getParameter('token_class');
        $token = $em->getRepository($token_class)->findOneByCode($code);
        $errs = "";
        
        if (!$token) {
      
            return $this->redirect('../homepage');
            
        } else {
        $user = $token->getUser();
        $link = $this->generateUrl('restore_confirm', array('code' => $token->getCode()), true);
    
       //-----------
        if ($request->getMethod() == 'POST') {
        	
      
        	$password = $request->get('password');
        	$passwordConfirm = $request->get('passwordConfirm');
        	//var_dump($passwordConfirm);die;
        	if ($password != $passwordConfirm ) {
        		$errs= "Two password must same";
        		return $this->render('AcmeDemoBundle:Account:restore.html.twig', array('username' => $user->getUserName(), 'link' => $link, 'errs' => $errs,'name' => '','isLoginSuccess' => ''));
        	} else {
        		if (strlen($password) < 5) {
        			$errs= "Password must longer 5 than character";
        			return $this->render('AcmeDemoBundle:Account:restore.html.twig', array('username' => $user->getUserName(), 'link' => $link, 'errs' => $errs,'name' => '','isLoginSuccess' => ''));
        		} else {
        		//update database
        		
        		if (!$user) {
        			return $this->redirect('../homepage');
        		}
        		$passwordHash = md5($password);
        		$user->setPassword($passwordHash);
        		$em->flush();
        		//delete Token database
        		$em->remove($token);
        		$em->flush();

        		 return $this->redirect('../login');
        	}
        	}
        	
        } else { 
        		return $this->render('AcmeDemoBundle:Account:restore.html.twig', array('username' => $user->getUserName(), 'link' => $link, 'errs' => $errs,'name' => '','isLoginSuccess' => ''));
        }
      
        }
        
       

    }

     
}