<?php

namespace app\Models;

include_once'app/Config/DatabaseSensor.php';

use app\Config\DatabaseSensor;
use mysqli;

class Sensor {
    public $conn;

    public function __construct()
    {
        $config = new DatabaseSensor();
        $this->conn = new mysqli($config->host, $config->user, $config->password, $config->database, $config->port);

        if ($this->conn->connect_error) {
            die("Connection Failed: " . $this->conn->connect_error);
        }
    }

    public function saveData($angka_sumbu, $arah)
    {
        $sql = "INSERT INTO data_mpu (angka_sumbu, arah) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ds", $angka_sumbu, $arah);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAll()
    {
        $sql = "SELECT * from data_mpu";
        $result = $this->conn->query($sql);

        $data = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function closeConnection()
    {
        $this->conn->close();
    }
}
