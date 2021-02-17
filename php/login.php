<?php
session_start();
require('connection.php');
if(isset($_POST['your_name'])){
    
   $uname=$_POST['your_name'];
   $pswrd=$_POST['your_pass'];
  
   $sql = "select * from registration where username='".$uname."'AND password='".$pswrd."' limit 1";
   $result=mysqli_query($conn,$sql);
  
   if(mysqli_num_rows($result)== 1){
    $_SESSION['sess']=$uname;
    echo " You Have Successfully Logged in";
    header("Location:../index.php");
    exit();
}
else{
    
    echo " You Have Entered Incorrect Password. Redirecting in 3 sec.";
    ?>
    <br><a href="../index.php">Click Here to Go Back</a> 
<?php
    exit();
}
}
?>