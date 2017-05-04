<?php

namespace TCPCW\DB\WowCharactersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TCPCWDBWowCharactersBundle:Default:index.html.twig');
    }
}
