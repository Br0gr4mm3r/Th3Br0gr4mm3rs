<?php

namespace fichepfeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offrestage
 *
 * @ORM\Table(name="offrestage", indexes={@ORM\Index(name="idorganisme", columns={"idorganisme"})})
 * @ORM\Entity
 */
class Offrestage
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
     * @ORM\Column(name="sujet", type="text", length=65535, nullable=false)
     */
    private $sujet;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombrePost", type="integer", nullable=false)
     */
    private $nombrepost;

    /**
     * @var \Organismeacceuil
     *
     * @ORM\ManyToOne(targetEntity="Organismeacceuil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idorganisme", referencedColumnName="id")
     * })
     */
    private $idorganisme;



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
     * Set sujet
     *
     * @param string $sujet
     *
     * @return Offrestage
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set nombrepost
     *
     * @param integer $nombrepost
     *
     * @return Offrestage
     */
    public function setNombrepost($nombrepost)
    {
        $this->nombrepost = $nombrepost;

        return $this;
    }

    /**
     * Get nombrepost
     *
     * @return integer
     */
    public function getNombrepost()
    {
        return $this->nombrepost;
    }

    /**
     * Set idorganisme
     *
     * @param \fichepfeBundle\Entity\Organismeacceuil $idorganisme
     *
     * @return Offrestage
     */
    public function setIdorganisme(\fichepfeBundle\Entity\Organismeacceuil $idorganisme = null)
    {
        $this->idorganisme = $idorganisme;

        return $this;
    }

    /**
     * Get idorganisme
     *
     * @return \fichepfeBundle\Entity\Organismeacceuil
     */
    public function getIdorganisme()
    {
        return $this->idorganisme;
    }
}
