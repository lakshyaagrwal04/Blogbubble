

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Creative Design landing page.">
    <meta name="author" content="Devcrud">
    <title>Blog Bubble | The Best Blogging Website</title>

    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap + Creative Design main styles -->
<link rel="stylesheet" href="assets/css/creative-design.css">
<!-- <link rel="stylesheet" href="assets/css/style.css"> -->

<link rel="stylesheet" href="assets/css/customs.css">

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Page Navbar -->
    <nav id="scrollspy" class="navbar page-navbar navbar-light navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#"><strong class="text-primary">Blog</strong> <span class="text-dark">Bubble</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogs.php">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#createblog">Create Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ml-md-4">
                        <a class="nav-link btn btn-primary" href="signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item ml-md-4">
                        <a class="nav-link btn btn-success" href="login.php">Log In</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><!-- End of Page Navbar -->   

    <!-- Page Header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content">
            <!-- <p>Lorem ipsum dolor sit amet.</p> -->
            <h6>Blog Bubble</h6> 
            <button class="btn btn-outline-light"><a href="#about"> Let's Begin</a></button> 
        </div>      
    </header><!-- End of Page Header -->    
    
    <!-- About Section -->
    <section id="about">
        <!-- Container -->
        <div class="container">
            <!-- About wrapper -->
            <div class="about-wrapper">
                <div class="after"><h1>About Us</h1></div>
                <div class="content">
                    
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-2 col-md-2"></div>
                        <div class="about-cont col-lg-8 col-md-9 col-sm-12">
                            <h5 class="mb-3 head-about">Welcome to our bloging Website!</h5>
                            <p>We are a team of passionate web developers, writers and content creators who believe in the power of information sharing. Our website is dedicated to providing our readers with the latest news, trends, and insights on a variety of topics ranging from technology, health, lifestyle, travel, and more.</p>                                                  
                            <p>Our aim is to create a platform that not only informs but also educates and entertains our audience. We strive to produce high-quality, engaging, and informative content that helps our readers stay up-to-date and informed on the latest happenings in their respective fields of interest.</p>
                            <p>We are committed to providing our readers with a seamless and enjoyable reading experience. We welcome feedback and suggestions from our readers and are always looking for ways to improve our content and website.</p>
                            <p><b>Thank you for visiting our Website. We hope you find our website helpful and informative.</b></p>
                            <a href="aboutus.php">Know More...</a>
                        </div>
                        <div class="col-lg-2 col-md-2"></div>
                        
                    </div><!-- End of Row -->                   
                    
                </div>
            </div><!-- End of About Wrapper -->         
        </div>  <!-- End of Container-->        
     </section><!--End of Section -->


    <!-- section -->
    <section>
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12">
                    <!-- <div class="img-wrapper">
                        <div class="after"></div> -->

                        <!-- <img src="assets/imgs/img-assets\imgs\img-2.jpg" class="w-100" alt="About Us"> -->
                    <!-- </div> -->

                </div>
                <div class="sec-3-head"><h6 class="title mb-3 head-inside">Our Blogs</h6></div>
                <div class="post-filter container">
                    <span class="filter-item active-filter" data-filter="all">ALL</span>
                    <span class="filter-item active-filter" data-filter="lifestyle">Lifestyle</span>
                    <span class="filter-item active-filter" data-filter="tech">Tech</span>
                    <span class="filter-item active-filter" data-filter="mobile">Mobile</span>
                    <span class="filter-item active-filter" data-filter="design">Design</span>
                    <span class="filter-item active-filter" data-filter="sports">Sports & Fitness</span>
                    <span class="filter-item active-filter" data-filter="health">Health</span>
                    <span class="filter-item active-filter" data-filter="food">Food & Drink</span>
                    <span class="filter-item active-filter" data-filter="food">Music</span>
                </div>
                <!-- posts -->
                <section class="post container">
                    <!-- post box 1 -->
                    <div class="post-box mobile" id="mobile">
                        <img src="assets\imgs\img-3.jpg" alt="" class="post-img">
                        <h2 class="category">Mobile</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 2 -->
                    <div class="post-box tech" id="tech">
                        <img src="assets\imgs\img-2.jpg" alt="" class="post-img">
                        <h2 class="category">Tech</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 3 -->
                    <div class="post-box design" id="design">
                        <img src="assets\imgs\img-1.jpg" alt="" class="post-img">
                        <h2 class="category">Design</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 4 -->
                    <div class="post-box mobile" id=" mobile">
                        <img src="assets\imgs\img-1.jpg" alt="" class="post-img">
                        <h2 class="category">Mobile</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 5 -->
                    <div class="post-box tech" id="tech">
                        <img src="assets\imgs\img-2.jpg" alt="" class="post-img">
                        <h2 class="category">Tech</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 6 -->
                    <div class="post-box design" id="design">
                        <img src="assets\imgs\img-2.jpg" alt="" class="post-img">
                        <h2 class="category">Design</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 7 -->
                    <div class="post-box mobile" id="mobile">
                        <img src="assets\imgs\img-2.jpg" alt="" class="post-img">
                        <h2 class="category">Mobile</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 8 -->
                    <div class="post-box tech" id="tech">
                        <img src="assets\imgs\img-2.jpg" alt="" class="post-img">
                        <h2 class="category">Tech</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                        <span class="post-date">12 March 2023</span>
                        </div>
                    </div>
                    <!-- post box 9 -->
                    <div class="post-box design" id="design">
                        <img src="assets\imgs\img-3.jpg" alt="" class="post-img">
                        <h2 class="category">Design</h2>
                        <a href="post-page.html" class="post-title">
                            Best Python basic tutorial
                        </a>
                        
                        <p class="post-description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem, voluptatem!
                        </p>
                        <!-- profile -->
                        <div class="profile">
                          <img src="assets\imgs\hero.jpg" alt="" class="profile-img">
                          <span class="profile-name">Lakshya</span>  
                          <span class="post-date">12 March 2023</span>
                        </div>
                    </div>        
                </section>
                <a href="blogs.php" class="btn-blog"><button class="btn btn-outline-primary btn-sm btn-blog">Learn More</button></a>
                </div>
            </div>
            <!-- End of Row -->
        </div>  
        <!-- End of Container -->
    </section><!-- End of Section -->   

    <!-- section -->
    <section id="createblog">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row justify-content-between align-items-center">                
                <div class="col-md-6">
                    <h6 class="title mb-3 head-inside">Create Your Own Blogs.</h6>
                    <p class="font-paras">Yes, Now You can Create Your Own Blogs on Different Topics in Different Categories on our website <strong>Blog Bubble</strong>.</p>
                    <p class="font-paras"><i>So, <b>START</b> Your Journey of Writing Blogs With us.</i></p>
                    <br>
                    <a href="login.php" class="btn-blog"><button class="btn btn-outline-primary btn-sm btn-blog">Learn More</button></a>

                </div>
                <div class="col-md-6">
                    <div class="img-wrapper">
                        <div class="after right"></div>
                        <img src="assets/imgs/img-2.jpg" class="w-100" alt="About Us">
                    </div>                      
                </div>
            </div><!-- End of Row -->           
        </div><!-- End of Container-->      
    </section><!-- End of Section -->
    

    <!-- Features Section -->
    <section class="has-bg-img" id="features">
        <div class="overlay">
            <!-- <img src="assets/imgs/blog-g.png" height="300" width="900"> -->
        </div>
        

            
    </section><!-- End of features Section -->  

    <!-- Section -->
    <!-- <section style="display: none">
        
              
    </section> --><!-- End of Section -->   

    <!-- Testmonial Section -->
    <section class="text-center pt-5" id="testmonial" style="background-color: #fff">
        <!-- Container -->
        <div class="container">
            <h3 class="mt-3 mb-5 pb-5">What our Users says</h3>
            <!-- Row -->
            <div class="row">
                <div class="col-sm-10 col-md-4 m-auto">
                    <div class="testmonial-wrapper">
                        <img src="assets/imgs/user2.png" alt="Client Image">
                        <h6 class="title mb-3">Gaurav Jain</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium voluptates voluptatem eum nisi cumque veniam est id reprehenderit atque rerum, cum sit perspiciatis, harum cupiditate nostrum quibusdam perferendis accusamus, illo.</p>
                    </div>
                </div>
                <div class="col-sm-10 col-md-4 m-auto">
                    <div class="testmonial-wrapper">
                        <img src="assets/imgs/user2.png" alt="Client Image">
                        <h6 class="title mb-3">Mr. Sharma</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium voluptates voluptatem eum nisi cumque veniam est id reprehenderit atque rerum, cum sit perspiciatis, harum cupiditate nostrum quibusdam perferendis accusamus, illo.</p>
                    </div>
                </div>
                <div class="col-sm-10 col-md-4 m-auto">
                    <div class="testmonial-wrapper">
                        <img src="assets/imgs/user2.png" alt="Client Image">
                        <h6 class="title mb-3">User </h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium voluptates voluptatem eum nisi cumque veniam est id reprehenderit atque rerum, cum sit perspiciatis, harum cupiditate nostrum quibusdam perferendis accusamus, illo.</p>
                    </div>
                </div>
            </div><!-- end of Row -->           
        </div><!-- End of Cotanier -->  
    </section><!-- End of Testmonial Section -->

    <!-- Section -->
    <section class="has-bg-img text-center text-light height-auto" style="background-image: url(assets/imgs/bg-img-2.jpg)">
        <h1 class="display-4">LET’S EXPLORE THE WORLD.</h1>
    </section><!-- End of Section -->
    
