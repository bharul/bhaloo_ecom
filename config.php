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
    public $conn; // Change the variable name to $conn here

    public function __construct(){
        try {
            // Create a new PDO instance and assign it to the class property
            $this->conn = new PDO("mysql:host=$this->host", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Create the database if it doesn't exist
            $this->conn->exec("CREATE DATABASE IF NOT EXISTS $this->database");

            // Switch to the specified database
            $this->conn->exec("USE $this->database");

            // Now that the database exists and is selected, you can create tables or perform other operations
            // include "database.php";

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    // Public method to get the database connection
    public function getConnection() {
        return $this->conn;
    }
}

// Create a new instance of the Database class
$database = new Database();

// Get the database connection using the getConnection() method
$conn = $database->getConnection();
