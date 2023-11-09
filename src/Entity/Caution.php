<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Caution
 *
 * @ORM\Table(name="caution", indexes={@ORM\Index(name="caution_bail_FK", columns={"id_bail"}), @ORM\Index(name="caution_type_paiement0_FK", columns={"id_paiement"})})
 * @ORM\Entity(repositoryClass= "App\Repository\CautionRepository")
 */
class Caution
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_caution", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCaution;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depot", type="date", nullable=false)
     */
    private $dateDepot;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_restitution", type="date", nullable=true)
     */
    private $dateRestitution;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_caution", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $montantCaution;

    /**
     * @var \Bail
     *
     * @ORM\ManyToOne(targetEntity="Bail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_bail", referencedColumnName="id_bail")
     * })
     */
    private $idBail;

    /**
     * @var \TypePaiement
     *
     * @ORM\ManyToOne(targetEntity="TypePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_paiement", referencedColumnName="id_paiement")
     * })
     */
    private $idPaiement;

    public function getIdCaution(): ?int
    {
        return $this->idCaution;
    }

    public function getDateDepot(): ?\DateTimeInterface
    {
        return $this->dateDepot;
    }

    public function setDateDepot(\DateTimeInterface $dateDepot): static
    {
        $this->dateDepot = $dateDepot;

        return $this;
    }

    public function getDateRestitution(): ?\DateTimeInterface
    {
        return $this->dateRestitution;
    }

    public function setDateRestitution(?\DateTimeInterface $dateRestitution): static
    {
        $this->dateRestitution = $dateRestitution;

        return $this;
    }

    public function getMontantCaution(): ?string
    {
        return $this->montantCaution;
    }

    public function setMontantCaution(string $montantCaution): static
    {
        $this->montantCaution = $montantCaution;

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

    public function getIdPaiement(): ?TypePaiement
    {
        return $this->idPaiement;
    }

    public function setIdPaiement(?TypePaiement $idPaiement): static
    {
        $this->idPaiement = $idPaiement;

        return $this;
    }


}
