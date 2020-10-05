<?php
require('connection.php');
if(isset($_POST['registersubmit'])){
    $regusername = $_POST['usernme'];
    $regemail = $_POST['email_'];
    $regpassword = $_POST['passwrd'];
    $regpassword1 = $_POST['passwrd1'];
if(strcmp($regpassword,$regpassword1 == 0)){
       $query= "INSERT INTO registration (username,email,password) VALUES ('$regusername','$regemail','$regpassword');";
        $result = mysqli_query($conn,$query);
         echo (!$conn) ? "error" : "added into table";
     }
}
?>