<?php
$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "restaurant";



$connect = mysqli_connect($localhost, $username, $password, $dbname);

if (!$connect){
    die("connection failed :" . mysqli_connect_error());
}
// else {
//     echo "connected successfully";
// }

