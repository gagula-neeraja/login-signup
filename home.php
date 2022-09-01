<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootsrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hello...Welcome!!!!!</title>
  </head>
  <body>
    <h1 class="text-center text-warning mt-5">Welcome
    <?php echo $_SESSION['username'];?>
   </h1>
   <div class="container">
    <a href="logout.php" class="btn btn-primary mt-5">Logout</a>
</div>
</body>
</html>