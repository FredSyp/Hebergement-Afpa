<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * EtatDesLieux
 *
 * @ORM\Table(name="etat_des_lieux", indexes={@ORM\Index(name="etat_des_lieux_bail_FK", columns={"id_bail"}), @ORM\Index(name="etat_des_lieux_type_etat_lieux0_FK", columns={"id_type_etat_lieux"})})
 * @ORM\Entity(repositoryClass= "App\Repository\EtatDesLieuxRepository") 
 */
class EtatDesLieux
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_etat_lieux", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEtatLieux;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=false)
     */
    private $commentaire;

    /**
     * @var \TypeEtatLieux
     *
     * @ORM\ManyToOne(targetEntity="TypeEtatLieux")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_type_etat_lieux", referencedColumnName="id_type_etat_lieux")
     * })
     */
    private $idTypeEtatLieux;

    /**
     * @var \Bail
     *
     * @ORM\ManyToOne(targetEntity="Bail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bail", referencedColumnName="id_bail")
     * })
     */
    private $idBail;

    public function getIdEtatLieux(): ?int
    {
        return $this->idEtatLieux;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getIdTypeEtatLieux(): ?TypeEtatLieux
    {
        return $this->idTypeEtatLieux;
    }

    public function setIdTypeEtatLieux(?TypeEtatLieux $idTypeEtatLieux): static
    {
        $this->idTypeEtatLieux = $idTypeEtatLieux;

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


}
