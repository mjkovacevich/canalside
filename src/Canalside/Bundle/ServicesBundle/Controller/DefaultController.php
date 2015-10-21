<?php
// src/Canalside/Bundle/ServicesBundle/Controller/DefaultController.php

namespace Canalside\Bundle\ServicesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CanalsideServicesBundle:Default:index.html.twig');
    }
}