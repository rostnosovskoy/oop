<?php

class PencilBox
{
    private $colors = [];

    private $price = 20;

    public function __set($name, $val)
    {
        $this->colors[$name] = $val;
    }

    public function shoepancils()
    {
        print_r($this->colors);
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
//        var_dump($field);
        return $this->$field;

        $color = 'red';
        $red = 28;

        echo $$color;
    }

    public function __toString()
    {
        $fields = get_object_vars($this);

        $result = '';
        foreach ($fields as $key => $field) {
            if (!is_array($field)) {
                $result .= "$key=$field, ";
            }else
            {
                continue;
            }
        }

        return $result;
    }
}