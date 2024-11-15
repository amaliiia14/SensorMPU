<?php

use app\Config\DatabaseSensor;
use app\Controller\SensorController;

include_once 'app/Config/DatabaseSensor.php';
include_once 'app/Controller/SensorController.php';

$database = new DatabaseSensor();
$db = $database->getConnection(); 

$sensorController = new SensorController();
$sensorData = $sensorController->index();  

include_once 'app/View/SensorView.php';
