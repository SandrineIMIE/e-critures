<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * Perso
 *
 * @ORM\Table(name="perso")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\PersoRepository")
 * @Vich\Uploadable
 */
class Perso
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="surnom", type="string", length=255, nullable=true)
     */
    private $surnom=null;

    /**
     * @var string
     *
     * @ORM\Column(name="daten", type="string", length=255, nullable=true)
     */
    private $daten=null;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu", type="string", length=255,  nullable=true)
     */
    private $lieun=null;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255,  nullable=true)
     */
    private $sexe=null;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255,  nullable=true)
     */
    private $statut=null;

    /**
     * @var bool
     *
     * @ORM\Column(name="mineur", type="boolean")
     */
    private $mineur;

    /**
     * @ORM\ManyToOne(targetEntity="ProjectBundle\Entity\Project", fetch="EAGER")
     */
    private $project;

    /**
     * @Vich\UploadableField(mapping="ecriture_image", fileNameProperty="imageName", size="imageSize")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $imageName='perso.png';


    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @var \DateTime
     */
    private $updatedAt=null;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Perso
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Perso
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set surnom
     *
     * @param string $surnom
     *
     * @return Perso
     */
    public function setSurnom($surnom)
    {
        $this->surnom = $surnom;

        return $this;
    }

    /**
     * Get surnom
     *
     * @return string
     */
    public function getSurnom()
    {
        return $this->surnom;
    }

    /**
     * Set daten
     *
     * @param string $daten
     *
     * @return Perso
     */
    public function setDaten($daten)
    {
        $this->daten = $daten;

        return $this;
    }

    /**
     * Get daten
     *
     * @return string
     */
    public function getDaten()
    {
        return $this->daten;
    }

    /**
     * Set lieun
     *
     * @param string $lieun
     *
     * @return Perso
     */
    public function setLieun($lieun)
    {
        $this->lieun = $lieun;

        return $this;
    }

    /**
     * Get lieun
     *
     * @return string
     */
    public function getLieun()
    {
        return $this->lieun;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Perso
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Perso
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set mineur
     *
     * @param boolean $mineur
     *
     * @return Perso
     */
    public function setMineur($mineur)
    {
        $this->mineur = $mineur;

        return $this;
    }

    /**
     * Get mineur
     *
     * @return bool
     */
    public function getMineur()
    {
        return $this->mineur;
    }
}

