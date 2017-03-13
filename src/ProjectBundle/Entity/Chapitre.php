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
     * @return Chapitre
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

