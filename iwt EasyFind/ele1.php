<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style >
  body{
   background:url(personalbg.png);
  }
 
  .jumbotron{
      height: 300px;
      margin:10% 5% 10% 5%;
      background: NONE;
    }

    h2{
      margin:auto;
      background:#B7E9F7;
      height: 80px;
      width: 500px;
      text-align:center;
      padding-top:20px;
      border-radius: 30px;
      }
      .btn{
        border-radius:20px; 
        height: 60px;
        padding-top: 20px;
        margin:20px 20px 20px 20px;
      }
      b{
        font-weight: 900;
      }
      .row{
        margin-left: 105px;
      }
      
</style>
</head>
<body>

<div class="container">
  <h2 style="text-align: center;">Missing and found items list</h2>
 
  <div class="btn-group">
  
    <a href="ele.php" class="btn btn-primary" style="margin:100px">Click here to go to the missing items list</a>
    <a href="elef.php" class="btn btn-primary" style="margin:100px">Click here to go to found items list</a>
    
  </div>
</div>

</body>
</html>