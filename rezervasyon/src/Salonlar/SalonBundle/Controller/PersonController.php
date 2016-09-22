<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 22.9.2016
 * Time: 16:15
 */

namespace Salonlar\SalonBundle\Controller;

use Salonlar\SalonBundle\Entity\customer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PersonController extends Controller
{
    /**
     * @param Request $request
     * @Route("/customer/register", name="customer_name")
     * @Template ("SalonBundle:Default:register.html.twig")
     * @return Response
     */

    public function showAction(Request $request){
        if($request->isMethod('POST')){
            $name = $request->get('name');
            $email = $request->get('email');
            $phone = $request->get('phone');

            $customer = new customer();
            $customer->setName($name)
                ->setEmail($email)
                ->setPhone($phone);

            //kaydetme
            $em = $this->getDoctrine()->getManager();
            $em->persist($customer);
            $em->flush();
            return["message" => "başarılı"];
        }
        return [];
    }
}