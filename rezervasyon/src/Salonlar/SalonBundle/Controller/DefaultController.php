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
     * @Template
     * @param Request $request
     * @Route("/salon/write",name="salon_write")
     * @return Response
     */
    public function writeAction(Request $request){
        $request = $this->get('request_stack')->getCurrentRequest();
        if($request->isMethod('post')){
            $title = $request->get('title');
            $content = $request->get('content');

            $salon1 = new Salon1();
            $salon1->setTitle($title)
                ->setContent($content);

            //kaydetme
            $em = $this->getDoctrine()->getManager();
            $em->persist($salon1);
            $em->flush();
            return["message" => "başarılı"];
        }
        return [];
    }

    /**
     * @return array
     * @Route("/salon/list",name="salon_list")
     * @Template
     */
    public function listAction(){
        $en = $this->getDoctrine()->getManager();
        $repo = $en->getRepository("SalonBundle:Salon1");
        $items = $repo->findAll();
        return ['items' => $items];
    }
}
