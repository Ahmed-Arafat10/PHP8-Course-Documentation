<?php

namespace abstractClass;

//require_once "abstractClass/Database.php";

use interfaceTest\Dog;
use interfaceTest\Lion;

class MySQLClient extends Database
{

    public function connect()
    {
        $d = new Dog();
        $d->chasedBy(new Lion());
        $this->_handler = new \mysqli($this->host, $this->db_user, $this->db_password, $this->db_name);
        return $this;
    }


    public function get()
    {
        return json_decode(json_encode($this->stmt->fetch_all(MYSQLI_ASSOC)));
    }
}