<?php


//require_once "../autoLoader.php";

require_once __DIR__ . '/../vendor/autoload.php';

$myDog = new \interfaceTest\Dog();
$myLion = new \interfaceTest\Lion();
$myRabbit = new \interfaceTest\Rabbit();

echo "<pre>";
$myDog->chase($myRabbit);
$myDog->kill($myRabbit);
$myDog->kill($myRabbit);
# Error as $myLion is type of Predator and parameter must be of Prey
//$myDog->kill($myLion);

$myLion->chase($myDog);
$myLion->kill($myDog);

$myRabbit->chasedBy($myDog);
$myRabbit->killedBy($myDog, $myRabbit);