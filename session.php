<?php session_start();
// error_reporting(0);
include 'connection.php';
$user=$_SESSION['user'];
$token=$_SESSION['token'];

if($user){

if($token){

$q1=mysqli_query($con,"select * from token2 where autotoken='$token' and user='$user' ");


$u=mysqli_fetch_array($q1);
$un=$u['user'];

}else{
?>
<script>
window.location="signup.php";
</script>
<?php	

}


}else{
?>
<script>
window.location="signup.php";
</script>
<?php	
}
?>








