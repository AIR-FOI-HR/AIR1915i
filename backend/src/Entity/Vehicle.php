<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VehicleRepository")
 */
class Vehicle
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $registrationMark;

    /**
     * @ORM\Column(type="float")
     */
    private $mileage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TrackingData", mappedBy="vehicle")
     */
    private $trackingData;

    public function __construct()
    {
        $this->trackingData = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRegistrationMark(): ?string
    {
        return $this->registrationMark;
    }

    public function setRegistrationMark(string $registrationMark): self
    {
        $this->registrationMark = $registrationMark;

        return $this;
    }

    public function getMileage(): ?float
    {
        return $this->mileage;
    }

    public function setMileage(float $mileage): self
    {
        $this->mileage = $mileage;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|TrackingData[]
     */
    public function getTrackingData(): Collection
    {
        return $this->trackingData;
    }

    public function addTrackingData(TrackingData $trackingData): self
    {
        if (!$this->trackingData->contains($trackingData)) {
            $this->trackingData[] = $trackingData;
            $trackingData->setVehicle($this);
        }

        return $this;
    }

    public function removeTrackingData(TrackingData $trackingData): self
    {
        if ($this->trackingData->contains($trackingData)) {
            $this->trackingData->removeElement($trackingData);
            // set the owning side to null (unless already changed)
            if ($trackingData->getVehicle() === $this) {
                $trackingData->setVehicle(null);
            }
        }

        return $this;
    }
}
