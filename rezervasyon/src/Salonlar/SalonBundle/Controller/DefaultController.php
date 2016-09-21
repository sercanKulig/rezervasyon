<?php

namespace Salonlar\SalonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/salon/kayit",name="salon_kayit")
     * @Template
     */
    public function kayitAction(){
        $response = new Response();
        $response->setContent("");
        return $response;
    }
}
