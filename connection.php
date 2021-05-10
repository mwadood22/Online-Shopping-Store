<?php

Class MyClass1{

    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $db = "x-ports";
    protected $conn;
public function OpenCon()
{
    
    try
    {
    $this->conn = new PDO("mysql:host=$this->dbhost;dbname=$this->db", $this->dbuser, $this->dbpass);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $this->conn;
}
 catch (PDOException $e){
     echo "Error: ".$e->getMessage();
     die();
 }   
}
public function CloseCon()
{
    $this->conn = null;
}
}
?>