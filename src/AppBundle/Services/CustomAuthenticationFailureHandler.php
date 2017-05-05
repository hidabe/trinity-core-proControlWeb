<?php
namespace AppBundle\Services;

use Symfony\Bundle\FrameworkBundle\Routing\Router;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface;
use Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler as CoreCustom;
use Symfony\Component\Security\Http\Authentication\SimplePreAuthenticatorInterface;
use TCPCW\DB\WowAuthBundle\Services\AccountHelper;

/**
 * Class CustomAuthenticationFailureHandler
 */
class CustomAuthenticationFailureHandler implements AuthenticationFailureHandlerInterface
{
    private $accountHelper;
    private $userHelper;
    private $router;
    private $securityContext;

    public function __construct(AccountHelper $accountHelper, UserHelper $userHelper, Router $router, $securityContext)
    {
        $this->accountHelper = $accountHelper;
        $this->userHelper = $userHelper;
        $this->router = $router;
        $this->securityContext = $securityContext;
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {
        $username = $request->get('_username');
        $password = $request->get('_password');

        $account = $this->accountHelper->checkAccount($username, $password);
        if ($account == null) {
            die("No existe");
        } else {
            // Creamos o actualizamos el usuario
            $userSymfony = $this->userHelper->createOrUpdateUser($username, $password);
            // Logueamos con el usuario
            $token = new UsernamePasswordToken($userSymfony, null, "main", $userSymfony->getRoles());
            $this->securityContext->setToken($token); //now the user is logged in
            // Redireccionamos // TODO: Al panel
            $loginRoute = $this->router->generate('fos_user_security_login');
            return new RedirectResponse($loginRoute);
        }
    }
}