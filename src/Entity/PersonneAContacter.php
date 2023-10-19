<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonneAContacter
 *
 * @ORM\Table(name="personne_a_contacter", indexes={@ORM\Index(name="personne_a_contacter_personne_FK", columns={"id_personne"})})
 * @ORM\Entity(repositoryClass= "App\Repository\PersonneAContacterRepository") 
 */
class PersonneAContacter
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_personne_contact", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPersonneContact;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="num_tel_contact", type="string", length=20, nullable=false)
     */
    private $numTelContact;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_personne", referencedColumnName="id_personne")
     * })
     */
    private $idPersonne;

    public function getIdPersonneContact(): ?int
    {
        return $this->idPersonneContact;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNumTelContact(): ?string
    {
        return $this->numTelContact;
    }

    public function setNumTelContact(string $numTelContact): static
    {
        $this->numTelContact = $numTelContact;

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
