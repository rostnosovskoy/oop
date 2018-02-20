<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 20.02.2018
 * Time: 10:57
 */

echo "<pre>\n";

require_once "autoload.php";

$book = new book("111");

echo $book->getName();
echo $book->price;

echo "\n\n";

$box = new PencilBox();
$box->green = 2;
$box->yellow = 5;
$box->showPencils();

echo $box->yellow;
echo "\n\n";
echo $box->getPrice();

echo "\n\n";
echo $box->getSize();

echo "\n\n";
echo $box;

if (isset($box->green))
{

}

echo "\n\n";
