<?php

namespace fichepfeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Suivi
 *
 * @ORM\Table(name="suivi", indexes={@ORM\Index(name="iduser", columns={"iduser"}), @ORM\Index(name="iduser_2", columns={"iduser"})})
 * @ORM\Entity
 */
class Suivi
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDernierSuivi", type="date", nullable=false)
     */
    private $datederniersuivi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSuiviSuivant", type="date", nullable=false)
     */
    private $datesuivisuivant;

    /**
     * @var string
     *
     * @ORM\Column(name="appreciation", type="text", length=65535, nullable=false)
     */
    private $appreciation;

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
     * Set datederniersuivi
     *
     * @param \DateTime $datederniersuivi
     *
     * @return Suivi
     */
    public function setDatederniersuivi($datederniersuivi)
    {
        $this->datederniersuivi = $datederniersuivi;

        return $this;
    }

    /**
     * Get datederniersuivi
     *
     * @return \DateTime
     */
    public function getDatederniersuivi()
    {
        return $this->datederniersuivi;
    }

    /**
     * Set datesuivisuivant
     *
     * @param \DateTime $datesuivisuivant
     *
     * @return Suivi
     */
    public function setDatesuivisuivant($datesuivisuivant)
    {
        $this->datesuivisuivant = $datesuivisuivant;

        return $this;
    }

    /**
     * Get datesuivisuivant
     *
     * @return \DateTime
     */
    public function getDatesuivisuivant()
    {
        return $this->datesuivisuivant;
    }

    /**
     * Set appreciation
     *
     * @param string $appreciation
     *
     * @return Suivi
     */
    public function setAppreciation($appreciation)
    {
        $this->appreciation = $appreciation;

        return $this;
    }

    /**
     * Get appreciation
     *
     * @return string
     */
    public function getAppreciation()
    {
        return $this->appreciation;
    }

    /**
     * Set iduser
     *
     * @param \fichepfeBundle\Entity\FosUser $iduser
     *
     * @return Suivi
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
