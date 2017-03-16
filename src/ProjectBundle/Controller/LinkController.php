<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Link;
use ProjectBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Link controller.
 *
 * @Route("link")
 */
class LinkController extends Controller
{
    /**
     * Lists all Link entities.
     *
     * @Route("/", name="link_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $links = $em->getRepository('ProjectBundle:Link')->findAll();

        return $this->render('link/list.html.twig', array(
            'links' => $links,
        ));
    }

    /**
     * Lists all Link entities for one project.
     *
     * @Route("/list/{id}", name="link_list")
     * @Method("GET")
     */
    public function listAction(Project $proj)
    {
        $em = $this->getDoctrine()->getManager();
        $links = $em->getRepository('ProjectBundle:Link')->findBy(
            array('project' => $proj->getId()), // Critere
            array('id' => 'desc'),        // Tri
            $limit  = null,                 // Limite
            $offset = null                 // Offset
        );

        return $this->render('link/list.html.twig', array(
            'links' => $links,
        ));
    }

    /**
     * Creates a new link entity for one project.
     *
     * @Route("/new/{id}", name="link_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,Project $proj)
    {
        $link = new Link();
        $link ->setProject($proj);
        $form = $this->createForm('ProjectBundle\Form\LinkType', $link);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($link);
            $em->flush($link);

            return $this->redirectToRoute('link_show', array('id' => $link->getId()));
        }

        return $this->render('link/new.html.twig', array(
            'link' => $link,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a link entity.
     *
     * @Route("/{id}", name="link_show")
     * @Method("GET")
     */
    public function showAction(Link $link)
    {
        $deleteForm = $this->createDeleteForm($link);

        return $this->render('link/show.html.twig', array(
            'link' => $link,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing link entity.
     *
     * @Route("/{id}/edit", name="link_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Link $link)
    {
        $deleteForm = $this->createDeleteForm($link);
        $editForm = $this->createForm('ProjectBundle\Form\linkType', $link);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('link_edit', array('id' => $link->getId()));
        }

        return $this->render('link/edit.html.twig', array(
            'link' => $link,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a link entity.
     *
     * @Route("/{id}", name="link_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Link $link)
    {
        $form = $this->createDeleteForm($link);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($link);
            $em->flush($link);
        }

        return $this->redirectToRoute('link_index');
    }

    /**
     * Creates a form to delete a link entity.
     *
     * @param link $link The link entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Link $link)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('link_delete', array('id' => $link->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
