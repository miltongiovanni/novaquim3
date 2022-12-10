<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatProv
 *
 * @ORM\Table(name="cat_prov")
 * @ORM\Entity(repositoryClass="App\Repository\CatProvRepository")
 */
class CatProv
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCatProv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcatprov = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="desCatProv", type="string", length=30, nullable=false)
     */
    private $descatprov = '';

    public function getIdcatprov(): ?int
    {
        return $this->idcatprov;
    }

    public function getDescatprov(): ?string
    {
        return $this->descatprov;
    }

    public function setDescatprov(string $descatprov): self
    {
        $this->descatprov = $descatprov;

        return $this;
    }


}
