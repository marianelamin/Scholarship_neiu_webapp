<?php

//$ip_address = "165.124.51.197";
$ip_address = "localhost";
$username = "root";
$password = "root";
$database_name = "test_DB";
$email = "";
//$port = "3306";

$db = mysqli_connect($ip_address, $username, $password, $database_name);
if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL."</br>";
?>
