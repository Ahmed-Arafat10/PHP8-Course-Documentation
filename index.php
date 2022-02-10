PHP 8 :
=======


<?php

// To break line 3 Times 
function break_()
{
    for ($i = 0; $i < 3; $i++) {
        echo "</br>";
    }
}


# 7. Output Comments :
//-------------------

// Print Your PHP Version
phpinfo();

// Concatenating Two Texts
echo "Ahmed" . "Arafat"; // Concatenation With ""
echo 'Ahmed' . 'Arafat'; // Concatenation With ''
// There Will Be A Differnent Between "x" & 'x' Will Discuss It In Next Lesson

// Add Html Tag In Echo Statement In Php
echo "<h1>3+5</h1>";

// To Break A Line
echo "<br>";

// Write A Comment In Php
// echo "<br>";
// OR
# echo "<br>"; // To Write A Comment

// Write A Comment In Php In Multilines
/*
echo "Hello";
echo "Hello";
echo "Hello";
*/

// Print A Text
print "Hello World";
// Note: echo Is Faster



# 8. Variables :
//--------------

$number = 10; //int
$x = 5.5; // float / double
$z = null; // null
$name = "Ahmed"; // string
$a = true; // bool

// You Can Write A Varaible With $ Sign In Double Quotes ""
echo "This Numerb is $number";

// While '' , you Will Have To Concatinate Using [.] As It Will Print [$variablename] As String Not A Variable 



# 9. Operations:
//--------------

$num1 = 10; //int
$num2 = 9;
echo $num1 > $num2; // O/P -> 1 [True]

echo $num1 < $num2; // O/P -> NOTHING
// Note: Php Wont Print False Condition


$x = 10;
$x++;
++$x;
$x = $x + 5;
$x += 5;
$x *= 20;



# 10. If Statements:
//------------------

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


// Trinary Condition
echo $x > 0 ? "$x is Postive" : ($x < 0 ? "$x is Negative" : "$x Is Zero");



# 11. Loops :
//-----------



// While Loop
$i = 0;
while ($i < 10) {
    echo "This Number Is $i" . "<br>";
    $i++;
}


// Do While Loop
$i = 0;
do {
    echo "This Number Is $i" . "<br>";
    $i++;
} while ($i > 10);


// For Loop
for ($x = 0; $x <= 20; $x++) {
    echo "<h1>Number$x</h1>";
}



# 12. Nested Loops:
//-----------------



for ($x = 1; $x <= 9; $x++) {
    for ($y = 1; $y <= 9; $y++) {
        echo "$x * $y = " . $x * $y . '<br>';
    }
    echo "<hr>";
}


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


# 13. Array:
// ----------



// Create An Array
$arr = array(1, 2, 3, 4, 5, 6);

// Print The Whole Array In [Key] -> Value Format
print_r($arr);
//  O/P --> Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )

unset($arr[2]); // Will Remove [2] => 3 [Key] => Value Pair From Array

$arr[2] = 222; ///VIP -> Will Be Added To End Of Array {not As C++}

Break_();
print_r($arr);
//  O/P --> Array ( [0] => 1 [1] => 2 [3] => 4 [4] => 5 [5] => 6 [2] => 222 )

// Add One Or More Elements To End Of Array
array_push($arr, 99); // One element
//OR
array_push($arr, 10, 20, 30, 40, 50); // More than one element

// Override a value in already exist index
$arr[2] = 222222;





# 14. Array Part 2
//----------------


// Create An Associative Array

$arr = array(
    'Arabic' => 99,
    'English' => 100,
    'French' => 101
);

print_r($arr);
//  O/P --> Array ( [Arabic] => 99 [English] => 100 [French] => 101 )

break_();

// Print Value 99
echo $arr['Arabic'];


# Slicing An Array :

$num = array(1, 2, 3, 4, 5, 6);
//Start Slicing From Second Element In Array [Index 1] Till Index 4 [Included In Slicing]
$num2 = array_slice($num, 1, 4);  // {2,3,4,5}
print_r($num2);
// O/P --> Array ( [0] => 2 [1] => 3 [2] => 4 [3] => 5 )
// Note : This Will Take Only Values In Rang, While There Index Will Change

// To Prevent This
$num3 = array_slice($num, 1, 4, true); // Add True Argument

print_r($num3);
// O/P --> Array ( [1] => 2 [2] => 3 [3] => 4 [4] => 5 )


break_();
// Use Array_Slice() With Associative Array
$test = array_slice($arr, 1, 2);
print_r($test);
// O/P --> Array ( [English] => 100 [French] => 101 )


$arr5 = array(5, 2, 1, 6, 0);
// Function Sort() To Sort An Array [asc]
sort($arr5);
break_();
print_r($arr5);
// O/P --> Array ( [0] => 0 [1] => 1 [2] => 2 [3] => 5 [4] => 6 )
// VIP Note : This Will Make Sort Only The Values, which Means That There Index Will Change 
// Ex: before Sorting [0] => 5      But After Sorting [3] => 5
// Value 5 Becomes In Index 3 Instead Of 0


