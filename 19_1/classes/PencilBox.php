<?php
/**
 * Created by PhpStorm.
 * User: Ростислав
 * Date: 20.02.2018
 * Time: 11:27
 */

class PencilBox
{
    private $colors = [];
    private $price = 20;
    private $size = 100;


    public function __set($name, $val)
    {
        $this->colors[$name] = $val;
    }

    public function __get($name)
    {
        return @$this->colors[$name];
    }

    public function __call($name, $args)
    {
        // getPrice
        $field = substr($name, 3);
        $field = strtolower($field);

        return $this->$field;
    }

    public function __toString()
    {
        $fields = get_object_vars($this);

        $result = "";
        foreach ($fields as $key => $field) {
            if (is_array($field))
            {
                continue;
            }else {
                $result .= "$key=$field, ";
            }
        }
        return $result;
    }

    public function showPencils()
    {
        print_r($this->colors);
    }
}