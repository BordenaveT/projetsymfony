<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'integer')]
    private $CodeCategorie;

    #[ORM\Column(type: 'string', length: 50)]
    private $NomCategorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeCategorie(): ?int
    {
        return $this->CodeCategorie;
    }

    public function setCodeCategorie(int $CodeCategorie): self
    {
        $this->CodeCategorie = $CodeCategorie;

        return $this;
    }

    public function getNomCategorie(): ?string
    {
        return $this->NomCategorie;
    }

    public function setNomCategorie(string $NomCategorie): self
    {
        $this->NomCategorie = $NomCategorie;

        return $this;
    }
}
