<?php

namespace App\Entity;

use App\Repository\UserszeussorrocheRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserszeussorrocheRepository::class)]
class Userszeussorroche
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $full_name = null;

    #[ORM\Column(length: 1)]
    private ?string $enablezeussorroche = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $last_loginzeussorroche = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->full_name;
    }

    public function setFullName(string $full_name): self
    {
        $this->full_name = $full_name;

        return $this;
    }

    public function getEnablezeussorroche(): ?string
    {
        return $this->enablezeussorroche;
    }

    public function setEnablezeussorroche(string $enablezeussorroche): self
    {
        $this->enablezeussorroche = $enablezeussorroche;

        return $this;
    }

    public function getLastLoginzeussorroche(): ?\DateTimeInterface
    {
        return $this->last_loginzeussorroche;
    }

    public function setLastLoginzeussorroche(\DateTimeInterface $last_loginzeussorroche): self
    {
        $this->last_loginzeussorroche = $last_loginzeussorroche;

        return $this;
    }
}