<?php include 'feedback.php'; ?>
   
    <!-- Section -->
    <section class="pb-0 sec2">
        <!-- Container -->
        <div class="container">
            <!-- Pre footer -->
            <div class="pre-footer">
                <ul class="list">
                    <li class="list-head">
                        <h6 class="font-weight-bold">ABOUT US</h6>
                    </li>
                    <li class="list-body">
                        <p>We are the Team of Full Stack Developers, and built this Website with full of dedication and hard work. We tried to provide the best user experience and promise to deliver best of best in Future also.</p>

                        <a href="#"><strong class="text-primary">Blog</strong> <span class="text-dark">Bubble</span></a>
                    </li>
                </ul>
                <ul class="list">
                    <li class="list-head">
                        <h6 class="font-weight-bold">USEFUL LINKS</h6>
                    </li>
                    <li class="list-body">
                        <div class="row">
                            <div class="">
                                <a href="https://www.linkedin.com/in/lakshya-agarwal-963184255">Link 1</a>
                                <a href="https://www.linkedin.com/in/kamal-kumar-atariya-881a3a245">Link 2</a>
                                
                            </div>
                            
                        </div>
                    </li>
                </ul>
                <ul class="list">
                    <li class="list-head">
                        <h6 class="font-weight-bold">CONTACT INFO</h6>
                    </li>
                    <li class="list-body">
                        <p>Contact us</p>
                        <p><i class="ti-location-pin"></i> Jaipur, Rajasthan.</p>
                        <p><i class="ti-world"></i>  blogbubble.com</p>
                        <div class="social-links">
                            <a href="https://wa.me/9782647160/?text=Hii" class="link ct-link">
                                <i class="fa fa-whatsapp"></i></a>
                            <a href="mailto:agrawal4lakshya@gmail.com" class="link ct-link">
                                <i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/lakshya-agarwal-963184255" class="link ct-link">
                                <i class="fa fa-linkedin"></i></a>
                            <a href="https://instagram.com/lakshya_agarwal_04?igshid=YmMyMTA2M2Y=  " class="link ct-link">
                                <i class="fa fa-instagram"></i></a>
                            <a href="https://github.com/lakshyaagrwal04" class="link ct-link">
                                <i class="fa fa-github"></i></a>
                        </div>
                    </li>
                </ul> 
            </div><!-- End of Pre footer -->            

            <!-- foooter -->
            <footer class="footer">
                <p>Thanks For Visiting.</p>           
                <p>Copyright <script>document.write(new Date().getFullYear())</script> &copy;BlogBubble</p>
            </footer><!-- End of Footer-->  
            
        </div><!--End of Container -->      
    </section><!-- End of Section -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Creative Design js -->
    <script src="assets/js/creative-designs.js"></script>

</body>
</html>
