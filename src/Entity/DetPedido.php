<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetPedido
 *
 * @ORM\Table(name="det_pedido", indexes={@ORM\Index(name="det_pedido_idPedido_codProducto_index", columns={"idPedido", "codProducto"}), @ORM\Index(name="IDX_A5DBB9CEA7FDBE54", columns={"idPedido"})})
 * @ORM\Entity(repositoryClass="App\Repository\DetPedidoRepository")
 */
class DetPedido
{
    /**
     * @var int
     *
     * @ORM\Column(name="codProducto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codproducto = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cantProducto", type="integer", nullable=true)
     */
    private $cantproducto;

    /**
     * @var float
     *
     * @ORM\Column(name="precioProducto", type="float", precision=10, scale=0, nullable=false)
     */
    private $precioproducto = '0';

    /**
     * @var \Pedido
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Pedido")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPedido", referencedColumnName="idPedido")
     * })
     */
    private $idpedido;

    public function getCodproducto(): ?int
    {
        return $this->codproducto;
    }

    public function getCantproducto(): ?int
    {
        return $this->cantproducto;
    }

    public function setCantproducto(?int $cantproducto): self
    {
        $this->cantproducto = $cantproducto;

        return $this;
    }

    public function getPrecioproducto(): ?float
    {
        return $this->precioproducto;
    }

    public function setPrecioproducto(float $precioproducto): self
    {
        $this->precioproducto = $precioproducto;

        return $this;
    }

    public function getIdpedido(): ?Pedido
    {
        return $this->idpedido;
    }

    public function setIdpedido(?Pedido $idpedido): self
    {
        $this->idpedido = $idpedido;

        return $this;
    }


}
