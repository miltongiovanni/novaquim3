<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedores
 *
 * @ORM\Table(name="proveedores", indexes={@ORM\Index(name="proveedores_tasa_reteica_idTasaRetIca_fk", columns={"idTasaIcaProv"}), @ORM\Index(name="proveedores_cat_prov_idCatProv_fk", columns={"idCatProv"}), @ORM\Index(name="proveedores_tasa_retefuente_idTasaRetefuente_fk", columns={"idRetefuente"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProveedoresRepository")
 */
class Proveedores
{
    /**
     * @var int
     *
     * @ORM\Column(name="idProv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprov;

    /**
     * @var string
     *
     * @ORM\Column(name="nitProv", type="string", length=15, nullable=false)
     */
    private $nitprov = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nomProv", type="string", length=50, nullable=false)
     */
    private $nomprov = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dirProv", type="string", length=50, nullable=false)
     */
    private $dirprov = '';

    /**
     * @var string
     *
     * @ORM\Column(name="contProv", type="string", length=30, nullable=false)
     */
    private $contprov = '';

    /**
     * @var int
     *
     * @ORM\Column(name="telProv", type="integer", nullable=false)
     */
    private $telprov = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="emailProv", type="string", length=50, nullable=true)
     */
    private $emailprov;

    /**
     * @var int
     *
     * @ORM\Column(name="autoretProv", type="integer", nullable=false)
     */
    private $autoretprov = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="regProv", type="integer", nullable=false, options={"default"="1"})
     */
    private $regprov = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="estProv", type="integer", nullable=true, options={"default"="1"})
     */
    private $estprov = 1;

    /**
     * @var \TasaReteica
     *
     * @ORM\ManyToOne(targetEntity="TasaReteica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idTasaIcaProv", referencedColumnName="idTasaRetIca")
     * })
     */
    private $idtasaicaprov;

    /**
     * @var \CatProv
     *
     * @ORM\ManyToOne(targetEntity="CatProv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCatProv", referencedColumnName="idCatProv")
     * })
     */
    private $idcatprov;

    /**
     * @var \TasaRetefuente
     *
     * @ORM\ManyToOne(targetEntity="TasaRetefuente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idRetefuente", referencedColumnName="idTasaRetefuente")
     * })
     */
    private $idretefuente;

    public function getIdprov(): ?int
    {
        return $this->idprov;
    }

    public function getNitprov(): ?string
    {
        return $this->nitprov;
    }

    public function setNitprov(string $nitprov): self
    {
        $this->nitprov = $nitprov;

        return $this;
    }

    public function getNomprov(): ?string
    {
        return $this->nomprov;
    }

    public function setNomprov(string $nomprov): self
    {
        $this->nomprov = $nomprov;

        return $this;
    }

    public function getDirprov(): ?string
    {
        return $this->dirprov;
    }

    public function setDirprov(string $dirprov): self
    {
        $this->dirprov = $dirprov;

        return $this;
    }

    public function getContprov(): ?string
    {
        return $this->contprov;
    }

    public function setContprov(string $contprov): self
    {
        $this->contprov = $contprov;

        return $this;
    }

    public function getTelprov(): ?int
    {
        return $this->telprov;
    }

    public function setTelprov(int $telprov): self
    {
        $this->telprov = $telprov;

        return $this;
    }

    public function getEmailprov(): ?string
    {
        return $this->emailprov;
    }

    public function setEmailprov(?string $emailprov): self
    {
        $this->emailprov = $emailprov;

        return $this;
    }

    public function getAutoretprov(): ?int
    {
        return $this->autoretprov;
    }

    public function setAutoretprov(int $autoretprov): self
    {
        $this->autoretprov = $autoretprov;

        return $this;
    }

    public function getRegprov(): ?int
    {
        return $this->regprov;
    }

    public function setRegprov(int $regprov): self
    {
        $this->regprov = $regprov;

        return $this;
    }

    public function getEstprov(): ?int
    {
        return $this->estprov;
    }

    public function setEstprov(?int $estprov): self
    {
        $this->estprov = $estprov;

        return $this;
    }

    public function getIdtasaicaprov(): ?TasaReteica
    {
        return $this->idtasaicaprov;
    }

    public function setIdtasaicaprov(?TasaReteica $idtasaicaprov): self
    {
        $this->idtasaicaprov = $idtasaicaprov;

        return $this;
    }

    public function getIdcatprov(): ?CatProv
    {
        return $this->idcatprov;
    }

    public function setIdcatprov(?CatProv $idcatprov): self
    {
        $this->idcatprov = $idcatprov;

        return $this;
    }

    public function getIdretefuente(): ?TasaRetefuente
    {
        return $this->idretefuente;
    }

    public function setIdretefuente(?TasaRetefuente $idretefuente): self
    {
        $this->idretefuente = $idretefuente;

        return $this;
    }


}
