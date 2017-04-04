<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Doctrine\Common\Collections\ArrayCollection;
use OCUserBundle\Entity\User;
use Symfony\Component\Validator\Constraints\DateTime;


/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\ProjectRepository")
 * @Vich\Uploadable
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
     *
     * @ORM\ManyToMany(targetEntity="ProjectBundle\Entity\Tag", inversedBy="projects", cascade={"all"})
     */
    private $tags;

    /**
     * @Vich\UploadableField(mapping="ecriture_image", fileNameProperty="imageName", size="imageSize")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $imageName='cover.png';


    /**
     * Constructor
     */

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    /**
     * Get Tags
     *
     * @return ArrayCollection|\ProjectBundle\Entity\Tag[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Add tags
     *
     * @param Tag $tag
     */
    public function addTag(Tag $tag)
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
        }
    }

    /**
     * remove tag
     *
     * @param Tag $tag
     */
    public function removeTag(Tag $tag)
    {
            $this->tags->removeElement($tag);
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
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return $this
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return $this
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageName()
    {
        return $this->imageName;
    }


}

