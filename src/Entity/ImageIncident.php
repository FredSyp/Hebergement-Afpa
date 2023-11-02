<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageIncident
 *
 * @ORM\Table(name="image_incident", indexes={@ORM\Index(name="image_incident_incident_FK", columns={"id_incident"})})
 * @ORM\Entity
 */
class ImageIncident
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_image_incident", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImageIncident;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_image_incident", type="string", length=255, nullable=false)
     */
    private $nomImageIncident;

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
