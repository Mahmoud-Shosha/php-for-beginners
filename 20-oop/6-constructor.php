<?php

class Car
{
    var $wheels = 4;
    var $hood = 1;

    function __construct()
    {
        echo "Car object created !";
    }
}


$my_car = new Car();
