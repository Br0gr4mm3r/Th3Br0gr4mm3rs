<?php

namespace fichepfeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taches
 *
 * @ORM\Table(name="taches", indexes={@ORM\Index(name="idprojet", columns={"idprojet"})})
 * @ORM\Entity
 */
class Taches
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
     * @var \Projetpfe
     *
     * @ORM\ManyToOne(targetEntity="Projetpfe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idprojet", referencedColumnName="id")
     * })
     */
    private $idprojet;



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
     * @return Taches
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
     * Set idprojet
     *
     * @param \fichepfeBundle\Entity\Projetpfe $idprojet
     *
     * @return Taches
     */
    public function setIdprojet(\fichepfeBundle\Entity\Projetpfe $idprojet = null)
    {
        $this->idprojet = $idprojet;

        return $this;
    }

    /**
     * Get idprojet
     *
     * @return \fichepfeBundle\Entity\Projetpfe
     */
    public function getIdprojet()
    {
        return $this->idprojet;
    }
}
