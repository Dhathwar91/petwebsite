<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pet friendly restaurants</title>
    <link rel="stylesheet" href="ther.css">
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
    <h1>TherPUP – A Dog Café </h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d248827.17989080388!2d77.5005094092943!3d12.976668826242294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae0dff3d4d05bb%3A0x32d20422ece270e2!2sTherpup+Dog+Cafe%2C+Abhayadhama+Rd%2C+White+Rose+Layout%2C+Whitefield%2C+Bengaluru%2C+Karnataka+560066!3m2!1d12.979629399999999!2d77.7453089!5e0!3m2!1sen!2sin!4v1555245599786!5m2!1sen!2sin" width="1000" height="438" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="Slider">
    </div>
    <h3>Details</h3>   
<pre>
Address:      
 13, White Rose Layout, Abhayadhama Road,
 Mahadevpura, Whitefield, Bangalore
 
 <select style="width: 250px;">
    <option value="Timings">Timings</option>
<option value="Monday">Monday  :    11:30am–9pm   </option>
<option value="Tuesday">Tuesday  :     Closed</option>
<option value="Wednesday">Wednesday: 11:30am–9pm   </option>
<option value="Thursday">Thursday  :  11:30am–9pm </option>
<option value="Friday">Friday     :  11:30am–9pm  </option>
<option value="Saturday">Saturday :  11:30am–9pm  </option>
<option value="Sunday">Sunday     :    11:30am–9pm</option>
 
</select>

 
Contact no:090088 04278

Cost: ₹700 for two people

    </pre>
    <form action="post_therpup.php" method="POST" enctype="multipart/form-data" >
        <h2>Add Comment</h2>
          <input type="text" placeholder="Enter Your Name" name="name" required /> <br /><br />
          <textarea rows="5" placeholder="Enter the Comment" cols="30" name="comment" required></textarea><br>
          <button type="submit">Submit</button>
      </form>
      <h2>Comments</h2>
        <?php
        $con=mysqli_connect("localhost","root","divchand2","project");
        $find_project=mysqli_query($con,"SELECT * FROM therpup");
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