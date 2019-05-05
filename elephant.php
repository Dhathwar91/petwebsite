<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>parks for pets</title>
    <link rel="stylesheet" href="parfod.css">
    <link rel="stylesheet" href="elephant.css">
    <link rel="stylesheet" href="StarRating.css">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    
</head>
<body>
        <div class="logo">
                <img src="logo.png" alt="">
            </div>
           
     <div class="navbar">
                    <ul>
                            <li> <a href="contact.pnp"> ABOUT US</a>
                        </li>
                       <li> <a href="food.pnp"> FOOD CENTERS</a> </li>
                        <li> <a href="#"> PLACES FOR PETS </a>
                            <ul>
                                    <li> <a href="parks.pnp"> PARKS</a> </li>
                                    <li> <a href="rest.pnp"> RESTAURANTS </a>
                            </ul>
                        </li>
                        <li> <a href="index.pnp"> HOME</a> </li>
                    </ul>
                </div>
                
            </div>
            <h1>Dog Park at Elephant Road, Bannerghatta</1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d248945.93293927642!2d77.39611676200501!3d12.857468296602184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae69d2732f2b0d%3A0x2feccb6ee3806683!2sDog+Park+at+The+Elephant+Pond%2C+Ragihalli+State+Forest%2C+Karnataka+562112!3m2!1d12.7436134!2d77.5756689!5e0!3m2!1sen!2sin!4v1554818442990!5m2!1sen!2sin" width="1000" height="438" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="Slider">

            </div>
        <h3>Details</h3>

        <pre>
Address:
Ragihalli State Forest, Karnataka 562112
<select style="width: 250px;">
        <option value="Timings">Timings</option>
    <option value="Saturday">Saturday  :     9am–1pm  </option>
    <option value="Sunday">Sunday  :   8am–5pm  </option>
</select>

	 
</pre>
<x-star-rating value="3" number="5"></x-star-rating>
<form action="elephant_post.php" method="POST" enctype="multipart/form-data" >
    <h2>Add Comment</h2>
      <input type="text" placeholder="Enter Your Name" name="name" required /> <br /><br />
      <textarea rows="5" placeholder="Enter the Comment" cols="30" name="comment" required></textarea><br>
      <button type="submit">Submit</button>
  </form>
  <h2>Comments</h2>
    <?php
    $con=mysqli_connect("localhost","root","divchand2","project");
    $find_project=mysqli_query($con,"SELECT * FROM elep");
    while($row=mysqli_fetch_assoc($find_project))
    {
        $comment_name=$row['name'];
        $comment =$row['comment'];
        echo "$comment_name -$comment<p>";
    }
    if(isset($_GET['error']))
    {
        echo "<p>limited characters(upto 100)";
    }
    ?>
  

    </body>

</html>