$arr6 = array(5, 2, 1, 6, 0);
// Function Rsort() To Reverse Sort An Array [desc]
rsort($arr6);
break_();
print_r($arr6);
// Same Note As Above [keys Will Be Changed]


$Lang = array(
    'item1' => 'French',
    'item0' => 'English',
    'item2' => 'Arabic',
);

// Sort An Associative Array [asc]
asort($Lang);
// Sort An Associative Array [desc]
arsort($Lang);
break_();
print_r($Lang);
// O/P --> Array ( [item1] => French [item0] => English [item2] => Arabic )
// Note: as This Is An Associative Array, each Key Is Releated To A Spacific Value Even If It Is Sorted


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
// O/P --> Array ( [item2] => Arabic [item1] => French [item0] => English )



# 15. Array Part 3
//-----------------


# Convert A String Into An Array :

$str = "My Name Is Ahmed Arafat";
// Argument #1 is Separator While Argument #2 is String 
$array = explode(' ', $str);
$array1 = explode('a', $str);
print_r($array);
// O/P --> Array ( [0] => My [1] => Name [2] => Is [3] => Ahmed [4] => Arafat )
break_();
print_r($array1);
// O/P --> Array ( [0] => My N [1] => me Is Ahmed Ar [2] => f [3] => t )


# Convert An Array Into A String :

$array2 = array("My", "Name", "Is", "Ahmed", "Arafat");
$str = implode('#', $array2);
echo $str;
// O/P --> My#Name#Is#Ahmed#Arafat



# 16. Functions
//-------------

// Define A Function
function hello()
{
    echo "Hello World";
}

// Call A Function
hello();


// Define A Parametrized Function
function PrintName($Name)
{
    echo "Your Name Is : $Name";
}
$name = "Ahmed Arafat";
PrintName($name);
//OR
PrintName("Ging Freecss");


// You Can Also Specifiy Data Type Of Parameter [string/int/floar/bool]
function PrintName2(string $Name)
{
    echo "Your Name Is : $Name";
}

// Send An Array As A Parameter
function PrintName3($arr = array())
{
    foreach ($arr as $data) echo $data . " ";
}
$arr7 = array(1, 2, 3, 4, 5);
PrintName3($arr7);

// Void Function
function sum($num1, $num2)
{
    echo $num1 + $num2;
}
sum(10, 10);


// Function That Return Sum Of Two Numbers [integer]
function sum2($num1, $num2)
{
    return $num1 + $num2;
}
echo sum2(10, 99);



# 17. Functions Part 2
//--------------------



function sum4($num1, $num2)
{
    return $num1 + $num2;
}

$n1 = 10;
$n2 = 20;
$res = sum4($n1, $n2);
echo $res;


// Will Return A String
function sum5($num1, $num2)
{
    return "$num1 + $num2 = " . ($num1 + $num2); // You Have To Put Them in () Else It Will Throw An Error
}

$n1 = 10;
$n2 = 30;
$res = sum5($n1, $n2);
echo $res;



// Will Return A String Or Integer Depending On Condition
function sum3($num1, $num2)
{
    if ($num1 == 10) return "$num1 + $num2 = " . ($num1 + $num2);
    return 0;
}

$n1 = 11;
$n2 = 30;
$res = sum3($n1, $n2);
echo $res;


// To Specify A Return Type Of Function Add [:Data_Type]
// Now Return 1 Will Be Also String {"1"} Not An Integer
// Also As We Said We Can Specidfy Data Type Of Parameter
function multiple(int $num1, int $num2): String
{
    if ($num1 == 10) return "$num1 * $num2 = " . ($num1 * $num2);
    return 1;
}

$n1 = 11;
$n2 = 30;
$res = multiple($n1, $n2); // Will Be A String As Condition Is False
echo $res[0];






# 18. Recursion
//-------------


// Recursive Function
function fun($n)
{
    if ($n != 0) return $n + fun($n - 1);
    return 0;
}
$res = fun(5);
echo $res;



//==============================================
//==============================================
//==============================================

# Section 4: Object Oriented Programming (OOP)



# 19. OOP
//-------



// OOP {Object Oriented Programming}
// class -> Objects
// Variables {properties or attributes} 
// Functions(Actions) {Also Called methods in OOP context}

// Create a class
class Human
{
    // An attribute
    public $age;

    // A Method
    public function info()
    {
    }
}

// Create An Object From Class Human
$h1 = new Human(); // New Keywaord Is Used To Create An Object

//$h1.age = 22; // WRONG SYNTAX
$h1->age = 22;  // Use Arrow Operator To Access Attributes/Methods Of An Object
// Note We Dont Write Doller Sign [$] With Variables Of Object

echo $h1->age;



# 20. this & setter getter
//------------------------


class Human1
{
    // An Attribute
    private $age; // A Private Attribute Cannot Be Accessed Outside Class

