<?php

namespace Acme\DemoBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\DemoBundle\Entity\User;
use Acme\DemoBundle\Form\UserType;

use Acme\DemoBundle\Modals\Login;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\Session;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Log\LoggerInterface;

use Spraed\PDFGeneratorBundle\PDFGenerator;
use Symfony\Component\HttpFoundation\RedirectResponse;

/**
 * User controller.
 *
 */
class UserController extends Controller
{

    /**
     * Show admin dashboard page
     *
     */
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('pnc_management_userprofile'));
        /*
        $session = $this->getRequest()->getSession();

        if($session->get('isAdmin') == -1)
        {
            return $this->render('AcmeDemoBundle:User:error.html.twig');
        }

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeDemoBundle:User')->findAll();

        return $this->render('AcmeDemoBundle:User:index.html.twig', array(
            'entities' => $entities,
        ));
        */
    }

    /**
     * Creates a new User entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new User();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $entity->setPassword(md5($entity->getPassword()));

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_show', array('id' => $entity->getId())));
        }

        return $this->render('AcmeDemoBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a User entity.
     *
     * @param User $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('admin_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new User entity.
     *
     */
    public function newAction()
    {
        $entity = new User();
        $form   = $this->createCreateForm($entity);

        return $this->render('AcmeDemoBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction($id)
    {
    
         $session = $this->getRequest()->getSession();
           if (!($session->has('userid'))) 
            {
                                
                     return new RedirectResponse($this->generateUrl('pnc_management_homepage'));
                
            }
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDemoBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeDemoBundle:User:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction(Request $request, $id)
    {
       
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDemoBundle:User')->find($id);
        $password = $entity->getPassword();
        
        $entities = $em->getRepository('AcmeDemoBundle:User')->findAll();
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }    
        
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeDemoBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'password'    => $password,
            'entities'    => $entities,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a User entity.
    *
    * @param User $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(User $entity)
    {
        $form = $this->createForm(new UserType(), $entity, array(
            'action' => $this->generateUrl('admin_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));
        return $form;
    }
    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $session = $this->getRequest()->getSession();

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDemoBundle:User')->find($id);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }
                
        $oldpass = $entity->getPassword();

        $deleteForm = $this->createDeleteForm($id);

        $editForm = $this->createEditForm($entity);

        $editForm->handleRequest($request);
        
        if ($editForm->isValid()) 
        {
            
            if($entity->getPassword() != $oldpass)
            {
               $entity->setPassword(md5($entity->getPassword()));
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_edit', array('id' => $id)));
        }

        return $this->render('AcmeDemoBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a User entity.
     *
     */
    public function directDeleteAction($id) 
    {
        $repository = $this->getDoctrine()->getRepository('AcmeDemoBundle:File');
        $products = $repository->findByUser($id);
        $numImage = count($products);

        if($numImage == 0)
        {
            //var_dump($id);exit;
            $em = $this->getDoctrine()->getEntityManager();
            $user = $em->getRepository('AcmeDemoBundle:User')->find($id);

            if (!$user) {
                throw $this->createNotFoundException('No user found for id '.$id);
            }   

            $em->remove($user);
            $em->flush();
        }

        else
        {

            for ($i = 0; $i < $numImage; $i++)
            {
                $em = $this->getDoctrine()->getEntityManager();
                $imgid = $products[$i]->getId();
                //var_dump($imgid);die;
                $img = $em->getRepository('AcmeDemoBundle:File')->find($imgid);
                
                $em->remove($img);
                $em->flush();
            }
            $em = $this->getDoctrine()->getEntityManager();
            $user = $em->getRepository('AcmeDemoBundle:User')->find($id);

            if (!$user) {
                throw $this->createNotFoundException('No user found for id '.$id);
            }   

            $em->remove($user);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_table'));
    }

    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeDemoBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_table'));

    }

    /**
     * Creates a form to delete a User entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    /**
     * Lists all User entities.
     *
     */
    public function showTableAction()
    {
     
         $session = $this->getRequest()->getSession();
           if (!($session->has('userid'))) 
            {
                                
                     return new RedirectResponse($this->generateUrl('pnc_management_homepage'));
                
            }
        if($session->get('isAdmin') == 1)
        {
            $em = $this->getDoctrine()->getManager();

            $entities = $em->getRepository('AcmeDemoBundle:User')->findAll();

            return $this->render('AcmeDemoBundle:User:table.html.twig', array(
                'entities' => $entities,           
            ));
        }
        else
        {
            return new RedirectResponse($this->generateUrl('pnc_management_homepage'));
        }

    }

    public function loginAction(Request $request) 
    {
        
        $success = '';
        $isLoginSuccess ='';
        $session = $this->getRequest()->getSession();

        /*------------------------
        if($session->get('isAdmin') == 1)
        {           
            return $this->redirect($this->generateUrl('admin_home'));
        }
        else if($session->get('isAdmin') == 0)
        {
            return $this->redirect($this->generateUrl('pnc_management_userhome'));
        }
        //-------------------------*/
        
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('AcmeDemoBundle:User');

        if ($request->getMethod() == 'POST') 
        {
            $session->clear();
            $userName = $request->get('userName');
            $password = md5($request->get('password'));
            //var_dump($password);die;
            //$remember = $request->get('remember');
            
            $user = $repository->findOneBy(array('userName' => $userName, 'password' => $password));
            if ($user) 
            {
                //if ($remember == 'remember-me') {
                $login = new Login();
                $isAdmin =  1;//$user->getIsAdmin();
                $userid = $user->getId();
                $username = $user->getUserName();
                $login->setUserName($userName);
                $login->setPassword($password);
                $login->setUserId($userid);

                $session->set('login', $login);
                $session->set('isAdmin', $isAdmin);
                $session->set('userid', $userid); 
                $session->set('username', $username);
                //}
                if($isAdmin)
                    return $this->redirect($this->generateUrl('admin_home'));
                else
                    return $this->redirect($this->generateUrl('pnc_management_userhome'));
            } 
            else 
            {//-login fail
                $isLoginSuccess = 'fail';
                return $this->render('AcmeDemoBundle:User:loginmana.html.twig', array('name' => '','isLoginSuccess' => $isLoginSuccess));
            }
        }
        else 
        {
            if ($session->has('login')) 
            {
                $login = $session->get('login');
                $userName = $login->getUsername();
                
                    return $this->render('AcmeDemoBundle:User:loginmana.html.twig', array('name' => $userName,'isLoginSuccess' => $isLoginSuccess));
                
            }
            return $this->render('AcmeDemoBundle:User:loginmana.html.twig', array('name' => '','isLoginSuccess' => $isLoginSuccess));
        }
    }
    
    
    
    public function manalogoutAction() 
    {
        $session = $this->getRequest()->getSession();
        $session->clear();
        //$session->set('isAdmin', '-1');
        //return $this->redirect($this->generateUrl('pnc_management_logout'));
        return $this->render('AcmeDemoBundle:User:loginmana.html.twig', array('name' => '','isLoginSuccess' => ''));
    }

    public function showGalleryAction()
    {
        $filenames = array();
        $filePaths = array();
        $imgId = array();
        $picnames = array();

       $session = $this->getRequest()->getSession();
       if (!($session->has('userid'))) 
            {
                                
                     return new RedirectResponse($this->generateUrl('pnc_management_homepage'));
                
            }
        if ($session->has('login')) 
        {
            $login = $session->get('login');
            $userId = $login->getUserId();
            //var_dump($userId); exit;               
        }
        
        $repository = $this->getDoctrine()->getRepository('AcmeDemoBundle:File');
        $products = $repository->findByUser($userId);
        $numImage = count($products);
        
        $id = $userId;

        if($numImage == 0)
        {
            return $this->render('AcmeDemoBundle:User:emptygallery.html.twig');
        }
        
        $em = $this->getDoctrine()->getManager();
        //$document_class = $this->container->getParameter('file_class');
        
        //$basePath = __DIR__. '/../../../../web/' . 'uploads/documents';
        $basePath ='/media';
        for ($i = 0; $i < $numImage; $i++) {
            $filenames[$i] = $products[$i]->getPath();
            $filePaths[$i] = $basePath.'/'.$filenames[$i];
            $imgId[$i] = $products[$i]->getId();
            $picnames[$i] = $products[$i]->getName();
        }
          
        return $this->render('AcmeDemoBundle:User:gallery.html.twig', array(
                    'picnames' => $picnames,
                    'filePaths' => $filePaths, 
                    'numImage' => $numImage,
                    'imgId'    => $imgId,
                    'id'       => $id,
                    ));
    }

    public function showProfileAction()
    {
       $session = $this->getRequest()->getSession();
       if (!($session->has('userid'))) 
            {
                                
                     return new RedirectResponse($this->generateUrl('pnc_management_homepage'));
                
            }
            
       
        $id = $session->get('userid');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AcmeDemoBundle:User')->find($id);
        
        if (!$entity) 
        {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeDemoBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function changePwdAction()
    {
        $session = $this->getRequest()->getSession();
        $id = $session->get('userid');

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('AcmeDemoBundle:User')->find($id);
        
        if (!$entity) 
        {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeDemoBundle:User:changepwd.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function adminIndexAction()
    {
        return $this->redirect($this->generateUrl('pnc_management_userprofile'));
        /*
        $session = $this->getRequest()->getSession();
        
        if($session->get('isAdmin') == -1 || $session->get('isAdmin') == 0 )
        {
            return $this->render('AcmeDemoBundle:User:error.html.twig');
        }

        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeDemoBundle:User')->findAll();

        return $this->render('AcmeDemoBundle:User:index.html.twig', array(
            'entities' => $entities,
        ));
        */
    }

    public function changepasswordAction(Request $request, $id) 
    {        
        $msg = "";
        $errorSame = "";
        $errorLength = "";
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDemoBundle:User')->find($id);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }
                      
        $password = $request->get('password');
        $confirm = $request->get('confirm');

        if ($password == $confirm) 
        {
            if (strlen($password) > '5' ) 
            {
                
                $msg = "*** Your password has been changed successfully ! ***";
                $entity->setPassword(md5($password));
                $em = $this->getDoctrine() ->getManager();
                
                $em->persist($entity);
                $em->flush();
            } 
            else 
            {
                $errorLength = 'Password must be longer than 5 character.';
            }
            
        } 
        else 
        {
            $errorSame = 'The password fields must match.';
        }
        
        
        //--------------
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeDemoBundle:User')->find($id);
        $password = $entity->getPassword();
        $entities = $em->getRepository('AcmeDemoBundle:User')->findAll();
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }    
        
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeDemoBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'password'    => $password,
            'entities'    => $entities,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'errorLength' => $errorLength,
            'errorSame' => $errorSame,
            'msg'       => $msg,
        ));
        //--------------
    }

    public function manageGalleryAction(Request $request, $id)
    {
    
       $session = $this->getRequest()->getSession();
           if (!($session->has('userid'))) 
            {
                                
                     return new RedirectResponse($this->generateUrl('pnc_management_homepage'));
                
            }
        $filenames = array();
        $filePaths = array();
        $imgId = array();
        $picnames = array();
        
        $repository = $this->getDoctrine()->getRepository('AcmeDemoBundle:File');
        $products = $repository->findByUser($id);
        $numImage = count($products);

        if($numImage == 0)
        {
            return $this->render('AcmeDemoBundle:User:emptygallery.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        //$document_class = $this->container->getParameter('file_class');
        
        //$basePath = __DIR__. '/../../../../web/' . 'uploads/documents';
        $basePath ='/media';
        for ($i = 0; $i < $numImage; $i++) {
            $filenames[$i] = $products[$i]->getPath();
            $filePaths[$i] = $basePath.'/'.$filenames[$i];
            $imgId[$i] = $products[$i]->getId();
            $picnames[$i] = $products[$i]->getName();
        }
          
        return $this->render('AcmeDemoBundle:User:gallery.html.twig', array(
                    'picnames' => $picnames,
                    'filePaths' => $filePaths, 
                    'numImage' => $numImage,
                    'imgId'    => $imgId,
                    'id'       => $id,
                    ));
    }

    public function deleteImgAction($imgid, $id)
    {
        //var_dump($imgid);die;
        
        $em = $this->getDoctrine()->getEntityManager();
        $img = $em->getRepository('AcmeDemoBundle:File')->find($imgid);

        //var_dump($img);die;

        if (!$img) {
            throw $this->createNotFoundException('No image found for id '.$imgid);
        }

        $em->remove($img);
        $em->flush();


        $session = $this->getRequest()->getSession();
        if ($session->has('login')) 
        {
            $login = $session->get('login');
            $userId = $login->getUserId();
            //var_dump($userId); exit;               
        }

        //var_dump($userId); exit;

        if($id == $userId)
        {
            return $this->redirect($this->generateUrl('pnc_management_usergallery'));
        }
        else
        {
            return $this->redirect($this->generateUrl('admin_manageGallery', array('id' => $id)));
        }
        //return $this->render('AcmeDemoBundle:User:error.html.twig');
    }


    public function renameImgAction(Request $request, $imgid, $id)
    {
        //var_dump($imgid);die;
        echo $imgid;
        $em = $this->getDoctrine()->getEntityManager();
        $img = $em->getRepository('AcmeDemoBundle:File')->find($imgid);
		var_dump($img); die;
        //$img->setName('eminem2');
        //var_dump($img->getName());die;

        $newname = $request->get('newname');
        $img->setName($newname);

        if (!$img) {
            throw $this->createNotFoundException('No image found for id '.$imgid);
        }

        $em->persist($img);
        $em->flush();

        $session = $this->getRequest()->getSession();
        if ($session->has('login')) 
        {
            $login = $session->get('login');
            $userId = $login->getUserId();
            //var_dump($userId); exit;               
        }

        //var_dump($userId); exit;

        if($id == $userId)
        {
            return $this->redirect($this->generateUrl('pnc_management_usergallery'));
        }
        else
        {
            return $this->redirect($this->generateUrl('admin_manageGallery', array('id' => $id)));
        }
        //return $this->render('AcmeDemoBundle:User:error.html.twig');
    }

    public function renameImageAction()
    {  //var_dump('test'); die;
        $nameImage = $_POST['nameImage'];
        $imgid = $_POST['imgId'];
        $id = $_POST['id'];

        $em = $this->getDoctrine()->getEntityManager();
        $img = $em->getRepository('AcmeDemoBundle:File')->find($imgid);
        
        //$img->setName('eminem2');
        //var_dump($img->getName());die;

        
        $img->setName($nameImage);

        if (!$img) {
            throw $this->createNotFoundException('No image found for id '.$imgid);
        }

        $em->persist($img);
        $em->flush();

        $session = $this->getRequest()->getSession();
        if ($session->has('login')) 
        {
            $login = $session->get('login');
            $userId = $login->getUserId();
            //var_dump($userId); exit;               
        }

        //var_dump($userId); exit;
        

        $filenames = array();
        $filePaths = array();
        $imgId = array();
        $picnames = array();
        
        $repository = $this->getDoctrine()->getRepository('AcmeDemoBundle:File');
        $products = $repository->findByUser($id);
        $numImage = count($products);

        if($numImage == 0)
        {
            return $this->render('AcmeDemoBundle:User:emptygallery.html.twig');
        }

        $em = $this->getDoctrine()->getManager();
        //$document_class = $this->container->getParameter('file_class');
        
        //$basePath = __DIR__. '/../../../../web/' . 'uploads/documents';
        $basePath ='/media';
        for ($i = 0; $i < $numImage; $i++) {
            $filenames[$i] = $products[$i]->getPath();
            $filePaths[$i] = $basePath.'/'.$filenames[$i];
            $imgId[$i] = $products[$i]->getId();
            $picnames[$i] = $products[$i]->getName();
        }
        
             return $this->render('AcmeDemoBundle:User:showImage.html.twig', array('picnames' => $picnames,
                    'filePaths' => $filePaths, 
                    'numImage' => $numImage,
                    'imgId'    => $imgId,
                    'id'       => $id,));
        
  
    }

      public function deleteImageAction()
    {  //var_dump('test'); die;
        $imgid = $_POST['imgId'];
        $id = $_POST['id'];


        
        $em = $this->getDoctrine()->getEntityManager();
        $img = $em->getRepository('AcmeDemoBundle:File')->find($imgid);

        //var_dump($img);die;

        if (!$img) {
            throw $this->createNotFoundException('No image found for id '.$imgid);
        }

        $em->remove($img);
        $em->flush();
        $session = $this->getRequest()->getSession();
        if ($session->has('login')) 
        {
            $login = $session->get('login');
            $userId = $login->getUserId();
            //var_dump($userId); exit;               
        }

        //var_dump($userId); exit;
        

        $filenames = array();
        $filePaths = array();
        $imgId = array();
        $picnames = array();
        
        $repository = $this->getDoctrine()->getRepository('AcmeDemoBundle:File');
        $products = $repository->findByUser($id);
        $numImage = count($products);

        if($numImage == 0)
        {
           return $this->render('AcmeDemoBundle:User:showImage.html.twig', array('picnames' => '',
                    'filePaths' => '', 
                    'numImage' => '0',
                    'imgId'    => '',
                    'id'       => $id,));
        }
       
        
        //$document_class = $this->container->getParameter('file_class');
        
        //$basePath = __DIR__. '/../../../../web/' . 'uploads/documents';
        $basePath ='/media';
        for ($i = 0; $i < $numImage; $i++) {
            $filenames[$i] = $products[$i]->getPath();
            $filePaths[$i] = $basePath.'/'.$filenames[$i];
            $imgId[$i] = $products[$i]->getId();
            $picnames[$i] = $products[$i]->getName();
        }
        
             return $this->render('AcmeDemoBundle:User:showImage.html.twig', array('picnames' => $picnames,
                    'filePaths' => $filePaths, 
                    'numImage' => $numImage,
                    'imgId'    => $imgId,
                    'id'       => $id,));
        
  
    }

    public function sendImageAction()
    {  //var_dump('test'); die;
        $imgid = $_POST['imgId'];
        $email = $_POST['email'];
        //$filePath = $_POST['filePath'];
        $em = $this->getDoctrine()->getEntityManager();
        $img = $em->getRepository('AcmeDemoBundle:File')->find($imgid);
        $filePath = $img->getPath();

        $site_name = $this->container->getParameter('site_name');
        $site_email = $this->container->getParameter('site_email');

        $pathFile = 'media/'.$filePath.'.jpeg';
        //var_dump( $pathFile); die;
        //substr($pathFile,1);
        //$container = new LoggableGenerator();
        
      $mpdfService = $this->get('tfox.mpdfport');
	  
        //$html = "<html><body><script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script><script>console.log('here');</script><object data='hao.pdf' type='application/pdf' width='100%' height='100%'></object><img src=$pathFile> </img></body></html>";
		$html = "<html><body><script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script><script>console.log('here');</script>toi ngan nam doi <object data='http://joliclic.free.fr/html/object-tag/en/data/test.pdf' type='application/pdf' width='100%' height='100%'></object></body></html>";
        $response = $mpdfService->generatePdfResponse($html);
         
        //var_dump(substr($pathFile,1)); die;
        $attachment = \Swift_Attachment::newInstance($response, 'my-file.pdf', 'application/pdf');
        //$attachment = \Swift_Attachment::fromPath(substr($pathFile,1));
        
        $message = \Swift_Message::newInstance()
                ->setSubject('Image ')
                ->setFrom($site_email, $site_name)
                ->setTo( $email)
                ->setBody(
                $this->renderView('AcmeDemoBundle:User:mail/sendImage.html.twig', array(
                    'site_name' => $site_name,
                    'name' => 'tui',
                    
                ))
        )
                ->attach($attachment);
        $this->get('mailer')->send($message);

        return new Response('Hello world!');
  
    }
}
    