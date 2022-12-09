<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cambios
 *
 * @ORM\Table(name="cambios", indexes={@ORM\Index(name="cambios_personal_idPersonal_fk", columns={"codPersonal"})})
 * @ORM\Entity
 */
class Cambios
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCambio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcambio;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fechaCambio", type="date", nullable=true)
     */
    private $fechacambio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motivo_cambio", type="string", length=255, nullable=true)
     */
    private $motivoCambio;

    /**
     * @var \Personal
     *
     * @ORM\ManyToOne(targetEntity="Personal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codPersonal", referencedColumnName="idPersonal")
     * })
     */
    private $codpersonal;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Prodpre", inversedBy="idcambio")
     * @ORM\JoinTable(name="det_cambios2",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idCambio", referencedColumnName="idCambio")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="codPresentacionNvo", referencedColumnName="codPresentacion")
     *   }
     * )
     */
    private $codpresentacionnvo = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codpresentacionnvo = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
