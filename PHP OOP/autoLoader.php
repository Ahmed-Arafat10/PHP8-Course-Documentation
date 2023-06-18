<?php
spl_autoload_register('autoLoader');
function autoLoader($className)
{
    //echo $className . PHP_EOL;
    $e = explode('\\', $className);
    //var_dump($e);
    $filePath = end($e) . '.php';
    //echo $filePath;
    // Check if the file exists
    if (file_exists($filePath)) {
        require_once $filePath;
    }
}