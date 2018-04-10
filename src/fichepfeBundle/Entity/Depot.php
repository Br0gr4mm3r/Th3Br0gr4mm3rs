<?php

namespace fichepfeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depot
 *
 * @ORM\Table(name="depot")
 * @ORM\Entity
 */
class Depot
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="rapport", type="string", length=255, nullable=false)
     */
    private $rapport;

    /**
     * @var string
     *
     * @ORM\Column(name="executable", type="string", length=255, nullable=false)
     */
    private $executable;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=250, nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="poster", type="string", length=250, nullable=true)
     */
    private $poster;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set rapport
     *
     * @param string $rapport
     *
     * @return Depot
     */
    public function setRapport($rapport)
    {
        $this->rapport = $rapport;

        return $this;
    }

    /**
     * Get rapport
     *
     * @return string
     */
    public function getRapport()
    {
        return $this->rapport;
    }

    /**
     * Set executable
     *
     * @param string $executable
     *
     * @return Depot
     */
    public function setExecutable($executable)
    {
        $this->executable = $executable;

        return $this;
    }

    /**
     * Get executable
     *
     * @return string
     */
    public function getExecutable()
    {
        return $this->executable;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Depot
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set poster
     *
     * @param string $poster
     *
     * @return Depot
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string
     */
    public function getPoster()
    {
        return $this->poster;
    }
}
