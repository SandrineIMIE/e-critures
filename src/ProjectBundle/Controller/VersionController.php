<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Chapitre;
use ProjectBundle\Entity\Version;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Version controller.
 *
 * @Route("version")
 */
class VersionController extends Controller
{
    /**
     * Lists all version entities for a project.
     *
     * @Route("/{id}", name="version_index")
     * @Method("GET")
     */
    public function indexAction(Chapitre $chapitre)
    {
        $em = $this->getDoctrine()->getManager();

        $versions = $em->getRepository('ProjectBundle:Version')->findBy(
            array('chapitre' => $chapitre->getId()), // Critere
            array('id' => 'desc'),        // Tri
            $limit = null,                 // Limite
            $offset = null                 // Offset
        );

        return $this->render('version/index.html.twig', array(
            'versions' => $versions,
        ));
    }

    /**
     * Creates a new version entity for a project.
     *
     * @Route("/new/{id}", name="version_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Chapitre $chapitre)
    {
        $version = new Version();
        $version->setChapitre($chapitre);
        $version->setVersionat(new \DateTime());
        $version->setVs();
        $form = $this->createForm('ProjectBundle\Form\VersionType', $version);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($version);
            $em->flush($version);
            return $this->redirectToRoute('version_show', array('id' => $version->getId()));
        }

        return $this->render('version/new.html.twig', array(
            'version' => $version,
            'form' => $form->createView(),
        ));
    }

    public function addVersion(Request $request, Version $orgine)
    {
        $version = $orgine;
        $version->setVersionat(new \DateTime());
        $version->setVs($orgine->getVs() + 1);
        $form = $this->createForm('ProjectBundle\Form\VersionType', $version);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($version);
            $em->flush($version);
            return $this->redirectToRoute('version_show', array('id' => $version->getId()));
        }

        return $this->render('version/new.html.twig', array(
            'version' => $version,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a version entity.
     *
     * @Route("/{id}", name="version_show")
     * @Method("GET")
     */
    public function showAction(Version $version)
    {
        $deleteForm = $this->createDeleteForm($version);

        return $this->render('version/show.html.twig', array(
            'version' => $version,
            'delete_form' => $deleteForm->createView(),
        ));
    }

//    /**
//     * Displays a form to edit an existing version entity.
//     *
//     * @Route("/{id}/edit", name="version_edit")
//     * @Method({"GET", "POST"})
//     */
//    public function editAction(Request $request, Version $version)
//    {
//        $deleteForm = $this->createDeleteForm($version);
//        $editForm = $this->createForm('ProjectBundle\Form\VersionType', $version);
//        $editForm->handleRequest($request);
//
//        if ($editForm->isSubmitted() && $editForm->isValid()) {
//            $this->getDoctrine()->getManager()->flush();
//
//            return $this->redirectToRoute('version_edit', array('id' => $version->getId()));
//        }
//
//        return $this->render('version/edit.html.twig', array(
//            'version' => $version,
//            'edit_form' => $editForm->createView(),
//            'delete_form' => $deleteForm->createView(),
//        ));
//    }

    /**
     * Creates a form to delete a version entity.
     *
     * @param Version $version The version entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Version $version)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('version_delete', array('id' => $version->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * Deletes a version entity.
     *
     * @Route("/{id}", name="version_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Version $version)
    {
        $form = $this->createDeleteForm($version);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($version);
            $em->flush($version);
        }

        return $this->redirectToRoute('version_index');
    }
}
