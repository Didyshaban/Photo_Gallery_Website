<?php
$conn=mysqli_connect("localhost","root","");
if($conn){
    echo "connected successfully";
}else{
    echo "connection failed";
}

mysqli_select_db($conn,"photography");





?>