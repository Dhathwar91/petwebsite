<?php
$con=mysqli_connect("localhost","root","divchand2","project");
$name=$_POST["name"];
$comment=$_POST["comment"];
$comment_length=strlen($comment);
if($comment_length>100)
{
    header("location:kai.php?error=1");
}
else
{
	
    $sql = "INSERT INTO kaic(id,name,comment) VALUES('','".$name."','".$comment."')";
    $result = mysqli_query($con,$sql);
    if($result == 1){
        
        header("location:kai.php");
    }
    else{
        echo "error..".mysqli_error($con);
    }
}
?>