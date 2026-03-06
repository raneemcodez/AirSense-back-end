<?php

include "./connect.php" ;

// $response = array();

// ob_start(); // لمنع أي طباعة مباشرة

// // users
// ob_clean();
// ob_start();
getAllData("users", "1=1");
// $response["users"] = json_decode(ob_get_clean(), true);

// // dht11_data
// ob_start();
// getAllData("dht11_data", "1=1");
// $response["dht11_data"] = json_decode(ob_get_clean(), true);

// // mhz19b_data
// ob_start();
// getAllData("mhz19b_data", "1=1");
// $response["mhz19b_data"] = json_decode(ob_get_clean(), true);

// // pm25_data
// ob_start();
// getAllData("pm25_data", "1=1");
// $response["pm25_data"] = json_decode(ob_get_clean(), true);

// // رجّعهم كلهم مرة وحدة
// echo json_encode($response);

?>
