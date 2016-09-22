<?php
/**
 * Created by PhpStorm.
 * User: Sercan
 * Date: 22.9.2016
 * Time: 16:15
 */

namespace Salonlar\SalonBundle\Controller;

use Salonlar\SalonBundle\Entity\customer;
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

        $formBuild = $this->createFormBuilder($form)
            ->setMethod('POST')
            ->setAction('listing')
            ->add('name',TextType::class,[
                'label' =>' ',
                'attr'=>[
                    'class' => 'form-control',
                    'type'=>'text',
                    'placeholder' =>'İsim ve Soyad',
                    'required' => 'required',
                ]
            ])
            ->add('email',TextType::class,[
                'label' =>' ',
                'attr'=>[
                    'class' => 'form-control',
                    'type'=>'email',
                    'placeholder' =>'Email',
                    'required' => 'required',
                ]
            ])
            ->add('phone',TextType::class,[
                'label' =>' ',
                'attr'=>[
                    'class' => 'form-control',
                    'type'=>'number',
                    'placeholder' =>'Telefon',
                    'required' => 'required',
                ]
            ])->add('submit',SubmitType::class,[
                'label' => 'gönder',
                'attr'=>[
                'class' => 'btn btn-default'
            ]
            ])
            ->getForm();
        ;

        $formBuild->handleRequest($request);
        if($formBuild->isSubmitted() && $formBuild->isValid()){
            $name = $request->get('name');
            $email = $request->get('email');
            $phone = $request->get('phone');

            $customer = new customer();
            $customer->setName($name)
                ->setEmail($email)
                ->setPhone($phone);

            //kaydetme
            $em->persist($customer);
            $em->flush();
            return["message" => "başarılı"];
        }
        return [
            'form' => $formBuild->createView()
        ];
    }

    public function showAction(){
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository("SalonBundle:customer");
        $items = $repo->findAll();
        return ['items'=>$items];
    }
}