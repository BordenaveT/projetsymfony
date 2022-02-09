<?php

namespace App\Entity;

use App\Repository\AlbumsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlbumsRepository::class)]
class Albums
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $CodeAlbum;

    #[ORM\Column(type: 'string', length: 50)]
    private $NomAlbum;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeAlbum(): ?int
    {
        return $this->CodeAlbum;
    }

    public function setCodeAlbum(int $CodeAlbum): self
    {
        $this->CodeAlbum = $CodeAlbum;

        return $this;
    }

    public function getNomAlbum(): ?string
    {
        return $this->NomAlbum;
    }

    public function setNomAlbum(string $NomAlbum): self
    {
        $this->NomAlbum = $NomAlbum;

        return $this;
    }
}
