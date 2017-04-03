<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Chapitre;
use ProjectBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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

        return $this->render('chapitre/index.html.twig', array(
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
            array('id' => 'asc'),        // Tri
            $limit = null,                 // Limite
            $offset = null                 // Offset

        );


        return $this->render('chapitre/list.html.twig', array(
            'chapitres' => $chapitres,

            'items' => $items = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Items')->findBy(
                array('project' => $proj->getId()), // Critere
                array('id' => 'desc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),

            'links' => $links = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Link')->findBy(
                array('project' => $proj->getId()), // Critere
                array('name' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),

            'notes' => $notes = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Note')->findBy(
                array('project' => $proj->getId()), // Critere
                array('id' => 'desc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),

            'events' => $events = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Events')->findBy(
                array('project' => $proj->getId()), // Critere
                array('id' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),

            'places' => $places = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Place')->findBy(
                array('project' => $proj->getId()), // Critere
                array('name' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),

            'lexicoms' => $lexicoms = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Lexicom')->findBy(
                array('project' => $proj->getId()), // Critere
                array('mot' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),

            'persos' => $persos = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Perso')->findBy(
                array('project' => $proj->getId()), // Critere
                array('prenom' => 'asc'),        // Tri
                $limit  = null,                 // Limite
                $offset = null                 // Offset
            )
        ));
    }

    /**
     * Creates a new chapitre entity for a project.
     *
     * @Route("/new/{id}", name="chapitre_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Project $project)
    {
        //creation du chapitre
        $chapitre = new Chapitre();
        $chapitre->setProject($project);
        $chapitre->setEditat(new \DateTime());
        $chapitre->setCreatedat(new \DateTime());
        $chapitre->setRedaction(true);
        $chapitre->setPublication(false);

        //creation du formulaire chapitre
        $form = $this->createForm('ProjectBundle\Form\ChapitreType', $chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chapitre);
            $em->flush();

            return $this->redirectToRoute('chapitre_show', array('id' => $chapitre->getId()));
        }

        return $this->render('chapitre/new.html.twig', array(
            'project' => $chapitre->getProject(),
            'chapitre' => $chapitre,
            'chapitres' => $chapitres = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Chapitre')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('id' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'items' => $items = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Items')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('id' => 'desc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),

            'links' => $links = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Link')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('name' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'notes' => $notes = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Note')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('id' => 'desc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'events' => $events = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Events')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('id' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'places' => $places = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Place')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('name' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'lexicoms' => $lexicoms = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Lexicom')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('mot' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'persos' => $persos = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Perso')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('prenom' => 'asc'),        // Tri
                $limit  = null,                 // Limite
                $offset = null                 // Offset
            ),
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
            'project' => $chapitre->getProject(),
            'chapitres' => $chapitres = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Chapitre')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('id' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'items' => $items = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Items')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('id' => 'desc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'links' => $links = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Link')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('name' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'notes' => $notes = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Note')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('id' => 'desc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'events' => $events = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Events')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('id' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'places' => $places = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Place')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('name' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'lexicoms' => $lexicoms = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Lexicom')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('mot' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'persos' => $persos = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Perso')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('prenom' => 'asc'),        // Tri
                $limit  = null,                 // Limite
                $offset = null                 // Offset
            ),
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
            $chapitre->setEditat(new \DateTime());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chapitre_edit', array(
                'project' => $chapitre->getProject(),
                'id' => $chapitre->getId()));
        }

        return $this->render('chapitre/edit.html.twig', array(
            'project' => $chapitre->getProject(),
            'chapitre' => $chapitre,
            'chapitres' => $chapitres = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Chapitre')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('id' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'items' => $items = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Items')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('id' => 'desc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'links' => $links = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Link')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('name' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'notes' => $notes = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Note')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('id' => 'desc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'events' => $events = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Events')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('id' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'places' => $places = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Place')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('name' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'lexicoms' => $lexicoms = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Lexicom')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('mot' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'persos' => $persos = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Perso')->findBy(
                array('project' => $chapitre->getProject()->getId()), // Critere
                array('prenom' => 'asc'),        // Tri
                $limit  = null,                 // Limite
                $offset = null                 // Offset
            ),
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

        return $this->redirectToRoute('chapitre_index', array(
            'project' => $chapitre->getProject(),
            'chapitre' => $chapitre
        ));
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
            ->setAction($this->generateUrl('chapitre_delete', array(
                'id' => $chapitre->getId(),
                'project' => $chapitre->getProject(),
                'chapitre' => $chapitre
            )))
            ->setMethod('DELETE')
            ->getForm();
    }
    /**
     * Creates a pdf for a chapitre entity
     *
     * @Route("/pdf/{id}", name="pdfchap")
     * @Method("GET")
     */
    public function pdfAction(Chapitre $chapitre)
    {
        $snappy = $this->get('knp_snappy.pdf');
        $snappy->setOption('no-outline', true);
        $snappy->setOption('page-size','A4');
        $snappy->setOption('encoding', 'UTF-8');

        $html = $this->renderView('chapitre/pdf.html.twig', array(
            'title' => $chapitre->getTitle(),
             'chapitre' => $chapitre
        ));

        $filename = $chapitre->getTitle();

        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );
    }


}
