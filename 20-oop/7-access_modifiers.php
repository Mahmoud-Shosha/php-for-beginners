<?php

class Car
{
    public $public = "public<br>";
    var $var = "var<br>";
    protected $protected = "protected<br>";
    private $private = "private<br>";

    function echo_public()
    {
        echo $this->public;
    }

    function echo_var()
    {
        echo $this->var;
    }

    function echo_protected()
    {
        echo $this->protected;
    }

    function echo_private()
    {
        echo $this->private;
    }
}


$my_car = new Car();

echo "_____Accessing from outside the calss_____<br>";
echo $my_car->public;
echo $my_car->var;
// echo $my_car->protected;  // error
// echo $my_car->private;  // error

echo "_____Accessing from inside the calss_____<br>";
$my_car->echo_public();
$my_car->echo_var();
$my_car->echo_protected();
$my_car->echo_private();

class Child extends Car
{
    function echo_public()
    {
        echo $this->public;
    }

    function echo_var()
    {
        echo $this->var;
    }

    function echo_protected()
    {
        echo $this->protected;
    }

    function echo_private()
    {
        echo $this->private;
    }
}

$my_child = new Child();

echo "_____Accessing from inside a calss child<br>";
$my_child->echo_public();
$my_child->echo_var();
$my_child->echo_protected();
// $my_child->echo_private();  // error
