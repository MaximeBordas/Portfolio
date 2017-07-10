<?php

namespace PortefolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PortefolioBundle:Default:index.html.twig');
    }
}
