<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CatMp
 *
 * @ORM\Table(name="cat_mp")
 * @ORM\Entity(repositoryClass="App\Repository\CatMpRepository")
 */
class CatMp
{
    /**
     * @var int
     *
     * @ORM\Column(name="idCatMP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcatmp = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="catMP", type="string", length=20, nullable=false)
     */
    private $catmp = '';

    public function getIdcatmp(): ?int
    {
        return $this->idcatmp;
    }

    public function getCatmp(): ?string
    {
        return $this->catmp;
    }

    public function setCatmp(string $catmp): self
    {
        $this->catmp = $catmp;

        return $this;
    }


}
