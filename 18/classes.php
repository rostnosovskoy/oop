<?php

class Product
{
    const CURRENCY = 'USD';
    const MAX_DISCOUNT = 50;

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
        $product = new self();
        $product->price = $price;

        return $product;
    }

    public static function uppercase($string)
    {
        return strtoupper($string . self::$count);
    }

    public function checkDiscount($disc)
    {
        $this->price;
        if ($disc > self::MAX_DISCOUNT) {
            echo 'ERROR' . (self::$count);
        }
    }

    public function getDiscount()
    {
        // load from db
        return 10;
    }

}

$product = new Product();
$product->price = 100;

//Product::$count = 50;

$product2 = Product::create(10);
$product3 = new Product();

echo Product::uppercase('hello');
?>
<br>--------------<br>
<?

class Car extends Product
{
    public function getDiscount()
    {
        $discount = parent::getDiscount();

        return $discount / 2;
    }
}

$car = new Car();
echo  $car->getDiscount();
?>
    <br>------ lsb --------<br>
<?
class DB {

    static $database = 'example';

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
        echo '<BR>';
        echo 'SELECT * FROM ' . static::$database;

    }
}

DB::say();

class B extends DB {

    public static function getName()
    {
        return 'B';
    }
}

B::say();

DB::getAllRecords();

class Book extends DB {
    public static $database = 'books';
}

Book::getAllRecords();

?>
    <br>------ traversing --------<br>
<?

class Pencil {
    public $color = 'green';
    public $price = 20;
    private $origin = 'USA';

    public function getProperties()
    {
        foreach ($this as $name => $value) {
            echo "$name: $value<br>";
        }

        $properties = get_object_vars($this);
        print_r($properties);
    }
}

$stick = new Pencil();

foreach ($stick as $name => $value) {
    echo "$name: $value<br>";
}

echo '--<br>';

$stick->getProperties();

echo '--<br>';
$properties = get_object_vars($stick);
print_r($properties);