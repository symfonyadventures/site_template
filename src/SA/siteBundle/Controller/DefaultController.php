<?php

namespace SA\siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->getUser();
        return $this->render('SAsiteBundle:Default:index.html.twig', array('name' => $user->getUsername()));
    }

    public function getuserAction($id){

        $user = $this->getUser();

        $response = new Response();
        $response->setContent(json_encode(array(
            'status' => 'ok',
            'user'   => array('name'=>$user->getUsername(),'id'=>$user->getId())
        )));

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
