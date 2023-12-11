<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

use App\Entity\EntityInterface;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role implements EntityInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 255)]
    private string $name;

    public function __consruct(string $name)
    {
        $this->name = $name;
    }

    public function serialize() : array
    {
        return [
            "name" => $this->name,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }
}
