<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesSucursal
 *
 * @ORM\Table(name="clientes_sucursal", indexes={@ORM\Index(name="clientes_sucursal_clientes_idCliente_fk", columns={"idCliente"}), @ORM\Index(name="clientes_sucursal_ciudades_IdCiudad_fk", columns={"ciudadSucursal"})})
 * @ORM\Entity(repositoryClass="App\Repository\ClientesSucursalRepository")
 */
class ClientesSucursal
{
    /**
     * @var int
     *
     * @ORM\Column(name="idSucursal", type="integer", nullable=false, options={"default"="1"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idsucursal = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="dirSucursal", type="string", length=60, nullable=false)
     */
    private $dirsucursal = '';

    /**
     * @var int
     *
     * @ORM\Column(name="telSucursal", type="bigint", nullable=false)
     */
    private $telsucursal = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nomSucursal", type="string", length=60, nullable=false)
     */
    private $nomsucursal = '';

    /**
     * @var \Clientes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="idCliente")
     * })
     */
    private $idcliente;

    /**
     * @var \Ciudades
     *
     * @ORM\ManyToOne(targetEntity="Ciudades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ciudadSucursal", referencedColumnName="idCiudad")
     * })
     */
    private $ciudadsucursal;

    public function getIdsucursal(): ?int
    {
        return $this->idsucursal;
    }

    public function getDirsucursal(): ?string
    {
        return $this->dirsucursal;
    }

    public function setDirsucursal(string $dirsucursal): self
    {
        $this->dirsucursal = $dirsucursal;

        return $this;
    }

    public function getTelsucursal(): ?string
    {
        return $this->telsucursal;
    }

    public function setTelsucursal(string $telsucursal): self
    {
        $this->telsucursal = $telsucursal;

        return $this;
    }

    public function getNomsucursal(): ?string
    {
        return $this->nomsucursal;
    }

    public function setNomsucursal(string $nomsucursal): self
    {
        $this->nomsucursal = $nomsucursal;

        return $this;
    }

    public function getIdcliente(): ?Clientes
    {
        return $this->idcliente;
    }

    public function setIdcliente(?Clientes $idcliente): self
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    public function getCiudadsucursal(): ?Ciudades
    {
        return $this->ciudadsucursal;
    }

    public function setCiudadsucursal(?Ciudades $ciudadsucursal): self
    {
        $this->ciudadsucursal = $ciudadsucursal;

        return $this;
    }


}
