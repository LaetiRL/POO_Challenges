<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    // methodes

    public function addVehicle($vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $this->currentVehicles[] = $vehicle;
            echo print_r($vehicle)." à bien été ajouté<br>";
        } else {
            echo "Ce véhicule n'est pas autorisé sur cette voie.<br>";
        }
    }
}