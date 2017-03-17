<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenu
 *
 * @ORM\Table(name="contenu")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\ContenuRepository")
 */
class Contenu
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
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="versionat", type="datetime")
     */
    private $versionat;

    /**
     * @ORM\ManyToOne(targetEntity="ProjectBundle\Entity\Chapitre", fetch="EAGER")
     */
    private $chapitre;

    /**
     * @return Chapitre
     */
    public function getChapitre()
    {
        return $this->chapitre;
    }

    /**
     * @param Chapitre $chapitre
     */
    public function setChapitre($chapitre)
    {
        $this->chapitre = $chapitre;
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set versionat
     *
     * @param \DateTime $versionat
     *
     * @return Contenu
     */
    public function setVersionat($versionat)
    {
        $this->versionat = $versionat;

        return $this;
    }

    /**
     * Get versionat
     *
     * @return \DateTime
     */
    public function getVersionat()
    {
        return $this->versionat;
    }
}

