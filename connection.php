<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Blogbubble";
$con=mysqli_connect($servername,$username,$password,$dbname);

if($con)
{
	// echo "connection";
}
else
{
	echo "connection failed";
}
?>