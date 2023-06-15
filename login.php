<?php session_start();  
include 'connection.php';
error_reporting(0);

if($_COOKIE['token']){
$token=$_COOKIE['token'];
$s=mysqli_query($con,"select * from token2 where autotoken='$token'"); 
if(mysqli_num_rows($s)==1){
$d=mysqli_fetch_array($s);


$_SESSION['user']=$d['user'];
$_SESSION['token']=$token;
?>
<script>
window.location="create.php";
</script>
<?php   
}
}

if(isset($_POST['submit'])){

$user=$_POST['user'];
$pass=$_POST['pass'];


$q=mysqli_query($con,"select * from sign_up where user='$user' and pass='$pass' ");
if(mysqli_num_rows($q)==1){


$token=uniqid().time();
$date=date('y-m-d');
$time=date('h:i:s');
$ip=$_SERVER['REMOTE_ADDR'];

mysqli_query($con,"insert into token2 set autotoken='$token',user='$user',date='$date',time='$time',ip='$ip' ");


$_SESSION['user']=$user;
$_SESSION['token']=$token;  

setcookie('token', $token, time() + (86400 * 1), "/"); 

?>
<script>
window.location="create.php";
</script>
<?php

}else{

?>
<script>
alert("Username & Password is Invalid");
</script>
<?php

}
}

?>







<!DOCTYPE html>
<html>
<head>
	<title>LogIn</title>
<link rel="stylesheet" href="assets/css/login-css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="overlay">
<!-- LOGN IN FORM by Omar Dsoky -->
<form method="POST" action="">
   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <h2>Log In</h2>
      <!--     A welcome message or an explanation of the login form -->
      <p>login here using your username and password</p>
   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set">
     
      <!--   user name -->
         <span class="input-item">
           <i class="fa fa-user-circle"></i>
         </span>
        <!--   user name Input-->
         <input class="form-input" id="txt-input" type="text" placeholder="@UserName" name="user" required>
     
      <br>
     
           <!--   Password -->
     
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--   Password Input-->
      <input class="form-input" type="password" placeholder="Password" id="pwd"  name="pass" required>
     
<!--      Show/hide password  -->
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>
     
     
      <br>
<!--        buttons -->
<!--      button LogIn -->
      <button class="log-in" name="submit"> Log In </button>
   </div>
  
<!--   other buttons -->
   <div class="other">
<!--      Forgot Password button-->
      <button class="btn submits frgt-pass">Forgot Password</button>
<!--     Sign Up button -->
      <button class="btn submits sign-up"><a href="signup.php" style="text-decoration: none;"> Sign Up</a> 
<!--         Sign Up font icon -->
      <i class="fa fa-user-plus" aria-hidden="true"></i>
      </button>
<!--      End Other the Division -->
   </div>
     
<!--   End Conrainer  -->
  </div>
  
  <!-- End Form -->
</form>
</div>

<script src="assets/js/login-js.js"></script>
</body>
</html>