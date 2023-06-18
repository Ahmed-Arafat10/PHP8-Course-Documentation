<?php

class Database
{
    private static $pdo;
    public static $operators = ['=', '<>', 'and', 'or', 'like'];
    private $table;

    public static function connect(string $method)
    {
        //self::$pdo = $method;
        static::$pdo = $method;
        return new static;
    }

    public static function create(array $data)
    {
        var_dump('Creating a new database with ' . self::$pdo);
    }

    public function message()
    {
        var_dump('Connected to the Database using ' . self::$pdo);
        return $this;
    }

    public function setTable(string $name)
    {
        $this->table = $name;
        return $this;
    }

    public function insert(array $data)
    {
        $this->message();
        var_dump("INSERT INTO {$this->table} VALUES (" . json_encode($data) . ")");
        return $this;
    }

    public function getMethod()
    {
        return self::$pdo;
    }
}

var_dump(Database::$operators);
Database::connect('PDO');
Database::create([]);

$db = new Database();
echo $db->getMethod();

Database::connect("pdo")
    ->setTable('users')
    ->insert([
        'id' => null,
        'username' => "Ahmed Arafat",
        'password' => '123'
    ])->message()->message()->message()->message();


echo __DIR__;