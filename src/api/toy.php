<?php

class Employee
{
// dbection
    private $db;
// Table
    private $db_table = "toys";
// Columns
    public $id;
    public $name;
    public $price;


// Db dbection
    public function __construct($db)
    {
        $this->db = $db;
    }

// GET ALL
    public function getEmployees()
    {

        $sqlQuery = "select * from `toys`";
        $this->result = $this->db->query($sqlQuery);
        return $this->result;
    }

// CREATE
    public function createEmployee()
    {
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $sqlQuery = "INSERT INTO
        " . $this->db_table . " SET name = '" . $this->name . "',price = '" . $this->price . "'";

        $this->db->query($sqlQuery);
        if ($this->db->affected_rows > 0) {
            return true;
        }
        return false;
    }

// UPDATE
    public function getSingleEmployee()
    {
        $sqlQuery = "SELECT id, name, price FROM
" . $this->db_table . " WHERE id = " . $this->id;
        $record = $this->db->query($sqlQuery);
        $dataRow = $record->fetch_assoc();
        $this->name = $dataRow['name'];
        $this->price = $dataRow['price'];

    }

// UPDATE
    public function updateEmployee()
    {
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $sqlQuery = "UPDATE " . $this->db_table . " SET name = '" . $this->name . "',
        price = '" . $this->price . "'WHERE id = " . $this->id;

        $this->db->query($sqlQuery);
        if ($this->db->affected_rows > 0) {
            return true;
        }
        return false;
    }

// DELETE
    function deleteEmployee()
    {
        $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ".$this->id;
        $this->db->query($sqlQuery);
        if ($this->db->affected_rows > 0) {
            return true;
        }
        return false;
    }
}
