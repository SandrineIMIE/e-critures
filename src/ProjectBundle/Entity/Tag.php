<?php

namespace ProjectBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\TagRepository")
 */
class Tag
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="ProjectBundle\Entity\Project", inversedBy="tags")
     */
    private $projects;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->projects= new ArrayCollection();
    }

    /**
     * Add project
     *
     * @param Project $project
     *
     * return Tag
     */
    public function addProject(Project $project)
    {
        $this->projects[] = $project;
        $project->addProject($this);
        return $this;
    }

    /**
     * remove project
     *
     * @param Tag $tag
     */
    public function removeProject(Project $project)
    {
        $this->projects->removeElement($project);
    }

    /**
     *
     * Get projects
     *
     * @return ArrayCollection
     */
    public function getProjects()
    {
        return $this->projects;
    }


    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Tag
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

