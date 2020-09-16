<?php

class Car
{
    var $wheels = 4;
    var $hood = 1;

    function move_wheels()
    {
        echo "Wheels moving <br>";
    }

    function stop_wheels()
    {
        echo "Wheels stoped <br>";
    }
}

class Plane extends Car
{
    var $hood = 999999;

    function stop_wheels()
    {
        echo 999999 . "<br>";
    }
}

$my_plane = new Plane();

echo $my_plane->wheels . "<br>";
echo $my_plane->hood . "<br>";

$my_plane->move_wheels();
$my_plane->stop_wheels();
