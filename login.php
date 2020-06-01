<!DOCTYPE html>
<?php 
session_start();
require 'connection.php';
 ?>
<html>
<head>
	<title>login</title>
       <link rel="stylesheet" type="text/css" href="ev.css">
</head>
<body>
       <?php require 'views/header.html.php'; ?>
       <form action="login.php" method="POST" accept-charset="utf-8" class="form-body">
       <div class="form-group">
               <h1 class="header">Login</h1>
             <label class="header">email</label>
      
              <input type="email" name="email" placeholder="email address" class="form"> 
       </div>
       <div class="form-group">
             
             <label class="header">password</label>
      
              <input type="password" name="password" placeholder="*************" class="form"> 
       </div>
       <div class="formgroup">
              <button type="submit" class="button">login</button>
              
       </div>
       <head>New User?<a href="reg.php" class="header">Register here</a></head>
       </form>
       <?php require 'views/footer.html.php'; ?>
       <?php 

         if ($_SERVER["REQUEST_METHOD"] =="POST" ) {
           $email = $_POST['email'];
           $password = $_POST['password'];
           $sql = "SELECT * FROM user_registrations WHERE email='$email' AND password='$password'";

           $query = $database->query($sql);
           $result = $query->fetchAll(PDO::FETCH_ASSOC);

           if (count($result)>0) {

              $_SESSION['email']=$_email;

              echo "<script>window.open('index.php','_self')</script>";
           }
           else{
               echo "<script> alert('incorrect password or email')</script>";
               exit();
           }


         }

        ?>
      
</body>
</html>