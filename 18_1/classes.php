<?php

class Product
{
    const CARRENCY = 'USD';
    const MAX_DISCUNT = 50;
    public static $count = 0;

    public $price;
    protected $discount;

    public function __construct()
    {
        self::$count++;
        echo __CLASS__;
    }

    public static function create($price)
    {
        $product = new Product();
        $product->price = $price;

        return $product;
    }

    public static function uppercase($string)
    {
        return strtoupper($string . self::$count);
    }

    public function CheckDescount($disc)
    {
        if ($disc > static::MAX_DISCUNT)
        {
            echo "Error";
        }

    }

}

$product = new Product();

Product::$count = 50;
$product2 = Product::create(10);
$product3 = new Product();

echo Product::uppercase('hello');

echo "<br />-------------------------------------";

class Car extends Product 
{
    public function getDiscount()
    {
        $discount = parent::getDiscount();

        return $discount;
    }
}

echo "<br />---------------- lsb ---------------------<br />";

class DB {

    public static $database = 'example';

    public static function say()
    {
//        echo self::getName();
        echo static::getName();
    }

    public static function getName()
    {
        return 'A';
    }

    public static function getAllRecords()
    {
        echo 'select * from '. static::$database;
    }
}

DB::say();

class B extends DB
{
    public static function getName()
    {
        return 'B';
    }
}

echo "<br />";
DB::getAllRecords();

class Book extends DB {
    public static $database = 'book';
}
echo "<br />";
Book::getAllRecords();

echo "<br />---------------- traversing ---------------------<br />";

class Pensil {
    public $color = 'green';
    public $price = 20;
    private $origin = 'USA';

    public function getPropertys()
    {
        foreach ($this as $name => $val) {
            echo "{$name}:{$val} <br />";
        }
        $properties = get_object_vars($this);
        print_r($properties);
    }
}

$stick = new Pensil();

foreach ($stick as $name => $val) {
    echo "{$name}:{$val} <br />";
}

echo "------------<br />";

$stick->getPropertys();

echo "<br />------------<br />";
$properties = get_object_vars($stick);
print_r($properties);

echo "------------<br />";


