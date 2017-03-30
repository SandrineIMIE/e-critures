<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Items;
use ProjectBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use ProjectBundle\Form\ItemsType;

/**
 * Item controller.
 *
 * @Route("items")
 */
class ItemsController extends Controller
{
    /**
     * Lists all item entities.
     *
     * @Route("/", name="items_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $items = $em->getRepository('ProjectBundle:Items')->findAll();

        return $this->render('items/list.html.twig', array(
            'items' => $items,
        ));
    }

    /**
     * Lists all item entities for a project.
     *
     * @Route("/list/{id}",  name="items_list")
     * @Method("GET")
     */
    public function listAction(Project $proj)
    {
        $em = $this->getDoctrine()->getManager();

        $items = $em->getRepository('ProjectBundle:Items')->findBy(
            array('project' => $proj->getId()), // Critere
            array('id' => 'desc'),        // Tri
            $limit  = null,                 // Limite
            $offset = null                 // Offset
        );

        return $this->render('items/list.html.twig', array(
            'items' => $items,
        ));
    }

    /**
     * Creates a new item entity for a project.
     *
     * @param Request $request
     * @param Project $proj
     * @Route("/new/{id}", name="items_new")
     * @Method({"GET", "POST"})
     * @return
     */
    public function newAction(Request $request, Project $proj)
    {
        $item = new Items();
        $item ->setProject($proj);
        $form = $this->createForm('ProjectBundle\Form\ItemsType', $item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($item);
            $em->flush($item);

            return $this->redirectToRoute('items_show', array('id' => $item->getId()));
        }

        return $this->render('items/new.html.twig', array(
            'item' => $item,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a item entity.
     *
     * @Route("/{id}", name="items_show")
     * @Method("GET")
     */
    public function showAction(Items $item)
    {
        $deleteForm = $this->createDeleteForm($item);

        return $this->render('items/show.html.twig', array(
            'item' => $item,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing item entity.
     *
     * @Route("/{id}/edit", name="items_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Items $item)
    {
        $deleteForm = $this->createDeleteForm($item);
        $editForm = $this->createForm('ProjectBundle\Form\ItemsType', $item);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('items_edit', array('id' => $item->getId()));
        }

        return $this->render('items/edit.html.twig', array(
            'item' => $item,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a item entity.
     *
     * @Route("/{id}", name="items_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Items $item)
    {
        $form = $this->createDeleteForm($item);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($item);
            $em->flush($item);
        }

        return $this->redirectToRoute('items_index');
    }

    /**
     * Creates a form to delete a item entity.
     *
     * @param Items $item The item entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Items $item)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('items_delete', array('id' => $item->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
