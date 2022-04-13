<?php
//login.php

include("database_connection.php");

if(isset($_COOKIE["type"]))
{
 header("location:index.php");
}

$message = '';

if(isset($_POST["login"]))
{
 if(empty($_POST["user_email"]) || empty($_POST["user_password"]))
 {
  $message = "<div class='alert alert-danger'>Both Fields are required</div>";
 }
 else
 {
  $query = "
  SELECT * FROM user_details 
  WHERE user_email = :user_email
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    'user_email' => $_POST["user_email"]
   )
  );
  $count = $statement->rowCount();
  if($count > 0)
  {
   $result = $statement->fetchAll();
   foreach($result as $row)
   {
    if(password_verify($_POST["user_password"], $row["user_password"]))
    {
     setcookie("type", $row["user_type"], time()+3600);
     header("location:index.php");
    }
    else
    {
     $message = '<div class="alert alert-danger">Wrong Password</div>';
    }
   }
  }
  else
  {
   $message = "<div class='alert alert-danger'>Wrong Email Address</div>";
  }
 }
}


?>

<!DOCTYPE html>
<html>
 <head>
  <title>How to create PHP Login Script using Cookies</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
    <body>
    <br />
    <div class="container">
    <h2 align="center">Adulting for Dummies Sign Up</h2>
    <br />
    <div class="panel panel-default">

        <div class="panel-heading">Currently Logged Out</div>
        <div class="panel-body">
        <span><?php echo $message; ?></span>
        <form method="post">
        <div class="form-group">
        <label>User Name</label>
        <input type="text" name="user_name" id="user_name" class="form-control" />
        </div>
        <div class="form-group">
        <label>User Email</label>
        <input type="text" name="user_email" id="user_email" class="form-control" />
        </div>
        <div class="form-group">
        <label>Password</label>
        <input type="password" name="user_password" id="user_password" class="form-control" />
        </div>
        <div class="form-group">
        <input type="submit" name="signup" id="signup" class="btn btn-info" value="Sign Up" />
        </div>
        </form>
        </div>
    </div>
    <br />
    </div>
    <p align = "center">Admin email - gracebailey@gmail.com</p>
    <p align = "center">Admin Password - project</p>
 </body>
</html>