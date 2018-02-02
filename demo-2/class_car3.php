<?php


class Car
{
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function MoveWheels()
    {
        $this->wheels = 10;
    }

    function createDoors()
    {
        $this->doors = 6;
    }


}

class ColoringCar
{
    var $red = "red";
    var $blue = "blue";
}


$bmw = new Car();
$truck = new Car();

echo $bmw->wheels . "<br/>";

echo $truck->wheels = 10 . "<br/>";


$truck->createDoors();
echo $truck->doors;



$red_car = new ColoringCar();

echo $red_car->red;



/*
if (method_exists("Car", 'MoveWheels')) {
    echo "The Method exists";
} else {
    echo "No it does not";
}
*/



?>