<html>
<head>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="head">
<h1>Posts !!!</h1>

<ul>
<a href="index.php"><li>FOOD</li></a>
<a href="travel.php"><li>TRAVEL</li></a>
<a href="add.php"><li>+</li></a>
</ul>
</div>
<div><br><br><br><br><br><br><br><br>
<form align="center" action="new.php" method="post">
	<textarea name="description" rows='5' cols='100' placeholder="Write your post here..." required>Write your post here...
	</textarea><br>
	<select name="category" placeholder ='Category'>
		<option value="Food">Food</option>
		<option value="Travel">Travel</option>
	</select><br>
	<input type="submit" value="Post It!"/>
</form>
</div>
</body>
</html>
