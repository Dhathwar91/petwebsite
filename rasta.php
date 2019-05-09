<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet friendly Restaurants</title>
    <link rel="stylesheet" href="rasta.css">
    <link rel="stylesheet" href="parfod.css">
</head>
<body>
        <div class="logo">
                <img src="logo.png" alt="">
            </div>
     <div class="navbar">
                    <ul>
                            <li> <a href="#"> ABOUT US</a>
                                <ul>
                                        <li> <a href="help.php"> HELP</a> </li>
                                        <li> <a href="contact.php"> CONTACT US</a>
                                </ul>
                        </li>
                       <li> <a href="food.php"> FOOD CENTERS</a> </li>
                        <li> <a href="#"> PLACES FOR PETS </a>
                            <ul>
                                    <li> <a href="parks.php"> PARKS</a> </li>
                                    <li> <a href="rest.php"> RESTAURANTS </a>
                            </ul>
                        </li>
                        <li> <a href="#"> HOME</a> </li>
                    </ul>
                </div>
            </div>
   <h1>Rasta Cafe</h1>
   <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d26155.4280279712!2d77.5989120151049!3d12.970083251815078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae179eaa080017%3A0xa28cccba93f9a638!2sRasta+Cafe%2C+3%2C+Church+St%2C+Shanthala+Nagar%2C+MSR%2C+Bengaluru%2C+Karnataka+560001!3m2!1d12.9744242!2d77.6068492!5e0!3m2!1sen!2sin!4v1555245408393!5m2!1sen!2sin" width="1000" height="438" frameborder="0" style="border:0" allowfullscreen></iframe> 
   <div class="Slider">

</div>
   <h3>Details</h3>   
   <pre>
Address:      
3, Church St, Shanthala Nagar, MSR,
Bengaluru, Karnataka 560001
<select style="width: 250px;">
 
<option value="Timings">Timings</option>
<option value="Monday">Monday  :      9am–11pm</option>
<option value="Tuesday">Tuesday  :     9am–11pm</option>
<option value="Wednesday">Wednesday:   9am–11pm</option>
<option value="Thursday">Thursday  :   9am–11pm</option>
<option value="Friday">Friday     :    9am–11pm</option>
<option value="Saturday">Saturday :    9am–11pm</option>
<option value="Sunday">Sunday     :    9am–11pm</option>
     
  </select>

Contact no: 078990 63636

Cost:₹1000 for two people 
   </pre> 
   <form action="post_comment.php" method="POST" enctype="multipart/form-data" >
    <h2>Add Comment</h2>
      <input type="text" placeholder="Enter Your Name" name="name" required /> <br /><br />
      <textarea rows="5" placeholder="Enter the Comment" cols="30" name="comment" required></textarea><br>
      <button type="submit">Submit</button>
  </form>
  <h2>Comments</h2>
    <?php
    $con=mysqli_connect("localhost","root","divchand2","project");
    $find_project=mysqli_query($con,"SELECT * FROM rasta");
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