<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avertissement
 *
 * @ORM\Table(name="avertissement", indexes={@ORM\Index(name="avertissement_incident_FK", columns={"id_incident"})})
 * @ORM\Entity
 */
class Avertissement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_avertissement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAvertissement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_avertissement", type="date", nullable=false)
     */
    private $dateAvertissement;

    /**
     * @var \Incident
     *
     * @ORM\ManyToOne(targetEntity="Incident")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_incident", referencedColumnName="id_incident")
     * })
     */
    private $idIncident;


}
