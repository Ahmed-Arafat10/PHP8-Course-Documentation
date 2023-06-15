
````php
myqli_connect();
mysqli_close($Connect);
mysqli_query();
mysqli_num_rows();
mysqli_fetch_assoc(); //mysqli_fetch_assoc() returns data in an associative array with a column name as a key of the resultant array.  Which means we can access the output array with a column name as a key of an array.
````    


- print row data
````php
mysqli_fetch_array(); // mysqli_fetch_array() returns data in a numeric and an associative array, so we can access result data with a column name or an index value.
echo $row["id"]." ".$row["name"];
// print row data with index
echo $row[0]." ".$row[1];  
````

<hr>
<hr>

### MySQL With OOP Syntax
````php
$DBHost = "localhost";
$DBUsername = "root";
$DBPassword = "";
$DBName = "php_security";
$Connect = new mysqli($DBHost, $DBUsername, $DBPassword, $DBName);
if ($Connect->connect_error) {
    die("Connection failed: " . $Connect->connect_errno);
}
````
> If there is an error `connect_error` will be `true`


### Prepare Statements & Bind Parameters

- The following code is used in the projects
````php
# Get ID from get array
$UserID = $_GET['id'];
# Query String To Be Executed In Database
$SelectQuery = "SELECT * FROM `php` WHERE id = ? ";
# Prepare The Query
$Query = $Connect->prepare($SelectQuery);
# Bind To The Query
$Query->bind_param("i", $UserID);
#Exceute Query

print_r($Query);
//O/P: mysqli_stmt Object ( [affected_rows] => 1 [insert_id] => 0 [num_rows] => 0 [param_count] => 1 [field_count] => 3 [errno] => 0 [error] => [error_list] => Array ( ) [sqlstate] => 00000 [id] => 1 )

$err = $Query->execute();

echo $err ? "Done" : "Error";

$Result = $Query->get_result();

print_r($Result);
// O/P: mysqli_Result Object ( [current_field] => 0 [field_count] => 3 [lengths] => [num_rows] => 2 [type] => 0 )

$row1 = $Result->fetch_row(); # index 0,1,2 rather than name of the  column (This is a disadvantage)
print_r($row1);
// O/P: Array ( [0] => 1 [1] => Ahmed [2] => 123 )
echo $row1[1]; // Ahmed


$row1 = $Result->fetch_assoc(); # index name of columns
print_r($row1);
// O/P: Array ( [id] => 2 [name] => Ging [password] => Zodiac )
echo $row1['name'];


# Method 1: Iterate over the records
 foreach ($Result as $row) {
     print_r($row);
     //OR    
     echo $row['id'] . " " . $row['name'] . "<br />";
 }

# Method 2: Iterate over result records
 while ($ROW = $Result->fetch_assoc()) {
     echo $ROW['id'] . " ddd" . $ROW['name'] . "<br />";
 }

$Rows = $Result->num_rows;
# echo $Rows;
$Fetch = $Result->fetch_assoc();
print_r($Fetch);
echo $Fetch['id'];


$Query->free();
$Query->close();
$Connect->close();
$Query->free_result();
````


- Method 1: When you don't have to add any values to the SQL Query
````php
$Stmt = "SELECT * FROM `PHP`";
$Query = $Connect->query($Stmt);
````
> `query($Stmt)` method is used to execute the query when the query don't have `?` sign


- Method 2: When you have to add any values to the SQL Query
````php
$UserID = $_GET['id'];
$Stmt = "SELECT * FROM `PHP` WHERE id = ?";
$Query = $Connect->prepare($Stmt);
$Query->bind_param("i", $UserID);
$CheckError = $Query->execute();
$Query->close();
$ConnectToDatabase->close();
````

- How to print the output of the Query 
````php
$row = $result->fetch_row() 
foreach($Query as $row){
 print_r($row);
    //OR    
 echo $row['ID'] . " " . $row['Name'] . "<br />";  
}
````

- Method #2:
````php
while($ROW = $Query->fetch_assoc())
{
    echo $ROW['ID'] . " ddd" . $ROW['Name'] . "<br />";  
}
````

- Method #3:
````php
 foreach($ROW as $Data)
 {
     echo $Data['ID'] . " " . $Date['Name'] . "<br />";  
 }
````


- `bind_param()`: This function binds the parameters to the SQL query and tells the database what the parameters are. The "sss" argument lists the types of data that the parameters are. The s character tells mysql that the parameter is a string.

- The argument may be one of four types:
  - `i` : integer
  - `d` : double
  - `s` : string 
  - `b` : BLOB


# ChatGPT: Prepare Statements & Bind Parameters in PHP

- In PHP, a prepared statement is a feature provided by database APIs (such as PDO and MySQLi) that allows you to execute SQL queries more securely and efficiently. It involves two main steps: preparing a statement and binding parameters.

1. Preparing a statement: When you prepare a statement, you create a template for an SQL query that you will execute later. The template includes placeholders for parameters that will be supplied with actual values when the query is executed. The prepared statement is sent to the database server, which performs some initial processing and optimization.

2. Binding parameters: After preparing the statement, you bind parameters to the placeholders in the template. A parameter represents a value that you want to include in the SQL query, such as a user input or a variable. By binding parameters, you associate the placeholders in the prepared statement with specific values. This process helps prevent SQL injection attacks and ensures proper handling of different data types.

Here's an example in PHP using PDO:

````php
// Prepare a statement
$stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username AND age > :age");

// Set parameter values
$username = 'john';
$age = 25;

// Bind parameters
$stmt->bindParam(':username', $username);
$stmt->bindParam(':age', $age);

// Execute the statement
$stmt->execute();

// Fetch results
$results = $stmt->fetchAll();
````

Benefits of using prepared statements and binding parameters:

1. Security: Prepared statements automatically handle escaping and quoting of parameters, preventing SQL injection attacks. The values are sent separately from the SQL query, ensuring that they are treated as data rather than executable code.

2. Performance: Prepared statements are precompiled by the database server, which means they can be executed multiple times with different parameter values without re-parsing the SQL query. This can lead to performance improvements, especially if the query is executed frequently.

3. Reusability: Once a prepared statement is created, you can execute it multiple times with different parameter values. This reusability reduces the need to recreate the query and improves code maintainability.

4. Data integrity: By binding parameters, you ensure that the correct data types are used in the query. This helps prevent data conversion errors and ensures data integrity.

Overall, prepared statements with parameter binding provide a more secure and efficient way to interact with databases in PHP, protecting against SQL injection and offering performance benefits. They are considered a best practice when working with user inputs or variables in SQL queries.