<?php

if(isset($_POST['contactEmail'])) {
 
    $emailTo ="webcounsella@gmail.com";
			$name = $_POST["contactName"];
			$number = $_POST["contactNumber"]."  Subject: ".$_POST['contactMessage'];
			$headers = "From: ".$_POST["contactEmail"];
			if (mail($emailTo, $name, $number, $headers)) {
                
                echo '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';
                
                
            } else {
                
                echo '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
                
                
            }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Contact Us | Webcounsella | Creative Web Development Company</title>

	
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- Primary CSS styles -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- Fontawesome CSS styles -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Aniamte CSS styles -->
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Nivo Slider CSS Styles -->
    <link href="css/nivo-slider.css" rel="stylesheet" />
    <!-- Owl Carousel CSS Styles -->
    <link href="css/owl.carousel.css" rel="stylesheet" />
    <link href="css/owl.transitions.css" rel="stylesheet" />
    
    
</head>
  
<body>
 
     <div class="container-wrapper navigation">
    	<nav class="navbar navbar-default" role="navigation">
        
            <div class="container">
            
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo.png" width="50px" />
                    </a>
                    <ul class="mini"></ul><!-- mobile navigation -->
            	</div><!-- .navbar-header -->
                
                <div class="collapse navbar-collapse">
                	<div class="right">
                        <ul class="nav navbar-nav">
                            <li>
                            	<a href="index.php">Home</a>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="portfolio-1.html">Portfolio</a></li>
                            <li class="active"><a href="contact.php">Contact</a></li>
                        </ul>
                        
                    </div>
            	</div><!-- /.navbar-collapse -->
       		</div><!-- /.container-fluid -->
        	
   		</nav>
   	</div><!-- .navigation -->
  
    <div id="nav-ends"></div>
    
     <section class="about-font parallax-slug-2" data-stellar-background-ratio="0">
    	<div class="overlay">
            <div class="container">
            	<div class="row">
                    <div class="col-lg-12">
                        <h1 class="anim fadeInDown">Contact Us</h1>
                        <p class="anim fadeInDown" data-wow-delay=".32s">Drop us a message.</p>
                    </div><!-- .col-lg-12 -->
                </div><!-- .row -->
            </div>
        </div><!-- .overlay -->
    </section><!-- .slug -->
    
    
   	<section class="content-section">
        <div class="container">
        	<div class="row">
       			<div class="col-lg-12 anim fadeInDown" data-wow-delay="0.25s">
                    <p>
                        Our primary concern is dealing with our customers and making sure that they are satisfied. Any questions, 
                        comments, or concerns you may have are very important to us.
                    </p>
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
            <div class="row">
            	<div class="col-lg-12 anim fadeInDown" data-wow-delay="0.45s">
            		<div id="gmap" class="gmap"></div>
                    <div class="shadow-lg"></div>
                </div><!-- .col-lg-12 -->
            </div><!-- .row -->
    	</div>
    </section><!-- .content-section -->
    
    <section class="content-section form contact style-2">
    	<div class="container">
        	<div class="row">
            
                <form method="post" name="contact">
                    <div class="col-md-8 anim fadeInLeft">
                    
                        <span class="input-group tight">
                            <i class="fa fa-user"></i>
                            <input type="text" name="contactName" id="contactName" class="lg" placeholder="Name" />
                        </span><!-- .input-group -->
                        
                        <span class="input-group tight second">
                            <i class="fa fa-envelope"></i>
                            <input type="text" name="contactEmail" id="contactAddress" class="lg" placeholder="Email Address" />
                        </span><!-- .input-group -->
                        
                        <span class="input-group">
                            <i class="fa fa-book"></i>
                            <input type="text" name="contactNumber" id="contactNumber" class="lg" placeholder="Contact Number" />
                        </span><!-- .input-group -->
                        
                        <span class="input-group">
                            <textarea name="contactMessage" id="contactMessage" class="lg" placeholder="What's on your mind?"></textarea>
                        </span><!-- .input-group -->
                        
                        
                        
                        <span class="input-group">
                            <input type="submit" class="btn btn-primary" id="submit_contact" data-loading-text="SENDING...">
                        </span><!-- .input-group -->
                        
                    </div><!-- .col-lg-8 -->
                    
                    <div class="col-md-4">
                    	<ul class="info-list">
                        
                        	<li class="anim fadeInRight" data-wow-delay="0.15s">
                            	<i class="fa fa-map-marker"></i>
                                <span>
                                	<p>
                                    	B-433, Rajiv Bhawan, IIT Roorkee<br />
                                    	Roorkee - 247667<br />
                                   		India
                                    </p>
                                </span>
                            </li>
                            
                            <li class="anim fadeInRight" data-wow-delay="0.25s">
                            	<i class="fa fa-phone"></i>
                                <span>
                                    <article><cite>Phone:</cite>	+ 91 9557761700</article><br />
                                    <article><cite>Email:</cite>	webcounsella@gmail.com</article>
                                    <p></p>
                                </span>
                            </li>
                            
                            <li class="hours anim fadeInRight" data-wow-delay="0.35s">
                            	<i class="fa fa-clock-o"></i>
                                <span>
                                    <article><cite>Fri-Mon:</cite>9am - 8pm</article><br />
                                    <article><cite>Saturday:</cite>10am - 8pm</article><br />
                                    <article><cite>Sunday:</cite>10am-7pm</article>
                                    <p></p>
                                </span>
                            </li>
                            
                        </ul><!-- .info-list -->
                    </div><!-- .col-lg-4 -->
                </form>
                
            </div><!-- .row -->
    	</div><!-- .container -->
    	
        <span id="message_sent"><i class="fa-check fa"></i></span><!-- jQuery display of giant checkmark -->	
        
    </section><!-- .content-section .form -->
    
    
        
     <footer class="classic">
    	<section class="content-section parallax-bg-3" data-stellar-background-ratio=".15">
        
        	
                
                <div class="foot-wrapper">
                    <div class="container">
                    	<div class="row">
                        
                            <div class="col-md-3 anim fadeInLeft">
                                <span class="logo">
                                    <img src="images/logo.png" width="80px" alt="Light logo" />
                                </span><!-- .logo -->
                                <p>
                                    We here at Webcounsella are always willing to support you and your business. Contact us anytime ... We are always there for you!!
                                </p>
                            </div><!-- .col-lg-3 -->
                            
                            <div class="col-md-3 anim fadeInLeft">
                           		<h5>FACEBOOKSPHERE</h5>
                                
                                <a href="https://www.facebook.com/Webcounsella/"><i class="fa fa-facebook-square fa-3x" style="color:white"></i></a>
                                
                            </div><!-- .col-lg-3 -->
                            
                            <div class="col-md-3">
                            	<h5 class="anim fadeInRight"><i class="fa fa-rocket"></i>PAGES TO VISIT</h5>
                                <ul class="pages">
                                    <li class="anim fadeInRight" data-wow-delay="0.35s"><a class="btn btn-bordered white" role="button" href="index.php">Home</a></li>
                                    <li class="anim fadeInRight" data-wow-delay="0.37s"><a class="btn btn-bordered white" role="button" href="portfolio-1.html">Portfolio</a></li>
                                    <li class="anim fadeInRight" data-wow-delay="0.39s"><a class="btn btn-bordered white" role="button" href="about.html">About</a></li>
                                    <li class="anim fadeInRight" data-wow-delay="0.45s"><a class="btn btn-bordered white" role="button" href="contact.php">Contact</a></li>
                                    
                                    
                                    
                                </ul><!-- .pages -->
                            </div><!-- .col-lg-3 -->
                            
                             <div class="col-md-3 anim fadeInRight">
                            	<h5><i class="fa fa-rss"></i>STAY CONNECTED</h5>
                              	
                                <div class="contact-info">
                                    <p>
                                        Feel free to call us any time, we have a staff
                                        dedicated to taking your calls.
                                    </p>
                                    
                                    <span>
                                    	<i class="fa fa-phone"></i>
                                        +91-9557761700
                                    </span>
                                    
                                    <span>
                                    	<i class="fa fa-envelope"></i>
                                        webcounsella@gmail.com
                                    </span>
                                    
                                     
                                </div>
                            </div><!-- .col-lg-3 -->
                            
                        </div><!-- .row -->
                        
                        <div class="row">
                        	<div class="col-lg-12">
                            	<span class="copyright">Copyright 2017 Webcounsella - All RIghts Reserved</span>
                            </div><!-- .col-lg-12 -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .foot-wrapper -->
                
                
            </div><!-- .container -->
        </section><!-- .content-section -->
        
    </footer>
    
    
    
    <!-- Google Map API JavaScript -->
	<script language="javascript" src="js/jquery-1.11.0.min.js"></script>
    <!-- Easing core JavaScript -->
	<script language="javascript" src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap core JavaScript -->
    <script language="javascript" src="js/bootstrap.min.js"></script>
    <!-- WOW core JavaScript -->
    <script language="javascript" src="js/wow.min.js"></script>
    <!-- Waypoints core JavaScript -->
	<script language="javascript" src="js/waypoints.min.js"></script>
    <!-- Underscore core JavaScript -->
    <script language="javascript" src="js/underscore-min.js"></script>
    <!-- jQuery Backstretch core -->
    <script language="javascript" src="js/jquery.backstretch.min.js"></script>
    <!-- jQuery color core JavaScript -->
    <script language="javascript" src="js/jquery.animation.js"></script>
	<!-- Stellar core JavaScript -->
    <script language="javascript" src="js/jquery.stellar.min.js"></script>
    <!-- NiceScroll core Javascript -->
    
    <!-- Retina core JavaScript -->
    <script language="javascript" src="js/retina-1.1.0.min.js"></script>
    <!-- Nivo Slider JavaScript -->
    <script language="javascript" src="js/jquery.nivo.slider.pack.js"></script>
    <!-- Video core JavaScript -->
    <script language="javascript" src="js/video.js"></script>
    <!-- OWL Carousel core JavaScript -->
    <script language="javascript" src="js/owl.carousel.min.js"></script>
    <!-- CountUp core JavaScript -->
    <script language="javascript" src="js/countUp.min.js"></script>
    <!-- EasypieChart core JavaScript -->
    <script language="javascript" src="js/jquery.easypiechart.min.js"></script>
    <!-- twitterfeed core JavaScript -->
    <script language="javascript" src="js/jquery.twitterfeed.js"></script>
  	<!-- Everything else -->
    <script language="javascript" src="js/custom.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWY_v5GvDLwooubTf7i9mlSocYlUqGpKc&callback=initMap"
  type="text/javascript"></script>
    
    <script language="javascript" src="js/custom.js"></script>

    <script type="text/javascript" language="javascript">
	

	function initMap() {
        var uluru = {lat: 29.8698, lng:77.8949};
        var map = new google.maps.Map(document.getElementById('gmap'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
	</script>
</body>
</html>