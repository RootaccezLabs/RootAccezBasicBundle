<?php

namespace RootAccez\BasicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RootAccezBasicBundle:Default:index.html.twig', array('name' => $name));
    }
}
