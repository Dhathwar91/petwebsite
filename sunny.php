<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet friendly Restaurants</title>
    <link rel="stylesheet" href="sunny.css">
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
    <h1>Sunny’s</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d62208.93278019496!2d77.52973545613953!3d12.968121359603952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae1679c3d5604d%3A0x7da0792c99257a34!2sSunny&#39;s+Restaurant%2C+No.50%2C+Lavelle+Road%2CML+Subbaraju+Road%2C+Shanthala+Nagar%2C+Ashok+Nagar%2C+Bengaluru%2C+Karnataka+560001!3m2!1d12.971848699999999!2d77.5985968!5e0!3m2!1sen!2sin!4v1555244326198!5m2!1sen!2sin" width="1000" height="438" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="Slider">

    </div>
    <h3>Details</h3>
    <pre>
Address:      
No.50, Lavelle Road,ML Subbaraju Road,
Bengaluru, Karnataka 560001

<select style="width: 250px;">
        <option value="Timings">Timings</option>
    <option value="Monday">Monday  :       12–11:30pm</option>
    <option value="Tuesday">Tuesday  :     12–11:30pm</option>
    <option value="Wednesday">Wednesday:   12–11:30pm</option>
    <option value="Thursday">Thursday  :   12–11:30pm</option>
    <option value="Friday">Friday     :    12–11:30pm</option>
    <option value="Saturday">Saturday :    12–11:30pm</option>
    <option value="Sunday">Sunday     :    12–11:30pm</option>
     
  </select>

Contact no:080 4132 9366

Cost:₹1,800 for two people
</pre>         
<form action="post_sunny.php" method="POST" enctype="multipart/form-data" >
    <h2>Add Comment</h2>
      <input type="text" placeholder="Enter Your Name" name="name" required /> <br /><br />
      <textarea rows="5" placeholder="Enter the Comment" cols="30" name="comment" required></textarea><br>
      <button type="submit">Submit</button>
  </form>
  <h2>Comments</h2>
    <?php
    $con=mysqli_connect("localhost","root","","rating");
    $find_project=mysqli_query($con,"SELECT * FROM sunnys");
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
