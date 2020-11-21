<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login2.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
      header("location: login2.php");
      $author = mysqli_real_escape_string($db, $_POST['author']);
  }
?>

<title>MISSING SOMETHING?!</title>
    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style3.css">

<style>
body {
 background-image: url("background.png");
 background-color: #cccccc;
 background-repeat: no-repeat;
 background-size: 2000px 1500px;
}
</style>
</head>
<body>



<nav class="navbar  class="navbar navbar-light" style="background-color: #e3f2fd;"">
  <li class="nav-item">
  
    <a class="nav-link" href="index2.php?logout='1'" tabindex="-1" aria-disabled="true" style="color:black"><b>LOGOUT</b></a>
    
  </li>
</ul>
</nav>
<h1 style="padding:10px"><center><font color="white">
   MISSING SOMETHING?</font></center>
  </h1>
<div class="row">
  <div class="col-sm-6">
<div class="card" style="width: 25rem;">
  <img src="personal.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Missing your personal belongings</h5>
    <p class="card-text">Check if someone has found it</p>
    <a href="formper.php" class="btn btn-primary">Fill the form about the missing item</a>
    <a href="formperfound.php" class="btn btn-primary" style="margin:10px">Fill the form for any found item</a>
       <a href="per1.php" class="btn btn-primary" style="margin:6px">Click for missing/found items list</a>
    
  </div>
</div>
</div>

  <div class="col-sm-6">
<div class="card" style="width: 25rem;">
  <img src="ele.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Missing your electronic gadgets</h5>
    <p class="card-text">Oh yes we know how important they are so find them.</p>
    <a href="formelec.php" class="btn btn-primary">Fill the form about the missing item</a>
    <a href="formelefound.php" class="btn btn-primary" style="margin:10px">Fill the form for any found item</a>
       <a href="ele1.php" class="btn btn-primary" style="margin:6px">Click for missing/found items list</a>
  
  </div>
</div>
</div>

  <div class="col-sm-6">
<div class="card" style="width: 25rem;">
  <img src="id.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Missing Identity card</h5>
    <p class="card-text">Find any form of card that identifies you.</p>
    <a href="formid.php" class="btn btn-primary">Fill the form about the missing item</a>
    <a href="formidfound.php" class="btn btn-primary" style="margin:10px">Fill the form for any found item</a>
       <a href="id1.php" class="btn btn-primary" style="margin:6px">Click for missing/found items list</a>
    
  </div>
  </div>
  </div>

  <div class="col-sm-6">
<div class="card" style="width: 25rem;">
  <img src="book.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Missing college books</h5>
    <p class="card-text">Find your most precious college books.</p>
    <a href="formbook.php" class="btn btn-primary">Fill the form about the missing item</a>
    <a href="formbookfound.php" class="btn btn-primary" style="margin:10px">Fill the form for any found item</a>
       <a href="book1.php" class="btn btn-primary" style="margin:6px">Click for missing/found items list</a>
    
  </div>
  </div>
  </div>

</div>

        
</body>
</html>
