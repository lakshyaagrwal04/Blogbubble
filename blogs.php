<?php include 'connection.php';
$n=0;

?>

<!DOCTYPE html>
<html>
<head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Creative Design landing page.">
    <meta name="author" content="Devcrud">
	<title>Blog Bubble | Blogs</title>

<link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

<!-- Bootstrap + Creative Design main styles -->
<link rel="stylesheet" href="assets/css/creative-design.css">
<link rel="stylesheet" href="assets/css/customs.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
<nav id="scrollspy" class="navbar page-navbar navbar-light navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
	<div class="container">
	    <a class="navbar-brand" href="#"><strong class="text-primary">Blog</strong> <span class="text-dark">Bubble</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	        <ul class="navbar-nav ml-auto">
	            <li class="nav-item">
	            <a class="nav-link home-other" href="index.php">Home</a>
	            </li>
	        </ul>
	    </div>
	</div>
</nav>

<!-- Page Header -->
    <header id="blog-home" class="header header-other">
        <div class="overlay"></div>
        <div class="header-content">
            <!-- <p>Lorem ipsum dolor sit amet.</p> -->
            <h6 class="other-head">Blogs</h6> 
            <button class="btn btn-outline-light"><a href="#blogss" style="text-decoration: none"> Let's Begin </a></button> 
        </div>      
    </header><!-- End of Page Header -->   


	<section>
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-between align-items-center">
                
                <div class="sec-3-head" id="blogss"><h6 class="title mb-3 head-inside">Categories</h6></div>
                <div class="post-filter container">
                    <span class="filter-item active-filter" data-filter="all">ALL</span>
                    <span class="filter-item active-filter" data-filter="Lifestyle">Lifestyle</span>
                    <span class="filter-item active-filter" data-filter="Tech">Tech</span>
                    <span class="filter-item active-filter" data-filter="Mobile">Mobile</span>
                    <span class="filter-item active-filter" data-filter="Design">Design</span>
                    <span class="filter-item active-filter" data-filter="Sports">Sports</span>
                    <span class="filter-item active-filter" data-filter="Health">Health</span>
                    <span class="filter-item active-filter" data-filter="Food">Food</span>
                    <span class="filter-item active-filter" data-filter="Music">Music</span>


                </div>
                <!-- posts -->
                <section class="post container">
                    <!-- post box 1 -->
                    <div class="post-box mobile" id="Mobile">
                        <img src="assets\imgs\img-3.jpg" alt="" class="post-img">
                        <h2 class="category">Mobile</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <span class="read-more" id="btn-pop">Read More...</span>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 2 -->
                    <div class="post-box tech" id="Tech">
                        <img src="assets\imgs\img-2.jpg" alt="" class="post-img">
                        <h2 class="category">Tech</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <span class="read-more" id="btn-pop">Read More...</span>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 3 -->
                    <div class="post-box health" id="Health">
                        <img src="assets\imgs\img-1.jpg" alt="" class="post-img">
                        <h2 class="category">Health</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <span class="read-more" id="btn-pop">Read More...</span>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 4 -->
                    <div class="post-box mobile" id="Mobile">
                        <img src="assets\imgs\img-1.jpg" alt="" class="post-img">
                        <h2 class="category">Mobile</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                        <span class="read-more" id="btn-pop">Read More...</span>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 5 -->
                    <div class="post-box tech" id="Tech">
                        <img src="assets\imgs\img-2.jpg" alt="" class="post-img">
                        <h2 class="category">Tech</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <span class="read-more" id="btn-pop">Read More...</span>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 6 -->
                    <div class="post-box design" id="Design">
                        <img src="assets\imgs\img-2.jpg" alt="" class="post-img">
                        <h2 class="category">Design</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <span class="read-more" id="btn-pop">Read More...</span>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 7 -->
                    <div class="post-box mobile" id="Mobile">
                        <img src="assets\imgs\img-2.jpg" alt="" class="post-img">
                        <h2 class="category">Mobile</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <span class="read-more" id="btn-pop">Read More...</span>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 8 -->
                    <div class="post-box tech" id="Tech">
                        <img src="assets\imgs\img-2.jpg" alt="" class="post-img">
                        <h2 class="category">Tech</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <span class="read-more" id="btn-pop">Read More...</span>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 9 -->
                    <div class="post-box design" id="Design">
                        <img src="assets\imgs\img-3.jpg" alt="" class="post-img">
                        <h2 class="category">Design</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <span class="read-more" id="btn-pop">Read More...</span>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                          <span class="post-date">12 March 2023</span>
                        </div>
                    </div> 

    <!-------------     Empty Section to fetch values from Database      ---------->

