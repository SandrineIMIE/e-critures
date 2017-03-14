<?php

namespace ProjectBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


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
}
