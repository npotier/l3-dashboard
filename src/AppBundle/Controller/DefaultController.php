<?php

// github.com/npotier/l3-dashboard


namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Fiche;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $entityManager = $this->container->get('doctrine.orm.entity_manager');
        $fiche = $entityManager->getRepository('AppBundle:Fiche')->findAll();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @route("/hello/{name}", name="hello")
     */
    public function helloAction(Request $request, $name)
    {
        //dump($request);
        //die();
        return $this->render('default/hello.html.twig', [
            'name' => $name
        ]);
    }

    /**
     * @route("/dashboard")
     * @param Request $request
     */
    public function dashboardAction(Request $request)
    {
        $entityManager = $this->container->get('doctrine.orm.entity_manager');
        $fiches = $entityManager->getRepository('AppBundle:Fiche')->findAll();
        $managers = $entityManager->getRepository('AppBundle:Manager')->findAll();
        $projets = $entityManager->getRepository('AppBundle:Projet')->findAll();

        return $this->render('default/dashboard.html.twig', [
            'fiches' => $fiches,
            'managers' => $managers,
            'projets' => $projets
        ]);
    }

    public function registerAction(UserPasswordEncoderInterface $encoder)
    {
        // whatever *your* User object is
        $user = new User();
        $plainPassword = 'ryanpass';
        $encoded = $encoder->encodePassword($user, $plainPassword);

        $user->setPassword($encoded);
    }
}
