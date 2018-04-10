<?php

$servername = "localhost";
$username = "meghana_sql";
$password = "secret";
$dbname = "post_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
echo "connection failed\n";
    die("Connection failed: " );
} 
else echo "connected\n";

$des = "hello";
$c = "hello";
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	
	if(isset($_POST["description"]))
	{  $des = $_POST["description"];
	}
	echo $des;
	
	if(isset($_POST["category"]))
	{$c = $_POST["category"];

	}
	echo $c;
	$sql = "INSERT INTO posts(description,category) VALUES (\"".$des."\",\"".$c."\") ";
	echo "\n".$sql;
$result = mysqli_query($conn, $sql);
if ($result)
echo "success";
else
echo "failure";
}
else
 echo "not post";



mysqli_close($conn);
if($c == "Food")
	header("Location: http://localhost/index.php");
else
	header("Location: http://localhost/travel.php");
exit();

?>
