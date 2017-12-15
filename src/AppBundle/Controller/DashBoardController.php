<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Dashboard controller.
 *
 * @Route("dashboard")
 */

class DashBoardController extends Controller
{
    /**
     * @Route("/index", name="dashboard_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $fiches = $em->getRepository('AppBundle:Fiche')->findAll();
        $managers = $em->getRepository('AppBundle:Manager')->findAll();
        $projects = $em->getRepository('AppBundle:Projet')->findAll();

        return $this->render('dashboard/index.html.twig', array(
            'fiches' => $fiches,
            'managers' => $managers,
            'projects' => $projects
        ));
    }
}