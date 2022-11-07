<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
<img style="border-radius:0px 30px 0px 20px" src="images/log1.png" width="80px" height="80px"><a class="navbar-brand" href="#">Arts<br>Organization</a>
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
    <a href="admin/login.php"><button class="btn btn-danger">Login</button></a>
    <a href="admin/register.php"><button class="btn btn-danger">Sign In</button></a>
  </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" height="550px" src="images/nature2.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100"  height="550px" src="images/architecture1.jpeg" alt="Second slide">
    
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 "  height="550px" src="images/travel.jpeg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<a id="nature">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Nature</h2>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/nature3.jpeg" class="img-fluid pb-3"> 
    </div>
    <div class="col-lg-4 col-md-4 col-12">
            <img src="images/nature2.jpeg" class="img-fluid pb-3"> 
    </div>
    <div class="col-lg-4 col-md-4 col-12">
            <img src="images/nature4.jpeg" class="img-fluid pb-3"> 
    </div>
</section>
</a>
<a id="architecture">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Architecture</h2>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/architecture1.jpeg" class="img-fluid pb-3"> 
    </div>
    <div class="col-lg-4 col-md-4 col-12">
            <img src="images/architecture2.jpeg" class="img-fluid pb-3"> 
    </div>
    <div class="col-lg-4 col-md-4 col-12">
            <img src="images/architecture3.jpeg" class="img-fluid pb-3"> 
    </div>
    
</section>
</a>

<a id="travel">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Travel</h2>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <img src="images/travel.jpeg" class="img-fluid pb-3"> 
    </div>
    <div class="col-lg-4 col-md-4 col-12">
            <img src="images/travel2.jpeg" class="img-fluid pb-3"> 
    </div>
    <div class="col-lg-4 col-md-4 col-12">
            <img src="images/travel3.jpg" class="img-fluid pb-3"> 
    </div>
    
</section>
</a>
<a id="aboutus">

<section class="my-4">
    <div class="py-4">
        <u><h2 class="text-center">ABOUT US</h2></u>
        <h3 class="text-center">INES-Ruhengeri</h3><br>
        <p class="text-center">
            We are passionate photographers interested<br>
            in working with nature <br>
            Architecture and Travel photography.
</p>
    </div>
</section>
</a>

<a id="contactus">
<section class="my-4">
    <div class="py-4">
        <u><h2 class="text-center">CONTACT US</h2></u>
    </div>
    <div class="w-50 m-auto">
        <form action="contactus.php" method="POST">
            <div class="form-group">
                <label>Names:</label>
                <input type="text" name="names" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Phone:</label>
                <input type="text" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Message:</label>
                <textarea name="messages" rows="3" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
</a>
<div class="bg-dark fixed-bottom">
  <p class="text-center text-white">Copyright©2022</p>
</div>







<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script  type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    

</body>
</html>