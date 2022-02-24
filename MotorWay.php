<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    // methodes

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
            echo print_r($vehicle)." à bien été ajoutée <br>";
        } else {
            echo "Ce véhicule n'est pas autorisé sur cette voie. <br>";
        }
    }
}