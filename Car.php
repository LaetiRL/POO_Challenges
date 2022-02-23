<?php

class Car 
{
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    // constructor

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    // methodes get

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    // methodes actions

    public function start(): string
    {
        $this->setCurrentSpeed = 0;
        return "Starting...";
    }

    public function forward(): string
    {
        $this->setCurrentSpeed = 30;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->setCurrentSpeed > 0) {
            $this->setCurrentSpeed --;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }
    
}