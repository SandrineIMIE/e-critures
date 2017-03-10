<?php

namespace ProjectBundle\Controller;

use ProjectBundle\Entity\Chapter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Chapter controller.
 *
 * @Route("chapter")
 */
class ChapterController extends Controller
{
    /**
     * Lists all chapter entities.
     *
     * @Route("/", name="chapter_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $chapters = $em->getRepository('ProjectBundle:Chapter')->findAll();
        return $this->render('chapter/chap.list.html.twig', array(
            'chapters' => $chapters,
        ));
    }
//    /**
//     * Lists all chapter entities.
//     *
//     * @Route("/project/{project_id}", name="chapter_project")
//     * @Method("GET")
//     */
//    public function indexAction($idproject)
//    {
//        $em = $this->getDoctrine()->getManager();
//        $chapters = $em->getRepository('ProjectBundle:Chapter')->findAll();
//        return $this->render('chapter/chap.list.html.twig', array(
//            'chapters' => $chapters,
//        ));
//    }



    /**
     * Creates a new chapter entity.
     *
     * @Route("/new", name="chapter_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $chapter = new Chapter();
        $chapter ->setEditat( new \DateTime());
        $chapter ->setCreatedat( new \DateTime());
        $chapter ->setProject(1);
        $form = $this->createForm('ProjectBundle\Form\ChapterType', $chapter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chapter);
            $em->flush($chapter);

            return $this->redirectToRoute('chapter_show', array('id' => $chapter->getId()));
        }

        return $this->render('chapter/chap.new.html.twig', array(
            'chapter' => $chapter,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a chapter entity.
     *
     * @Route("/{id}", name="chapter_show")
     * @Method("GET")
     */
    public function showAction(Chapter $chapter)
    {
        $deleteForm = $this->createDeleteForm($chapter);

        return $this->render('chapter/chap.show.html.twig', array(
            'chapter' => $chapter,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing chapter entity.
     *
     * @Route("/{id}/edit", name="chapter_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Chapter $chapter)
    {
        $deleteForm = $this->createDeleteForm($chapter);
        $editForm = $this->createForm('ProjectBundle\Form\ChapterType', $chapter);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $chapter ->setEditat( new \DateTime());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chapter_edit', array('id' => $chapter->getId()));
        }

        return $this->render('chapter/chap.edit.html.twig', array(
            'chapter' => $chapter,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a chapter entity.
     *
     * @Route("/{id}", name="chapter_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Chapter $chapter)
    {
        $form = $this->createDeleteForm($chapter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chapter);
            $em->flush($chapter);
        }

        return $this->redirectToRoute('chapter_index');
    }

    /**
     * Creates a form to delete a chapter entity.
     *
     * @param Chapter $chapter The chapter entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Chapter $chapter)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chapter_delete', array('id' => $chapter->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
