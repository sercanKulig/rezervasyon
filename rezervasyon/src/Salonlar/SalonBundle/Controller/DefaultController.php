<?php

namespace Salonlar\SalonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/salon/kayit",name="salon_kayit)
     */
    public function indexAction()
    {
        return $this->render('SalonBundle:Default:index.html.twig');
    }
}
