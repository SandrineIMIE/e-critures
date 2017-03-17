<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Chapitre;
use ProjectBundle\Entity\Contenu;
use ProjectBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Chapitre controller.
 *
 * @Route("chapitre")
 */
class ChapitreController extends Controller
{
    /**
     * Lists all chapitre entities.
     *
     * @Route("/", name="chapitre_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chapitres = $em->getRepository('ProjectBundle:Chapitre')->findAll();

        return $this->render('chapitre/list.html.twig', array(
            'chapitres' => $chapitres,
        ));
    }
    /**
     * Lists all chapitre entities for a project.
     *
     * @Route("/list/{id}",  name="chapitre_list")
     * @Method("GET")
     */
    public function listAction(Project $proj)
    {
        $em = $this->getDoctrine()->getManager();

        $chapitres = $em->getRepository('ProjectBundle:Chapitre')->findBy(
            array('project' => $proj->getId()), // Critere
            array('id' => 'desc'),        // Tri
            $limit  = null,                 // Limite
            $offset = null                 // Offset
        );

        return $this->render('chapitre/list.html.twig', array(
            'chapitres' => $chapitres,
        ));
    }

    /**
     * Creates a new chapitre entity for a project.
     *
     * @Route("/new/{id}", name="chapitre_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Project $proj)
    {
        //creation du premier contenu
        $contenu=new Contenu();
        $contenu->getVersionat( new \DateTime());
        //creation du chapitre dont dependra le contenu
        $chapitre = new Chapitre();
        $chapitre->setProject($proj);
        $chapitre ->setEditat( new \DateTime());
        $chapitre ->setCreatedat( new \DateTime());
        $chapitre ->setRedaction(true);
        $chapitre ->setPublication(false);
        //on gère les interactions entre les deux
        $chapitre->getContenu($contenu);
        $contenu->getChapitre($chapitre);
        //creation du formulaire chapitre
        $form = $this->createForm('ProjectBundle\Form\ChapitreType', $chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chapitre);
            $em->persist($contenu);
            $em->flush();

            return $this->redirectToRoute('chapitre_show', array('id' => $chapitre->getId()));
        }

        return $this->render('chapitre/new.html.twig', array(
            'chapitre' => $chapitre,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a chapitre entity.
     *
     * @Route("/{id}", name="chapitre_show")
     * @Method("GET")
     */
    public function showAction(Chapitre $chapitre)
    {
        $deleteForm = $this->createDeleteForm($chapitre);

        return $this->render('chapitre/show.html.twig', array(
            'chapitre' => $chapitre,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing chapitre entity.
     *
     * @Route("/{id}/edit", name="chapitre_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Chapitre $chapitre)
    {
        $deleteForm = $this->createDeleteForm($chapitre);
        $editForm = $this->createForm('ProjectBundle\Form\ChapitreType', $chapitre);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $chapitre ->setEditat( new \DateTime());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chapitre_edit', array('id' => $chapitre->getId()));
        }

        return $this->render('chapitre/edit.html.twig', array(
            'chapitre' => $chapitre,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a chapitre entity.
     *
     * @Route("/{id}", name="chapitre_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Chapitre $chapitre)
    {
        $form = $this->createDeleteForm($chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chapitre);
            $em->flush($chapitre);
        }

        return $this->redirectToRoute('chapitre_index');
    }

    /**
     * Creates a form to delete a chapitre entity.
     *
     * @param Chapitre $chapitre The chapitre entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Chapitre $chapitre)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chapitre_delete', array('id' => $chapitre->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
