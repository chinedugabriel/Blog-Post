<?php

// config/Database.php

class Database
{
    private $host = 'localhost';
    private $dbname = 'prime_news_blog';
    private $username = 'root';
    private $password = '';
    private $charset = 'utf8';
    private $pdo;

    public function __construct()
    {
        $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            throw new Exception("Database connection failed: " . $e->getMessage());
        }
    }

    public function getConnection()
    {
        echo "it works";
        return $this->pdo;
    }
}



$testConn = new Database();

$testConn -> getConnection();