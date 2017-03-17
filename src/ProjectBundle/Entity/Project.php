<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use OCUserBundle\Entity\User;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\ProjectRepository")
 */
class Project
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
     * @var string
     *
     * @ORM\Column(name="description", type="text",length=255)
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="statut", type="boolean")
     */
    private $statut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdat", type="datetime")
     */
    private $createdat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="editedat", type="datetime")
     */
    private $editedat;

    /**
     * @ORM\ManyToOne(targetEntity="ProjectBundle\Entity\Category", fetch="EAGER")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="ProjectBundle\Entity\Rights", fetch="EAGER")
     */
    private $rights;

    /**
     * @ORM\ManyToOne(targetEntity="OCUserBundle\Entity\User", fetch="EAGER")
     */
    private $user;

    /**
<<<<<<<
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }


    /**
=======
     * @ORM\ManyToOne(targetEntity="OCUserBundle\Entity\User", fetch="EAGER")
     */
    private $user;

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }




    /**
>>>>>>>
     *
     * @ORM\ManyToMany(targetEntity="ProjectBundle\Entity\Tag", mappedBy="Tag", cascade={"all"})
     */
    private $tags;

    /**
     * Constructor
     */

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    /**
     * Add tags
     *
     * @param Tag $tag
     *
     * @return Project
     */
    public function addTag(Tag $tag)
    {
        $this->tags[] = $tag;
        return $this;
    }

    /**
     * remove tag
     *
     * @param Tag $tag
     */
    public function removeTag(Tag $tag)
    {
        $this->tags ->removeElement($tag);
    }

    /**
     * Get Tags
     *
     * @return ArrayCollection
     */
    public function getTags()
    {
        return $this->tags;
    }


/**
     * @return Rights
     */
    public function getRights()
    {
        return $this->rights;
    }

    /**
     * @param Rights $rights
     */
    public function setRights($rights)
    {
        $this->rights = $rights;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
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
     * Set title
     *
     * @param string $title
     *
     * @return Project
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
     * Set description
     *
     * @param string $description
     *
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     *
     * @return Project
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return bool
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set createdat
     *
     * @param \DateTime $createdat
     *
     * @return Project
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
     * Set editedat
     *
     * @param \DateTime $editedat
     *
     * @return Project
     */
    public function setEditedat($editedat)
    {
        $this->editedat = $editedat;

        return $this;
    }

    /**
     * Get editedat
     *
     * @return \DateTime
     */
    public function getEditedat()
    {
        return $this->editedat;
    }
}

