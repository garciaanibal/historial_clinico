<?php

namespace App\Entity;

use App\Repository\ObraSocialRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ObraSocialRepository::class)]
class ObraSocial
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $fechaAlta = null;

    #[ORM\Column(length: 255, nullable: true)]
        private ?string $operAlta = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $fechaMod = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $operMod = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getFechaAlta(): ?\DateTime
    {
        return $this->fechaAlta;
    }

    public function setFechaAlta(\DateTime $fechaAlta): static
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    public function getOperAlta(): ?string
    {
        return $this->operAlta;
    }

    public function setOperAlta(?string $operAlta): static
    {
        $this->operAlta = $operAlta;
        return $this;
    }

    public function getOperMod(): ?string
    {
        return $this->operMod;
    }

    public function setOperMod(?string $operMod): static
    {
        $this->operMod = $operMod;
        return $this;
    }
    

    public function getFechaMod(): ?\DateTime
    {
        return $this->fechaMod;
    }

    public function setFechaMod(\DateTime $fechaMod): static
    {
        $this->fechaMod = $fechaMod;

        return $this;
    }

}
