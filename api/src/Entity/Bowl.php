<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\BowlRepository")
 */
class Bowl
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $animalName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $waterLevel;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dTime;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $fountainIsOpen;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAnimalName(): ?string
    {
        return $this->animalName;
    }

    public function setAnimalName(?string $animalName): self
    {
        $this->animalName = $animalName;

        return $this;
    }

    public function getWaterLevel(): ?int
    {
        return $this->waterLevel;
    }

    public function setWaterLevel(?int $waterLevel): self
    {
        $this->waterLevel = $waterLevel;

        return $this;
    }

    public function getDTime(): ?\DateTimeInterface
    {
        return $this->dTime;
    }

    public function setDTime(?\DateTimeInterface $dTime): self
    {
        $this->dTime = $dTime;

        return $this;
    }

    public function getFountainIsOpen(): ?bool
    {
        return $this->fountainIsOpen;
    }

    public function setFountainIsOpen(?bool $fountainIsOpen): self
    {
        $this->fountainIsOpen = $fountainIsOpen;

        return $this;
    }
}
