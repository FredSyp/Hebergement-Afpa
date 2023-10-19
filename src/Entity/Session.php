<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session", indexes={@ORM\Index(name="session_formations_FK", columns={"id_formation"})})
 * @ORM\Entity(repositoryClass= "App\Repository\SessionRepository") 
 */
class Session
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_session", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSession;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entree", type="date", nullable=false)
     */
    private $dateEntree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sortie", type="date", nullable=false)
     */
    private $dateSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_offre", type="string", length=20, nullable=false)
     */
    private $numeroOffre;

    /**
     * @var \Formations
     *
     * @ORM\ManyToOne(targetEntity="Formations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_formation", referencedColumnName="id_formation")
     * })
     */
    private $idFormation;

    public function getIdSession(): ?int
    {
        return $this->idSession;
    }

    public function getDateEntree(): ?\DateTimeInterface
    {
        return $this->dateEntree;
    }

    public function setDateEntree(\DateTimeInterface $dateEntree): static
    {
        $this->dateEntree = $dateEntree;

        return $this;
    }

    public function getDateSortie(): ?\DateTimeInterface
    {
        return $this->dateSortie;
    }

    public function setDateSortie(\DateTimeInterface $dateSortie): static
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    public function getNumeroOffre(): ?string
    {
        return $this->numeroOffre;
    }

    public function setNumeroOffre(string $numeroOffre): static
    {
        $this->numeroOffre = $numeroOffre;

        return $this;
    }

    public function getIdFormation(): ?Formations
    {
        return $this->idFormation;
    }

    public function setIdFormation(?Formations $idFormation): static
    {
        $this->idFormation = $idFormation;

        return $this;
    }


}
