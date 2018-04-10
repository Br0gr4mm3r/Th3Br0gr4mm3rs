<?php

namespace fichepfeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soutenance
 *
 * @ORM\Table(name="soutenance", indexes={@ORM\Index(name="iduser", columns={"iduser"})})
 * @ORM\Entity
 */
class Soutenance
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
     * @ORM\Column(name="rapporteur", type="string", length=255, nullable=false)
     */
    private $rapporteur;

    /**
     * @var string
     *
     * @ORM\Column(name="encadrant", type="string", length=255, nullable=false)
     */
    private $encadrant;

    /**
     * @var string
     *
     * @ORM\Column(name="presidentJury", type="string", length=255, nullable=false)
     */
    private $presidentjury;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="nometudiant", type="string", length=255, nullable=false)
     */
    private $nometudiant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSoutenance", type="date", nullable=false)
     */
    private $datesoutenance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="etat", type="boolean", nullable=false)
     */
    private $etat;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     * })
     */
    private $iduser;



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
     * Set rapporteur
     *
     * @param string $rapporteur
     *
     * @return Soutenance
     */
    public function setRapporteur($rapporteur)
    {
        $this->rapporteur = $rapporteur;

        return $this;
    }

    /**
     * Get rapporteur
     *
     * @return string
     */
    public function getRapporteur()
    {
        return $this->rapporteur;
    }

    /**
     * Set encadrant
     *
     * @param string $encadrant
     *
     * @return Soutenance
     */
    public function setEncadrant($encadrant)
    {
        $this->encadrant = $encadrant;

        return $this;
    }

    /**
     * Get encadrant
     *
     * @return string
     */
    public function getEncadrant()
    {
        return $this->encadrant;
    }

    /**
     * Set presidentjury
     *
     * @param string $presidentjury
     *
     * @return Soutenance
     */
    public function setPresidentjury($presidentjury)
    {
        $this->presidentjury = $presidentjury;

        return $this;
    }

    /**
     * Get presidentjury
     *
     * @return string
     */
    public function getPresidentjury()
    {
        return $this->presidentjury;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Soutenance
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set nometudiant
     *
     * @param string $nometudiant
     *
     * @return Soutenance
     */
    public function setNometudiant($nometudiant)
    {
        $this->nometudiant = $nometudiant;

        return $this;
    }

    /**
     * Get nometudiant
     *
     * @return string
     */
    public function getNometudiant()
    {
        return $this->nometudiant;
    }

    /**
     * Set datesoutenance
     *
     * @param \DateTime $datesoutenance
     *
     * @return Soutenance
     */
    public function setDatesoutenance($datesoutenance)
    {
        $this->datesoutenance = $datesoutenance;

        return $this;
    }

    /**
     * Get datesoutenance
     *
     * @return \DateTime
     */
    public function getDatesoutenance()
    {
        return $this->datesoutenance;
    }

    /**
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Soutenance
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set iduser
     *
     * @param \fichepfeBundle\Entity\FosUser $iduser
     *
     * @return Soutenance
     */
    public function setIduser(\fichepfeBundle\Entity\FosUser $iduser = null)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return \fichepfeBundle\Entity\FosUser
     */
    public function getIduser()
    {
        return $this->iduser;
    }
}
