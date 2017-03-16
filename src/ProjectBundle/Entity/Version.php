<?php

namespace ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Version
 *
 * @ORM\Table(name="version")
 * @ORM\Entity(repositoryClass="ProjectBundle\Repository\VersionRepository")
 */
class Version
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
     * @var int
     *
     * @ORM\Column(name="vs", type="integer")
     */
    private $vs = 1;

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
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Version
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

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

    /**
     * Set versionat
     *
     * @param \DateTime $versionat
     *
     * @return Version
     */
    public function setVersionat($versionat)
    {
        $this->versionat = $versionat;

        return $this;
    }

    /**
     * Get vs
     *
     * @return int
     */
    public function getVs()
    {
        return $this->vs;
    }

    /**
     * Set vs
     *
     * @param integer $vs
     *
     * @return Version
     */
    public function setVs($vs)
    {
        $this->vs = $vs;

        return $this;
    }
}

