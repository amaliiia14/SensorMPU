<?php

namespace app\Controller;

include_once "app/Traits/ApiResponseFormatter.php";
include_once "app/Models/Sensor.php";

use app\Models\Sensor;
use app\Traits\ApiResponseFormatter;

class SensorController {
    use ApiResponseFormatter;

    public function index() 
    {
        $sensorModel = new Sensor();  
        $response = $sensorModel->getAll();

        $sensorModel->closeConnection();

        return $response;  
    }
}
