<?php

namespace ProjectBundle\Controller;

use OCUserBundle\Entity\User;
use ProjectBundle\Entity\Heros;
use ProjectBundle\Entity\Project;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Project controller.
 *
 * @Route("project")
 */
class ProjectController extends Controller
{
    /**
     * Lists all project entities.
     *
     * @Route("/", name="project_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $projects = $em->getRepository('ProjectBundle:Project')->findAll();

        return $this->render('project/project.list.html.twig', array(
            'projects' => $projects,
        ));
    }

    /**
     * Lists all project entities for user.
     *
     * @Route("/list/{id}", name="project_list")
     * @Method("GET")
     */
    public function listAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();

        $projects = $em->getRepository('ProjectBundle:Project')->findBy(
            array('user' => $user->getId()), // Critere
            array('id' => 'desc'),        // Tri
            $limit = null,                 // Limite
            $offset = null                 // Offset
        );
        return $this->render('project/project.list.html.twig', array(
            'projects' => $projects,
            'nrP'=>count($projects)
        ));
    }

    /**
     * Creates a new project entity.
     *
     * @Route("/new/{id}", name="project_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, User $user)
    {

        $project = new Project();
        $project->setUser($user);
        $project->setEditedat(new \DateTime());
        $project->setCreatedat(new \DateTime());
        $form = $this->createForm('ProjectBundle\Form\ProjectType', $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($project);
            $em->flush($project);

            return $this->redirectToRoute('project_show', array('id' => $project->getId()));
        }

        return $this->render('project/project.new.html.twig', array(
                'project' => $project,
                'chapitres' => $chapitres = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Chapitre')->findBy(
                    array('project' => $project->getId()), // Critere
                    array('id' => 'desc'),        // Tri
                    $limit = null,                 // Limite
                    $offset = null                 // Offset
                ),
                'items' => $items = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Items')->findBy(
                    array('project' => $project->getId()), // Critere
                    array('id' => 'desc'),        // Tri
                    $limit = null,                 // Limite
                    $offset = null                 // Offset
                ),
                'links' => $links = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Link')->findBy(
                    array('project' => $project->getId()), // Critere
                    array('name' => 'asc'),        // Tri
                    $limit = null,                 // Limite
                    $offset = null                 // Offset
                ),
                'notes' => $notes = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Note')->findBy(
                    array('project' => $project->getId()), // Critere
                    array('id' => 'desc'),        // Tri
                    $limit = null,                 // Limite
                    $offset = null                 // Offset
                ),
                'events' => $events = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Events')->findBy(
                    array('project' => $project->getId()), // Critere
                    array('id' => 'asc'),        // Tri
                    $limit = null,                 // Limite
                    $offset = null                 // Offset
                ),
                'places' => $places = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Place')->findBy(
                    array('project' => $project->getId()), // Critere
                    array('name' => 'asc'),        // Tri
                    $limit = null,                 // Limite
                    $offset = null                 // Offset
                ),
                'lexicoms' => $lexicoms = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Lexicom')->findBy(
                    array('project' => $project->getId()), // Critere
                    array('mot' => 'asc'),        // Tri
                    $limit = null,                 // Limite
                    $offset = null                 // Offset
                ),
//                'heros' => $heros = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Heros')->findByLimite(
//                    array('project' => $project->getId()), // Critere
//                    array('id' => 'asc'),        // Tri
//                    $limit = null,                 // Limite
//                    $offset = null                 // Offset
//                ),
                'form' => $form->createView(),
            )
        );
    }

    /**
     * Finds and displays a project entity.
     *
     * @Route("/{id}", name="project_show")
     * @Method("GET")
     */
    public function showAction(Project $project)
    {
        $deleteForm = $this->createDeleteForm($project);

        return $this->render('project/project.show.html.twig', array(
            'project' => $project,
            'chapitres' => $chapitres = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Chapitre')->findBy(
                array('project' => $project->getId()), // Critere
                array('id' => 'desc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'items' => $items = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Items')->findBy(
                array('project' => $project->getId()), // Critere
                array('id' => 'desc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'links' => $links = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Link')->findBy(
                array('project' => $project->getId()), // Critere
                array('name' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'notes' => $notes = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Note')->findBy(
                array('project' => $project->getId()), // Critere
                array('id' => 'desc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'events' => $events = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Events')->findBy(
                array('project' => $project->getId()), // Critere
                array('id' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'places' => $places = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Place')->findBy(
                array('project' => $project->getId()), // Critere
                array('name' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'lexicoms' => $lexicoms = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Lexicom')->findBy(
                array('project' => $project->getId()), // Critere
                array('mot' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
//            'heros' => $heros = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Heros')->findByLimite(
//                array('project' => $project->getId()), // Critere
//                array('id' => 'asc'),        // Tri
//                $limit = null,                 // Limite
//                $offset = null                 // Offset
//            ),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing project entity.
     *
     * @Route("/{id}/edit", name="project_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Project $project)
    {
        $deleteForm = $this->createDeleteForm($project);
        $editForm = $this->createForm('ProjectBundle\Form\ProjectType', $project);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $project->setEditedat(new \DateTime());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('project_edit', array('id' => $project->getId()));
        }

        return $this->render('project/project.edit.html.twig', array(
            'project' => $project,
            'chapitres' => $chapitres = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Chapitre')->findBy(
                array('project' => $project->getId()), // Critere
                array('id' => 'desc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'items' => $items = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Items')->findBy(
                array('project' => $project->getId()), // Critere
                array('id' => 'desc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'links' => $links = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Link')->findBy(
                array('project' => $project->getId()), // Critere
                array('name' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'notes' => $notes = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Note')->findBy(
                array('project' => $project->getId()), // Critere
                array('id' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'events' => $events = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Events')->findBy(
                array('project' => $project->getId()), // Critere
                array('id' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'places' => $places = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Place')->findBy(
                array('project' => $project->getId()), // Critere
                array('name' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
            'lexicoms' => $lexicoms = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Lexicom')->findBy(
                array('project' => $project->getId()), // Critere
                array('mot' => 'asc'),        // Tri
                $limit = null,                 // Limite
                $offset = null                 // Offset
            ),
//            'heros' => $heros = $this->getDoctrine()->getManager()->getRepository('ProjectBundle:Heros')->findBy(
//                array('project' => $project->getId()), // Critere
//                array('id' => 'asc'),        // Tri
//                $limit = null,                 // Limite
//                $offset = null                 // Offset
//            ),
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a project entity.
     *
     * @Route("/{id}", name="project_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Project $project)
    {
        $form = $this->createDeleteForm($project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($project);
            $em->flush($project);
        }

        return $this->redirectToRoute('project_index');
    }

    /**
     * Creates a form to delete a project entity.
     *
     * @param Project $project The project entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Project $project)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('project_delete', array('id' => $project->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * @Route("/addTag}", name="ajoutTag")
     */
    public function AddTagAction()
    {
        $em = $this->getDoctrine()->getManager();
        $erProjects = $em->getRepository('ProjectBundle:Project');

        $erTags = $em->getRepository('ProjectBundle:Tag');

        $monProject = $erProjects->find(1);
        $monTag = $erTags->find(1);

        $monProject->addTag($monTag);
        $em->flush();

        return new Response ('<body></Body>');
    }
}
