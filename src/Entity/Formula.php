<?php

namespace App\Entity;

use App\Repository\FormulaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormulaRepository::class)]
class Formula
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 40)]
    private ?string $title = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descri = null;

    #[ORM\ManyToOne(inversedBy: 'formulas')]
    private ?Menu $relatioMenu = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getDescri(): ?string
    {
        return $this->descri;
    }

    public function setDescri(string $descri): static
    {
        $this->descri = $descri;

        return $this;
    }

    public function getRelatioMenu(): ?Menu
    {
        return $this->relatioMenu;
    }

    public function setRelatioMenu(?Menu $relatioMenu): static
    {
        $this->relatioMenu = $relatioMenu;

        return $this;
    }
}
