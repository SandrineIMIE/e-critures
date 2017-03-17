<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Chapitre;
use ProjectBundle\Entity\Contenu;
use ProjectBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Contenu controller.
 *
 * @Route("contenu")
 */
class ContenuController extends Controller
{
    /**
     * Lists all contenu entities.
     *
     * @Route("/", name="contenu_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contenus = $em->getRepository('ProjectBundle:Contenu')->findAll();

        return $this->render('contenu/index.html.twig', array(
            'contenus' => $contenus,
        ));
    }
    /**
     * Lists all contenu entities for a chapitre.
     *
     * @Route("/list/{id}", name="contenu_list")
     * @Method("GET")
     */
    public function listAction(Chapitre $chapitre)
    {
        $em = $this->getDoctrine()->getManager();

        $contenus = $em->getRepository('ProjectBundle:Contenu')->findBy(
            array('chapitre' => $chapitre), // Critere
            array('id' => 'desc'),        // Tri
            $limit  = null,                 // Limite
            $offset = null                 // Offset
        );

        return $this->render('contenu/list.html.twig', array(
            'contenus' => $contenus,
        ));
    }

    /**
     * Creates a new contenu entity.
     *
     * @Route("/new", name="contenu_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $contenu = new Contenu();
        $contenu ->setVersionat( new \DateTime());
        $form = $this->createForm('ProjectBundle\Form\ContenuType', $contenu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contenu);
            $em->flush($contenu);

            return $this->redirectToRoute('contenu_show', array('id' => $contenu->getId()));
        }

        return $this->render('contenu/new.html.twig', array(
            'contenu' => $contenu,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a contenu entity.
     *
     * @Route("/{id}", name="contenu_show")
     * @Method("GET")
     */
    public function showAction(Contenu $contenu)
    {
        $deleteForm = $this->createDeleteForm($contenu);

        return $this->render('contenu/show.html.twig', array(
            'contenu' => $contenu,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contenu entity.
     *
     * @Route("/{id}/edit", name="contenu_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Contenu $contenu)
    {
        $deleteForm = $this->createDeleteForm($contenu);
        $editForm = $this->createForm('ProjectBundle\Form\ContenuType', $contenu);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contenu_edit', array('id' => $contenu->getId()));
        }

        return $this->render('contenu/edit.html.twig', array(
            'contenu' => $contenu,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contenu entity.
     *
     * @Route("/{id}", name="contenu_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Contenu $contenu)
    {
        $form = $this->createDeleteForm($contenu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contenu);
            $em->flush($contenu);
        }

        return $this->redirectToRoute('contenu_index');
    }

    /**
     * Creates a form to delete a contenu entity.
     *
     * @param Contenu $contenu The contenu entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contenu $contenu)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contenu_delete', array('id' => $contenu->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
