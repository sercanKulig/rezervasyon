<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 23.9.2016
 * Time: 21:47
 */

namespace Salonlar\SalonBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SahneController extends Controller
{
    /**
     * @Route("sahneler/akun", name="akun")
     */
    public function akunAction()
    {
        return $this->render('@Salon/sahneler/akun.html.twig');
    }

    /**
     * @Route("sahneler/cuneytgokcer", name="cuneytgokcer")
     */
    public function cuneyitgokcerAction()
    {
        return $this->render('@Salon/sahneler/cuneyitgokcer.html.twig');
    }

    /**
     * @Route("sahneler/sinasi", name="sinasi")
     */
    public function sinasiAction()
    {
        return $this->render('@Salon/sahneler/sinasi.html.twig');
    }

    /**
     * @Route("sahneler/oda", name="oda")
     */
    public function odaAction()
    {
        return $this->render('@Salon/sahneler/oda.html.twig');
    }
}