<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolePersonne
 *
 * @ORM\Table(name="role_personne")
 * @ORM\Entity
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


}
