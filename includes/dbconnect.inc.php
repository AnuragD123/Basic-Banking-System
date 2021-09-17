<?php

$serverName= 'localhost';
$username = 'root';
$password = '';
$database = 'bank_customers';


$conn = mysqli_connect($serverName,$username,$password,$database);

// if (!$conn) {
//     echo "Cannot Connect!";
// }
// else{
//     echo "Connected!";
// }