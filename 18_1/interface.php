<?php

class Core
{

}

class Printer
{
    private static function printColor(Colorable $obj)
    {
        echo $obj->getColor();
    }

    public static function newPrint(Colorable $obj)
    {
        return self::printColor($obj);
    }
}

interface Colorable
{
    const NUM = 48;
    public function getColor();
}

echo Colorable::NUM;

interface Mark
{

}
interface ChildColorable extends Colorable
{
    public function getSize();
}
class Book extends Core implements Colorable, Mark
{
    private $color = 'red';
    public function getColor(){
        return $this->color;
    }

}

$book1 = new Book();
Printer::newPrint($book1);