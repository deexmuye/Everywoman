<!DOCTYPE html>
<html>
<head>
	<title>post form</title>
	<link rel="stylesheet" type="text/css" href="everywoman.css">
</head>
<body>
	<div id="post-container">
		<div class="post-blog">
			<h2 class="form-header">Creat a New BlogPost</h2>
			<div class="post-title">
			<form action="postform.php" method="post">
				<h3 class="pt">Post Title</h3>
				<input class="ptd" type="text" name="posttitle" placeholder="A nice title">
			</form>	
			</div>
			<div class="post-title">
			<form action="postform.php" method="post">
				<h3 class="post-subtitle">Post SubTitle</h3>
				<input class="ptd" type="text" name="post subtitle" placeholder="A nice subtitle">
			</form>	
			</div>
			<div class="post-title">
			<form action="postform.php" method="post">
				<h3 class="author">Post Author</h3>
				<input class="ptd"type="text" name="posttitle" placeholder="A nice title">
			</form>	
			</div>
			<div class="post-body">
			<form action="postform.php" method="post">
				<h3 class="post-body">Post Body</h3>
				<textarea class="ptd" type="text" name="postbody"></textarea>
			</form>	
			</div>
			<div class="post-title">
			<form action="postform.php" method="post">
				<input type="submit" name="sub" value="submit" style="background-color: pink; font-family: kalam; font-weight: bolder;padding: 14px 24px; color: white; cursor: pointer;">
			</form>	
			</div>
				
		</div>
 </div>
</body>
</html>