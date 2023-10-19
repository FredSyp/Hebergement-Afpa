<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etage
 *
 * @ORM\Table(name="etage")
 * @ORM\Entity(repositoryClass= "App\Repository\EtageRepository") 
 */
class Etage
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_etage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEtage;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_etage", type="string", length=10, nullable=false)
     */
    private $numeroEtage;

    /**
     * @var bool
     *
     * @ORM\Column(name="reserver_femme", type="boolean", nullable=false)
     */
    private $reserverFemme;

    public function getIdEtage(): ?int
    {
        return $this->idEtage;
    }

    public function getNumeroEtage(): ?string
    {
        return $this->numeroEtage;
    }

    public function setNumeroEtage(string $numeroEtage): static
    {
        $this->numeroEtage = $numeroEtage;

        return $this;
    }

    public function isReserverFemme(): ?bool
    {
        return $this->reserverFemme;
    }

    public function setReserverFemme(bool $reserverFemme): static
    {
        $this->reserverFemme = $reserverFemme;

        return $this;
    }


}
