<?php
session_start();
$dbname="foodtron_db";
$dbusername="root";
$dbpassword="";
$dbhost="127.0.0.1";
$conn= mysqli_connect($dbhost,$dbusername,$dbpassword,$dbname);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $query = "DELETE * FROM cart where id = "
?>