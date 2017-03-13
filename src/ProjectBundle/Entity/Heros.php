<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Heros
 *
 * @ORM\Table(name="heros")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\HerosRepository")
 */
class Heros
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
     * @var array
     *
     * @ORM\Column(name="surnom", type="array")
     */
    private $surnom;

    /**
     * @var string
     *
     * @ORM\Column(name="date_n", type="string", length=255)
     */
    private $dateN;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_n", type="string", length=255)
     */
    private $lieuN;

    /**
     * @var bool
     *
     * @ORM\Column(name="mineur", type="boolean")
     */
    private $mineur;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @ORM\ManyToOne(targetEntity="ProjectBundle\Entity\Project", fetch="EAGER")
     */
    private $project;

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
     * @return Heros
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
     * @return Heros
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
     * @param array $surnom
     *
     * @return Heros
     */
    public function setSurnom($surnom)
    {
        $this->surnom = $surnom;

        return $this;
    }

    /**
     * Get surnom
     *
     * @return array
     */
    public function getSurnom()
    {
        return $this->surnom;
    }

    /**
     * Set dateN
     *
     * @param string $dateN
     *
     * @return Heros
     */
    public function setDateN($dateN)
    {
        $this->dateN = $dateN;

        return $this;
    }

    /**
     * Get dateN
     *
     * @return string
     */
    public function getDateN()
    {
        return $this->dateN;
    }

    /**
     * Set lieuN
     *
     * @param string $lieuN
     *
     * @return Heros
     */
    public function setLieuN($lieuN)
    {
        $this->lieuN = $lieuN;

        return $this;
    }

    /**
     * Get lieuN
     *
     * @return string
     */
    public function getLieuN()
    {
        return $this->lieuN;
    }

    /**
     * Set mineur
     *
     * @param boolean $mineur
     *
     * @return Heros
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

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Heros
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
     * @return Heros
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
}

