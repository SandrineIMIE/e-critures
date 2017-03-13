<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Heros;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Hero controller.
 *
 * @Route("heros")
 */
class HerosController extends Controller
{
    /**
     * Lists all heros entities.
     *
     * @Route("/", name="heros_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $heros = $em->getRepository('ProjectBundle:Heros')->findAll();

        return $this->render('heros/index.html.twig', array(
            'heros' => $heros,
        ));
    }

    /**
     * Creates a new heros entity.
     *
     * @Route("/new", name="heros_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $hero = new Heros();
        $form = $this->createForm('ProjectBundle\Form\HerosType', $hero);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($hero);
            $em->flush($hero);

            return $this->redirectToRoute('heros_show', array('id' => $hero->getId()));
        }

        return $this->render('heros/new.html.twig', array(
            'hero' => $hero,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a hero entity.
     *
     * @Route("/{id}", name="heros_show")
     * @Method("GET")
     */
    public function showAction(Heros $hero)
    {
        $deleteForm = $this->createDeleteForm($hero);

        return $this->render('heros/show.html.twig', array(
            'hero' => $hero,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing hero entity.
     *
     * @Route("/{id}/edit", name="heros_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Heros $hero)
    {
        $deleteForm = $this->createDeleteForm($hero);
        $editForm = $this->createForm('ProjectBundle\Form\HerosType', $hero);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('heros_edit', array('id' => $hero->getId()));
        }

        return $this->render('heros/edit.html.twig', array(
            'hero' => $hero,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a hero entity.
     *
     * @Route("/{id}", name="heros_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Heros $hero)
    {
        $form = $this->createDeleteForm($hero);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($hero);
            $em->flush($hero);
        }

        return $this->redirectToRoute('heros_index');
    }

    /**
     * Creates a form to delete a hero entity.
     *
     * @param Heros $hero The hero entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Heros $hero)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('heros_delete', array('id' => $hero->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
