<?php
include 'dbconnect.php';

$counter="";
$records=array();

$sql="SELECT * FROM images";
$result=mysqli_query($conn,$sql);

if($result->num_rows > 0){
    while($rows=$result->fetch_object()){
        $records[]=$rows;
    }
}



?>