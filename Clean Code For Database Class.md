
### This class was invented by me to make interaction with Database in vanilla PHP more convenient, it follows the clean code & allows for code resuability and method chaining
### It has a similar syntax like `Laravel Eloquent ORM`

#### In `DB.php` file
````php
<?php
$Doc = $_SERVER['DOCUMENT_ROOT'];
require_once "$Doc/ProjectName/.env.php";

class DB
{
    private static $DB_NAME;
    private static $DB_PASS;
    private static $DB_USER;
    private static $DB_HOST;
    private static $Con;
    private static $TableName;
    private static $Values;

    /**
     * @return mysqli
     */
    public static function connect(): mysqli
    {
        self::$DB_NAME = apache_getenv('DB_NAME');
        self::$DB_PASS = apache_getenv('DB_PASSWORD');
        self::$DB_USER = apache_getenv('DB_USER');
        self::$DB_HOST = apache_getenv('DB_HOST');
        return self::$Con = new mysqli(self::$DB_HOST, self::$DB_USER, self::$DB_PASS, self::$DB_NAME);
    }

    /**
     * @return void
     */
    public static function check(): void
    {
        if (!self::$Con->connect_error) echo "Done connecting to the Database";
        else self::DB_Error();
    }

    /**
     * @return void
     */
    public static function DB_Error(): void
    {
        echo "Failed to connect to MySQL DB" . self::$Con->connect_errno;
    }

    /**
     * @param
     * @return void
     */
    public static function close(): void
    {
        self::$Con->close();
    }

    /**
     * @return mysqli
     */
    public static function getcon()
    {
        return self::$Con;
    }

    /**
     * @param string $TableName
     * @return static
     */
    public static function table(string $TableName)
    {
        self::$TableName = $TableName;
        return new static;
    }

    # CRUD Functions

    /**
     * @param array|null $bind
     * @return string|null
     */
    public static function SQLBindString(array $bind = null)
    {
        $Datatypes = null;
        if ($bind) {
            foreach ($bind as $item) {
                $Type = gettype($item);
                if ($Type == 'string' || $item == null) $Datatypes .= 's';
                else if ($Type == 'integer' || $Type == 'boolean') $Datatypes .= 'i';
                if ($Type == 'double') $Datatypes .= 'd';
            }
        }
        return $Datatypes;
    }

    /**
     * @param string $values
     * @param array $bind
     * @return int
     */
    public static function insert(string $values, array $bind)
    {
        $InsertStatement = "INSERT INTO `" . self::$TableName . "` VALUES " . $values;
        //echo $InsertStatement;
        $Query = self::$Con->prepare($InsertStatement);
        $Datatypes = self::SQLBindString($bind);
        $BindArr = [];
        $BindArr[] = $Datatypes;
        foreach ($bind as $key => $value) {
            $BindArr[] = &$bind[$key]; // reference of array $bind
        }
        //echo $SelectStatement . $Datatypes;
        call_user_func_array(array($Query, 'bind_param'), $BindArr);
        $Query->execute();
        $Query->close();
        return 1;
    }

    /**
     * @param string $values
     * @param array $bind
     * @return int
     */
    public static function update(string $values, array $bind)
    {
        $UpdateStatement = "UPDATE `" . self::$TableName . "` SET " . $values;
        $Query = self::$Con->prepare($UpdateStatement);
        $Datatypes = self::SQLBindString($bind);
        $BindArr = [];
        $BindArr[] = $Datatypes;
        foreach ($bind as $key => $value) {
            $BindArr[] = &$bind[$key]; // reference of array $bind
        }
        //echo $UpdateStatement . $Datatypes;
        call_user_func_array(array($Query, 'bind_param'), $BindArr);
        $Query->execute();
        $Query->close();
        return 1;
    }

    /**
     * @param string $values
     * @param array $bind
     * @return int
     */
    public static function delete(string $values, array $bind)
    {
        $DeleteStatement = "DELETE FROM `" . self::$TableName . "` WHERE " . $values;
        $Query = self::$Con->prepare($DeleteStatement);
        $Datatypes = self::SQLBindString($bind);
        $BindArr = [];
        $BindArr[] = $Datatypes;
        foreach ($bind as $key => $value) {
            $BindArr[] = &$bind[$key]; // reference of array $bind
        }
        //echo $DeleteStatement . $Datatypes;
        call_user_func_array(array($Query, 'bind_param'), $BindArr);
        $Query->execute();
        $Query->close();
        return 1;
    }

    /**
     * @param string $Columns
     * @param string|null $condition
     * @param array|null $bind
     * @return mysqli_result
     */
    public static function select(string $Columns, string $condition = null, array $bind = null)
    {
        $SelectStatement = "SELECT " . $Columns . " FROM `" . self::$TableName . "` " . $condition;
        //echo $SelectStatement;
        $Query = self::$Con->prepare($SelectStatement);
        $Datatypes = self::SQLBindString($bind);
        $BindArr = [];
        $BindArr[] = $Datatypes;
        if ($bind) {
            foreach ($bind as $key => $value) {
                $BindArr[] = &$bind[$key]; // reference of array $bind
            }
        }
        //echo $SelectStatement . $Datatypes;
        if ($bind) call_user_func_array(array($Query, 'bind_param'), $BindArr);
        $Query->execute();
        $Result = $Query->get_result();
        $Query->close();
        return $Result;
    }
}
````

#### In `.env.php` file
````php
<?php
// Don't forget to add them in the server cuz they are not in Git VC
apache_setenv('DB_USER','ahmed');
apache_setenv('DB_PASSWORD','');
apache_setenv('DB_NAME','test');
apache_setenv('DB_HOST','localhost');
?>
````