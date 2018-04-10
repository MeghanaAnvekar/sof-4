<?php
$servername = "localhost";
$username = "meghana_sql";
$password = "secret";
$dbname = "post_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) 
{
    die("Connection failed: ");
} 
$action = "hello";
$id = "0";
$page = "hello";
if(isset($_POST['action']))
$action = $_POST['action'];
if(isset($_POST['post_id']))
$id = $_POST['post_id'];
if(isset($_POST['page']))
$page = $_POST['page'];

echo $action.$id.$page;
if( $action == 'like')
    	{
    		$sql = "UPDATE posts SET likes = likes + 1 WHERE post_id = ".$id;
    		$result = mysqli_query($conn, $sql);
    		
    		if($result)
    		echo "Success";
    		else
    		echo "Failure";
    	}
    	else
    	{
    		$sql = "UPDATE posts SET dislikes = dislikes + 1 WHERE post_id = ".$id;
    		$result = mysqli_query($conn, $sql);
    		if($result)
    		echo "Success";
    		else
    		echo "Failure";
    	}
  
mysqli_close($conn);
if($page == 'index')
header('Location:http://localhost/index.php');
else
header('Location:http://localhost/travel.php');

?>
