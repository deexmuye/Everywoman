<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
	<link rel="stylesheet" type="text/css" href="everywoman.css">
</head>
<style>
table{
	width: 300px;
	padding: 10px;
}
input{
	padding:5px;
}



</style>
<body>
	<?php require 'navbar.html.php'; ?>

	<form class="reg-form" action="registration.php" method="post" enctype="multipart/form-data">
		<table  text-align=center bgcolor="white" width="500">
			<tr align="center"><td colspan="8"><h2 style="color: #7D6634;">register your business</h2></td></tr>
			<tr>
				<td align="right" style="font-family: kalam; color: #7D6634;"><strong>NAME:</strong></td>
				<td><input type="text" name="user_name" placeholder="Enter Your Name" required="required"></td>
			</tr>
			<tr>
				<td align="right" style="font-family: kalam; color: #7D6634;"><strong>PASSWORD:</strong></td>
				<td><input type="password" name="user_pass" placeholder="Enter Your password" required="required"></td>
			</tr>
			<tr>
				<td align="right" style="font-family: kalam; color: #7D6634;"><strong>EMAIL:</strong></td>
				<td><input type="text" name="user_email" placeholder="Enter Your email" required="required"></td>
			</tr>
			<tr>
				<td align="right" style="font-family: kalam; color: #7D6634;"><strong>STATE:</strong></td>
				<td><select name="user_state">
					<option>Select your state</option>
					<option>adamawa</option>
					<option>bauchi</option>
					<option>kaduna</option>
					<option>minna</option>
					<option>kano</option>
					<option>jigawa</option>
					<option>abuja</option>
					<option>lagos</option>
				</select></td>
			</tr>
			<tr>
				<td align="right" style="font-family: kalam; color: #7D6634;"><strong>PHONE_NO:</strong></td>
				<td><input type="text" name="user_phone" placeholder="Enter Your phone" required="required"></td>
			</tr>
			<tr>
				<td align="right" style="font-family: kalam; color: #7D6634;"><strong>BUSINESS ADDRESS:</strong></td>
				<td><textarea name="user_address" cols="20" rows="5"></textarea></td>
			</tr>
			<tr>
				<td align="right" style="font-family: kalam; color: #7D6634;"><strong>SEX:</strong></td>
				<td>
					male:<input type="radio" name="user_gender" value="male" >
				    female:<input type="radio" name="user_gender" value="female" >
			</td>
			</tr>
			
			<tr align="center" color: #7D6634;>
				<td colspan="8"><input type="submit" name="register" value="register with us"></td>
			</tr>

		</table>
	</form>
	<?php 
	if(isset($_POST['register'])){
		$user_name = $_POST['user_name'];
		$user_pass = $_POST['user_pass'];
		$user_email = $_POST['user_email'];
		$user_state = $_POST['user_state'];
		$user_phone = $_POST['user_phone'];
		$user_address = $_POST['user_address'];
		$user_gender = $_POST['user_gender'];


		if($user_name=='' OR $user_pass==''OR $user_state=='' OR $user_phone=='' OR $user_address=='' OR $user_gender==''){
			echo "<script>alert(' please fill all fields')</script>";
			exit();
		}
		if (!filter_var($user_email,FILTER_VALIDATE_EMAIL)) {
			echo "<script>alert(' invalid email ardress')</script>";
			exit();
		}
		if (strlen($user_pass)<8) {
			echo "<script>alert(' password must be minimum of 8characters')</script>";
			exit();
		}
		$sql = "INSERT INTO user_registrations(user_id,user_name;user_email,user_pass,user_state,user_no,user_address,user_gender,register_date)"
		
		/*
		$sel_email = "select * from user_registrations,where user_email = $user_email";
		$run_email = mysqli_query($con,$sel_email);
		$check_email = mysqli_num_rows($run_email);
		if ($check_email==0){
			echo "<script>alert('this email is already register')</script>";
		}

          */
	}
?>
<?php require 'footer.html.php'; ?>
</body>
</html>