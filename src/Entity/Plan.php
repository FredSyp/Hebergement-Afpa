<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plan
 *
 * @ORM\Table(name="plan", indexes={@ORM\Index(name="plan_chambre_FK", columns={"id_chambre"})})
 * @ORM\Entity(repositoryClass= "App\Repository\PlanRepository") 
 */
class Plan
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_plan", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlan;

    /**
     * @var string
     *
     * @ORM\Column(name="img_plan", type="string", length=255, nullable=false)
     */
    private $imgPlan;

    /**
     * @var \Chambre
     *
     * @ORM\ManyToOne(targetEntity="Chambre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_chambre", referencedColumnName="id_chambre")
     * })
     */
    private $idChambre;

    public function getIdPlan(): ?int
    {
        return $this->idPlan;
    }

    public function getImgPlan(): ?string
    {
        return $this->imgPlan;
    }

    public function setImgPlan(string $imgPlan): static
    {
        $this->imgPlan = $imgPlan;

        return $this;
    }

    public function getIdChambre(): ?Chambre
    {
        return $this->idChambre;
    }

    public function setIdChambre(?Chambre $idChambre): static
    {
        $this->idChambre = $idChambre;

        return $this;
    }


}
