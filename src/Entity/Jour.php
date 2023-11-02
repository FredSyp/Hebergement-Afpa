<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jour
 *
 * @ORM\Table(name="jour")
 * @ORM\Entity
 */
class Jour
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_jour", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idJour;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_jour", type="string", length=25, nullable=false)
     */
    private $libJour;


}
