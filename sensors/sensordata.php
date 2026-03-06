<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

header("Content-Type: application/json");

include "../connect.php";
include_once "../functions.php"; 

$temperature = filterRequest("temperature");
$humidity = filterRequest("humidity");

$response = [
    "received_temperature" => $temperature,
    "received_humidity" => $humidity,
];

if (!empty($temperature) && !empty($humidity)) {
    $dht11_data = array(
        "temperature" => $temperature,
        "humidity" => $humidity
    );

    $inserted = insertData("dht11_data", $dht11_data);

    if ($inserted) {
        $response["status"] = "success";
        $response["message"] = "Data inserted successfully!";
    } else {
        $response["status"] = "error";
        $response["message"] = "Failed to insert data.";
    }
} else {
    $response["status"] = "error";
    $response["message"] = "Missing sensor values.";
}

echo json_encode($response);
?>




