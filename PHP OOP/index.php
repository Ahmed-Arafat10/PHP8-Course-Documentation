<?php

 class Human
{
    private $name;
    private $email;
    private $password;
    public static $id = 0;

    public function __construct()
    {
        $this->name = "ahmed";
        echo "Hello World";
    }

    // TODO : New __set() magic method
    public function __set($att, $value)
    {

        if (property_exists($this, $att)) {
            $this->$att = $value;
        }
        return $this; // for method binding
    }

    // TODO : New __get() magic method
    public function __get($att)
    {
        if (property_exists($this, $att)) {
            return $this->$att;
        }
    }

    public static function Hello()
    {
        echo "yes";
    }

    public function test()
    {
        //self::test();
        self::$id++;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
    }
 }


class Student extends Human
{
    private $GPA;

    public function yes()
    {
    }

    public function myab()
    {
        // TODO: Implement myab() method.
    }
}


$ahmed = new Human();
//$ahmed->Hello();
$ahmed->__set('name', 3.94);
echo $ahmed->__get('name');
Student::$id++;
$ahmed->test();
echo Student::$id;
Human::Hello();

echo PHP_EOL;