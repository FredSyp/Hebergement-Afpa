<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * RendezVous
 *
 * @ORM\Table(name="rendez_vous", indexes={@ORM\Index(name="rendez_vous_intendant_FK", columns={"id_intendant"}), @ORM\Index(name="rendez_vous_personne0_FK", columns={"id_personne"})})
 * @ORM\Entity(repositoryClass= "App\Repository\RendezVousRepository")
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
     * @var \Intendant
     *
     * @ORM\ManyToOne(targetEntity="Intendant")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_intendant", referencedColumnName="id_intendant")
     * })
     */
    private $idIntendant;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personne", referencedColumnName="id_personne")
     * })
     */
    private $idPersonne;

    public function getIdRendezVous(): ?int
    {
        return $this->idRendezVous;
    }

    public function getDateRdv(): ?\DateTimeInterface
    {
        return $this->dateRdv;
    }

    public function setDateRdv(\DateTimeInterface $dateRdv): static
    {
        $this->dateRdv = $dateRdv;

        return $this;
    }

    public function getHeureRdv(): ?string
    {
        return $this->heureRdv;
    }

    public function setHeureRdv(string $heureRdv): static
    {
        $this->heureRdv = $heureRdv;

        return $this;
    }

    public function getMotifRdv(): ?string
    {
        return $this->motifRdv;
    }

    public function setMotifRdv(string $motifRdv): static
    {
        $this->motifRdv = $motifRdv;

        return $this;
    }

    public function getIdIntendant(): ?Intendant
    {
        return $this->idIntendant;
    }

    public function setIdIntendant(?Intendant $idIntendant): static
    {
        $this->idIntendant = $idIntendant;

        return $this;
    }

    public function getIdPersonne(): ?Personne
    {
        return $this->idPersonne;
    }

    public function setIdPersonne(?Personne $idPersonne): static
    {
        $this->idPersonne = $idPersonne;

        return $this;
    }


}
