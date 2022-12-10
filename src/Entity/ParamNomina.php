<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParamNomina
 *
 * @ORM\Table(name="param_nomina")
 * @ORM\Entity(repositoryClass="App\Repository\ParamNominaRepository")
 */
class ParamNomina
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_param", type="string", length=50, nullable=false)
     */
    private $descParam = '';

    /**
     * @var float
     *
     * @ORM\Column(name="val_param", type="float", precision=10, scale=3, nullable=false, options={"default"="0.000"})
     */
    private $valParam = 0.000;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescParam(): ?string
    {
        return $this->descParam;
    }

    public function setDescParam(string $descParam): self
    {
        $this->descParam = $descParam;

        return $this;
    }

    public function getValParam(): ?float
    {
        return $this->valParam;
    }

    public function setValParam(float $valParam): self
    {
        $this->valParam = $valParam;

        return $this;
    }


}
