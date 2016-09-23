<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 22.9.2016
 * Time: 16:15
 */

namespace Salonlar\SalonBundle\Controller;

use Salonlar\SalonBundle\Entity\customer;
use Salonlar\SalonBundle\Form\customerType;
use Salonlar\SalonBundle\Repository\CustomerRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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

    public function addAction(Request $request){

        $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        /**@var CustomerRepository $repo*/
        $repo = $em->getRepository('SalonBundle:customer');

        $form = $repo->newPerson();
        $formBuild = $this->createForm('Salonlar\SalonBundle\Form\customerType', $form);
        $formBuild->handleRequest($request);
        if($formBuild->isSubmitted() && $formBuild->isValid()){
            //kaydetme
            $em->persist($form);
            $em->flush();
            $this->addFlash('success','İşlem başarıyla gerçekleştirildi');
        }
        return [
            'form' => $formBuild->createView()
        ];
    }

    /**
     * @return array
     * @Template ("SalonBundle:Default:listing.html.twig")
     * @Route("/customer/listing",name="customer_listing")
     */
    public function showAction(){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository("SalonBundle:customer");
        $items = $repo->findAll();
        return ['items'=>$items];
    }
}