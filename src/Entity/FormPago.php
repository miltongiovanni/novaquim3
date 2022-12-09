<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FormPago
 *
 * @ORM\Table(name="form_pago")
 * @ORM\Entity
 */
class FormPago
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFormaPago", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformapago = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="formaPago", type="string", length=13, nullable=false, options={"default"="0.00"})
     */
    private $formapago = '0.00';


}
