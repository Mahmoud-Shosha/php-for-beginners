<?php

class Car
{
    public static $wheels = 10 . "<br>";

    public static function echo_wheels()
    {
        echo self::$wheels;
    }
}

echo Car::$wheels;
Car::echo_wheels();

$my_car = new Car();

// echo $my_car->$wheels; // error
echo $my_car->echo_wheels(); 