<?php 
$blogs=mysqli_query($con,"select * from creation");
while($data=mysqli_fetch_array($blogs)){

?>

                    <div class="post-box" id="<?php echo $data['bcategory']; ?>">
                        <img src="assets\imgs\blog-g7.jpg" alt="Blog" class="post-img">
                        <h2 class="category">
                            <!----Here category of blog take from db, also category added to id of above div ----->
                            <?php echo $data['bcategory'];?>
                        </h2>
                        <a href="post-page.html" class="post-title">
                            <!----Here title of blog take from db ----->
                            <?php echo $data['btitle'];?>
                        </a>
                        
                        <p class="post-description">
                            <!----Here content of blog take from db ----->
                            <?php echo $data['bcontent'];?>
                        </p>
                        <span class="read-more" id="btn-pop">
                            <a href="blogs.php#btn-pop?show=<?php $n=$data['id']; echo $n; ?>">
                        Read More...
                    <!-- <input type="hidden" name="show"  value="" id="show"> -->
                </a>
                                      
                    
                    </span>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\user.png" alt="" class="profile-img">
                          <span class="profile-name"><!----Name of Auther take from db -----><?php echo $data['bauthor'];?></span>  
                          <span class="post-date"><!----Date of blog added take from db -----><?php echo $data['bdate'];?></span>
                        </div>
                    </div>
<?php } ?>

    <!--------------------  End here    --------------------------->    

                </section>
                </div>
            </div>
            <!-- End of Row -->
        </div>  
        <!-- End of Container -->
    </section><!-- End of Section -->   

<?php 
// $update=$_GET['update'];


// if(isset($_GET['show'])){
//     $ids=$_GET['show'];

$getblog=mysqli_query($con,"select * from creation where id='$n' ");
$popblog=mysqli_fetch_array($getblog);
echo $popblog['id'];
// }

?>


<div class="pop-full" id="blog-pop">
    <div class="pop-main">
        <span class="close">&times;</span>
        <h2 style="text-align: center;">Read Your Full Blog Here</h2>
        <div class="pop-inside">
            <h1><?php echo $n;  ?></h1>
            <h5 class="pop-category" id="blog-category"><?php echo $popblog['bcategory'];?></h5>
            <h2 class="pop-title" id="blog-title"><?php echo $popblog['btitle'];?></h2>
            <h6 class="pop-author" id="blog-author"><?php echo $popblog['bauthor'];?></h6>
            <p class="pop-text" id="blog-content">
                <?php echo $popblog['bcontent'];?>
            </p>
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

<script type="text/javascript">
    
$(document).ready(function(){

    var modal = document.getElementById("blog-pop");

    $(".read-more").click(function(){
        $(".pop-full").css("display","block");
    });

    $(".close").click(function(){
        $(".pop-full").css("display","none");
        <?php unset($n); ?>
    });
    
    $(window).click(function(event){
        if(event.target == modal){
        $(".pop-full").css("display","none");
      <?php unset($n);?>
        }
    });



});

</script>

</body>
</html>








<!-- 

<div class="pop-full" id="blog-pop">
    <div class="pop-main">
        <span class="close">&times;</span>
        <h2 style="text-align: center;">Read Your Full Blog Here</h2>
        <div class="pop-inside">
            <h5 class="pop-category" id="blog-category">Tech</h5>
            <h2 class="pop-title" id="blog-title">Title like Python</h2>
            <h6 class="pop-author" id="blog-author">Author</h6>
            <p class="pop-text" id="blog-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!adipisicing elit. Rem, voluptatem!dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!

        </p>
        </div>
    </div>
</div>
 -->