
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>parks for pets</title>
    <link rel="stylesheet" href="parfod.css">
    <link rel="stylesheet" href="lake.css">
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
  <h1>Kaikondrahalli Lake park, Sarjapura Road</h1>

  <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d124431.67463817251!2d77.53198005853763!3d12.940477456628749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bae136d98df9741%3A0xc62b23a924f6a8f8!2sKaikondanahalli+Lake%2C+Valliyamma+Layout%2C+Kaikondrahalli%2C+Bengaluru%2C+Karnataka+560103!3m2!1d12.9141707!2d77.67377669999999!5e0!3m2!1sen!2sin!4v1554820853856!5m2!1sen!2sin" width="1000" height="438" frameborder="0" style="border:0" allowfullscreen></iframe>
  <div class="Slider">

</div>
<h3>Details
    </h3>
<pre>
 Address: 
 Valliyamma Layout, Kaikondrahalli, Bengaluru, Karnataka 560103
 <select style="width: 250px;">
    <option value="Timings">Timings</option>
<option value="Monday">Monday  :   5:30–10:30am, 3:30–6:30pm </option>
<option value="Tuesday">Tuesday  :  5:30–10:30am, 3:30–6:30pm  </option>
<option value="Wednesday">Wednesday:  5:30–10:30am, 3:30–6:30pm </option>
<option value="Thursday">Thursday  :  5:30–10:30am, 3:30–6:30pm </option>
<option value="Friday">Friday     :  5:30–10:30am, 3:30–6:30pm  </option>
<option value="Saturday">Saturday :    6:30am–6:30pm  </option>
<option value="Sunday">Sunday     :  6:30am–6:30pm  </option>
 
</select>
 

</pre>
<form action="kai_postpost.php" method="POST" enctype="multipart/form-data" >
    <h2>Add Comment</h2>
      <input type="text" placeholder="Enter Your Name" name="name" required /> <br /><br />
      <textarea rows="5" placeholder="Enter the Comment" cols="30" name="comment" required></textarea><br>
      <button type="submit">Submit</button>
  </form>
  <h2>Comments</h2>
    <?php
    $con=mysqli_connect("localhost","root","divchand2","project");
    $find_project=mysqli_query($con,"SELECT * FROM kaic");
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