<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domaine
 *
 * @ORM\Table(name="domaine")
 * @ORM\Entity(repositoryClass= "App\Repository\DomaineRepository") 
 */
class Domaine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_domaine", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDomaine;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_domaine", type="string", length=255, nullable=false)
     */
    private $libDomaine;

    /**
     * @var string
     *
     * @ORM\Column(name="grn", type="string", length=20, nullable=false)
     */
    private $grn;

    public function getIdDomaine(): ?int
    {
        return $this->idDomaine;
    }

    public function getLibDomaine(): ?string
    {
        return $this->libDomaine;
    }

    public function setLibDomaine(string $libDomaine): static
    {
        $this->libDomaine = $libDomaine;

        return $this;
    }

    public function getGrn(): ?string
    {
        return $this->grn;
    }

    public function setGrn(string $grn): static
    {
        $this->grn = $grn;

        return $this;
    }


}
