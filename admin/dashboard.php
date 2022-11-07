
<?php
session_start();
if(!isset($_SESSION['fname']) && !isset($_SESSION['lname'])){
    header('location:login.php');
}

?>





<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<img style="border-radius:0px 30px 0px 20px" src="../images/log1.png" width="80px" height="80px"><a class="navbar-brand" href="#">Arts<br>Organization</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#nature">Nature</a>
          <a class="dropdown-item" href="#architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">Travel</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutus">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactus">Contact Us</a>
      </li>
    </ul> 
  </div>
</nav>

<?php echo "<h1> Welome ".$_SESSION['fname'].' '.$_SESSION['lname']."</h1>";?>
<a href="logout.php">Logout</a>






<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script  type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    

</body>
</html>