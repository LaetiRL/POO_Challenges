<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Car extends Vehicle implements LightableInterface 
{
    private string $energy;
    private int $energyLevel;
    private bool $parkBrake = true;

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

    public function setParkBrake($parkBrake): void
    {
        $this->parkBrake = $parkBrake;
    }

    // methodes actions

    public function start(): void
    {
        if ($this->parkBrake === true) {
            throw new Exception("Le frein à main est enclenché !");
        }
        echo "Starting...";
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}