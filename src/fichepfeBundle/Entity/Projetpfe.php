<?php

namespace fichepfeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projetpfe
 *
 * @ORM\Table(name="projetpfe", indexes={@ORM\Index(name="iduser", columns={"iduser"}), @ORM\Index(name="idsuivi", columns={"idsuivi"}), @ORM\Index(name="idsuivi_2", columns={"idsuivi"}), @ORM\Index(name="iduser_2", columns={"iduser"})})
 * @ORM\Entity
 */
class Projetpfe
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
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date", nullable=false)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date", nullable=false)
     */
    private $datefin;

    /**
     * @var float
     *
     * @ORM\Column(name="avancement", type="float", precision=10, scale=0, nullable=false)
     */
    private $avancement;

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
     * @var \Suivi
     *
     * @ORM\ManyToOne(targetEntity="Suivi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idsuivi", referencedColumnName="id")
     * })
     */
    private $idsuivi;



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
     * Set description
     *
     * @param string $description
     *
     * @return Projetpfe
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     *
     * @return Projetpfe
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     *
     * @return Projetpfe
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;

        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set avancement
     *
     * @param float $avancement
     *
     * @return Projetpfe
     */
    public function setAvancement($avancement)
    {
        $this->avancement = $avancement;

        return $this;
    }

    /**
     * Get avancement
     *
     * @return float
     */
    public function getAvancement()
    {
        return $this->avancement;
    }

    /**
     * Set iduser
     *
     * @param \fichepfeBundle\Entity\FosUser $iduser
     *
     * @return Projetpfe
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
     * Set idsuivi
     *
     * @param \fichepfeBundle\Entity\Suivi $idsuivi
     *
     * @return Projetpfe
     */
    public function setIdsuivi(\fichepfeBundle\Entity\Suivi $idsuivi = null)
    {
        $this->idsuivi = $idsuivi;

        return $this;
    }

    /**
     * Get idsuivi
     *
     * @return \fichepfeBundle\Entity\Suivi
     */
    public function getIdsuivi()
    {
        return $this->idsuivi;
    }
}
