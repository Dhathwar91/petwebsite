<?php
$con=mysqli_connect("localhost","root","","iwtproject");

$own_name=$_POST["owner"];
$typeid =$_POST["typeid"];
$mobno =$_POST["phone"];
$des =$_POST["des"];
$location =$_POST["location"];

$sql = "INSERT INTO idcard(id,owner,typeid,phone,des,location) VALUES('','".$own_name."','".$typeid."','".$mobno."','".$des."','.$location.')";
    $result = mysqli_query($con,$sql);
    if($result == 1){
        
        header("location:formid.php");
    }
    else{
        echo "error..".mysqli_error($con);
    }

?>