<?php

namespace ProjectBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;


class DefaultController extends Controller
{
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
     {
         $user = $this->get('security.token_storage')->getToken()->getUser();
         return $this->redirectToRoute('project_list', array("id"=>$user->getId()));
     }
}
