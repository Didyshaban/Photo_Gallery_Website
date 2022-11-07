<?php
include ('dbconnect.php');
error_reporting(0);
session_start();
if(isset($_SESSION['fname']) && $_SESSION['lname']){
  header('location:dashboard.php');
}

if(isset($_POST['submit'])){

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=md5($_POST['pass']);
$confirm=md5($_POST['confirm']);
date_default_timezone_set('Africa/Kigali');
$date = date('Y-m-d h:i:s a',time());

if($pass == $confirm){
  $sql="SELECT * FROM users  WHERE email='$email'";
  $result = mysqli_query($conn,$sql);
  if(!$result->num_rows > 0){

$sql= "INSERT INTO users(fname,lname,email,pass,created_at) VALUES ('$fname','$lname','$email','$pass','$date')";
$result= mysqli_query($conn,$sql);

if($result){
  echo "<script>alert('wow!successfully registered')</script>";
}else{
  die(mysqli_error($conn));
}
  
  }

}

}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Photo Gallery</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<img style="border-radius:0px 30px 0px 20px" src="../images/log1.png" width="80px" height="80px"><a class="navbar-brand" href="#">Arts<br>Organization</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a href="index.php"><button class="btn btn-danger" style="margin-left:1000px ;"  >Back</button></a>
  
</nav><br><br>

<section class="my-4">
    <div class="py-4">
        <u><h2 class="text-center">Register below</h2></u>
    </div>
    <div class="w-50 m-auto">
        <form action="" method="POST"><div class="form-group">
                <label>Firstname:</label>
                <input type="text" name="fname" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Lastname:</label>
                <input type="text" name="lname" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="pass" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Confirm Password:</label>
                <input type="password" name="confirm" class="form-control" required>
            </div>
            
            <button type="submit" name ="submit" class="btn btn-primary btn-lg ">Register</button>
            <p>Arleady Have Account?<a href="login.php">Login Here</a></p>
        </form>
    </div>
</section>









<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script  type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    

</body>
</html>