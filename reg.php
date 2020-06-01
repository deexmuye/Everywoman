<!DOCTYPE html>
<?php 
session_start();
 ?>
<html>
<head>
	<title>registration form</title>
	<link rel="stylesheet" type="text/css" href="ev.css">
</head>

<body>
	
		<?php require 'views/header.html.php'; ?>   
  <form action="reg.php" method="post" accept-charset="utf-8" class="form-body">
  	 <h1 class="header">Create Account</h1>
       <div class="form-group">
			
                <label for="title" class="header">name</label>
           
			<input class="form" type="text" name="name" placeholder="enter full name" required="required"><br>
	 </div>
	 <div class="form-group">
		 
			 <label for="name"  class="header">email</label>
		 
		 <input class="form" type="email" name="email" placeholder="enter your email" required="required">
	  </div>
	 <div class="form-group">
					
					<label for="name"  class="header">password</label>
				
					<input class="form" type="password" name="password" placeholder="***********" required="required">
				</div>
				<div class="form-group">
					
					<label for="name"  class="header">state</label>
				
					<select name="state" class="form">
						<option>select your state</option>
						<option>adamawa</option>
						<option>bauchi</option>
						<option>kaduna</option>
						<option>minna</option>
						<option>kano</option>
						<option>jigawa</option>
						<option>abuja</option>
						<option>lagos</option>
					</select>
				</div>
				<div class="form-group">
					
					<label for="name"  class="header">phone no</label>
				
					<input class="form" type="text" name="phone" placeholder="enter your phone number" required="required">
				</div>
				
				<div class="form-group">
					
					<label for="name"  class="header">gender</label>
				
					male:<input type="radio" name="gender" value="male" >
				    female:<input type="radio" name="gender" value="female" >
				</div>
				<div class="form-group">
					
					<button type="register" class="button" name="register">register</button>
				</div>
				<h3>Already registered?<a href="login.php" class="header">login here</a></h3>
				</form>

				<?php require 'views/footer.html.php'; ?>

            <?php
   require 'connection.php';
$name = $email = $password = $state = $phone = $address = $gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $_POST["name"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$state = $_POST["state"];
	$phone = $_POST["phone"];
	$address = $_POST["address"];
	$gender = $_POST["gender"];

	if ($address == "" OR $phone == "") {
		echo "<script> alert('fill all fields')</script>";
		exit();
	}
	
	if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		echo "<script>alert('invalid email')</script>";
		exit();
	}
	if (strlen($password)<6) {
		echo "<script>alert('password must be morethan 6characters')</script>";
		exit();
	}
	$_SESSION['email'] = $email;
	$sql = "INSERT INTO user_registrations (name,email,password,state,phone,address,gender)
			VALUES ('{$name}', '{$email}', '{$password}', '{$state}', '{$phone}', '{$address}', '{$gender}')";

			$query = $database->query($sql);
			if ($query)
			{
			   
			   echo "<script> alert('reg successfull') </script>";
			   exit();
			}
		}
	
	  ?>
 </body>
</html>