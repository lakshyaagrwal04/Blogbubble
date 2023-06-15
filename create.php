<?php include("session.php");
	include 'connection.php'; 

if(isset($_POST['submit'])){

$bcategory = $_POST['bcategory'];
$btitle = $_POST['btitle'];
$bauthor = $_POST['bauthor'];
$bcontent = $_POST['bcontent'];

$bdate=date('y-m-d');
$btime=date('h:i:s');

// $bq=;
mysqli_query($con,"insert into creation set bcategory='$bcategory',btitle='$btitle',bauthor='$bauthor',bdate='$bdate',btime='$btime',bcontent='$bcontent' ");

}


?>
<!-- <h1>You are Log In</h1> -->
<!-- <a href="logout.php">Logout</a> -->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Blogs | BlogBubble</title>

<link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Bootstrap + Creative Design main styles -->
<link rel="stylesheet" href="assets/css/creative-design.css">
<link rel="stylesheet" href="assets/css/customs.css">
<link rel="stylesheet" href="assets/css/create.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="">
<nav id="scrollspy" class="navbar page-navbar navbar-light navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
	<div class="container">
	    <a class="navbar-brand" href="#"><strong class="text-primary">Blog</strong> <span class="text-dark">Bubble</span></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	            <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav ml-auto">
	            <li class="nav-item">
	            	<a class="nav-link" href="index.php">Home</a>
	            </li>
	            <li class="nav-item nav-line">
	            	|
	            </li>
	            <li class="nav-item ml-md-4">
                    <a class="nav-link nav-img" href=""><img src="assets\imgs\user.png" class="profile-dp">
                    	<span class="profile-user"><strong><?php echo $un; ?></strong></span>
                    </a>
                </li>
                <li class="nav-item ml-md-4">
	            	<a class="nav-link btn btn-danger" href="logout.php">Logout</a>
	            </li>
	        </ul>
	    </div>
	</div>
</nav>
<div class="container">
	<div class="area-main">
		<h2><i class="fa fa-arrow-down arw"></i>&nbsp; Create Your own blog here  &nbsp;<i class="fa fa-arrow-down arw"></i></h2>
		<div class="area-sub px-4">
			<div class="row g-5">
				<div class="col-lg-2 col-md-3 col-sm-2 area-left">
					<ul type="none">
						<li class="board-item"><strong>Category</strong></li>
						<li class="board-item"><strong>Title</strong></li>
						<li class="board-item"><strong>Auther</strong></li>
						<li class="board-item"><strong>Content</strong></li>
					</ul>
				</div>
				<div class="col area-right">
					<form method="post" action="">
					<ul type="none">
						<li><select class="form-select form-control input-item" style="padding: 0px 15px" name="bcategory">
							<option>Lifestyle</option>
							<option>Tech</option>
							<option>Mobile</option>
							<option>Design</option>
							<option>Sports</option>
							<option>Health</option>
							<option>Food</option>
							<option>Music</option>
							<option>Other</option>
						</select></li>
						<li><input type="text" class="form-control input-item" placeholder="Title of Blog" name="btitle"></li>
						<li><input type="text" class="form-control input-item" placeholder="Auther Name" name="bauthor"></li>
						<li><textarea rows="15" class="form-control input-item" placeholder="Write Your Content Here" name="bcontent"></textarea></li>
					</ul>
					<!-- <input type="button" class="btn btn-back" value="Back" name="back" id="back"> -->
						<input type="submit" class="btn btn-create" value="Create" name="submit" id="create">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- core  -->
<script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

<!-- bootstrap affix -->
<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

<!-- Creative Design js -->
<script src="assets/js/creative-designs.js"></script>

</body>
</html>