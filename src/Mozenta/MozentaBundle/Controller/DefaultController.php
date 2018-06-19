<?php

namespace Mozenta\MozentaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('Default/home.html.twig');
    }

    /**
     * @Route("/paypal", name="paypal_page")
     */
    public function indexPaypal()
    {
        return $this->render('Default/paypal.php.twig');
    }
}
