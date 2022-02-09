<?php

namespace App\Entity;

use App\Repository\PhotosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PhotosRepository::class)]
class Photos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $CodePhoto;

    #[ORM\Column(type: 'float')]
    private $Taille;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodePhoto(): ?int
    {
        return $this->CodePhoto;
    }

    public function setCodePhoto(int $CodePhoto): self
    {
        $this->CodePhoto = $CodePhoto;

        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->Taille;
    }

    public function setTaille(float $Taille): self
    {
        $this->Taille = $Taille;

        return $this;
    }
}
