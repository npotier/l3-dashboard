<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $entityManager = $this->container->
        get('doctrine.orm.entity_manager');
        $fiches = $entityManager
        ->getRepository('AppBundle:Fiche')
        ->findAll();


        

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'fiches' => $fiches



        ]);
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboardAction(Request $request)
    {
       
        $em = $this->getDoctrine()->getManager();

        $fiches = $em->getRepository('AppBundle:Fiche')->findAll();
        $managers = $em->getRepository('AppBundle:Manager')->findAll();
        $projets = $em->getRepository('AppBundle:Projet')->findAll();
        // replace this example code with whatever you need
        return $this->render('default/dashboard.html.twig', [
            'fiches' => $fiches,
            'managers' => $managers,
            'projets' => $projets,
        ]);
    }

}
