<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="CodeCategorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codecategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="NomCategorie", type="string", length=25, nullable=false)
     */
    private $nomcategorie;


}
