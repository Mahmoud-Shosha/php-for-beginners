<?php

class Car
{
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function move_wheels()
    {
        echo "Wheels moving <br>";
    }
}


$car1 = new Car();

echo $car1->wheels . "<br>";  // 4
$car1->wheels = 505;
echo $car1->wheels . "<br>";  // 505

$car2 = new Car();
echo $car2->wheels . "<br>";  // 4
