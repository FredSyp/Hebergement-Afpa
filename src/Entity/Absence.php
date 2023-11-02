<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Absence
 *
 * @ORM\Table(name="absence", indexes={@ORM\Index(name="absence_bail_FK", columns={"id_bail"})})
 * @ORM\Entity
 */
class Absence
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_absence", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAbsence;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb_abs", type="date", nullable=false)
     */
    private $dateDebAbs;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_abs", type="date", nullable=false)
     */
    private $dateFinAbs;

    /**
     * @var string
     *
     * @ORM\Column(name="motif_absence", type="string", length=500, nullable=false)
     */
    private $motifAbsence;

    /**
     * @var \Bail
     *
     * @ORM\ManyToOne(targetEntity="Bail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bail", referencedColumnName="id_bail")
     * })
     */
    private $idBail;


}
