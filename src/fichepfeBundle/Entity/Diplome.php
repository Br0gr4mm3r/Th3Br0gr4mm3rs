<?php

namespace fichepfeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diplome
 *
 * @ORM\Table(name="diplome", indexes={@ORM\Index(name="iduser", columns={"iduser"}), @ORM\Index(name="idsoutenance", columns={"idsoutenance"})})
 * @ORM\Entity
 */
class Diplome
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
     * @ORM\Column(name="nomEtudiant", type="string", length=255, nullable=false)
     */
    private $nometudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomEtudiant", type="string", length=255, nullable=false)
     */
    private $prenometudiant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date", nullable=false)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="mention", type="string", length=255, nullable=false)
     */
    private $mention;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEmission", type="datetime", nullable=false)
     */
    private $dateemission;

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
     * @var \Soutenance
     *
     * @ORM\ManyToOne(targetEntity="Soutenance")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsoutenance", referencedColumnName="id")
     * })
     */
    private $idsoutenance;



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
     * Set nometudiant
     *
     * @param string $nometudiant
     *
     * @return Diplome
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
     * Set prenometudiant
     *
     * @param string $prenometudiant
     *
     * @return Diplome
     */
    public function setPrenometudiant($prenometudiant)
    {
        $this->prenometudiant = $prenometudiant;

        return $this;
    }

    /**
     * Get prenometudiant
     *
     * @return string
     */
    public function getPrenometudiant()
    {
        return $this->prenometudiant;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     *
     * @return Diplome
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set mention
     *
     * @param string $mention
     *
     * @return Diplome
     */
    public function setMention($mention)
    {
        $this->mention = $mention;

        return $this;
    }

    /**
     * Get mention
     *
     * @return string
     */
    public function getMention()
    {
        return $this->mention;
    }

    /**
     * Set dateemission
     *
     * @param \DateTime $dateemission
     *
     * @return Diplome
     */
    public function setDateemission($dateemission)
    {
        $this->dateemission = $dateemission;

        return $this;
    }

    /**
     * Get dateemission
     *
     * @return \DateTime
     */
    public function getDateemission()
    {
        return $this->dateemission;
    }

    /**
     * Set iduser
     *
     * @param \fichepfeBundle\Entity\FosUser $iduser
     *
     * @return Diplome
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

    /**
     * Set idsoutenance
     *
     * @param \fichepfeBundle\Entity\Soutenance $idsoutenance
     *
     * @return Diplome
     */
    public function setIdsoutenance(\fichepfeBundle\Entity\Soutenance $idsoutenance = null)
    {
        $this->idsoutenance = $idsoutenance;

        return $this;
    }

    /**
     * Get idsoutenance
     *
     * @return \fichepfeBundle\Entity\Soutenance
     */
    public function getIdsoutenance()
    {
        return $this->idsoutenance;
    }
}
