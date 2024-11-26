<?php

// config/Database.php

// class Database{
//     private $host = 'localhost';
//     private $dbname = 'prime_news_blog';
//     private $username = 'root';
//     private $password = '';
//     private $charset = 'utf8';
//     public $pdo;

//     public function __construct()
//     {
        
//         try {
//             $conn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";
    
//             $options = [
//                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//                 PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//                 PDO::ATTR_EMULATE_PREPARES => false,
//             ];

//             $this->pdo = new PDO($conn, $this->username, $this->password, $options);

//         } catch (PDOException $e) {
//             throw new Exception("Database connection failed: " . $e->getMessage());
//         }

//     }

//     public function GetConnection()
//     {
//         // echo "it works";
//         return $this->pdo;
//     }
// }




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


// $testDB = new Database();

// $insertQuery = $testDB->connect();

// echo $insertQuery->exec("Select * From post");