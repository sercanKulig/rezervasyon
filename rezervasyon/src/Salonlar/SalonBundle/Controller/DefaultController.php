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
        if($request->isMethod('post')){
            $title = $request->get('title');
            $content = $request->get('content');

            $salon1 = new Salon1();
            $salon1->setTitle($title)
                ->setContent($content);

            //kaydetme
            $en = $this->getDoctrine()->getManager();

            $en->persist($salon1);
            $en->flush();
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

    /**
     * @param $id
     * @Route("/salon/delete/(salon1)", requirement("salon1";"id+"), name=" salon_delete")
     * @Template
     */
    public function deleteAction(Salon1 $salon1){
        $en = $this->getDoctrine()->getManager();
        $en->remove($salon1);

        //mesaj gönerme
        $session = $this->get('session');
        $flashbag = $session->getFlashBag();
        $flashbag->add("success","İçerik başarıyla silindi");
        $session->save();
        return RedirectResponse::create("/salon/list");
    }
}
