<?php

namespace abstractClass;

abstract class Database
{
    protected $_handler;
    protected $stmt;
    protected $host, $db_name, $db_user, $db_password;

    /**
     * @param $host
     * @param $db_name
     * @param $db_user
     * @param $db_password
     */
    public function __construct($host, $db_name, $db_user, $db_password)
    {
        $this->host = $host;
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
    }

    abstract public function connect();

    public function select($sql)
    {
        # _handler will be the object either from MySQL or PDO, inside it there is a method query() that exists in the two classes
        $this->stmt = $this->_handler->query($sql);
        return $this;
    }

    public function getConnection()
    {
        return $this->_handler;
    }

    abstract public function get();

}