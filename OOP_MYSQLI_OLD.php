<?php

# PHP Security Tips In Arabic #04 - Prevent SQL Injection

/*
myqli_connect();
 mysqli_close($Connect);
mysqli_query();
mysqli_num_rows();
mysqli_fetch_assoc(); mysqli_fetch_assoc returns data in an associative array with a column name as a key of the resultant array.  Which means we can access the output array with a column name as a key of an array.
    
    // print row data
    echo $row["id"]." ".$row["name"];
mysqli_fetch_array(); -> mysqli_fetch_array returns data in a numeric and an associative array, so we can access result data with a column name or an index value.
 // print row data with index
 echo $row[0]." ".$row[1];  
    
    */

$DBHost = "localhost";
$DBUsername = "root";
$DBPassword = "";
$DBName = "php_security";
$Connect = new mysqli($DBHost, $DBUsername, $DBPassword, $DBName);
if ($Connect->connect_error) {
    die("Connection failed: " . $Connect->connect_error);
}




//$UserID = $_GET['id'];
// $Query = "SELECT * FROM `PHP`";
// $Query = $Connect->prepare($Query);
// $Query->bind_param("s", $UserID);
$Query = $Connect->query("SELECT * FROM `PHP`");
 
// $row = $result->fetch_row() 
foreach($Query as $row){
 //print_r($row);
//OR    
 //echo $row['ID'] . " " . $row['Name'] . "<br />";  
}
while($ROW = $Query->fetch_assoc())
{
    echo $ROW['ID'] . " ddd" . $ROW['Name'] . "<br />";  
}
// foreach($ROW as $Data)
// {
//     echo $Data['ID'] . " " . $Date['Name'] . "<br />";  
// }
// $Result = $Query->get_result();
// //  print_r($Result);
// $Rows = $Result->num_rows;
// $Fetch = $Result->fetch_assoc();
// print_r($Fetch);
// echo $Fetch['ID'];
//$Query->close();
//$Connect->close();


/*


This function binds the parameters to the SQL query and tells the database what the parameters are. The "sss" argument lists the types of data that the parameters are. The s character tells mysql that the parameter is a string.

The argument may be one of four types:

i - integer
d - double
s - string
b - BLOB

*/
