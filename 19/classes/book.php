<?php

//value object
//DTO - data trancfer object
// popo - plain old php object

class Book
{
    private $title;

//    $variables;

    /**
     * Book constructor.
     * @param $title
     */
    public function __construct($title)
    {
        $this->title = $title;
    }

    public function __get($name)
    {
        var_dump($name);
    }


    public function getTitle()
    {
        return $this->title;
    }


}