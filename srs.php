<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>food  centers for pets</title>
    <link rel="stylesheet" href="srs.css">
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
            <h1>S R S Pet Mart</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d62216.526964376695!2d77.51734396909035!3d12.937713114708128!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae15134fef9a77%3A0x6f9ec2700b061fb2!2sSRS+Pet+Mart%2C+721%2C+24th+Main+Rd%2C+KR+Layout%2C+JP+Nagar+Phase+6%2C+JP+Nagar%2C+Bengaluru%2C+Karnataka+560078!3m2!1d12.9053712!2d77.5855297!5e0!3m2!1sen!2sin!4v1554639926578!5m2!1sen!2sin" width="1000" height="438" frameborder="0" style="border:0" allowfullscreen></iframe>
            <div class="Slider">

        </div>
<h3>Details</h3>
            <pre>
    
Address:  
721, 24th Main Rd, KR Layout, 
JP Nagar Phase 6, JP Nagar, 
Bengaluru, Karnataka
560078

Contact no: 088800 01976

</pre>
<x-star-rating value="3" number="5"></x-star-rating>
   
   <form action="srs_post.php" method="POST" enctype="multipart/form-data" >
    <h2>Add Comment</h2>
      <input type="text" placeholder="Enter Your Name" name="name" required /> <br /><br />
      <textarea rows="5" placeholder="Enter the Comment" cols="30" name="comment" required></textarea><br>
      <button type="submit">Submit</button>
  </form>
  <h2>Comments</h2>
    <?php
    $con=mysqli_connect("localhost","root","divchand2","project");
    $find_project=mysqli_query($con,"SELECT * FROM srs");
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