<?php

class MyException extends Exception {

}

function echoFile ($file) {
    return printFile($file);
}

function printFile($file) {
    return getFile($file);
}

function getFile ($file) {

    if (!file_exists($file)) {
        throw new Exception("File $file not found");
    }

    $txt = file_get_contents($file);

    return $txt;
}


try {
    echo echoFile('log.txt');
    //
    //
    //28
} catch (MyException $e) {

} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    // 48
}

final class Book {

}

class BigBook  {
    final public function getColor()
    {
        
    }
}