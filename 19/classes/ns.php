<?php

include "autoload.php";
include "classes/Book.php";

$book1 = new \Book(1);
echo $book1->getTitle();


$book2 = new \Shop\Sell\Book();
echo $book2->price;