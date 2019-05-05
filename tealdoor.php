<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet friendly Restaurants</title>
    <link rel="stylesheet" href="tl.css">
    <link rel="stylesheet" href="parfod.css">
    <link rel="stylesheet" href="StarRating.css">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
        <div class="logo">
                <img src="logo.png" alt="">
            </div>
     <div class="navbar">
                    <ul>
                            <li> <a href="contact.php"> ABOUT US</a>
                               
                        </li>
                       <li> <a href="food.php"> FOOD CENTERS</a> </li>
                        <li> <a href="#"> PLACES FOR PETS </a>
                            <ul>
                                    <li> <a href="parks.php"> PARKS</a> </li>
                                    <li> <a href="rest.php"> RESTAURANTS </a>
                            </ul>
                        </li>
                        <li> <a href="index.php"> HOME</a> </li>
                    </ul>
                </div>
            </div>
    <h1>The Teal Door Café</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d62211.01201913832!2d77.60934137452371!3d12.95980274897039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae16bae21ca9a5%3A0xb7e577cd92505111!2sThe+Teal+Door+Cafe%2C+618%2F1%2C+2nd+Main+Road%2C+Hoysala+Nagar%2C+Indiranagar%2C+Binnamangala%2C+Stage+1%2C+Indiranagar%2C+Bengaluru%2C+Karnataka+560038!3m2!1d12.982472!2d77.6393416!5e0!3m2!1sen!2sin!4v1555245331060!5m2!1sen!2sin" width="1000" height="438" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="Slider">
    </div>
    <h3>Details</h3>   
<pre>
Address:      
618, 2nd Main Road, Binnamangala, 
Hoysala Nagar, Indiranagar, Bangalore
 
<select style="width: 250px;">
    <option value="Timings">Timings</option>
<option value="Monday">Monday  :    11am–11pm   </option>
<option value="Tuesday">Tuesday  :    11am–11pm </option>
<option value="Wednesday">Wednesday: 11am–11pm  </option>
<option value="Thursday">Thursday  :  11am–11pm </option>
<option value="Friday">Friday     :   11am–11pm </option>
<option value="Saturday">Saturday :   11am–11pm </option>
<option value="Sunday">Sunday     :   11am–11pm </option>
 
</select>


Contact no:9035384282

Cost: ₹600 for two people

   
</pre>

<form action="post_teal.php" method="POST" enctype="multipart/form-data" >
    <h2>Add Comment</h2>
      <input type="text" placeholder="Enter Your Name" name="name" required /> <br /><br />
      <textarea rows="5" placeholder="Enter the Comment" cols="30" name="comment" required></textarea><br>
      <button type="submit">Submit</button>
  </form>
  <h2>Comments</h2>
    <?php
    $con=mysqli_connect("localhost","root","divchand2","project");
    $find_project=mysqli_query($con,"SELECT * FROM tealdoor");
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