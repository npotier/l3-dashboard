<?php

namespace Camille\PlatformBundle\Entity;

/**
 * Fiche1
 */
class Fiche1
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $projectName;

    /**
     * @var \DateTime
     */
    private $ficheDate;

    /**
     * @var int
     */
    private $nbDayDone;

    /**
     * @var int
     */
    private $nbDaySold;

    /**
     * @var string
     */
    private $progression;

    /**
     * @var string
     */
    private $comment;

    /**
     * @var string
     */
    private $creater;


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
     * Set projectName
     *
     * @param string $projectName
     *
     * @return Fiche1
     */
    public function setProjectName($projectName)
    {
        $this->projectName = $projectName;

        return $this;
    }

    /**
     * Get projectName
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->projectName;
    }

    /**
     * Set ficheDate
     *
     * @param \DateTime $ficheDate
     *
     * @return Fiche1
     */
    public function setFicheDate($ficheDate)
    {
        $this->ficheDate = $ficheDate;

        return $this;
    }

    /**
     * Get ficheDate
     *
     * @return \DateTime
     */
    public function getFicheDate()
    {
        return $this->ficheDate;
    }

    /**
     * Set nbDayDone
     *
     * @param integer $nbDayDone
     *
     * @return Fiche1
     */
    public function setNbDayDone($nbDayDone)
    {
        $this->nbDayDone = $nbDayDone;

        return $this;
    }

    /**
     * Get nbDayDone
     *
     * @return int
     */
    public function getNbDayDone()
    {
        return $this->nbDayDone;
    }

    /**
     * Set nbDaySold
     *
     * @param integer $nbDaySold
     *
     * @return Fiche1
     */
    public function setNbDaySold($nbDaySold)
    {
        $this->nbDaySold = $nbDaySold;

        return $this;
    }

    /**
     * Get nbDaySold
     *
     * @return int
     */
    public function getNbDaySold()
    {
        return $this->nbDaySold;
    }

    /**
     * Set progression
     *
     * @param string $progression
     *
     * @return Fiche1
     */
    public function setProgression($progression)
    {
        $this->progression = $progression;

        return $this;
    }

    /**
     * Get progression
     *
     * @return string
     */
    public function getProgression()
    {
        return $this->progression;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Fiche1
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set creater
     *
     * @param string $creater
     *
     * @return Fiche1
     */
    public function setCreater($creater)
    {
        $this->creater = $creater;

        return $this;
    }

    /**
     * Get creater
     *
     * @return string
     */
    public function getCreater()
    {
        return $this->creater;
    }
}

