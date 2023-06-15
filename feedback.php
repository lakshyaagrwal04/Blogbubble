<?php include 'connection.php';

if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

mysqli_query($con,"insert into feedback set name='$name',email='$email',subject='$subject',message='$message' ");

}


?>



 <!-- Contact Section -->
    <section id="contact" class="text-center">
        <!-- container -->
        <div class="container">
            <h1>CONTACT US</h1>
            <p class="mb-5">Welcome all the Questions, Queries and Feedbacks! <br></p>
            
            <!-- Contact form -->
            <form method="post" action="" class="contact-form col-md-11 col-lg-9 mx-auto">
                <div class="form-row">
                    <div class="col form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="col form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea name="message" id="" cols="30" rows="5" class="form-control" placeholder="Your Message"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary btn-block" value="Send Message">
                </div>
            </form><!-- End of Contact form -->         
        </div><!-- End of Container-->      
    </section><!-- End of Contact Section -->   
