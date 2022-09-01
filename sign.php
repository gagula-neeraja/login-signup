<?php
$success=0;
$user=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="Select * from `registration` where username='$username'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            $user=1;
        }else{
        $sql="insert into `registration` (username,password) values('$username', '$password')";
        $result=mysqli_query($con,$sql);
        if($result){
            $success=1;
            header('location:login.php');
        }else{
            die(mysqli_error($con));
        }
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootsrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>Signup page</title>
  </head>
  <body>

  <?php
  if($user){
    echo '<div class="alert alert-danger"><strong>Oh!!!!</strong> User already exist <button type="button" class="close" data-dismiss="alert aria-label="close" <span aria-hidden="true">&times;</span></button></div>';
   }
  ?>
  <?php
  if($success){
    echo '<div class="alert alert-success"><strong>Success</strong>Signed up successfully <button type="button" class="close" data-dismiss="alert aria-label="close" <span aria-hidden="true">&times;</span></button></div>';
   }
  ?>
  
    <h1 class="text-center">Signup</h1>
    <div class="container mt-5">
    <form action="sign.php" method="POST">
    <div class="form-group">
        <label for="forEmail1">Name</label></br>
        <input type="text" class="form-control" placeholder="Enter your username" name="username"></br>
    </div>
    <div class="container">
        <label for="forEmail2">Password</label></br>
        <input type="Password" class="form-control" placeholder="Enter your password" name="password"></br>
    </div></br>
    <button type="submit" class="btn btn-primary" width="100">Sign Up</button>
   </form>
   </div>
    
  </body>
</html>