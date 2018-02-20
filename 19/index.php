<pre>
<?php

require "autoload.php";



$book = new Book("50 dfg");

echo $book->getTitle();

echo (new Book('Hello'))->getTitle();

echo $book->price;

echo "\n\n";

$box = new PencilBox();

$box->green = 2;
$box->yellow = 5;
$box->shoepancils();

echo $box->yellow;
echo "\n\n";

echo $box->getPrice();

if (isset($box->green))
{

}