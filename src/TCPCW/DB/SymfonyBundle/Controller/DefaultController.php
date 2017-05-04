<?php

namespace TCPCW\DB\SymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TCPCWDBSymfonyBundle:Default:index.html.twig');
    }
}
