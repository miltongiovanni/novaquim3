<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetGastos
 *
 * @ORM\Table(name="det_gastos", indexes={@ORM\Index(name="codigo_dist", columns={"producto"}), @ORM\Index(name="det_gastos_tasa_iva_idTasaIva_fk", columns={"codIva"}), @ORM\Index(name="IDX_604DF7ACB9879909", columns={"idGasto"})})
 * @ORM\Entity(repositoryClass="App\Repository\DetGastosRepository")
 */
class DetGastos
{
    /**
     * @var string
     *
     * @ORM\Column(name="producto", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $producto = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="cantGasto", type="float", precision=8, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $cantgasto = 0.00;

    /**
     * @var float
     *
     * @ORM\Column(name="precGasto", type="float", precision=10, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $precgasto = 0.00;

    /**
     * @var \TasaIva
     *
     * @ORM\ManyToOne(targetEntity="TasaIva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codIva", referencedColumnName="idTasaIva")
     * })
     */
    private $codiva;

    /**
     * @var \Gastos
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Gastos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idGasto", referencedColumnName="idGasto")
     * })
     */
    private $idgasto;

    public function getProducto(): ?string
    {
        return $this->producto;
    }

    public function getCantgasto(): ?float
    {
        return $this->cantgasto;
    }

    public function setCantgasto(float $cantgasto): self
    {
        $this->cantgasto = $cantgasto;

        return $this;
    }

    public function getPrecgasto(): ?float
    {
        return $this->precgasto;
    }

    public function setPrecgasto(float $precgasto): self
    {
        $this->precgasto = $precgasto;

        return $this;
    }

    public function getCodiva(): ?TasaIva
    {
        return $this->codiva;
    }

    public function setCodiva(?TasaIva $codiva): self
    {
        $this->codiva = $codiva;

        return $this;
    }

    public function getIdgasto(): ?Gastos
    {
        return $this->idgasto;
    }

    public function setIdgasto(?Gastos $idgasto): self
    {
        $this->idgasto = $idgasto;

        return $this;
    }


}
