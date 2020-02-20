<?php

session_start();

if(!isset($_SESSION['username'])){
  $_SESSION['msg'] = "You must log in first to view this page";
  header('location: login.php');
  // exit();
}

if (isset($_GET['logout'])) {

  session_destroy();
  unset($_SESSION['username']);
  header('location : login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="style.css" type="text/css" rel="stylesheet">
   
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title> YU Announce </title>
</head>

<body>

<h1 id="header"> YU Announce </h1>
<div class="navbar">
  <a href="uploadPoster.html">Upload Poster</a>
  <a href="#fresh">Fresh</a>
  <a href="#hot">Hot</a>
  <div class="dropdown">
    <button class="dropbtn">Categories
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#sports">Sports</a>
      <a href="#art">Art</a>
      <a href="#science">Science</a>
      <a href="#Business">Business</a>
      <a href="#">Other</a>
    </div>
  </div>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <div class = "logout">
    <a href="logout.php">Log out</a>
  </div>
</div>

  
  
  <?php 
    if(isset($_SESSION['success'])) : ?>

    <div>
      <h3>
        <?php 
          echo $_SESSION['success'];
          unset($_SESSION['success'])
        ?>
      </h3>
    </div>
    <?php endif ?>

    <?php if(isset($_SESSION['username'])) : ?>
      <h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
    <?php endif ?>


  <h2>Welcome to the easiest way to post and find new events!</h2>
  <div id="tags">
    <h3>Select a tag: </h3> 
    <h3>
    <p class="hoverable label label-primary" onclick="sort('CS')" class="label label-primary" > #ComputerScience </p> &nbsp;
    <p class="hoverable label label-success" onclick="sort('Soccer')" class="label label-success" > #Soccer </p> &nbsp;
    <p class="hoverable label label-info" onclick="sort('Music')" class="label label-info" > #Music </p> &nbsp;
    <p class="hoverable label label-warning" onclick="sort('Art')" class="label label-warning" > #Art</p>
    <p class="hoverable label label-danger" onclick="sort('Movies')" class="label label-danger"> #Movies</p>
    <h3>
  </div>
<div class="body">
  
</div > 


<div id="posts">

<div id="appender"></div>

<div class="post">
<img class="post-img" src="img/post1.png" alt="Avatar" >
  <div class="card-container">
    <h4><b>Header</b></h4> 
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
  </div>
</div>
<div class="post">
<img class="post-img" src="img/post2.jpg" alt="Avatar" >
  <div class="card-container">
    <h4><b>Header</b></h4> 
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
  </div>
</div>
<div class="post">
<img class="post-img" src="img/post3.png" alt="Avatar" >
  <div class="card-container">
    <h4><b>Header</b></h4> 
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
  </div>
</div>
<!-- <div class="post">
<img class="post-img" src="img/post5.jpg" alt="Avatar" >
  <div class="card-container">
    <h4><b>Header</b></h4> 
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
  </div>
</div>
<div class="post">
<img class="post-img" src="img/post6.jpg" alt="Avatar" >
  <div class="card-container">
    <h4><b>Header</b></h4> 
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
  </div>
</div>
<div class="post">
<img class="post-img" src="img/post7.jpg" alt="Avatar" >
  <div class="card-container">
    <h4><b>Header</b></h4> 
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
  </div>
</div>
<div class="post">
<img class="post-img" src="img/post8.jpg" alt="Avatar" >
  <div class="card-container">
    <h4><b>Header</b></h4> 
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
  </div>
</div>
<div class="post">
<img class="post-img" src="img/post9.png" alt="Avatar" >
  <div class="card-container">
    <h4><b>Header</b></h4> 
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
  </div>
</div>
<div class="post">
<img class="post-img" src="img/post10.png" alt="Avatar" >
  <div class="card-container">
    <h4><b>Header</b></h4> 
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> 
  </div>
</div> -->


  
</div>

</body>

<footer>
  <p>York University</p>
  <p>4700 Keele St, Toronto, ON M3J 1P3</p>
  <script src="main3.js"></script>
</footer>
</html>

