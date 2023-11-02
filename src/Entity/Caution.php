<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caution
 *
 * @ORM\Table(name="caution", indexes={@ORM\Index(name="caution_bail_FK", columns={"id_bail"}), @ORM\Index(name="caution_type_paiement0_FK", columns={"id_paiement"})})
 * @ORM\Entity
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


}
