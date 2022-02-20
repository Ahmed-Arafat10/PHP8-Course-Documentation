<?php
$DBHost = "localhost";
$DBUsername = "root";
$DBPassword = "";
$DBName = "php_security";
# Connect To Database
$Connect = new mysqli($DBHost, $DBUsername, $DBPassword, $DBName);
# Check If An Error Exit
$DBError = $Connect->connect_error;
if ($DBError) {
    die("Connection failed: " . $Connect->connect_error);
} else {
    echo "Done";
}


# Get ID from get array
# $UserID = $_GET['id'];
$UserID = "Ahmed";
# Query String To Be Executed In Databsae
$SelectQuery = "SELECT * FROM `php` WHERE name = ? ";
# Prepare The Query
$Query = $Connect->prepare($SelectQuery);
# Bind To The Query
$Query->bind_param("s", $UserID);
#Exceute Query

//$Result = $Connect->query($SelectQuery);

# print_r($Result);
// mysqli_Re$Result Object ( [current_field] => 0 [field_count] => 3 [lengths] => [num_rows] => 2 [type] => 0 )

//$row1 = $Result->fetch_row(); # index 0,1,2
// print_r($row1);
//Array ( [0] => 1 [1] => Ahmed [2] => 123 )
//echo $row1[1];
// Ahmed

//$row1 = $Result->fetch_assoc(); # index name of columns
//print_r($row1);
//Array ( [id] => 2 [name] => Ging [password] => Zodiac )
// echo $row1['name'];


# Will be used method
// foreach ($Result as $row) {
//     //print_r($row);
//     //OR    
//     //echo $row['id'] . " " . $row['name'] . "<br />";
// }






# Exceute Query WORKS ONLY WITH bind and prepare
$Query->execute();
//print_r($Query);
// mysqli_stmt Object ( [affected_rows] => 1 [insert_id] => 0 [num_rows] => 0 [param_count] => 1 [field_count] => 3 [errno] => 0 [error] => [error_list] => Array ( ) [sqlstate] => 00000 [id] => 1 ) 
$Result = $Query->get_result();
# print_r($Result);
$Rows = $Result->num_rows;
# echo $Rows;
//  $Fetch = $Result->fetch_assoc();
//print_r($Fetch);
// echo $Fetch['id'];

# Iterate over result records
foreach ($Result as $row) {
    // print_r($row);
    //OR
    // echo $row['id'] . " " . $row['name'] . "<br />";
}

# Iterate over result records
// while ($ROW = $Result->fetch_assoc()) {
//     echo $ROW['id'] . " ddd" . $ROW['name'] . "<br />";
// }

// $Query->free();
// $Query->close();
// $Connect->close();
// $Query->free_result();
