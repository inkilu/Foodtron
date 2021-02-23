<?php
include('connection.php');
if(!isset($_POST['dtype'])){
    echo "Please Refill Delivery type!";
    header('Location:../checkout.php');
}
$dtype = $_POST['dtype'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$house = $_POST['hname'];
$street = $_POST['stadd'];
$aptno = $_POST['aptno'];
$town= $_POST['town'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$number = $_POST['phno'];

$noc = $_POST['noc']; /* name on card */
$cardtype = $_POST['cardtype'];
$cardno = $_POST['cardno'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];
?>