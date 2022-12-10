<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Clientes
 *
 * @ORM\Table(name="clientes", uniqueConstraints={@ORM\UniqueConstraint(name="clientes_nitCliente_uindex", columns={"nitCliente"})}, indexes={@ORM\Index(name="clientes_cat_clien_idCatClien_fk", columns={"idCatCliente"}), @ORM\Index(name="clientes_ciudades_Id_ciudad_fk", columns={"ciudadCliente"}), @ORM\Index(name="clientes_personal_idPersonal_fk", columns={"codVendedor"})})
 * @ORM\Entity(repositoryClass="App\Repository\ClientesRepository")
 */
class Clientes
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
     * @ORM\Column(name="nitCliente", type="string", length=15, nullable=false)
     */
    private $nitcliente = '';

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
     * @ORM\Column(name="cargoCliente", type="string", length=30, nullable=true)
     */
    private $cargocliente = '';

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
     * @ORM\Column(name="emailCliente", type="string", length=50, nullable=true)
     */
    private $emailcliente = '';

    /**
     * @var int
     *
     * @ORM\Column(name="estadoCliente", type="integer", nullable=false)
     */
    private $estadocliente;

    /**
     * @var int
     *
     * @ORM\Column(name="retIva", type="integer", nullable=false)
     */
    private $retiva = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="retIca", type="integer", nullable=false)
     */
    private $retica = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="retFte", type="integer", nullable=false)
     */
    private $retfte = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="retCree", type="integer", nullable=false, options={"default"="1"})
     */
    private $retcree = 1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fchCreacionCliente", type="date", nullable=false, options={"default"="2012-04-01"})
     */
    private $fchcreacioncliente = '2012-04-01';

    /**
     * @var int|null
     *
     * @ORM\Column(name="exenIva", type="integer", nullable=true)
     */
    private $exeniva = '0';

    /**
     * @var \Ciudades
     *
     * @ORM\ManyToOne(targetEntity="Ciudades")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ciudadCliente", referencedColumnName="idCiudad")
     * })
     */
    private $ciudadcliente;

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

    public function getNitcliente(): ?string
    {
        return $this->nitcliente;
    }

    public function setNitcliente(string $nitcliente): self
    {
        $this->nitcliente = $nitcliente;

        return $this;
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

    public function getCargocliente(): ?string
    {
        return $this->cargocliente;
    }

    public function setCargocliente(?string $cargocliente): self
    {
        $this->cargocliente = $cargocliente;

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

    public function getEstadocliente(): ?int
    {
        return $this->estadocliente;
    }

    public function setEstadocliente(int $estadocliente): self
    {
        $this->estadocliente = $estadocliente;

        return $this;
    }

    public function getRetiva(): ?int
    {
        return $this->retiva;
    }

    public function setRetiva(int $retiva): self
    {
        $this->retiva = $retiva;

        return $this;
    }

    public function getRetica(): ?int
    {
        return $this->retica;
    }

    public function setRetica(int $retica): self
    {
        $this->retica = $retica;

        return $this;
    }

    public function getRetfte(): ?int
    {
        return $this->retfte;
    }

    public function setRetfte(int $retfte): self
    {
        $this->retfte = $retfte;

        return $this;
    }

    public function getRetcree(): ?int
    {
        return $this->retcree;
    }

    public function setRetcree(int $retcree): self
    {
        $this->retcree = $retcree;

        return $this;
    }

    public function getFchcreacioncliente(): ?\DateTimeInterface
    {
        return $this->fchcreacioncliente;
    }

    public function setFchcreacioncliente(\DateTimeInterface $fchcreacioncliente): self
    {
        $this->fchcreacioncliente = $fchcreacioncliente;

        return $this;
    }

    public function getExeniva(): ?int
    {
        return $this->exeniva;
    }

    public function setExeniva(?int $exeniva): self
    {
        $this->exeniva = $exeniva;

        return $this;
    }

    public function getCiudadcliente(): ?Ciudades
    {
        return $this->ciudadcliente;
    }

    public function setCiudadcliente(?Ciudades $ciudadcliente): self
    {
        $this->ciudadcliente = $ciudadcliente;

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
