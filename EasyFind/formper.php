
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
           <style >
  #backtologin{
        margin-left: 40%;
    margin-right: 40%;
  }
  #sub{
     margin-left: 23%;
    margin-right: 50%;
 }
 .container{
 	margin-top:80px;
 }
 #clik{
  background-color:#7c7d7c;
 }
</style>
<script>
$(document).ready(function(){
  $("form").submit(function(){
     alert("Your details have been submitted successfully.Please wait for someone to contact you about your item. We hope you find your missing item as soon as possible.");
  });
});
</script>
</head>
<body>
    <form action="formper_post.php" method=POST>
    <div style="margin:10px">
    <h1><center>Fill this out</center></h1>
    Name of the owner<br>
    <input type="text" name="owner" required/>
    <br>
    Type of ID card<br>
    <input type="text" name="typeid" required/>
    <br>
    Mobile number<br>
    <input type="text" name="phone" required/>
    <br>
    Description:<br>
    <textarea rows="5" cols="30" name="des" ></textarea>
    <br>
    Location:<br>
    <input type="text" name="location"  placeholder="Specify the location you last had it " />
    Image:<br>
	<input type="file" name="image" id="image" />  
	<br>
    </div>  
      <button type="submit" id="sub">Submit</button><br>
</div>
<div>
<a href="index2.php" class="btn btn-primary" style="margin:10px">Click here to go back to the login page</a>
</div>
      <?php
       
       $con=mysqli_connect("localhost","root","","iwtproject");
       
    $find_hackman=mysqli_query($con,"SELECT * FROM  personal");
    while($row=mysqli_fetch_assoc($find_hackman))
    {
      
     $own_name=$row['owner'];
        $typeid =$row['typeid'];
        $mobno =$row['phone'];
        $des =$row['des'];
        $location =$row['location'];

        echo"<p style='border: 1px solid black;padding: 1%;
        width: 100%;
        height: 120px;'>owner name:$own_name<br>
             type of ID:$typeid<br>
             mobile number:$mobno<br>
             Description:$des<br>
             location:$location</p>";
        
    } 
    ?>
      
      </form>

      

</body>
</html>

<?php  
 $con = mysqli_connect("localhost", "root", "", "iwtproject");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tb7_images(name) VALUES ('$file')";  
      if(mysqli_query($con, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <style>
           body
             {
              background-image: url("background1.png");
  background-color: #cccccc;
  background-repeat: no-repeat;
  background-size: 2000px 1500px;
             }
             </style>
           
      </head>  
      
                <?php  
                $query = "SELECT * FROM tb7_images ORDER BY id DESC";  
                $result = mysqli_query($con, $query) or die( mysqli_error($con));  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#sub').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  