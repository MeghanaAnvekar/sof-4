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

$page = "hello";
if(isset($_POST['page']))
$page = $_POST['page'];
$id = 0;
if(isset($_POST['post_id']))
$id = $_POST['post_id'];

$sql = "DELETE FROM posts WHERE post_id = ".$id;
    		$result = mysqli_query($conn, $sql);
    		
    		if($result)
    		echo "Success";
    		else
    		echo "Failure";
if($page == 'index')
header('Location:http://localhost/index.php');
else
header('Location:http://localhost/travel.php');

mysqli_close($conn);
?>
