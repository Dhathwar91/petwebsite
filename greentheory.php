<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet friendly Restaurants</title>
    <link rel="stylesheet" href="gt.css">
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
    <h1>Green Theory</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d62208.73048799519!2d77.5310697061418!3d12.968930409468058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae167f5ae34c5f%3A0x3d18a8d44a9e14b1!2sGreen+Theory%2C+Residency+Road%2C+15%2C+Convent+Rd%2C+off%2C+Shanthala+Nagar%2C+Richmond+Town%2C+Bengaluru%2C+Karnataka+560025!3m2!1d12.968310599999999!2d77.60272119999999!5e0!3m2!1sen!2sin!4v1555244902490!5m2!1sen!2sin" width="1000" height="438" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="Slider">

    </div>
    <h3>Details</h3>   
<pre>
Address:      
Residency Road, 15, Convent Rd, off, 
Richmond Town, Bengaluru, Karnataka 
560025

<select style="width: 250px;">
    <option value="Timings">Timings</option>
<option value="Monday">Monday  :    11am–11pm   </option>
<option value="Tuesday">Tuesday  :    11am–11pm </option>
<option value="Wednesday">Wednesday: 11am–11pm  </option>
<option value="Thursday">Thursday  : 11am–11pm  </option>
<option value="Friday">Friday     :   11am–11pm </option>
<option value="Saturday">Saturday :   11am–11pm </option>
<option value="Sunday">Sunday     :  11am–11pm  </option>
 
</select>


Contact no:080 4166 3836

Cost:₹800 for two people
</pre>
<form action="post_green.php" method="POST" enctype="multipart/form-data" >
    <h2>Add Comment</h2>
      <input type="text" placeholder="Enter Your Name" name="name" required /> <br /><br />
      <textarea rows="5" placeholder="Enter the Comment" cols="30" name="comment" required></textarea><br>
      <button type="submit">Submit</button>
  </form>
  <h2>Comments</h2>
    <?php
    $con=mysqli_connect("localhost","root","divchand2","project");
    $find_project=mysqli_query($con,"SELECT * FROM greentheory");
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