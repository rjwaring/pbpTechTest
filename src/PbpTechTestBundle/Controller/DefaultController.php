<?php

namespace PbpTechTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PbpTechTestBundle:Default:index.html.twig');
    }
}
