<?php
session_start();
include('connection.php');
$dtype = $_POST['dtype'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$house = $_POST['hname'];
$street = $_POST['stadd'];
$aptno = $_POST['aptno'];
$town = $_POST['town'];
$zip = $_POST['zip'];
$email = $_POST['email'];
$number = $_POST['phno'];
// second section
$noc = $_POST['noc'];           // name on card 
$cardtype = $_POST['cardtype'];
$cardno = $_POST['cardno'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];
$Id = mt_rand(100, 999);
$pays = $_SESSION['subtotal'] ;
$statuss = "Not Delivered";
// product insertion
$prods = mysqli_query($conn, "SELECT * FROM cart");
while ($prods1 = mysqli_fetch_assoc($prods)) {
    $itm[] = $prods1['name'];   
}
$itms = implode(",",$itm);

$query = "INSERT INTO orders VALUES ('$Id','$dtype','$fname','$lname','$house','$street','$aptno','$town','$zip','$email','$number','$noc','$cardtype','$cardno','$expmonth','$expyear','$cvv','$itms','$pays','$statuss')";
$result = mysqli_query($conn, $query);
if ($result) {
    echo "Success";
    $query1 = " TRUNCATE TABLE cart ";
 mysqli_query($conn,$query1); 
}
 /* $records = mysqli_query($conn, "SELECT * FROM cart");
 while ($records1 = mysqli_fetch_assoc($records)) {
 $itm[] = ($records1['name']);        // finised this simple logic after raging for 3 hrs.
 }
 $itms = implode(",",$itm);
 echo $itms;
 $deliverr = "INSERT INTO delivery (item_names) VALUES ('$itms'); ";
 mysqli_query($conn,$deliverr); */
?><br>
<a href="../index.php">Click here....to Continue Shopping</a>