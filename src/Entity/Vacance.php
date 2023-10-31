<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Vacance
 *
 * @ORM\Table(name="vacance", indexes={@ORM\Index(name="vacance_session_FK", columns={"id_session"})})
 * @ORM\Entity(repositoryClass= "App\Repository\VacanceRepository")
 */
class Vacance
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_vacance", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVacance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_deb_vacance", type="date", nullable=false)
     */
    private $dateDebVacance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin_vacance", type="date", nullable=false)
     */
    private $dateFinVacance;

    /**
     * @var \Session
     *
     * @ORM\ManyToOne(targetEntity="Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_session", referencedColumnName="id_session")
     * })
     */
    private $idSession;

    public function getIdVacance(): ?int
    {
        return $this->idVacance;
    }

    public function getDateDebVacance(): ?\DateTimeInterface
    {
        return $this->dateDebVacance;
    }

    public function setDateDebVacance(\DateTimeInterface $dateDebVacance): static
    {
        $this->dateDebVacance = $dateDebVacance;

        return $this;
    }

    public function getDateFinVacance(): ?\DateTimeInterface
    {
        return $this->dateFinVacance;
    }

    public function setDateFinVacance(\DateTimeInterface $dateFinVacance): static
    {
        $this->dateFinVacance = $dateFinVacance;

        return $this;
    }

    public function getIdSession(): ?Session
    {
        return $this->idSession;
    }

    public function setIdSession(?Session $idSession): static
    {
        $this->idSession = $idSession;

        return $this;
    }


}
