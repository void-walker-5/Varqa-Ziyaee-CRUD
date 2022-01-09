<?php

namespace CRUD\Helper;
use CRUD\Helper\DBConnector;

class PersonHelper
{
    public function insert($Person)
    {

        $sql = "INSERT INTO MyGuests (id,firstname, lastname, username)
        VALUES ($Person->getId(), $Person->getFirstName(), $Person->getLastName(), $Person->getUsername()))";
        $db = new DBConnector();
        $db->connect();
        $this->db->execQuery($sql);
    }

    public function fetch(int $id)
    {
        $db = new DBConnector();
        $db->connect();
        $res = $this->db->execQuery("SELECT * FROM Persons WHERE id = $id");
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                echo "Id: " . $row["id"] . "Name: " . $row["firstName"] . " " . $row["lastName"] . "Username: " . $row["username"] . "<br>";
            }
        } else {
            echo "0 results";
        }

    }

    public function fetchAll()
    {
        $db = new DBConnector();
        $db->connect();
        $res = $this->db->execQuery("SELECT * FROM Persons");
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                echo "Id: " . $row["id"] . "Name: " . $row["firstName"] . " " . $row["lastName"] . "Username: " . $row["username"] . "<br>";
            }
        } else {
            echo "0 results";
        }

    }

    public function update($Person)
    {

        $sql = "UPDATE MyGuests SET (id,firstname, lastname, username)
        VALUES ($Person->getId(), $Person->getFirstName(), $Person->getLastName(), $Person->getUsername()))
        WHERE id = $Person->getId()";
        $db = new DBConnector();
        $db->connect();
        $this->db->execQuery($sql);
    }

    public function delete($id)
    {

        $sql = "DELETE FROM MyGuests WHERE id = $id";
        $db = new DBConnector();
        $db->connect();
        $this->db->execQuery($sql);
    }

}