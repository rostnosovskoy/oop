<?php

abstract class Platform {

    abstract protected function getWheels();

    public function printWheels()
    {
        return $this->getWheels();
    }

}

class Car extends Platform {
    protected function getWheels()
    {
        return 4;
    }
}

class Moto extends Platform {

    protected function getWheels()
    {
        return 2;
    }
}


//new Platform;
$auto = new Car();
$moto = new Moto();

function echoWheels(Platform $obj) {
    echo $obj->printWheels() . '<br>';
}

echoWheels($auto);
echoWheels($moto);