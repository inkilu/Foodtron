<?php
session_start();
if(isset($_SESSION['sess'])){
    echo $_SESSION['sess'];
    session_destroy();
 header("Location: ../index.php");
}
?>