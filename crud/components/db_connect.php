<?php 
$localhost = "173.212.235.205";
$username = "nejatcod_pets_website";
$password = "Khashi67!";
$dbname = "nejatcod_cr11_petadoption_yasnejat";

// create connection
$connect = new  mysqli($localhost, $username, $password, $dbname);

// check connection
if($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} else {
    // echo "Successfully Connected";
}