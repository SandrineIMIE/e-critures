<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapitre
 *
 * @ORM\Table(name="chapitre")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\ChapitreRepository")
 */
class Chapitre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var bool
     *
     * @ORM\Column(name="redaction", type="boolean")
     */
    private $redaction;

    /**
     * @var bool
     *
     * @ORM\Column(name="publication", type="boolean")
     */
    private $publication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdat", type="datetime")
     */
    private $createdat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="editat", type="datetime")
     */
    private $editat;

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param mixed $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @ORM\ManyToOne(targetEntity="ProjectBundle\Entity\Project", fetch="EAGER")
     */
    private $project;

//    /**
//     * @ORM\OneToOne(targetEntity="ProjectBundle\Entity\Contenu", fetch="EAGER", cascade={"persist"}")
//     * @ORM\JoinColumn(nullable=false)
//     */
//    private $contenu;
//
//    /**
//     * Chapitre constructor.
//     * @param $contenu
//     */
////    public function __construct()
////    {
////        $contenu=new Contenu();
////        $contenu->getVersionat($this->createdat);
////        $this->contenu = $contenu;
////    }
//
//    /**
//     * @return Contenu
//     */
//    public function getContenu()
//    {
//        return $this->contenu;
//    }
//
//    /**
//     * @param Contenu $contenu
//     */
//    public function setContenu($contenu)
//    {
//        $this->contenu = $contenu;
//    }


    /**
     * @return Project
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @param Project $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Chapitre
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRedaction(): bool
    {
        return $this->redaction;
    }

    /**
     * @param bool $redaction
     */
    public function setRedaction(bool $redaction)
    {
        $this->redaction = $redaction;
    }

    /**
     * @return bool
     */
    public function isPublication(): bool
    {
        return $this->publication;
    }

    /**
     * @param bool $publication
     */
    public function setPublication(bool $publication)
    {
        $this->publication = $publication;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedat(): \DateTime
    {
        return $this->createdat;
    }

    /**
     * @param \DateTime $createdat
     */
    public function setCreatedat(\DateTime $createdat)
    {
        $this->createdat = $createdat;
    }

    /**
     * @return \DateTime
     */
    public function getEditat(): \DateTime
    {
        return $this->editat;
    }

    /**
     * @param \DateTime $editat
     */
    public function setEditat(\DateTime $editat)
    {
        $this->editat = $editat;
    }

}

