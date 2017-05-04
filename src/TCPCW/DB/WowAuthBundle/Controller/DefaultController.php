<?php

namespace TCPCW\DB\WowAuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TCPCWDBWowAuthBundle:Default:index.html.twig');
    }
}
