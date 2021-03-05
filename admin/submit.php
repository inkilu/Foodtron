<?php
require('../php/connection.php');
$reply = $_POST['rep'];
$fdbid = $_POST['reply'];
$query = "UPDATE feedbacks SET repl = '$reply', sts = 'RESPONDED' WHERE Cid = '$fdbid';";
/* $query = "INSERT INTO feedbacks (Reply,Status) WHERE Cid = '$fdbid' VALUES ('$replies','OFF')"; */
mysqli_query($conn,$query);
header("Location:feedbacks.php");
?>