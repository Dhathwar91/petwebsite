<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>comment</h1>
</body>
</html>
<?php


$con=mysqli_connect("localhost","root","","rating");

$find_rating=mysqli_query($con,"SELECT * FROM comments");
while($row=mysqli_fetch_assoc($find_rating))
{
    $comment_name=$row['name'];
    $comment =$row['comment'];
    echo "$comment_name 
     comment<p>";

}
if(isset($_GET['error']))
{
    echo "<p>limited characters(upto 100)";
}



?>

<html>
<form action="post_comment.php" method="POST">
<input type="text" name="name" value="Your Name"><br/>
<textarea name="comment" cols="50" rows="2">Enter your comments</textarea><br/>
<input type="submit" value="comment">
</form>
</html>