<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Perso
 *
 * @ORM\Table(name="perso")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\PersoRepository")
 */
class Perso
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
     * @var string
     *
     * @ORM\Column(name="surnom", type="string", length=255)
     */
    private $surnom;

    /**
     * @var string
     *
     * @ORM\Column(name="daten", type="string", length=255)
     */
    private $daten;

    /**
     * @var string
     *
     * @ORM\Column(name="lieun", type="string", length=255)
     */
    private $lieun;

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

