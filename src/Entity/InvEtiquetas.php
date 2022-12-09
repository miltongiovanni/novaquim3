<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvEtiquetas
 *
 * @ORM\Table(name="inv_etiquetas")
 * @ORM\Entity
 */
class InvEtiquetas
{
    /**
     * @var int|null
     *
     * @ORM\Column(name="invEtiq", type="integer", nullable=true)
     */
    private $invetiq;

    /**
     * @var \Etiquetas
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Etiquetas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="codEtiq", referencedColumnName="codEtiqueta")
     * })
     */
    private $codetiq;


}
