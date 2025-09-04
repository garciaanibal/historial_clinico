<?php

namespace App\Entity;

use App\Repository\PacienteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PacienteRepository::class)]
class Paciente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $apellido = null;

    #[ORM\Column]
    private ?int $dni = null;

    #[ORM\Column]
    private ?int $nroAfiliado = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $dir = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $altura = null;

    #[ORM\Column(length: 255)]
    private ?string $ciudad = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telefono = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $mail = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $contacto = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $fechaAlta = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $operAlta = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $fechaMod = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $operMod = null;

    #[ORM\Column]
    private ?int $credencialNro = null;

    #[ORM\Column(length: 255)]
    private ?string $sexo = null;

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

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(string $apellido): static
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getDni(): ?int
    {
        return $this->dni;
    }

    public function setDni(int $dni): static
    {
        $this->dni = $dni;

        return $this;
    }

    public function getNroAfiliado(): ?int
    {
        return $this->nroAfiliado;
    }

    public function setNroAfiliado(int $nroAfiliado): static
    {
        $this->nroAfiliado = $nroAfiliado;

        return $this;
    }

    public function getDir(): ?string
    {
        return $this->dir;
    }

    public function setDir(?string $dir): static
    {
        $this->dir = $dir;

        return $this;
    }

    public function getAltura(): ?string
    {
        return $this->altura;
    }

    public function setAltura(?string $altura): static
    {
        $this->altura = $altura;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->ciudad;
    }

    public function setCiudad(string $ciudad): static
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): static
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): static
    {
        $this->mail = $mail;

        return $this;
    }

    public function getContacto(): ?string
    {
        return $this->contacto;
    }

    public function setContacto(?string $contacto): static
    {
        $this->contacto = $contacto;

        return $this;
    }

    public function getFechaAlta(): ?\DateTime
    {
        return $this->fechaAlta;
    }

    public function setFechaAlta(?\DateTime $fechaAlta): static
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    public function getOperAlta(): ?\DateTime
    {
        return $this->operAlta;
    }

    public function setOperAlta(?\DateTime $operAlta): static
    {
        $this->operAlta = $operAlta;

        return $this;
    }

    public function getFechaMod(): ?\DateTime
    {
        return $this->fechaMod;
    }

    public function setFechaMod(?\DateTime $fechaMod): static
    {
        $this->fechaMod = $fechaMod;

        return $this;
    }

    public function getOperMod(): ?\DateTime
    {
        return $this->operMod;
    }

    public function setOperMod(?\DateTime $operMod): static
    {
        $this->operMod = $operMod;

        return $this;
    }

    public function getCredencialNro(): ?int
    {
        return $this->credencialNro;
    }

    public function setCredencialNro(int $credencialNro): static
    {
        $this->credencialNro = $credencialNro;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): static
    {
        $this->sexo = $sexo;

        return $this;
    }
}
