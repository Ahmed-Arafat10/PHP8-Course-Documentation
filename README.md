
- Create a function that break the line 3 times
````php
<?php
// To break line 3 Times 
function break_()
{
    for ($i = 0; $i < 3; $i++) {
        echo "</br>";
    }
}
````

- Print Your PHP Version & all data related to your `PHP`
````php
phpinfo();
````

- Concatenating Two Texts
````php
echo "Ahmed" . "Arafat"; // Concatenation With ""
echo 'Ahmed' . 'Arafat'; // Concatenation With ''
````
> There Will Be A Different Between "x" & 'x' Will Discuss It In Next Lesson


- Add Html Tag In Echo Statement In Php
````php
echo "<h1>3+5</h1>";
````

- Write A Comment In Php
````php
// echo "<br>";
// OR
# echo "<br>"; // To Write A Comment

// Write A Comment In Php In Multilines
/*
echo "Hello";
echo "Hello";
echo "Hello";
*/
````

- Print A Text
````php
print "Hello World";
````
> Note: echo Is Faster


- Variables
````php
$number = 10; //int
$x = 5.5; // float / double
$z = null; // null
$name = "Ahmed"; // string
$a = true; // bool

echo "This Number is $number";
````
> You Can Write A Variable With `$` Sign In Double Quotes `""`
> <br> While `''` , you Will Have To Concatenate Using `.` As It Will Print `$variablename` As String Not A Variable 



### 9. Operations:

````php
$num1 = 10; //int
$num2 = 9;
echo $num1 > $num2; // O/P -> 1 [True]

echo $num1 < $num2; // O/P -> NOTHING
````
> Note: PHP Won't Print False Condition


## Assignment Operator:
````php
$x = 10;
$x++;
++$x;
$x = $x + 5;
$x += 5;
$x *= 20;
````

# 10. If Statements:
````php
$x = 0;
if ($x > 0) {
echo "This Number Is Postive";
} else if ($x < 0) {
echo "This Number Is Negative";
} else {
echo "This Number Is Zero";
}


// Nested If
if ($x > 0) {
echo "This Number Is Postive";
} else {
if ($x < 0) {
echo "This Number Is Negative";
} else {
echo "This Number Is Zero";
}
}
````

- Trinary Condition
````php
echo $x > 0 ? "$x is Positive" : ($x < 0 ? "$x is Negative" : "$x Is Zero");
````


## 11. Loops



- While Loop
````php
$i = 0;
while ($i < 10) {
echo "This Number Is $i" . "<br>";
$i++;
}
````


- Do While Loop
````php
$i = 0;
do {
echo "This Number Is $i" . "<br>";
$i++;
} while ($i > 10);
````

- For Loop
````php
for ($x = 0; $x <= 20; $x++) {
echo "<h1>Number$x</h1>";
}
````

# 12. Nested Loops:

- Nested For Loop
````php
for ($x = 1; $x <= 9; $x++) {
for ($y = 1; $y <= 9; $y++) {
echo "$x * $y = " . $x * $y . '<br>';
}
echo "<hr>";
}
````

- Nested While Loop
````php
$x = 1;
while ($x <= 10) {
$y = 1;
while ($y <= 10) {
echo "$x * $y = " . $x * $y . '<br>';
$y++;
}
echo "<hr>";
$x++;
}
````

# 13. Array:

- Create An Array
````php
$arr = array(1, 2, 3, 4, 5, 6);
````

- Print The Whole Array In [`Key` : `Value`] Format
````php
print_r($arr);
````
> O/P: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )

- Will Remove [2] => 3, [`Key` : `Value`] Pair From Array
````php
unset($arr[2]);
````

- Add a new element in index 2
````php
$arr[2] = 222;
````
> VIP : Will Be Added To End Of Array (not As C++)
> <br> O/P : Array ( [0] => 1 [1] => 2 [3] => 4 [4] => 5 [5] => 6 [2] => 222 )

- Add One Or More Elements To End Of Array
````php
array_push($arr, 99); // One element
//OR
array_push($arr, 10, 20, 30, 40, 50); // More than one element
````

- Override a value in already exist index
````php
$arr[2] = 222222;
````

# 14. Array Part 2

- Create An Associative Array
````php
$arr = array(
'Arabic' => 99,
'English' => 100,
'French' => 101
);

print_r($arr);
````
> O/P : Array ( [Arabic] => 99 [English] => 100 [French] => 101 )


- Print Value 99
````php
echo $arr['Arabic'];
````


# Slicing An Array :

````php
$num = array(1, 2, 3, 4, 5, 6);
// Start Slicing From Second Element In Array [Index 1] Till Index 4 [Included In Slicing]
$num2 = array_slice($num, 1, 4);  // {2,3,4,5}
print_r($num2);
````
> O/P: Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 )
> <br> Note : This Will Take Only Values In Rang, While There Index Will Change

- To Prevent This
````php
$num3 = array_slice($num, 1, 4, true); // Add True Argument

print_r($num3);
````
> O/P: Array ( [1] => 2 [2] => 3 [3] => 4 [4] => 5 )


