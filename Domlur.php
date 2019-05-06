<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>parks for pets</title>
    <link rel="stylesheet" href="parfod.css">
    <link rel="stylesheet" href="dom.css">
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
    
    <h1>Domlur Dog Park</h1>
     
    
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d124418.30060714115!2d77.51561740883685!3d12.967251338634487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae141afc499fbd%3A0x9721a62dfc5571f1!2sDomlur+Dog+Park%2C+1st+Stage%2C+Domlur%2C+Domlur+I+Stage%2C+1st+Stage%2C+Domlur%2C+Bengaluru%2C+Karnataka+560071!3m2!1d12.961036!2d77.6366479!5e0!3m2!1sen!2sin!4v1554824248538!5m2!1sen!2sin" width="1000" height="438" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="Slider">

    </div>
    <h3>DETAILS</h3>
    <pre>
            Address:    
                1st Stage, Domlur, Bengaluru, Karnataka 560071
          <select style="width: 250px;">

        <option value="Timings">Timings</option>
    <option value="Monday">Monday  :      4am–9pm</option>
    <option value="Tuesday">Tuesday  :     4am–9pm</option>
    <option value="Wednesday">Wednesday:   4am–9pm</option>
    <option value="Thursday">Thursday  :   4am–9pm</option>
    <option value="Friday">Friday     :    4am–9pm</option>
    <option value="Saturday">Saturday :    4am–9pm</option>
    <option value="Sunday">Sunday     :    4am–9pm</option>
     
  </select>
  </pre>
 <x-star-rating value="3" number="5"></x-star-rating>
   
 <form action="post_comment.php" method="POST" enctype="multipart/form-data" >
    <h2>Add Comment</h2>
      <input type="text" placeholder="Enter Your Name" name="name" required /> <br /><br />
      <textarea rows="5" placeholder="Enter the Comment" cols="30" name="comment" required></textarea><br>
      <button type="submit">Submit</button>
  </form>
  <h2>Comments</h2>
    <?php
    $con=mysqli_connect("localhost","root","divchand2","project");
    $find_project=mysqli_query($con,"SELECT * FROM comments");
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