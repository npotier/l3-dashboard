<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Fiche
 *
 * @ORM\Table(name="fiche")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FicheRepository")
 */
class Fiche
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
     * @ORM\Column(name="projet", type="string", length=255)
     */
    private $projet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="nbjoursFait", type="integer")
     */
    private $nbjoursFait;

    /**
     * @var int
     *
     * @ORM\Column(name="nbjoursVendus", type="integer")
     */
    private $nbjoursVendus;

    /**
     * @var float
     *
     * @ORM\Column(name="avancementProjet", type="float")
     *
     * @Assert\GreaterThan(0)
     */
    private $avancementProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="createdBy", type="string")
     *
     *
     */
    private $createdBy;

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
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
     * Set projet
     *
     * @param string $projet
     *
     * @return Fiche
     */
    public function setProjet($projet)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return string
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Fiche
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nbjoursFait
     *
     * @param integer $nbjoursFait
     *
     * @return Fiche
     */
    public function setNbjoursFait($nbjoursFait)
    {
        $this->nbjoursFait = $nbjoursFait;

        return $this;
    }

    /**
     * Get nbjoursFait
     *
     * @return int
     */
    public function getNbjoursFait()
    {
        return $this->nbjoursFait;
    }

    /**
     * Set nbjoursVendus
     *
     * @param integer $nbjoursVendus
     *
     * @return Fiche
     */
    public function setNbjoursVendus($nbjoursVendus)
    {
        $this->nbjoursVendus = $nbjoursVendus;

        return $this;
    }

    /**
     * Get nbjoursVendus
     *
     * @return int
     */
    public function getNbjoursVendus()
    {
        return $this->nbjoursVendus;
    }

    /**
     * Set avancementProjet
     *
     * @param float $avancementProjet
     *
     * @return Fiche
     */
    public function setAvancementProjet($avancementProjet)
    {
        $this->avancementProjet = $avancementProjet;

        return $this;
    }

    /**
     * Get avancementProjet
     *
     * @return float
     */
    public function getAvancementProjet()
    {
        return $this->avancementProjet;
    }
}

