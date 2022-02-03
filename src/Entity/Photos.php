<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photos
 *
 * @ORM\Table(name="photos", indexes={@ORM\Index(name="Photos_Categorie_FK", columns={"CodeCategorie"})})
 * @ORM\Entity
 */
class Photos
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPhoto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idphoto;

    /**
     * @var float
     *
     * @ORM\Column(name="taille_enMo_", type="float", precision=10, scale=0, nullable=false)
     */
    private $tailleEnmo;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CodeCategorie", referencedColumnName="CodeCategorie")
     * })
     */
    private $codecategorie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Albums", inversedBy="idphoto")
     * @ORM\JoinTable(name="avoir",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idPhoto", referencedColumnName="idPhoto")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idAlbum", referencedColumnName="idAlbum")
     *   }
     * )
     */
    private $idalbum;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idalbum = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
