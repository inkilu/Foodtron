<?php
require('connection.php');
if(isset($_POST['signup'])){
    $regusername = $_POST['reg_name'];
    $regemail = $_POST['email_'];
    $regpassword = $_POST['pass_'];
    $regpassword1 = $_POST['re_pass'];
if(strcmp($regpassword,$regpassword1 == 0)){
       $query= "INSERT INTO registration (username,email,password) VALUES ('$regusername','$regemail','$regpassword');";
        $result = mysqli_query($conn,$query);
         echo (!$conn) ? "error" : header("Locatin:../index.html");
     }
}
?>