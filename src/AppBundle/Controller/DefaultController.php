<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $entityManager = $this->container->get('doctrine.orm.entity_manager');
        $fiches = $entityManager->getRepository('AppBundle:Fiche')->findAll();
        $managers = $entityManager->getRepository('AppBundle:Manager')->findAll();
        $projets = $entityManager->getRepository('AppBundle:Projet')->findAll();
        //$deleteForm = $this->createDeleteForm($fiche);
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
            'fiches' => $fiches,
            'managers' => $managers,
            'projets' => $projets,
            //'delete_form' => $deleteForm->createView(),
        ]);
    }

    /**
     * @Route("/hello/{name}", name="helloworld")
     */
    public function helloAction(Request $request, $name)
    {
        // replace this example code with whatever you need
        return $this->render('helloworld.html.twig', [
            'name'=> $name
        ]);
    }
}
