<?php

namespace home\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/Accueil")
     * @Template()
     */
    public function indexAction()
    {
        return array('intro' => "Bonjour, voici les videos ludiques");
    }

    /**
     * @Route("/LoginRedirect")
     * @Template()
     */
    public function loginAction()
    {
        return $this->render("loginBundle:Default:index.html.twig");
    }


}
