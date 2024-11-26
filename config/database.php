<?php

// Database class create the connetion to the database using PDO(MySQL)
class Database{
    private $hostName = 'localhost';
    private $database_name = 'prime_news_blog';
    private $username = 'root';
    private $password = '';
    public $conn;
    // protected $sql;


    public function __construct()
    {
        // testing our connection
        try{

            $this->conn = new PDO("mysql:host=$this->hostName;dbname=$this->database_name;",$this->username,$this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

        // echo "it works";
        // return $this->conn;
        
        } catch (PDOException $e) {
            echo "Database connection failed: " . $e->getMessage();
            die();
        }
        
    }

    


    public function __destruct()
    {
        $this->conn = null;
    }

}


