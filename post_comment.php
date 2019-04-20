<?php
$con=mysqli_connect("localhost","root","","rating");

$name=$_POST["name"];
$comment=$_POST["comment"];

$comment_length=strlen($comment);

if($comment_length>100)
{
    header("location:index.php?error=1");
}
else
{
    mysqli_query( $con,"INSERT INTO rating values(' ','$name','$comment')");
    header("location:index.php");
}
?>
