<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 23.9.2016
 * Time: 21:47
 */

namespace Salonlar\SalonBundle\Controller;

use Salonlar\SalonBundle\Entity\sinasi;
use Salonlar\SalonBundle\Entity\sinasi_A;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

class SahneController extends Controller
{
    /**
     * @Route ("sahneler/akun", name="akun")
     */
    public function akunAction(Request $request)
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
     * @Template ("SalonBundle:sahneler:sinasi.html.twig")
     * @param Request $request
     * @return Response
     */
    public function sinasiAction(Request $request)
    {
        if($request->isMethod('Post'))
        {
            $A1 = $request->get('a1');
            $A2 = $request->get('a2');
            $A3 = $request->get('a3');
            $A4 = $request->get('a4');
            $A5 = $request->get('a5');
            $A6 = $request->get('a6');
            $A7 = $request->get('a7');
            $A8 = $request->get('a8');
            $A9 = $request->get('a9');
            $A10 = $request->get('a10');
            $A11 = $request->get('a11');
            $A12 = $request->get('a12');
            $A13 = $request->get('a13');
            $A14 = $request->get('a14');
            $A15 = $request->get('a15');
            $A16 = $request->get('a16');
            $A17 = $request->get('a17');
            $A18 = $request->get('a18');
            $A19 = $request->get('a19');
            $A20 = $request->get('a20');
            $A21 = $request->get('a21');
            $sinasi_A = new sinasi_A();
            $sinasi_A ->setA1($A1)
                    ->setA2($A2)
                    ->setA3($A3)
                    ->setA4($A4)
                    ->setA5($A5)
                    ->setA6($A6)
                    ->setA7($A7)
                    ->setA8($A8)
                    ->setA9($A9)
                    ->setA10($A10)
                    ->setA11($A11)
                    ->setA12($A12)
                    ->setA13($A13)
                    ->setA14($A14)
                    ->setA15($A15)
                    ->setA16($A16)
                    ->setA17($A17)
                    ->setA18($A18)
                    ->setA19($A19)
                    ->setA20($A20)
                    ->setA21($A21);
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($sinasi_A);
            $em->flush();
            return ["message" => 'başarışı'];
        }
        return [];
    }

    /**
     * @Route("sahneler/oda", name="oda")
     */
    public function odaAction()
    {
        return $this->render('@Salon/sahneler/oda.html.twig');
    }
}