    // A Method
    public function info()
    {
        echo "The Object Has " . $this->age . " Years Old" . "<br />";
    }
    public function NewAge()
    {
        $this->age = $this->age + 5;
        echo "The Object's Age Become " . $this->age . " Years Old" . "<br />";
    }

    // Setter Method
    public function SetAge($age)
    {
        $this->age = $age;
    }

    // Getter Method
    public function GetAge()
    {
        return $this->age;
    }
}

$h1 = new Human1();
//$h1->age = 22; // I Cannot Access A Private Attribute
$h1->SetAge(22);
//$h1->info();
echo $h1->GetAge() . " ";


$h2 = new Human1();
//$h2->age = 21; // I Cannot Access A Private Attribute
$h2->SetAge(21);
//$h2->info();
echo $h2->GetAge();



#21. Constructor
//--------------


class Human2
{
    // An Attribute
    private $age; // A Private Attribute Cannot Be Accessed Outside Class

    // Create A Constructor In PHP
    // Note In Other Languages Like C++, name Of Function Is Same As Class Name
    // While In Php We Use __construct Keyword
    public function __construct($age)
    {
        $this->age = $age;
        //echo "hi". "<br>";
    }

    // New Syntax For Constructor Works Only On Php8
    // public function __construct(public int $age)
    // { }

    public function GetAge()
    {
        return $this->age;
    }
}
$h1 = new Human2(20);
echo $h1->GetAge();

$h2 = new Human2(30);
echo $h2->GetAge();



# 22. Inheritance:
//----------------


// A is Indirect Super class
class A
{

    public $age; // Public -> Means You Can Access Attribute In Any Place
    private $age1 = 10; // Private -> Means You Can Access Attribute Only Inside This Class
    protected $age2; // Protected -> Means This Class Or Any Other Class That Inherit From This Class Can Access This Attribute 
    // Otherwise It Is Like Private
}

// B is Direct Super class  
class B extends A
{
    public function SetAge($age): void
    {
        $this->age = $age;
        $this->age2 = $age;
        $this->age1 = $age; // it Is Like A New Attribute Named [age1] Not $age1 of Class A As It Is Private 
    }
}
class C extends B
{
} // C is subcalss



$a = new A();
$b = new B();

$b->age = 21; // As Class B Inherit All Attributes Of Class A
$b->SetAge(312);
echo $b->age1;



# 23. Parent
//----------

class A1
{
    // Constuctor
    function __construct($name)
    {
        echo "$name";
    }


    public function infoA()
    {
        echo "hello";
    }

    // Parameterized Function
    public function info1($name)
    {
        echo "hello, $name";
    }
}

class B1 extends A1
{

    public function fun()
    {
        // [parent] Is Keyword To Access Methods Of Super Class(Es) {one Ore More Class}
        parent::infoA();
    }

    // Parameterized Function
    public function fun2($name)
    {
        parent::info1($name);
    }

    // As Class B Inherit From Class A, and As Class A Has a Constructor Then When An Object
    // From Class B Is Created, the Constructor Of Class A Will Also Be Automatically Created So You Have To Call
    // It From Constuctor Of Class B
    function __construct($name)
    {
        parent::__construct($name);
    }
}

class C1 extends B1
{

    function __construct($name)
    {
        // This Will Call Constructor Of Direct Super Class [class B], then
        // Class B's Constructor Will Call Constructor Of Class A And So On
        parent::__construct($name);
    }
}

// Error As Class B Also Inhrit Constructor Of Class A [Which Is Parameterized]
// So When An Object From Class B Is Created Constructor Of Class A Will Be Called [as We Said !]
# $b = new B();
$b1 = new B1("Ahmed Arafat");
$c = new C1("Ging");



//==============================================
//==============================================
//==============================================

# Section 5: Php forms



# 24. Forms part 1 & 25. Forms part 2
//-----------------------------------

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="" method="GET">
        <label for="TitleName">Title</label>
        <input type="text" name="TitleName" id="TitleName" value="<?php if (isset($_GET['TitleName'])) echo $_GET['TitleName'];
                                                                    else echo "Enter Title Here"; ?>">
        <hr>
        <label for="TitleText">Title</label>
        <textarea name="TitleText" id="TitleText" cols="30" rows="10"><?php if (isset($_GET['TitleText'])) echo $_GET['TitleText'];
                                                                        else echo "Enter Title Here"; ?></textarea>
        <input type="submit" name="submit" value="Save Your Idea">
    </form>

    <?php

    print_r($_GET);
    // O/P --> Array ( [TitleName] => ahmed [TitleText] => BIS [submit] => Save Your Idea 1 ) ahmedBIS


    // Will Give An Error If This Key Is Not Exist
    echo $_GET['TitleName'];
    // Will Give An Error If This Key Is Not Exist
    echo $_GET['TitleText'];

    // isset() -> Function Check If This Key Is Associated With A Value Or Not 
    if (isset($_GET['TitleName'])) {
        echo $_GET['TitleName'];
    }

    if (isset($_GET['TitleText'])) {
        echo $_GET['TitleText'];
    }

    ?>
</body>

</html>
