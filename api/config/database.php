<?php
class Database{
 
    // specify your own database credentials
    private $host = "database-1.cezctaqdaz2e.us-east-2.rds.amazonaws.com";
    private $db_name = "hospital_db";
    private $username = "admin";
    private $password = "Maneesh10";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>