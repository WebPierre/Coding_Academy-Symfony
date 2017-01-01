<?php

namespace CA\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('CABlogBundle:Blog:index.html.twig', array(
            // ...
        ));
    }

}
