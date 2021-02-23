<?php
session_start();
require ('connection.php');
    $query = " TRUNCATE TABLE cart ";
    $result = mysqli_query($conn,$query);    
?>
<script>
function redir(){
window.location.replace("../cart.php");
}
redir();
</script>