<?php

namespace Salonlar\SalonBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Template
     * @param Request $request
     * @Route("/salon/write",name="salon_write")
     * @return Response
     */
    public function writeAction(Request $request){
        $name = $request->request->get('name');
        $lastname = $request->request->get('lastname');

        return['name' => $name, 'lastname' => $lastname];
    }
}
