<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Lexicom;
use ProjectBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Lexicon controller.
 *
 * @Route("lexicom")
 */
class LexicomController extends Controller
{
    /**
     * Lists all lexicom entities.
     *
     * @Route("/", name="lexicom_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $lexicoms = $em->getRepository('ProjectBundle:Lexicom')->findAll();

        return $this->render('lexicom/list.html.twig', array(
            'lexicoms' => $lexicoms,
        ));
    }
    /**
     * Lists all lexicon entities for a project.
     *
     * @Route("/list/{id}", name="lexicom_list")
     * @Method("GET")
     */
    public function listAction(Project $proj)
    {
        $em = $this->getDoctrine()->getManager();
        $lexicoms = $em->getRepository('ProjectBundle:Lexicom')->findBy(
            array('project' => $proj->getId()), // Critere
            array('mot' => 'desc'),        // Tri
            $limit  = null,                 // Limite
            $offset = null                 // Offset
        );

        return $this->render('lexicom/list.html.twig', array(
            'lexicoms' => $lexicoms,
        ));
    }

    /**
     * Creates a new lexicom entity for a project.
     *
     * @Route("/new/{id}", name="lexicom_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,Project $proj)
    {
        $lexicom = new Lexicom();
        $lexicom ->setProject($proj);
        $form = $this->createForm('ProjectBundle\Form\LexicomType', $lexicom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($lexicom);
            $em->flush($lexicom);

            return $this->redirectToRoute('lexicom_show', array('id' => $lexicom->getId()));
        }

        return $this->render('lexicom/new.html.twig', array(
            'lexicom' => $lexicom,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a lexicom entity.
     *
     * @Route("/{id}", name="lexicom_show")
     * @Method("GET")
     */
    public function showAction(Lexicom $lexicom)
    {
        $deleteForm = $this->createDeleteForm($lexicom);

        return $this->render('lexicom/show.html.twig', array(
            'lexicom' => $lexicom,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing lexicom entity.
     *
     * @Route("/{id}/edit", name="lexicom_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Lexicom $lexicom)
    {
        $deleteForm = $this->createDeleteForm($lexicom);
        $editForm = $this->createForm('ProjectBundle\Form\LexicomType', $lexicom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('lexicom_edit', array('id' => $lexicom->getId()));
        }

        return $this->render('lexicom/edit.html.twig', array(
            'lexicom' => $lexicom,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a lexicom entity.
     *
     * @Route("/{id}", name="lexicom_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Lexicom $lexicom)
    {
        $form = $this->createDeleteForm($lexicom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($lexicom);
            $em->flush($lexicom);
        }

        return $this->redirectToRoute('lexicom_index');
    }

    /**
     * Creates a form to delete a lexicom entity.
     *
     * @param Lexicom $lexicom The lexicom entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Lexicom $lexicom)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lexicom_delete', array('id' => $lexicom->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
