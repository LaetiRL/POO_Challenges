<?php
require_once 'Person.php';

$batman = new Person('Wayne','Bruce','1007 Mountain Drive, Gotham City','17-04-1915');

echo $batman->getPerson();
echo $batman->getAge();

$batman->setAdress("6 rue Zadkine, 75020 Paris");

echo $batman->getPerson();