- Use `Array_Slice()` With Associative Array
````php
$test = array_slice($arr, 1, 2);

print_r($test);
````
> O/P: Array ( [English] => 100 [French] => 101 )

- Sort Array
````php
$arr5 = array(5, 2, 1, 6, 0);
// Function Sort() To Sort An Array [asc]
sort($arr5);
print_r($arr5);
````
> O/P: Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 5 [4] => 6 )
> <br> VIP Note : This Will Make Sort Only The Values, which Means That There Index Will Change
> <br> Ex: before Sorting `0 => 5` But After Sorting `3 => 5`
> <br> Value 5 Becomes In Index 3 Instead Of 0

````php
$arr6 = array(5, 2, 1, 6, 0);
// Function Rsort() To Reverse Sort An Array [desc]
rsort($arr6);
print_r($arr6);
````
> Same Note As Above (keys Will Be Changed)

````php
$Lang = array(
'item1' => 'French',
'item0' => 'English',
'item2' => 'Arabic',
);

// Sort An Associative Array [asc]
asort($Lang);
// Sort An Associative Array [desc]
arsort($Lang);

print_r($Lang);
````
> O/P: Array ( [item1] => French [item0] => English [item2] => Arabic )
> <br> Note: as This Is An Associative Array, each Key Is Related To A Specific Value Even If It Is Sorted


````php
$Lang = array(
'item1' => 'French',
'item0' => 'English',
'item2' => 'Arabic',
);

// Sort An Associative Array [asc] -- Using Key As Criteria
ksort($Lang);
// Sort An Associative Array [desc] -- Using Key As Criteria
krsort($Lang);
print_r($Lang);
````
> O/P --> Array ( [item2] => Arabic [item1] => French [item0] => English )


# 15. Array Part 3

- Convert A String Into An Array :

````php
$str = "My Name Is Ahmed Arafat";
// Argument #1 is Separator While Argument #2 is String
$array = explode(' ', $str);
$array1 = explode('a', $str);
print_r($array);
print_r($array1);
````
> O/P: `Array ( [0] => My [1] => Name [2] => Is [3] => Ahmed [4] => Arafat )`
> <br> O/P: `Array ( [0] => My N [1] => me Is Ahmed Ar [2] => f [3] => t )`


# Convert An Array Into A String :
````php
$array2 = array("My", "Name", "Is", "Ahmed", "Arafat");
$str = implode('#', $array2);
echo $str;
````
> O/P: My#Name#Is#Ahmed#Arafat


# 16. Functions


- Define A Function
````php
function hello()
{
echo "Hello World";
}

// Call A Function
hello();
````

- Define A Parametrized Function
````php
function PrintName($Name)
{
    echo "Your Name Is : $Name";
}

$name = "Ahmed Arafat";
PrintName($name);
//OR
PrintName("Ging Freecss");
````


- You Can Also Specify Data Type Of Parameter (`string`/`int`/`float`/`bool`)
````php
function PrintName2(string $Name)
{
    echo "Your Name Is : $Name";
}
````

- Send An Array As A Parameter
````php
function PrintName3($arr = array())
{
    foreach ($arr as $data) echo $data . " ";
}
$arr7 = array(1, 2, 3, 4, 5);
PrintName3($arr7);
````

- Void Function
````php
function sum($num1, $num2)
{
    echo $num1 + $num2;
}
sum(10, 10);
````

- Function That Return Sum Of Two Numbers `integer`
````php
function sum2($num1, $num2)
{
    return $num1 + $num2;
}
echo sum2(10, 99);
````


# 17. Functions Part 2


````php
function sum4($num1, $num2)
{
    return $num1 + $num2;
}

$n1 = 10;
$n2 = 20;
$res = sum4($n1, $n2);
echo $res;
````

- Will Return A String
````php
function sum5($num1, $num2)
{
    return "$num1 + $num2 = " . ($num1 + $num2); // You Have To Put Them in () Else It Will Throw An Error
}

$n1 = 10;
$n2 = 30;
$res = sum5($n1, $n2);
echo $res;
````


- Will Return A String Or Integer Depending On Condition
````php
function sum3($num1, $num2)
{
    if ($num1 == 10) return "$num1 + $num2 = " . ($num1 + $num2);
    return 0;
}

$n1 = 11;
$n2 = 30;
$res = sum3($n1, $n2);
echo $res;
````

````php
function multiple(int $num1, int $num2): String
{
    if ($num1 == 10) return "$num1 * $num2 = " . ($num1 * $num2);
    return 1;
}

$n1 = 11;
$n2 = 30;
$res = multiple($n1, $n2); // Will Be A String As Condition Is False
echo $res[0];
````
> To Specify A Return Type Of Function Add `:Data_Type`
> <br> Now Return 1 Will Be Also String {"1"} Not An Integer
> <br> Also As We Said We Can Specify Data Type Of Parameter



# 18. Recursion

````php
// Recursive Function
function fun($n)
{
    if ($n != 0) return $n + fun($n - 1);
    return 0;
}
$res = fun(5);
echo $res;
````

