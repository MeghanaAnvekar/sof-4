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
</div><br><br><br><br><br><br><br><br>
<table>
<?php

$servername = "localhost";
$username = "meghana_sql";
$password = "secret";
$dbname = "post_database";
// Create connection
$conn =  mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) 
{
	echo "Failed";
    die("Connection failed: ");
} 	
	$sql = "SELECT * FROM posts WHERE CATEGORY='Travel'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
		
		while($row = mysqli_fetch_assoc($result)) 
		{




	echo "<tr><td class='descr'>".$row["description"]."</td>";
	echo "<td><form action='function.php' method='post'><input type='hidden' name='post_id' value='".$row["post_id"]."'/>";
	echo "<input type='hidden' name='action' value='like' />";
	echo "<input type='hidden' name='page' value='travel' />";
	echo "<input type='submit' value='Likes ".$row["likes"]."'/></form></td>";
	echo "<td><form action='function.php' method='post'><input type='hidden' name='post_id' value='".$row["post_id"]."'/>";
	echo "<input type='hidden' name='action' value='dislike' />";
	echo "<input type='hidden' name='page' value='travel' />";
	echo "<input type='submit' value='Dislikes ".$row["dislikes"]."'/></form></td>";
	echo "<td><form action='delete.php' method='post'><input type='hidden' name='post_id' value='".$row["post_id"]."'/>";
	echo "<input type='hidden' name='page' value='travel' />";
	echo "<input type='submit' value='Delete' /></form></td>";
	echo "</tr>";

	   }
	} 
	else 
	{
	    echo "0 results";
    	}
    	
    

mysqli_close($conn);
?>
</table>
</body>
</html>
