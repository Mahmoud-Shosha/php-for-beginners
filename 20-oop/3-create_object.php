<?php

class Car
{
    function move_wheels()
    {
        echo "Wheels moving <br>";
    }
}


$car1 = new Car();
$car2 = new Car();

$car1->move_wheels();
$car2->move_wheels();
