<?php

namespace App\\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Albums
 *
 * @ORM\Table(name="albums")
 * @ORM\Entity
 */
class Albums
{
    /**
     * @var int
     *
     * @ORM\Column(name="idAlbum", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idalbum;

    /**
     * @var string
     *
     * @ORM\Column(name="nomAlbum", type="string", length=50, nullable=false)
     */
    private $nomalbum;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Photos", mappedBy="idalbum")
     */
    private $idphoto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idphoto = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
