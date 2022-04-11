<?php
//index.php

if(!isset($_COOKIE["type"]))
{
 header("location:login.php");
}

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Adulting for Dummies</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h2 align="center">Adulting for Dummies Login</h2>
   <br />
   <div align="right">
    <a href= "home.php">Home</a>
   </div>
   <div align="right">
    <a href="logout.php">Logout</a>
   </div>
   <div align="right">
    <a href="reset.php">Password Reset</a>
   </div>
   <br />
   <?php
   if(isset($_COOKIE["type"]))
   {
    echo '<h2 align="center">Welcome User</h2>';
   }
   ?>
  </div>
 </body>
</html>
