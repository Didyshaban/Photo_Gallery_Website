<?php
$conn=mysqli_connect("localhost","root","");
if($conn){
    echo "connected successfully";
}else{
    echo "connection failed";
}

mysqli_select_db($conn,"photography");

$names=$_POST['names'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$messages=$_POST['messages'];

$query="INSERT INTO contact(names,email,phone,messages) VALUES ('$names','$email','$phone','$messages')";
mysqli_query($conn,$query);
header('LOCATION:index.php#contactus');


?>