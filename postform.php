<!DOCTYPE html>
<html>
<head>
	<title>post form</title>
	<link rel="stylesheet" type="text/css" href="ev.css">
</head>
<body>
	<?php require 'views/header.html.php' ?>
	
<form action="postform.php" method="post" accept-charset="utf-8" class="form-body">
	<h1 class="header">Create New Post</h1>
	<div class="form-group">
	  <label class="header">Post-Title</label>
	  <input type="text" name="post-title" placeholder="posttitle" class="form">
  </div>
  <div class="form-group">
	<label class="header">Post-Subtitle</label>
	<input type="text" name="post-subtitle" placeholder="post subtitle" class="form">
  </div>
  <div class="form-group">
	<label class="header">Post-Body</label>
	<textarea name="post-body" cols="20" rows="5" class="form"></textarea>
	<div class="form-group">
	<label class="header">Post-author</label>
	<input type="text" name="post-author" placeholder="author" class="form">
  </div>
</div>
<div class="form-group">
	<button type="submit" name="submit" class="button">Submit </button>
</div>
</form>
<?php require 'views/footer.html.php' ?>
</body>
</html>