<?php

namespace CA\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SessionController extends Controller
{
    public function loginAction()
    {
      $authenticationUtils = $this->get('security.authentication_utils');

      // get the login error if there is one
      $error = $authenticationUtils->getLastAuthenticationError();

      // last username entered by the user
      $lastUsername = $authenticationUtils->getLastUsername();

      if($this->get('session')->get('_security_main'))
         return new RedirectResponse($this->generateUrl('ca_blog_homepage'));

      return $this->render('CABlogBundle:Session:login.html.twig', array(
          'last_username' => $lastUsername,
          'error'         => $error,
      ));
    }
}
