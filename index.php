<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="gl.css">
    <link rel="stylesheet" href="parfod.css">
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
<h4>ADD COMMENTS</h4>
   Name:<input type="text" id="name" /> <br /><br />
   Date: <input type="date" id="date" /> <br /> <br />
   Body: <textarea rows="5" cols="30" id="bodyText"></textarea><br /> <br />
   <input type="button" id="addComment" value="Submit" />
 </div>
   <div id="container">
   
</div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="script.js"></script>
</form>
</html>