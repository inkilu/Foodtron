<?php
require('connection.php');
if(isset($_POST['usernmeoremail'])){
   $uname=$_POST['usernmeoremail'];
   $pswrd=$_POST['passwrdlog'];

   $sql = "select * from registration where username='".$uname."'AND password='".$pswrd."' limit 1";
   $result=mysqli_query($conn,$sql);
  
   if(mysqli_num_rows($result)== 1){
    echo " You Have Successfully Logged in";
    exit();
}
else{
    echo " You Have Entered Incorrect Password";
    exit();
}
   /* echo "Redirecting";
header("Location:../index.html"); */
}
?>