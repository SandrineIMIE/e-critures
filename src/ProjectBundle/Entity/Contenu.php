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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return string
     */
    public function getContenu(): string
    {
        return $this->contenu;
    }

    /**
     * @param string $contenu
     */
    public function setContenu(string $contenu)
    {
        $this->contenu = $contenu;
    }


    /**
     * @return \DateTime
     */
    public function getVersionat(): \DateTime
    {
        return $this->versionat;
    }

    /**
     * @param \DateTime $versionat
     */
    public function setVersionat(\DateTime $versionat)
    {
        $this->versionat = $versionat;
    }


}

