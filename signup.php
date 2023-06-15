<?php
include 'connection.php';
error_reporting(0);



if(isset($_POST['submit'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];

$e="select * from sign_up where email='$email' ";
$emailcheck=mysqli_query($con,$e);
if(mysqli_num_rows($emailcheck)>0){
?>
<script>
  alert("Enter Valid Email");
</script>
<?php

}else{
if($pass==$repass){

$d="insert into sign_up set fname='$fname',lname='$lname',email='$email',user='$user',pass='$pass',repass='$repass' ";
mysqli_query($con,$d);


?>
<script>
  window.location="login.php";
</script>
<?php

}else{
?>
<script>
  alert("Password not match");
</script>
<?php
}

}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
<link rel="stylesheet" href="assets/css/signup-css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="overlay">
<!-- LOGN IN FORM by Omar Dsoky -->
<form method="POST" action="" name="formdata">
   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
    
      <h2>Sign Up</h2>
      <!--     A welcome message or an explanation of the login form -->
      <p>Register here by creating your username and password</p>
   </header>
   <!--     End  header Content  -->
   <br>
   <div class="field-set">
      <span class="input-item">
        <i class="fa fa-user-circle"></i>
      </span>

        <!--   first name Input-->
      <input class="form-input" id="txt-input" type="text" placeholder="First Name" required name="fname">
     
      <br>

      <span class="input-item">
        <i class="fa fa-user-circle"></i>
      </span>

        <!--   last name Input-->
      <input class="form-input" id="txt-input" type="text" placeholder="Last Name" required name="lname">
      <br>

      <span class="input-item">
           <i class="fa fa-envelope"></i>
         </span>
        <!--   email Input-->
      <input class="form-input" id="txt-input" type="email" placeholder="Email" required name="email">
      <br>

      <!--   user name -->
      <span class="input-item">
      <i class="fa fa-user-circle"></i>
      </span>
        <!--   user name Input-->
      <input class="form-input" id="txt-input" type="text" placeholder="@UserName" required name="user">     
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
      <span class="input-item">
        <i class="fa fa-key"></i>
       </span>
      <!--  Re Password Input-->
      <input class="form-input" type="password" placeholder="Confirm Password" id="pwd"  name="repass" required>
     
<!--      Show/hide password  -->
     <span>
        <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
     </span>

     <br>
<!--        buttons -->
<!--      button LogIn -->
      <button class="sign-up" name="submit"> Sign Up </button>
   </div>
  
<!--   other buttons -->
   <div class="other">
<!--      Forgot Password button-->
      <p class="submits frgt-pass already">Already have an Account?</p>
<!--     Sign Up button -->
       
        <button class="btn submits log-in"><a href="login.php" style="text-decoration: none;"> Log In </a>
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

<script src="assets/js/signup-js.js"></script>
</body>
</html>