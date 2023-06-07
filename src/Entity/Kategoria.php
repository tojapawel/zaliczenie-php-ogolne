<?php

namespace App\Entity;

use App\Repository\KategoriaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: KategoriaRepository::class)]
class Kategoria
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nazwa = null;

    #[ORM\ManyToOne(inversedBy: 'kategorias')]
    private ?User $dodane_przez = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $czas_dodania = null;

    #[ORM\OneToMany(mappedBy: 'kategoria', targetEntity: Zgloszenie::class)]
    private Collection $zgloszenies;

    public function __construct()
    {
        $this->zgloszenies = new ArrayCollection();
    }

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

    public function getDodanePrzez(): ?User
    {
        return $this->dodane_przez;
    }

    public function setDodanePrzez(?User $dodane_przez): self
    {
        $this->dodane_przez = $dodane_przez;

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

    /**
     * @return Collection<int, Zgloszenie>
     */
    public function getZgloszenies(): Collection
    {
        return $this->zgloszenies;
    }

    public function addZgloszeny(Zgloszenie $zgloszeny): self
    {
        if (!$this->zgloszenies->contains($zgloszeny)) {
            $this->zgloszenies->add($zgloszeny);
            $zgloszeny->setKategoria($this);
        }

        return $this;
    }

    public function removeZgloszeny(Zgloszenie $zgloszeny): self
    {
        if ($this->zgloszenies->removeElement($zgloszeny)) {
            // set the owning side to null (unless already changed)
            if ($zgloszeny->getKategoria() === $this) {
                $zgloszeny->setKategoria(null);
            }
        }

        return $this;
    }
}
