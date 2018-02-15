<?php
Interface Operations {
    const PLUS = '+';
    const MINUS = '-';
}



class Core {

}


class Printer {
    private static function printColor(Colorable $obj)
    {
        echo $obj->getColor();
    }

    public static function newPrint(Colorable $obj)
    {
        return self::printColor($obj);
    }

}

class Marker {
    public static function mark(Mark $obj)
    {
        echo 'HELLO';
    }
}

//Printer::newPrint();
Interface Colorable {
    const NUM = 48;
    public function getColor();
}
Interface Mark {

}
Interface ChildColorable extends Colorable {
    public function getSize();
}
echo Colorable::NUM;


class Book extends Core implements Colorable, Mark {
    private $color = 'red';

    public function getColor()
    {
        return $this->color;
    }
}

$book1 = new Book();
Printer::newPrint($book1);

class Table implements Colorable, Mark {

    public function getColor()
    {
        return 'brown';
    }
}

Printer::newPrint(new Table());
Marker::mark(new Table());