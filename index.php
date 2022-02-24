<?php
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Bicycle.php';


$motorW = new MotorWay();
$pedestrianW = new PedestrianWay();
$residentialW = new ResidentialWay();

$car1 = new Car("blue",5,"electric");
$truck1 = new Truck("white",2,"fuel", 20);
$bike1 = new Bicycle("red", 1);

$motorW->addVehicle($car1);
$motorW->addVehicle($truck1);
$motorW->addVehicle($bike1);

$pedestrianW->addVehicle($car1);
$pedestrianW->addVehicle($truck1);
$pedestrianW->addVehicle($bike1);

$residentialW->addVehicle($car1);
$residentialW->addVehicle($truck1);
$residentialW->addVehicle($bike1);

var_dump($motorW);
var_dump($pedestrianW);
var_dump($residentialW);


try {
    $car1->start();
} catch (Exception $e) {
    $car1->setParkBrake(false);
    echo "Put down parkbrake. Starting...<br>";
} finally {
    echo "Ma voiture roule comme un donut";
}