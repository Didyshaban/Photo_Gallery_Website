
<?php
include('dbconnect.php');
error_reporting(0);
session_start();

if(isset($_SESSION['fname']) && isset($_SESSION['lname'])){
  // header("location:dashboard1.php");
}
 



if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $pass=md5($_POST['pass']);

  $sql="SELECT * FROM users WHERE email='$email' AND pass='$pass'";
  $result=mysqli_query($conn,$sql);

  if($result->num_rows > 0){
    $row=mysqli_fetch_assoc($result);
    $_SESSION['fname']=$row['fname'];
    $_SESSION['lname']=$row['lname'];
    header ('LOCATION:dashboard1.php');
  }else{
    echo "<script>alert('Email or Password may be incorrect...')</script>";
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
        <u><h2 class="text-center">Login Here</h2></u>
    </div>
    <div class="w-50 m-auto">
        <form action="" method="POST">
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="pass" class="form-control" required>
            </div>
            <button type="submit" name ="submit" class="btn btn-primary">Login</button>
            <p>Have account?<a href="register.php">Register Here</a></p>
        </form>
    </div>
</section>









<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script  type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    

</body>
</html>