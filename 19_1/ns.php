<?php

include "autoload.php";
include "classes/Book.php;

$book1 = new \Book("1");
echo $book1->getName();

$book2 = new Book();
echo $book2->price;