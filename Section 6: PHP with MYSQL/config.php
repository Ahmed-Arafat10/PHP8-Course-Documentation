<?php


$hostname= "localhost";
$dbname= "ideas";
$dbuser= "hassan";
$dbuserpassword= "123";

 //Database Sourse Name
$dsn = "mysql:host=$hostname;dbname=$dbname";

// If You Are Not Connect With Databse You Can Control To Show Or Hide Error Message
// Used In Production If There Is Any Error, This Error Shouldnt Be Shown To User
 $options = array(
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      //SILENT
      //WARNING
      PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
 );
