# Section 4: Object-Oriented Programming (OOP)

## 19. OOP


````
OOP: Object Oriented Programming
class & Objects
Variables (properties or attributes)
Functions (Actions) - Also Called methods in OOP context
````

````php
// Create a class
class Human
{
// An attribute
public $age;

    // A Method
    public function info()
    {}
    
}
````

- Create An Object From Class Human
````php
$h1 = new Human(); // New Keyword Is Used To Create An Object
````

````php
$h1.age = 22; // WRONG SYNTAX
$h1->age = 22; 
echo $h1->age;
````
> Use Arrow Operator To Access Attributes/Methods Of An Object
> <br> Note We Don't Write Dollar Sign [$] With Variables Of Object


# 20. this & setter getter

````php
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
````


#21. Constructor

````php
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
````


# 22. Inheritance:

````php
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

} // C is Subclass



$a = new A();
$b = new B();

$b->age = 21; // As Class B Inherit All Attributes Of Class A
$b->SetAge(312);
echo $b->age1;
````


# 23. Parent
````php
class A1
{
    // Constructor
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
    // It From Constructor Of Class B
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

// Error As Class B Also Inherit Constructor Of Class A [Which Is Parameterized]
// So When An Object From Class B Is Created Constructor Of Class A Will Be Called [as We Said !]
# $b = new B1();
$b1 = new B1("Ahmed Arafat");
$c = new C1("Ging");
````