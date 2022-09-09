<?php require_once('config.php') ?>
<?php


$connection = new PDO($dsn, $dbuser, $dbuserpassword, $options);
//Php DataBase Object (PDO)

// IF NOT EXISTS -> prevent any error as if table is 
// Already Created Then Executing It Again Will Cause An Error
// So This Statement Prevent Creating The Table If It Exist
$sql = "CREATE TABLE IF NOT EXISTS ideastable (
    id INT UNSIGNED AUTO_INCREMENT,
    title VARCHAR(40) Not Null,
    text TEXT Not Null,
    PRIMARY KEY(id)
);";

// Execute SQL Staetemnt In Database
$connection->exec($sql);


echo "You are connected to the database successfully";

?>