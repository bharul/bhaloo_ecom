<?php
define('Database_NAME', 'bhaloo_ecom');
define('Database_USER', 'root');
define('Database_PASSWORD', '');
define('Database_HOST', 'localhost');

global $table_prefix;
$table_prefix = 'ecom_';

class Database {
    private $host = Database_HOST;
    private $user = Database_USER;
    private $password = Database_PASSWORD;
    private $database = Database_NAME;
    public $conn; 
    public function __construct(){
        // connecting to database if database already exists or create new database 
        try {
            $this->conn = new PDO("mysql:host=$this->host", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("CREATE DATABASE IF NOT EXISTS $this->database");
            $this->conn->exec("USE $this->database");
            if(!isset($_SESSION)) {
                session_start();
            }

            include 'database.php';
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

}new Database();

