<?php

abstract class Platform
{
    abstract protected function getWheels();
    public function printWheels()
    {
        $this->getWheels();
    }
}

class Car extends Platform
{
    protected function getWheels()
    {
        return 4;
    }
}

class Moto extends Platform {

    public function getWheels()
    {
        return 2;
    }
}

$car = new Car();
$moto = new Moto();

function echoWeels($obj)
{
    echo $obj->printWheels() . "<br />";
}

echoWeels($car);
echoWeels($moto);