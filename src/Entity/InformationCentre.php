<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * InformationCentre
 *
 * @ORM\Table(name="information_centre", indexes={@ORM\Index(name="information_centre_centre_FK", columns={"id_centre"})})
 * @ORM\Entity(repositoryClass= "App\Repository\InformationCentreRepository") 
 */
class InformationCentre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_information_centre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInformationCentre;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_document", type="string", length=255, nullable=false)
     */
    private $nomDocument;

    /**
     * @var string
     *
     * @ORM\Column(name="url_document", type="string", length=255, nullable=false)
     */
    private $urlDocument;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_depo_doc", type="date", nullable=false)
     */
    private $dateDepoDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire_doc", type="text", length=65535, nullable=false)
     */
    private $commentaireDoc;

    /**
     * @var \Centre
     *
     * @ORM\ManyToOne(targetEntity="Centre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_centre", referencedColumnName="id_centre")
     * })
     */
    private $idCentre;

    public function getIdInformationCentre(): ?int
    {
        return $this->idInformationCentre;
    }

    public function getNomDocument(): ?string
    {
        return $this->nomDocument;
    }

    public function setNomDocument(string $nomDocument): static
    {
        $this->nomDocument = $nomDocument;

        return $this;
    }

    public function getUrlDocument(): ?string
    {
        return $this->urlDocument;
    }

    public function setUrlDocument(string $urlDocument): static
    {
        $this->urlDocument = $urlDocument;

        return $this;
    }

    public function getDateDepoDoc(): ?\DateTimeInterface
    {
        return $this->dateDepoDoc;
    }

    public function setDateDepoDoc(\DateTimeInterface $dateDepoDoc): static
    {
        $this->dateDepoDoc = $dateDepoDoc;

        return $this;
    }

    public function getCommentaireDoc(): ?string
    {
        return $this->commentaireDoc;
    }

    public function setCommentaireDoc(string $commentaireDoc): static
    {
        $this->commentaireDoc = $commentaireDoc;

        return $this;
    }

    public function getIdCentre(): ?Centre
    {
        return $this->idCentre;
    }

    public function setIdCentre(?Centre $idCentre): static
    {
        $this->idCentre = $idCentre;

        return $this;
    }


}
