<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametre
 *
 * @ORM\Table(name="parametre", indexes={@ORM\Index(name="parametre_centre_FK", columns={"id_centre"})})
 * @ORM\Entity
 */
class Parametre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_parametre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParametre;

    /**
     * @var string
     *
     * @ORM\Column(name="loyer", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $loyer;

    /**
     * @var string
     *
     * @ORM\Column(name="caution", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $caution;

    /**
     * @var \Centre
     *
     * @ORM\ManyToOne(targetEntity="Centre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centre", referencedColumnName="id_centre")
     * })
     */
    private $idCentre;


}
