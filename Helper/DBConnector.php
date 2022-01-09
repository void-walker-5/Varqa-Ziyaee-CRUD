<?php

namespace CRUD\Helper;

class DBConnector
{

    /** @var mixed $db */
    private $db;
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function __construct($serverName, $userName, $passWord, $dbName)
    {

        $this->servername = $serverName;
        $this->username = $userName;
        $this->password = $passWord;
        $this->dbname = $dbName;

    }

    /**
     * @throws \Exception
     * @return void
     */
    public function connect() : void
    {

        // Create connection
        $this->db = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        // Check connection
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }



    }

    /**
     * @param string $query
     * @return bool
     */
    public function execQuery(string $query) : bool
    {

        if ($this->db->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $this->db->error;
        }

        $this->db->close();
        return true;
    }

    /**
     * @param string $message
     * @throws \Exception
     * @return void
     */
    private function exceptionHandler(string $message): void
    {
        echo'something went wrong';
    }
}