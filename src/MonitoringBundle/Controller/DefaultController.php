<?php

namespace MonitoringBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/monitoring", name="monitoring")
     */
    public function indexAction()
    {
        return $this->render('MonitoringBundle:Default:index.html.twig');
    }

    
}
