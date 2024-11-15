<?php

namespace app\Config;

class DatabaseSensor {
    public $host = "localhost";        
    public $user = "root";       
    public $password = "";       
    public $database = "piranti4";  
    public $port = 3306;  

    public function getConnection()
    {
        $conn = new \mysqli($this->host, $this->user, $this->password, $this->database, $this->port);

        if ($conn->connect_error) {
            die("Connection Failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
