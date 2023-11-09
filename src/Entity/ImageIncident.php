<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImageIncident
 *
 * @ORM\Table(name="image_incident", indexes={@ORM\Index(name="image_incident_incident_FK", columns={"id_incident"})})
 * @ORM\Entity(repositoryClass= "App\Repository\ImageIncidentRepository")
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

    public function getIdImageIncident(): ?int
    {
        return $this->idImageIncident;
    }

    public function getNomImageIncident(): ?string
    {
        return $this->nomImageIncident;
    }

    public function setNomImageIncident(string $nomImageIncident): static
    {
        $this->nomImageIncident = $nomImageIncident;

        return $this;
    }

    public function getIdIncident(): ?Incident
    {
        return $this->idIncident;
    }

    public function setIdIncident(?Incident $idIncident): static
    {
        $this->idIncident = $idIncident;

        return $this;
    }


}
