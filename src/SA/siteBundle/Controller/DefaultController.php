<?php

namespace SA\siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SAsiteBundle:Default:index.html.twig', array('name' => $name));
    }
}
