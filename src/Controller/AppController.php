<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="main_route")
     */
    public function index(): Response
    {
        $data = array( 
            array('id'=>1,'category'=>'All','products'=>array( 1,2,3 )),
            array('id'=>1,'category'=>'Sport','products'=>array( 1,2,3,4,5 )));

        dump($data);
        return $this->render('app/home.html.twig', [ 
            'categories'=>$data
        ]);
    }

    /**
     * @Route("/contact", name="contact_route")
     */
    public function contact(): Response
    {
        return $this->render('app/contact.html.twig', [ 
        ]);
    }
}
