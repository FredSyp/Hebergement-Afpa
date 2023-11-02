<?php

namespace App\Entity;

use Intendant;
use Doctrine\ORM\Mapping as ORM;

/**
 * RendezVous
 *
 * @ORM\Table(name="rendez_vous", indexes={@ORM\Index(name="rendez_vous_intendant_FK", columns={"id_intendant"}), @ORM\Index(name="rendez_vous_personne0_FK", columns={"id_personne"})})
 * @ORM\Entity
 */
class RendezVous
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_rendez_vous", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRendezVous;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rdv", type="date", nullable=false)
     */
    private $dateRdv;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_rdv", type="string", length=255, nullable=false)
     */
    private $heureRdv;

    /**
     * @var string
     *
     * @ORM\Column(name="motif_rdv", type="string", length=500, nullable=false)
     */
    private $motifRdv;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personne", referencedColumnName="id_personne")
     * })
     */
    private $idPersonne;

    /**
     * @var Intendant
     *
     * @ORM\ManyToOne(targetEntity="Intendant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_intendant", referencedColumnName="id_intendant")
     * })
     */
    private $idIntendant;


}
