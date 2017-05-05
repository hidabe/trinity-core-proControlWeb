<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use TCPCW\DB\WowAuthBundle\Services\AccountHelper;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        /** @var AccountHelper $accountHelper */
        $accountHelper = $this->get('tcpcwdb_wow_auth.account');

        $accountHelper->createAccount("prueba5", "prueba5");

        return $this->render('default/index.html.twig');
    }
}
