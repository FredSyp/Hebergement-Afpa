<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Absence
 *
 * @ORM\Table(name="absence", indexes={@ORM\Index(name="absence_bail_FK", columns={"id_bail"})})
 * @ORM\Entity(repositoryClass= "App\Repository\AbsenceRepository") 
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
     * @var string
     *
     * @ORM\Column(name="justificatif_absence", type="string", length=150, nullable=false)
     */
    private $justificatifAbsence;

    /**
     * @var \Bail
     *
     * @ORM\ManyToOne(targetEntity="Bail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bail", referencedColumnName="id_bail")
     * })
     */
    private $idBail;

    public function getIdAbsence(): ?int
    {
        return $this->idAbsence;
    }

    public function getDateDebAbs(): ?\DateTimeInterface
    {
        return $this->dateDebAbs;
    }

    public function setDateDebAbs(\DateTimeInterface $dateDebAbs): static
    {
        $this->dateDebAbs = $dateDebAbs;

        return $this;
    }

    public function getDateFinAbs(): ?\DateTimeInterface
    {
        return $this->dateFinAbs;
    }

    public function setDateFinAbs(\DateTimeInterface $dateFinAbs): static
    {
        $this->dateFinAbs = $dateFinAbs;

        return $this;
    }

    public function getMotifAbsence(): ?string
    {
        return $this->motifAbsence;
    }

    public function setMotifAbsence(string $motifAbsence): static
    {
        $this->motifAbsence = $motifAbsence;

        return $this;
    }

    public function getIdBail(): ?Bail
    {
        return $this->idBail;
    }

    public function setIdBail(?Bail $idBail): static
    {
        $this->idBail = $idBail;

        return $this;
    }



    /**
     * Get the value of justificatifAbsence
     *
     * @return  string
     */ 
    public function getJustificatifAbsence()
    {
        return $this->justificatifAbsence;
    }

    /**
     * Set the value of justificatifAbsence
     *
     * @param  string  $justificatifAbsence
     *
     * @return  self
     */ 
    public function setJustificatifAbsence(string $justificatifAbsence)
    {
        $this->justificatifAbsence = $justificatifAbsence;

        return $this;
    }
}
