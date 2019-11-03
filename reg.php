<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>
	<link rel="stylesheet" type="text/css" href="everywoman.css">
</head>
<body>
	<?php require 'navbar.html.php'; ?>
	<main class="reg_container">
		<div id="reg-wrapper">
			<h2>register with us</h2>
			<form action="reg.php" method="post" accept-charset="utf-8">
				<div class="form-group">
					<header class="p-head">
                     <label for="title">name</label>
                 </header>
				     <input class="form" type="text" name="name" placeholder="enter full name" required="required"><br>
				</div>
				<div class="form-group">
					<header class="p-head">
					<label for="name">email</label>
				</header>
					<input class="form" type="text" name="email" placeholder="enter your email" required="required">
				</div>
				<div class="form-group">
					<header class="p-head">
					<label for="name">password</label>
				</header>
					<input class="form" type="password" name="password" placeholder="***********" required="required">
				</div>
				<div class="form-group">
					<header class="p-head">
					<label for="name">state</label>
				</header>
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
					<header class="p-head">
					<label for="name">phone no</label>
				</header>
					<input class="form" type="text" name="nub" placeholder="enter your phone number" required="required">
				</div>
				<div class="form-group">
					<header class="p-head">
					<label for="name">Business address</label>
				</header>
					<textarea  name="user_address" cols="20" rows="5" class="form"></textarea></td>
				</div>
				<div class="form-group">
					<header class="p-head">
					<label for="name">gender</label>
				</header>
					male:<input type="radio" name="user_gender" value="male" >
				    female:<input type="radio" name="user_gender" value="female" >
				</div>
				<div class="form-group">
					
					<button type="register" class="button" name="register">register</button>
				</div>
				</form>
		</div>
		<?php require 'footer.html.php'; ?>

	</main>
	<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password = $_POST['password'];
		$state=$_POST['state'];
		$nub=$_POST['nub'];
		$address=$_POST['address'];
		$gender=$_POST['gender'];
		}
	 ?>
	
</body>
</html>