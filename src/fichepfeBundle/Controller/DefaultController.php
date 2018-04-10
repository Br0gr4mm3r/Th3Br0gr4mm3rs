<?php

namespace fichepfeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('fichepfeBundle:Default:index.html.twig');
    }
}
