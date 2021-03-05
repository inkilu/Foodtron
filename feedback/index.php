<!DOCTYPE html>
<?php
session_start();
if(isset($_POST['okay'])){
require('../php/connection.php');
$cid=mt_rand(1,500);
$uname = $_POST['name'];
$email = $_POST['email'];
$complaints = $_POST['comments'];
$query = "INSERT INTO feedbacks (Cid,Uname,Email,Complaint,sts) VALUES ('$cid','$uname','$email','$complaints','NOT RESPONDED')";
mysqli_query($conn,$query);
header("Location:../admin/usrfeedback.php");
}
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback Form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="form.css">
    <script src="form.js"></script>
</head>

<body>
    <div class="container">
        <div class="imagebg"></div>
        <div class="row " style="margin-top: 50px">
            <div class="col-md-6 col-md-offset-3 form-container">
                <h2>Feedback</h2>
                <p> Please provide your feedback or Let us know if you want to work with us! </p>
                <form role="form" method="post" id="reused_form" action="index.php">
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="comments"> Message:</label>
                            <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Message" maxlength="6000" rows="7"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="name"> Your Name:</label>
                            <input type="text" readonly class="form-control" id="name" name="name" value="<?php echo $_SESSION["sess"]; ?>" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="email"> Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button type="submit" name="okay"class="btn btn-lg btn-warning btn-block">Post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>