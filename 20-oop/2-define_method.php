<?php

class Car
{
    function move_wheels()
    {
        echo "Wheels moving <br>";
    }
}


if (method_exists("Car", "move_wheels")) {
    echo "method move_wheels in class Car defined";
} else {
    echo "method move_wheels in  class Car not defined";
}
