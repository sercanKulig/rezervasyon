<?php

namespace Salonlar\SalonBundle\Controller;

use Salonlar\SalonBundle\Entity\Salon1;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{

    /**
     * @Route("index", name="index_action")
     */
    public function indexAction(){
        return $this->render('@Salon/index/index.html.twig');
    }

    /**
     * @Route("oyunlar/hayvanciftligi", name="hayvan_ciftligi")
     */
    public function hayvanciftligiAction(){
        return $this->render('@Salon/oyunlar/hayvanciftligi.html.twig');
    }

    /**
     * @Route("oyunlar/kontrabas", name="kontrabas")
     */
    public function kontrabasAction(){
        return $this->render('@Salon/oyunlar/kontrabas.html.twig');
    }

    /**
     * @Route("oyunlar/sontango", name="sontango")
     */
    public function sontangoAction(){
        return $this->render('@Salon/oyunlar/sontango.html.twig');
    }

    /**
     * @Route("oyunlar/camasirhane", name="camasirhane")
     */
    public function camasirhaneAction(){
        return $this->render('@Salon/oyunlar/camasirhane.html.twig');
    }
}
