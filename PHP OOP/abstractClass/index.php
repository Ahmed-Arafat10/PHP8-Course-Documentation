<?php

require_once "../autoLoaderLTS.php";

$pdo = (new abstractClass\PDOClient('mysql', 'localhost', 'k-hub', 'root', ''))
    ->connect();

$mysqli = (new abstractClass\MySQLClient('localhost', 'k-hub', 'root', ''))
    ->connect();

$users1 = $pdo->select("SELECT * FROM __users product")->get();
$users2 = $mysqli->select("SELECT * FROM __users product")->get();
foreach ($users1 as $user) {
    //  echo "<pre>";
    //   var_dump($user);
}

$handler = $mysqli->getConnection();
$res = $handler->query("SELECT * FROM __users product WHERE User_ID = 20")->fetch_all();
//var_dump($res);


