<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClientesCotiz
 *
 * @ORM\Table(name="clientes_cotiz", indexes={@ORM\Index(name="cod_vend", columns={"codVendedor"}), @ORM\Index(name="Id_cat_clien", columns={"idCatCliente"}), @ORM\Index(name="Ciudad_clien", columns={"idCiudad"})})
 * @ORM\Entity(repositoryClass="App\Repository\ClientesCotizRepository")
 */
class ClientesCotiz
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nomCliente", type="string", length=60, nullable=false)
     */
    private $nomcliente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contactoCliente", type="string", length=40, nullable=false)
     */
    private $contactocliente = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cargoContacto", type="string", length=40, nullable=true)
     */
    private $cargocontacto = '';

    /**
     * @var string
     *
     * @ORM\Column(name="telCliente", type="string", length=8, nullable=false)
     */
    private $telcliente = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="celCliente", type="string", length=11, nullable=true)
     */
    private $celcliente = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dirCliente", type="string", length=60, nullable=false)
     */
    private $dircliente = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailCliente", type="string", length=60, nullable=true)
     */
    private $emailcliente = '';

    /**
     * @var \Ciudades
     *
     * @ORM\ManyToOne(targetEntity="Ciudades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCiudad", referencedColumnName="idCiudad")
     * })
     */
    private $idciudad;

    /**
     * @var \Personal
     *
     * @ORM\ManyToOne(targetEntity="Personal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codVendedor", referencedColumnName="idPersonal")
     * })
     */
    private $codvendedor;

    /**
     * @var \CatClien
     *
     * @ORM\ManyToOne(targetEntity="CatClien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCatCliente", referencedColumnName="idCatClien")
     * })
     */
    private $idcatcliente;

    public function getIdcliente(): ?int
    {
        return $this->idcliente;
    }

    public function getNomcliente(): ?string
    {
        return $this->nomcliente;
    }

    public function setNomcliente(string $nomcliente): self
    {
        $this->nomcliente = $nomcliente;

        return $this;
    }

    public function getContactocliente(): ?string
    {
        return $this->contactocliente;
    }

    public function setContactocliente(string $contactocliente): self
    {
        $this->contactocliente = $contactocliente;

        return $this;
    }

    public function getCargocontacto(): ?string
    {
        return $this->cargocontacto;
    }

    public function setCargocontacto(?string $cargocontacto): self
    {
        $this->cargocontacto = $cargocontacto;

        return $this;
    }

    public function getTelcliente(): ?string
    {
        return $this->telcliente;
    }

    public function setTelcliente(string $telcliente): self
    {
        $this->telcliente = $telcliente;

        return $this;
    }

    public function getCelcliente(): ?string
    {
        return $this->celcliente;
    }

    public function setCelcliente(?string $celcliente): self
    {
        $this->celcliente = $celcliente;

        return $this;
    }

    public function getDircliente(): ?string
    {
        return $this->dircliente;
    }

    public function setDircliente(string $dircliente): self
    {
        $this->dircliente = $dircliente;

        return $this;
    }

    public function getEmailcliente(): ?string
    {
        return $this->emailcliente;
    }

    public function setEmailcliente(?string $emailcliente): self
    {
        $this->emailcliente = $emailcliente;

        return $this;
    }

    public function getIdciudad(): ?Ciudades
    {
        return $this->idciudad;
    }

    public function setIdciudad(?Ciudades $idciudad): self
    {
        $this->idciudad = $idciudad;

        return $this;
    }

    public function getCodvendedor(): ?Personal
    {
        return $this->codvendedor;
    }

    public function setCodvendedor(?Personal $codvendedor): self
    {
        $this->codvendedor = $codvendedor;

        return $this;
    }

    public function getIdcatcliente(): ?CatClien
    {
        return $this->idcatcliente;
    }

    public function setIdcatcliente(?CatClien $idcatcliente): self
    {
        $this->idcatcliente = $idcatcliente;

        return $this;
    }


}
