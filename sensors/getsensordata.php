<?php

header("Content-Type: application/json");
include "../connect.php";

$stmt = $con->prepare("SELECT * FROM dht11_data ORDER BY id DESC LIMIT 1");
$stmt->execute();
$data = $stmt->fetch(PDO::FETCH_ASSOC);

if ($data) {
    echo json_encode([
        "temperature" => $data["temperature"],
        "humidity" => $data["humidity"]
    ]);
} else {
    echo json_encode([
        "temperature" => "0",
        "humidity" => "0"
    ]);
}
?>


