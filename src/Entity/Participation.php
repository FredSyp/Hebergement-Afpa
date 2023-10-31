<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Participation
 *
 * @ORM\Table(name="participation", indexes={@ORM\Index(name="participation_session1_FK", columns={"id_session"}), @ORM\Index(name="participation_personne_FK", columns={"id_personne"}), @ORM\Index(name="participation_financeur0_FK", columns={"id_financeur"})})
 * @ORM\Entity(repositoryClass= "App\Repository\ParticipationRepository")
 */
class Participation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_participation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParticipation;

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
     * @var \Session
     *
     * @ORM\ManyToOne(targetEntity="Session")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_session", referencedColumnName="id_session")
     * })
     */
    private $idSession;

    /**
     * @var \Financeur
     *
     * @ORM\ManyToOne(targetEntity="Financeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_financeur", referencedColumnName="id_financeur")
     * })
     */
    private $idFinanceur;

    public function getIdParticipation(): ?int
    {
        return $this->idParticipation;
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

    public function getIdSession(): ?Session
    {
        return $this->idSession;
    }

    public function setIdSession(?Session $idSession): static
    {
        $this->idSession = $idSession;

        return $this;
    }

    public function getIdFinanceur(): ?Financeur
    {
        return $this->idFinanceur;
    }

    public function setIdFinanceur(?Financeur $idFinanceur): static
    {
        $this->idFinanceur = $idFinanceur;

        return $this;
    }


}
