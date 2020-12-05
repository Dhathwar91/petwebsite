<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 100%;
  padding: 20px;
  text-align: center;
 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
    </head>
    <body>
    
    <div class="row">
    <h2 style="text-align: center;">Items found</h2>
  <div class="column" style="background-color:#bbb;">
    
    <?php
    $con=mysqli_connect("localhost","root","","iwtproject");
    $find_hackman=mysqli_query($con,"SELECT * FROM idcardfound");
    while($row=mysqli_fetch_assoc($find_hackman))
    {
     $own_name=$row['owner'];
     $typeid =$row['typeid'];
     $mobno =$row['phone'];
     $des =$row['des'];
     $location =$row['location'];

     echo"<p style='border: 1px solid black;padding: 1%;
     width: 100%;
     height: 120px;'>Name:$own_name<br>
          type of ID:$typeid<br>
          mobile number:$mobno<br>
          Description:$des<br>
          location:$location</p>";
            }
   
    ?>
  </div>
</div>

   </body>
    </html>