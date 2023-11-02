<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Civilite
 *
 * @ORM\Table(name="civilite")
 * @ORM\Entity
 */
class Civilite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_civilite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_civilite", type="string", length=255, nullable=false)
     */
    private $libCivilite;


}
