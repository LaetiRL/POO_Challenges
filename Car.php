<?php
require_once 'Vehicle.php';

class Car extends Vehicle
{
    private string $energy;
    private int $energyLevel;

    // constantes

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    // constructor

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    // methodes get

    public function getEnergy(): string
    {
        return $this->energy;
    }
   
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    // methodes set

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    // methodes actions

    public function start(): string
    {
        return "Starting...";
    }
}