<?php

namespace Camille\PlatformBundle\Controller;

use Camille\PlatformBundle\Entity\Fiche1;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Fiche1 controller.
 *
 */
class Fiche1Controller extends Controller
{
    /**
     * Lists all fiche1 entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fiche1s = $em->getRepository('CamillePlatformBundle:Fiche1')->findAll();

        return $this->render('fiche1/index.html.twig', array(
            'fiche1s' => $fiche1s,
        ));
    }

    /**
     * Creates a new fiche1 entity.
     *
     */
    public function newAction(Request $request)
    {
        $fiche1 = new Fiche1();
        $form = $this->createForm('Camille\PlatformBundle\Form\Fiche1Type', $fiche1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fiche1);
            $em->flush();

            return $this->redirectToRoute('fiche1_show', array('id' => $fiche1->getId()));
        }

        return $this->render('fiche1/new.html.twig', array(
            'fiche1' => $fiche1,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fiche1 entity.
     *
     */
    public function showAction(Fiche1 $fiche1)
    {
        $deleteForm = $this->createDeleteForm($fiche1);

        return $this->render('fiche1/show.html.twig', array(
            'fiche1' => $fiche1,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fiche1 entity.
     *
     */
    public function editAction(Request $request, Fiche1 $fiche1)
    {
        $deleteForm = $this->createDeleteForm($fiche1);
        $editForm = $this->createForm('Camille\PlatformBundle\Form\Fiche1Type', $fiche1);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fiche1_edit', array('id' => $fiche1->getId()));
        }

        return $this->render('fiche1/edit.html.twig', array(
            'fiche1' => $fiche1,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fiche1 entity.
     *
     */
    public function deleteAction(Request $request, Fiche1 $fiche1)
    {
        $form = $this->createDeleteForm($fiche1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fiche1);
            $em->flush();
        }

        return $this->redirectToRoute('fiche1_index');
    }

    /**
     * Creates a form to delete a fiche1 entity.
     *
     * @param Fiche1 $fiche1 The fiche1 entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Fiche1 $fiche1)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fiche1_delete', array('id' => $fiche1->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
