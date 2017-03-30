<?php

namespace ProjectBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/admin", name="admin_home")
     */
    public function adminAction()
    {
        return $this->render('admin.html.twig');
    }


    /**
 * @Route("/home", name="homepage")
 */
    public function indexAction()
    {
        return $this->render('default/page.html.twig', array(
//            'error' => '',
//            'csrf_token' => 'test',
            "last_username" => $this->getUser()
        ));
    }


    /**
     * @Route("/choix", name="choix")
     */
     public function choix()
     { $user = $this->get('security.token_storage')->getToken()->getUser();

         if ($user->getUsername() == "admin") {
             return $this->redirectToRoute('admin_home');
         }

         else{
         return $this->redirectToRoute('project_list', array("id"=>$user->getId()));
         }
     }
    /**
     * @Route("/add", name="addproject")
     */
    public function addProject()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

        return $this->redirectToRoute('project_new', array("id"=>$user->getId()));
    }
}
