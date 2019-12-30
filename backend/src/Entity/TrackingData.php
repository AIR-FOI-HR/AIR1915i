<?php

namespace App\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrackingDataRepository")
 */
class TrackingData
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $initialKilometers;

    /**
     * @ORM\Column(type="float")
     */
    private $endKilometers;

    /**
     * @ORM\Column(type="array")
     */
    private $locations = [];

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Vehicle", inversedBy="trackingData")
     */
    private $vehicle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInitialKilometers(): ?float
    {
        return $this->initialKilometers;
    }

    public function setInitialKilometers(float $initialKilometers): self
    {
        $this->initialKilometers = $initialKilometers;

        return $this;
    }

    public function getEndKilometers(): ?float
    {
        return $this->endKilometers;
    }

    public function setEndKilometers(float $endKilometers): self
    {
        $this->endKilometers = $endKilometers;

        return $this;
    }

    public function getLocations(): ?array
    {
        return $this->locations;
    }

    public function setLocations(array $locations): self
    {
        $this->locations = $locations;

        return $this;
    }

    public function getDate(): ?DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getVehicle(): ?Vehicle
    {
        return $this->vehicle;
    }

    public function setVehicle(?Vehicle $vehicle): self
    {
        $this->vehicle = $vehicle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
