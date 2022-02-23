<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle("blue");
$bike->setCurrentSpeed(0);

$car1 = new Car("red",5,"fuel");

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

echo $car1->start();
echo '<br> Vitesse de la voiture : ' . $car1->setCurrentSpeed . ' km/h' . '<br>';
echo $car1->forward();
echo '<br> Vitesse de la voiture  : ' . $car1->setCurrentSpeed . ' km/h' . '<br>';
echo $car1->brake();
echo '<br> Vitesse de la voiture  : ' . $car1->setCurrentSpeed . ' km/h' . '<br>';
echo $car1->brake();