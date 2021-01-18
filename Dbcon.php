<?php
class Dbcon{
    public $conn;
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public function __construct(){
        $this->servername="localhost";
        $this->username="root";
        $this->password="";
        $this->dbname="CedHosting";
    }
    public function createConnection(){
        $this->conn=new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        if ($this->conn){
            return $this->conn;
            
        }
        else {
            return "connection error";
        }
    }
}
?>