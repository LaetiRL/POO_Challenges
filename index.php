<?php
require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Truck.php';

$truck = new Truck("brown", 2, "fuel", 10);
$truck->setCurrentSpeed(20);
var_dump($truck);
$truck2 = new Truck("red", 3, "fuel", 24);
var_dump($truck2);

echo $truck->isFull().'<br>';
$truck->setLoading(10);
echo $truck->isFull().'<br>';


echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck->brake().'<br>';
