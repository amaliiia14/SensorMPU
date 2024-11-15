<?php

$sensorData = $sensorData;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sensor Data</title>
</head>
<body style="justify-content: center;">
    <h1 style="justify-content: center; text-align: center; background-color: #D4F6FF;">Sensor MPU6050</h1>
    <table border="1">
        <tr style="justify-content: center; text-align:center";>
            <th>ID</th>
            <th>Angka Sumbu</th>
            <th>Arah</th>
            <th>Timestamp</th>
        </tr>
        <?php foreach ($sensorData as $data): ?>
            <tr>
                <td><?php echo $data['id_sensor_gerak']; ?></td>
                <td><?php echo $data['angka_sumbu']; ?></td>
                <td><?php echo $data['arah']; ?></td>
                <td><?php echo date("d-m-Y H:i:s", strtotime($data['waktu'])); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
