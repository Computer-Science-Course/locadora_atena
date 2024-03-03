<?php
class Database
{
    private $servername = ''; // Change this to your MySQL server hostname
    private $username = ''; // Change this to your MySQL username
    private $password = ''; // Change this to your MySQL password
    private $database = ''; // Change this to your MySQL database name

    public function __construct()
    {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->database = 'locadora_atena';
    }

    public function create(
        $sql,
        $bind_types,
        $bind_params,
    ) {
        // Create connection
        $conn = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->database
        );

        // Check connection
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        // Prepare and bind parameters
        $stmt = $conn->prepare($sql);
        $stmt->bind_param($bind_types, ...$bind_params);

        // Execute the statement
        if ($stmt->execute()) {
            echo 'New record created successfully';
        } else {
            echo 'Error: ' . $sql . '<br>' . $conn->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }
}