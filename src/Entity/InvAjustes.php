<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvAjustes
 *
 * @ORM\Table(name="inv_ajustes", indexes={@ORM\Index(name="inv_ajustes_personal_idPersonal_fk", columns={"idResponsable"})})
 * @ORM\Entity
 */
class InvAjustes
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAjustes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idajustes;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_inv", type="string", length=10, nullable=false)
     */
    private $tipoInv;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha_ajuste", type="date", nullable=true)
     */
    private $fechaAjuste;

    /**
     * @var string|null
     *
     * @ORM\Column(name="motivo_ajuste", type="string", length=255, nullable=true)
     */
    private $motivoAjuste;

    /**
     * @var float|null
     *
     * @ORM\Column(name="inv_ant", type="float", precision=10, scale=0, nullable=true)
     */
    private $invAnt;

    /**
     * @var float|null
     *
     * @ORM\Column(name="inv_nvo", type="float", precision=10, scale=0, nullable=true)
     */
    private $invNvo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="codigo", type="integer", nullable=true)
     */
    private $codigo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lote", type="string", length=20, nullable=true)
     */
    private $lote;

    /**
     * @var \Personal
     *
     * @ORM\ManyToOne(targetEntity="Personal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idResponsable", referencedColumnName="idPersonal")
     * })
     */
    private $idresponsable;


}
