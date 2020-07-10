<?php

namespace App\Entity;

use App\Repository\FacturaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FacturaRepository::class)
 */
class Factura
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumeroFactura;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $cedulaCliente;

    /**
     * @ORM\Column(type="date")
     */
    private $fecha;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombreCliente;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroFactura(): ?int
    {
        return $this->NumeroFactura;
    }

    public function setNumeroFactura(int $NumeroFactura): self
    {
        $this->NumeroFactura = $NumeroFactura;

        return $this;
    }

    public function getCedulaCliente(): ?string
    {
        return $this->cedulaCliente;
    }

    public function setCedulaCliente(string $cedulaCliente): self
    {
        $this->cedulaCliente = $cedulaCliente;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getNombreCliente(): ?string
    {
        return $this->nombreCliente;
    }

    public function setNombreCliente(string $nombreCliente): self
    {
        $this->nombreCliente = $nombreCliente;

        return $this;
    }
}
