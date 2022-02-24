<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    // methodes

    public function addVehicle($vehicle)
    {
        $this->currentVehicles[] = $vehicle;
        echo print_r($vehicle)." à bien été ajouté(e)<br>";
    }
}