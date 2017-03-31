<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Events;
use ProjectBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\EventDispatcher\Event;


/**
 * Event controller.
 *
 * @Route("events")
 */
class EventsController extends Controller
{
    /**
     * Lists all event entities.
     *
     * @Route("/", name="events_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $events = $em->getRepository('ProjectBundle:Events')->findAll();

        return $this->render('events/list.html.twig', array(
            'events' => $events,
        ));
    }
    /**
     * Lists all event entities for a project.
     *
     * @Route("/list/{id}",  name="events_list")
     * @Method("GET")
     */
    public function listAction(Project $proj)
    {
        $em = $this->getDoctrine()->getManager();

        $events = $em->getRepository('ProjectBundle:Events')->findBy(
            array('project' => $proj->getId()), // Critere
            array('id' => 'desc'),        // Tri
            $limit  = null,                 // Limite
            $offset = null                 // Offset
        );
        $heros = $em->getRepository('ProjectBundle:Heros')->findBy(
            array('project' => $proj->getId()), // Critere
            array('id' => 'desc'),        // Tri
            $limit  = null,                 // Limite
            $offset = null                 // Offset
        );

        return $this->render('events/list.html.twig', array(
            'events' => $events,
        ));
    }

    /**
     * Creates a new event entity for a project.
     *
     * @Route("/new/{id}", name="events_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Project $proj)
    {
        $event = new Event();
        $event->setProject($proj);
        $form = $this->createForm('ProjectBundle\Form\EventsType', $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush($event);

            return $this->redirectToRoute('events_show', array('id' => $event->getId()));
        }

        return $this->render('events/new.html.twig', array(
            'event' => $event,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a event entity.
     *
     * @Route("/{id}", name="events_show")
     * @Method("GET")
     */
    public function showAction(Events $event)
    {
        $deleteForm = $this->createDeleteForm($event);

        return $this->render('events/show.html.twig', array(
            'event' => $event,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing event entity.
     *
     * @Route("/{id}/edit", name="events_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Events $event)
    {
        $deleteForm = $this->createDeleteForm($event);
        $editForm = $this->createForm('ProjectBundle\Form\EventsType', $event);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('events_edit', array('id' => $event->getId()));
        }

        return $this->render('events/edit.html.twig', array(
            'event' => $event,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a event entity.
     *
     * @Route("/{id}", name="events_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Events $event)
    {
        $form = $this->createDeleteForm($event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($event);
            $em->flush($event);
        }

        return $this->redirectToRoute('events_index');
    }

    /**
     * Creates a form to delete a event entity.
     *
     * @param Events $event The event entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Events $event)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('events_delete', array('id' => $event->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
