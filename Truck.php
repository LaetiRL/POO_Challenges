<?php
require_once 'Vehicle.php';

class Truck extends Vehicle 
{
    private int $stockCapacity;
    private int $loading = 0;
    private string $energy;

    // constructor

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->stockCapacity = $stockCapacity;
    }

    // methodes get

    public function getStockCapacity(): int
    {
        return $this->stockCapacity;
    }

    public function getLoading(): int
    {
        return $this->loading;
    } 

    public function getEnergy(): string
    {
        return $this->energy;
    }

    // methodes set

    public function setStockCapacity(int $stockCapacity): void
    {
        $this->stockCapacity = $stockCapacity;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, Car::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    // methodes actions

    public function isFull(): string
    {
        if ($this->stockCapacity === $this->loading) {
            return "full";
        } else {
            return "in filling";
        }
    }
}