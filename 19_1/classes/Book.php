<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 20.02.2018
 * Time: 10:57
 */

class book
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name."\n";
    }

    public function __get($price)
    {
        print_r($price);
    }

}