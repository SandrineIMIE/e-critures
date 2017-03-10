<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Chapter
 *
 * @ORM\Table(name="chapter")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\ChapterRepository")
 */
class Chapter
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
     * @ORM\ManyToOne(targetEntity="ProjectBundle\Entity\Project", fetch="EAGER")
     */
    private $project;


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
     * Set title
     *
     * @param string $title
     *
     * @return Chapter
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
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
     * Set redaction
     *
     * @param boolean $redaction
     *
     * @return Chapter
     */
    public function setRedaction($redaction)
    {
        $this->redaction = $redaction;

        return $this;
    }

    /**
     * Get redaction
     *
     * @return bool
     */
    public function getRedaction()
    {
        return $this->redaction;
    }

    /**
     * Set publication
     *
     * @param boolean $publication
     *
     * @return Chapter
     */
    public function setPublication($publication)
    {
        $this->publication = $publication;

        return $this;
    }

    /**
     * Get publication
     *
     * @return bool
     */
    public function getPublication()
    {
        return $this->publication;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return Chapter
     */
    public function setCreatedat($createdat)
    {
        $this->createdat = $createdat;

        return $this;
    }

    /**
     * Get createdat
     *
     * @return \DateTime
     */
    public function getCreatedat()
    {
        return $this->createdat;
    }

    /**
     * Set editat
     *
     * @param \DateTime $editat
     *
     * @return Chapter
     */
    public function setEditat($editat)
    {
        $this->editat = $editat;

        return $this;
    }

    /**
     * Get editat
     *
     * @return \DateTime
     */
    public function getEditat()
    {
        return $this->editat;
    }

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
}

