<?php
function __autoload($classname)
{
//    print_r( func_get_args() );
    $classname = explode("\\", $classname);
    $classname = implode("/", $classname);
    require_once "classes/$classname.php";

}