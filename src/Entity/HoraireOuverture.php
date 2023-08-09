<?php

namespace App\Entity;

use App\Repository\HoraireOuvertureRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HoraireOuvertureRepository::class)]
class HoraireOuverture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Jour = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $ouverture = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fermeture = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJour(): ?string
    {
        return $this->Jour;
    }

    public function setJour(string $Jour): static
    {
        $this->Jour = $Jour;

        return $this;
    }

    public function getOuverture(): ?\DateTimeInterface
    {
        return $this->ouverture;
    }

    public function setOuverture(\DateTimeInterface $ouverture): static
    {
        $this->ouverture = $ouverture;

        return $this;
    }

    public function getFermeture(): ?\DateTimeInterface
    {
        return $this->fermeture;
    }

    public function setFermeture(\DateTimeInterface $fermeture): static
    {
        $this->fermeture = $fermeture;

        return $this;
    }
}
