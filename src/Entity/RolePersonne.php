<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolePersonne
 *
 * @ORM\Table(name="role_personne")
 * @ORM\Entity(repositoryClass= "App\Repository\RolePersonneRepository") 
 */
class RolePersonne
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_role_personne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRolePersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_role_personne", type="string", length=50, nullable=false)
     */
    private string $libRolePersonne;

    public function getIdRolePersonne(): ?int
    {
        return $this->idRolePersonne;
    }

    public function getLibRolePersonne(): ?string
    {
        return $this->libRolePersonne;
    }

    public function setLibRolePersonne(string $libRolePersonne): static
    {
        $this->libRolePersonne = $libRolePersonne;

        return $this;
    }


}
