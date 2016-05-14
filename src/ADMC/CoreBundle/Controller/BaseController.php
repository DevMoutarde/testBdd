<?php

namespace ADMC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ADMC\CoreBundle\Entity\User;
use \Symfony\Component\Form\Extension\Core\Type\TextType;
use \Symfony\Component\Form\Extension\Core\Type\SubmitType;
use \Symfony\Component\HttpFoundation\Request;

class BaseController extends Controller
{
    
    public function indexAction(){
        
        $url = $this->generateUrl('admc_core_add');
        
        $manager = $this->getDoctrine()
                ->getManager()
                ->getRepository('ADMCCoreBundle:User');
        
        $users = $manager->findAll();
        
        
        
        
        
        return $this->render('ADMCCoreBundle:Base:index.html.twig', array(
            'url' => $url,
            'users' => $users
        ));
    }
    
    
    public function addAction(Request $request){
        
        
        $user = new User();
        
        $form =  $this->get('form.factory')->createBuilder('form', $user)
                ->add('nom', TextType::class)
                ->add('prenom', TextType::class)
                ->add('Enregistrer' , SubmitType::class)
                ->getForm();
        
        $form->handleRequest($request);
        
        if ($form->isValid()){
            
            $manager = $this->getDoctrine()->getManager();
            
            $manager->persist($user);
            $manager->flush();
            
            return $this->redirect($this->generateUrl('admc_core_view', array(
                'id' => $user->getId()
            )));
            
        }
        
        
        
        
        
        
        return $this->render('ADMCCoreBundle:Base:add.html.twig', array(
            'form' => $form->createView()
        ));
        
    }
    
    public function viewAction($id){
        
        $manager = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('ADMCCoreBundle:User');
        
        $user = $manager->find($id);
        
        return $this->render('ADMCCoreBundle:Base:view.html.twig', array(
            'user' => $user
        ));
        
    }
    
}
