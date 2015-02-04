<?php

/**
 * Handling database connection
 * This is all pretty self explanitory(sp?)... Connect to db or throw an error
 * 
 */
class DbConnect {
    private $conn;
    function __construct() {
    }
    /**
     * Establishing database connection
     * @return DbConnect database connection handler
     */
    function connect() {
        include_once dirname(__FILE__) . '/config.php';

        // Connecting to mysql database
        $this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // Check for database connection error
        if (mysqli_connect_errno()) {
            echo "SHIT... Failed to connect to MySQL: " . mysqli_connect_error();
        }
        // returning a connection resource we can work with
        return $this->conn;
    }
}
