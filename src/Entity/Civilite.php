<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Civilite
 *
 * @ORM\Table(name="civilite")
 * @ORM\Entity(repositoryClass= "App\Repository\CiviliteRepository")
 */
class Civilite
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_civilite", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCivilite;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_civilite", type="string", length=255, nullable=false)
     */
    private $libCivilite;

    public function getIdCivilite(): ?int
    {
        return $this->idCivilite;
    }

    public function getLibCivilite(): ?string
    {
        return $this->libCivilite;
    }

    public function setLibCivilite(string $libCivilite): static
    {
        $this->libCivilite = $libCivilite;

        return $this;
    }


}
