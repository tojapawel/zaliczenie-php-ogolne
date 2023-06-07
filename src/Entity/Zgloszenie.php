<?php

namespace App\Entity;

use App\Repository\ZgloszenieRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ZgloszenieRepository::class)]
class Zgloszenie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nazwa = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $czas_dodania = null;

    #[ORM\ManyToOne(inversedBy: 'zgloszenies')]
    private ?Kategoria $kategoria = null;

    #[ORM\ManyToOne(inversedBy: 'zgloszenies')]
    private ?User $dodane_przez = null;

    #[ORM\Column(length: 255)]
    private ?string $opis = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }

    public function setNazwa(string $nazwa): self
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    public function getCzasDodania(): ?\DateTimeInterface
    {
        return $this->czas_dodania;
    }

    public function setCzasDodania(\DateTimeInterface $czas_dodania): self
    {
        $this->czas_dodania = $czas_dodania;

        return $this;
    }

    public function getKategoria(): ?Kategoria
    {
        return $this->kategoria;
    }

    public function setKategoria(?Kategoria $kategoria): self
    {
        $this->kategoria = $kategoria;

        return $this;
    }

    public function getDodanePrzez(): ?User
    {
        return $this->dodane_przez;
    }

    public function setDodanePrzez(?User $dodane_przez): self
    {
        $this->dodane_przez = $dodane_przez;

        return $this;
    }

    public function getOpis(): ?string
    {
        return $this->opis;
    }

    public function setOpis(string $opis): self
    {
        $this->opis = $opis;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
