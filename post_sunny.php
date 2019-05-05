<?php
$con=mysqli_connect("localhost","root","","rating");
$name=$_POST["name"];
$comment=$_POST["comment"];
$comment_length=strlen($comment);
if($comment_length>100)
{
    header("location:sunny.php?error=1");
}
else
{
	
    $sql = "INSERT INTO sunnys(id,name,comment) VALUES('','".$name."','".$comment."')";
    $result = mysqli_query($con,$sql);
    if($result == 1){
        
        header("location:sunny.php");
    }
    else{
        echo "error..".mysqli_error($con);
    }
}
?>