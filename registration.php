<!DOCTYPE html>
<html>
<head>
	<title>registration</title>
</head>
<style>
table{
	width: 300px;
	padding: 10px;
}
input{
	padding:5px;
}
body{
	background-image: url("img/floral.jpg");
}

</style>
<body>
	<form action="registration.php" method="post" enctype="multipart/form-data">
		<table  text-align=center bgcolor="pink" width="500">
			<tr align="center"><td colspan="8"><h2 style="color: #7D6634;">register your business</h2></td></tr>
			<tr>
				<td align="right" style="font-family: kalam; color: #7D6634;"><strong>NAME:</strong></td>
				<td><input type="text" name="user_name" placeholder="Enter Your Name"></td>
			</tr>
			<tr>
				<td align="right" style="font-family: kalam; color: #7D6634;"><strong>PASSWORD:</strong></td>
				<td><input type="text" name="user_pass" placeholder="Enter Your password"></td>
			</tr>
			<tr>
				<td align="right" style="font-family: kalam; color: #7D6634;"><strong>EMAIL:</strong></td>
				<td><input type="text" name="user_email" placeholder="Enter Your email"></td>
			</tr>
			<tr>
				<td align="right" style="font-family: kalam; color: #7D6634;"><strong>STATE:</strong></td>
				<td><select name="state">
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
				<td><input type="text" name="user_phone" placeholder="Enter Your phone"></td>
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
			<tr>
				<td align="right" style="font-family: kalam; color: #7D6634;"><strong>IMAGE:</strong></td>
				<td><input type="file" name="user_img"></td>
			</tr>
			<tr align="center" color: #7D6634;>
				<td colspan="8"><input type="submit" name="register" value="register with us"></td>
			</tr>

		</table>
	</form>

</body>
</html>