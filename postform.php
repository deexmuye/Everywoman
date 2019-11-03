<!DOCTYPE html>
<html>
<head>
	<title>post form</title>
	<link rel="stylesheet" type="text/css" href="everywoman.css">
</head>
<body>
	<?php require 'navbar.html.php'; ?>
	<form class="reg-form" method="post" action="postform.php">
	<h1 style="color: #7d6634; padding: 20px; margin: 20px;">create a new blogpost</h41>	
	<tr>
		<td>
			<h2 class="ptt">Post Title</h2>
			<input type="text" class="input" name="name" placeholder="nice posttitle" required="required"><br>
		</td>
	</tr>
	<tr>
		<td>
			<h2 class="ptt">Post Subtitle</h2>
			<input type="text" class="input" name="password" placeholder="nice subtitle" required="required">
		</td>
	</tr>
	<tr>
		<td>
			<h2 class="ptt">Post Author</h2>
			<input type="text" name="post-author" class="input" required="required">
		</td>
	</tr>
	<tr>
		<td>
			<h2 class="ptt">Post Body</h2>
			<textarea class="input"></textarea><br>
		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="sub" value="submit post" class="sub">

		</td>
	</tr>
	<tr>
		<td>
			<input type="submit" name="clear" value="clear form" class="sub">

		</td>
	</tr>
</form>
</body>
</html>