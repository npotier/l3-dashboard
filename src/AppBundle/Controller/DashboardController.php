<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Dashboard;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class DashboardController
 * @Route ("dashboard")
 */


class DashboardController extends Controller
{
    /**
     * @Route("/", name="dashboard_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $fiches = $em->getRepository('AppBundle:Fiche')->findAll();
        $projets = $em->getRepository('AppBundle:Projet')->findAll();
        $managers = $em->getRepository('AppBundle:Manager')->findAll();

        return $this->render('dashboard/index.html.twig', array(
            'fiches' => $fiches,
            'projets' => $projets,
            'managers' => $managers
        ));
    }
}
