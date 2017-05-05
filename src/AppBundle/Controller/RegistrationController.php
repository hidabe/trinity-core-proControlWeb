<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Response;
use TCPCW\DB\WowAuthBundle\Services\AccountHelper;

class RegistrationController extends BaseController
{
    public function registerAction(Request $request)
    {
        /** @var Response $result */
        $result = parent::registerAction($request);
        if ($request->getMethod() == Request::METHOD_POST && $result->getStatusCode() == Response::HTTP_FOUND) {
            /** @var AccountHelper $accountHelper */
            $accountHelper = $this->get('tcpcwdb_wow_auth.account');
            $formUser = $request->get('fos_user_registration_form');
            $username = $formUser['username'];
            $password = $formUser['plainPassword']['first'];

            $accountHelper->createAccount($username, $password);
        }
        return $result;
    }
}
