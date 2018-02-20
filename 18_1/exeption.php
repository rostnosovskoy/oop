<?php

function echoFile($file)
{
    return printFile($file);
}

function printFile($file)
{
    return getFile($file);
}

function getFile($file)
{
    if (!file_exists($file))
    {
        throw new Exception("File $file not found!");
    }

    $text = file_get_contents($file);
    return $text;
}

try
{
    echo echoFile('log.txt');

}catch (Exception $e){
    echo $e->getMessage();

}

