<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'dodane_przez', targetEntity: Kategoria::class)]
    private Collection $kategorias;

    #[ORM\OneToMany(mappedBy: 'dodane_przez', targetEntity: Zgloszenie::class)]
    private Collection $zgloszenies;

    public function __construct()
    {
        $this->kategorias = new ArrayCollection();
        $this->zgloszenies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection<int, Kategoria>
     */
    public function getKategorias(): Collection
    {
        return $this->kategorias;
    }

    public function addKategoria(Kategoria $kategoria): self
    {
        if (!$this->kategorias->contains($kategoria)) {
            $this->kategorias->add($kategoria);
            $kategoria->setDodanePrzez($this);
        }

        return $this;
    }

    public function removeKategoria(Kategoria $kategoria): self
    {
        if ($this->kategorias->removeElement($kategoria)) {
            // set the owning side to null (unless already changed)
            if ($kategoria->getDodanePrzez() === $this) {
                $kategoria->setDodanePrzez(null);
            }
        }

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
            $zgloszeny->setDodanePrzez($this);
        }

        return $this;
    }

    public function removeZgloszeny(Zgloszenie $zgloszeny): self
    {
        if ($this->zgloszenies->removeElement($zgloszeny)) {
            // set the owning side to null (unless already changed)
            if ($zgloszeny->getDodanePrzez() === $this) {
                $zgloszeny->setDodanePrzez(null);
            }
        }

        return $this;
    }
}
