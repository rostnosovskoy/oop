<?php

class Product
{
    public $price;
    private $discount = 5;
    protected $color = 'green';
    protected $sound;


    public function getSound()
    {
        echo "$this->sound <br />";
        return $this->sound;
    }

    public function getDis()
    {
        return $this->discount;
    }
//    function __set($discount)
//    {
//         $this->discount;
//    }

    function __construct()
    {

    }

    public function setDis($discount)
    {
        $this->discount = $discount;
    }
    public function halfPrice ()
    {
        return $this->price / 2;

    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }


}

$product = new Product();
//$product2 = new Product();

$product->price = 100;
echo $product->halfPrice();
$product->setDis(50);
echo $product->getDis();

echo $product->name = 'radio';

//--------------наследование----------------

class Car extends Product
{
    protected $sound = 'dzdzdzdzd';


    public function halfPrice ()
    {
        return $this->price = 500;

    }
    public function printColor()
    {
        return $this->color;
    }
}

echo "<br />";
$avto = new Car();
$avto->price = 1000;
echo $avto->halfPrice();
echo $avto->printColor();

class Cell extends Product
{
    protected $sound = 'zzzzz';

}

echo "<br />";
$mobile = new Cell();
$mobile->getSound();
echo "<br />";
$avto->getSound();

if ($avto instanceof Product)
{
    echo "<br /> Car is Product";
}