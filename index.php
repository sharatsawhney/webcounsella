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
<meta name="description" content="Industry Leader in customized Websites, Apps, Softwares, SEO, Digital Marketing and Consultancy.">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Webcounsella | Creative Web Development Company</title>

	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- Primary CSS styles -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- Masterslider CSS styles -->
    <link href="css/masterslider/masterslider.css" rel="stylesheet" />
    <link href="css/masterslider/skins/black-1/style.css" rel="stylesheet" />
    <!-- Fontawesome CSS styles -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Aniamte CSS styles -->
    <link href="css/animate.css" rel="stylesheet" />
    <!-- Nivo Slider CSS Styles -->
    <link href="css/nivo-slider.css" rel="stylesheet" />
    <!-- Isotope CSS Styles -->
    <link href="css/isotope.css" rel="stylesheet" />
    <!-- Owl Carousel CSS Styles -->
    <link href="css/owl.carousel.css" rel="stylesheet" />
    <link href="css/owl.transitions.css" rel="stylesheet" />
    <!-- Lightbox CSS Styles -->
    <link href="css/lightbox.css" rel="stylesheet" />

    <link rel="icon" href="images/logo.jpg">
    
</head>
  
<body>
 
    <div class="slider-wrapper">
        
        <!-- masterslider -->
        <div class="master-slider" id="masterslider" data-height="fullscreen">
        	
            <!-- Slide 1 -->
            <div class="ms-slide slide-1" style="z-index: 10" data-delay="8">
            	
                <!-- slide background -->
                <img src="images/design/transparent.jpg" data-src="images/slider/image1.jpg" alt="lorem ipsum dolor sit" />
                
                <h1 class="ms-layer center" style="left:0; top:25px;font-size:70px;color: ;"
                    data-effect="left(short)"
                    data-duration="2500"
                    data-delay="300"
                    data-ease="easeOutExpo"
                >Webcounsella - Digital Services</h1>
                
                <h2 class="ms-layer center"  style="left:0; top:156px;font-size:30px" 
                    data-effect="left(short)"
                    data-duration="2500"
                    data-delay="300"
                    data-ease="easeOutExpo"
                >Industry Leader in customized Websites, Apps , Softwares , SEO, Digital Marketing and Consultancy.  </h2>
                
                <!-- iPhone mockup -->
              <!--  <img src="images/blank.gif" data-src="images/slider/iphone.jpg" alt="layer" class="ms-layer"
                    style="top:280px; left:145px; width:797px; height:595px;" 
                    data-effect="bottom(100)"
                    data-duration="1200"
                    data-delay="600"
                    data-ease="easeOutQuad"
                    data-type="image"
                />-->
                
                <!-- First iPhone Screen Layer -->
               <!-- <img src="images/blank.gif" data-src="images/slider/slide-1-iphonescreen-1.jpg" alt="layer" class="ms-layer"
                    style="top:345px; left:295px; width:489px; height:303px;"
                    data-type="image"
                    data-delay="600"
                    data-ease="easeOutQuad"
                    data-effect="bottom(100)"
                    data-duration="1200"
                    data-hide-ease="easeOutExpo"
                    data-hide-effect="top(200)"
                    data-hide-duration="1200"
                    data-hide-time="3000"
                />-->
                
                <!-- First iPhone Screen Layer -->
               <!-- <img src="images/blank.gif" data-src="images/slider/slide-1-iphonescreen-1.jpg" alt="layer" class="ms-layer"
                    style="top:345px; left:295px; width:489px; height:303px;"
                    data-type="image"
                    data-delay="3000"
                    data-ease="easeOutQuad"
                    data-effect="bottom(0)"
                    data-duration="1200"
                    data-hide-ease="easeOutExpo"
                    data-hide-effect="top(200)"
                    data-hide-duration="1200"
                    data-hide-time="4500"
                />-->
                
                 <!-- First iPhone Screen Layer -->
                <!--<img src="images/blank.gif" data-src="images/slider/slide-1-iphonescreen-1.jpg" alt="layer" class="ms-layer"
                    style="top:345px; left:295px; width:489px; height:303px;"
                    data-type="image"
                    data-delay="4500"
                    data-ease="easeOutQuad"
                    data-effect="bottom(0)"
                    data-duration="1200"
                    data-hide-ease="easeOutExpo"
                    data-hide-effect="top(200)"
                    data-hide-duration="1200"
                    data-hide-time="6000"
                />-->
                
                <!-- First iPhone Screen Layer -->
                <!--<img src="images/blank.gif" data-src="images/slider/slide-1-iphonescreen-3.jpg" alt="layer" class="ms-layer"
                    style="top:345px; left:295px; width:489px; height:303px;"
                    data-type="image"
                    data-delay="6000"
                    data-ease="easeOutQuad"
                    data-effect="bottom(0)"
                    data-duration="1200"
                />-->
             
            </div>
            <!-- end of slide -->
            
            <!-- slide 2 -->
            <div class="ms-slide slide-2" style="z-index: 11" data-delay="6">
          
                <!-- slide background -->
            	<img src="images/design/transparent.jpg" data-src="images/slider/image2.jpg" alt="lorem ipsum dolor sit"/>  
                 
                  <h2 class="ms-layer" style="left:7px; top:215px;"
                    data-effect="top(100)"
                    data-duration="3500"
                    data-delay="0"
                    data-ease="easeOutExpo"
                >A service like no other.</h2>
                
                <h1 class="ms-layer"  style="left:0; top:276px;font-size:60px" 
                    data-effect="bottom(short)"
                    data-duration="2500"
                    data-delay="500"
                    data-ease="easeOutExpo"
                >Modern and Security-oriented Technology</h1>
                
                <p class="ms-layer h4" style="left:7px; top:415px; width:460px;"
                	data-effect="bottom(short)"
                    data-duration="1200"
                    data-delay="600"
                    data-ease="300"
               >We provide startups a platform to kickstart their journey and progress to seamless growth.</p>
                
                 <p class="ms-layer h4" style="left:7px; top:517px; width:460px;"
                	data-effect="bottom(short)"
                    data-duration="1000"
                    data-delay="650"
                    data-ease="300"
               ><a class="btn btn-bordered white anim"  style="left:7px; top:460px;" role="button">Connect</a></p>
                
            </div>
            <!-- end of slide -->
            
            <!-- slide 3 -->
            <div class="ms-slide slide-video" style="z-index: 9" data-delay="8">
                 
            	<img src="images/design/transparent.jpg" data-src="images/slider/image3.jpg" alt="lorem ipsum dolor sit"/>  
                
                
                    
               	<h2 class="ms-layer" style="left:390px; top:215px;"
                    data-effect="right(200)"
                    data-duration="3500"
                    data-delay="100"
                    data-ease="easeOutExpo"
                >Customized Web Applications</h2>
                
                <h1 class="ms-layer center"  style="left:0; top:276px" 
                    data-effect="bottom(short)"
                    data-duration="2500"
                    data-delay="800"
                    data-ease="easeOutExpo"
                >Perfected with SEO</h1>
                 
              	<p class="ms-layer h4" style="left:91px; top:415px; width:460px;"
                	data-effect="left(short)"
                    data-duration="1200"
                    data-delay="1200"
                    data-ease="300"
               >Get any pre-designed or customized software including GST software, restaurant billing software, school management software and inventory management software </p>
                
            </div>
            <!-- end of slide -->
            
        </div> <!-- end of masterslider -->
         
        <a href="#firstSection"><i class="fa fa-chevron-down" id="go-down"></i></a>
        
    </div><!-- end of slider-wrapper -->
    
    <span id="nav-begins"></span><!-- place before navigation bar-->
    <div class="container-wrapper navigation">
    	<nav class="navbar navbar-default" role="navigation">
        
            <div class="container">
            
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo.png" width="80px" />
                    </a>
                    <ul class="mini"></ul><!-- mobile navigation -->
            	</div><!-- .navbar-header -->
                
                <div class="collapse navbar-collapse">
                	<div class="right">
                        <ul class="nav navbar-nav">
                            <li class="active  h">
                            	<a href="index.php">Home</a>
                            	
                            </li>
                            <li class="h">
							    <a href="about.html">About</a>
							</li>
                          
                            <li class="h"><a href="portfolio-1.html">Portfolio</a></li>
                            
							<li class="h">
							    <a href="contact.php">Contact</a>
							</li>
                        </ul>
                        
                    </div>
            	</div><!-- /.navbar-collapse -->
       		</div><!-- /.container-fluid -->
        	<div class="search-field">
                <div class="container">
                	<form method="get" role="search">
                		<input type="text" name="s" placeholder="Type then press enter..." />
                        <button type="submit" class="hidden btn btn-default">Submit</button>
                  	</form>
                </div>
            </div><!-- search-field -->
   		</nav>
   	</div>
   
    <section class="content-section" id="firstSection">
        <div class="container">
            <h1 class="anim fadeInDown"><i class="fa fa-gear"></i>OUR <span>SERVICES</span></h1>
            <p class="anim fadeInUp">
                We offer various services at Webcounsella! We will list a few right here,
                right now just to show you how incredibly awesome we are at our company!
            </p>
        </div>
    </section>

    <section class="feature-list">
    	<div class="container">
        	
        	<div class="col-lg-4 feature anim fadeInLeft" data-wow-delay="0.25s">
            	<i class="fa fa-trophy"></i>
                <div class="content">
                    <h4>Award-Winning Designs</h4>
                    <p>The design of your website is the first impression of your website on any customer.We design websites as charming as you.  </p>
                </div>
            </div>
            
        	<div class="col-lg-4 feature anim fadeInDown" data-wow-delay="0.25s">
            	<i class="fa fa-laptop"></i>
                <div class="content">
                    <h4>Smooth Web Applications</h4>
                    <p>From user accounts,payment portal, booking system and chat systems to advanced chatbots and analytics, we build all the applications that your business needs.</p>
                </div>
            </div>
            
        	<div class="col-lg-4 feature anim fadeInRight" data-wow-delay="0.25s">
            	<i class="fa fa-android"></i>
                <div class="content">
                    <h4>User-Friendly Mobile Apps</h4>
                    <p>About 65% of the web is powered by mobile apps and that's the sector you must not miss. WebCounsella helps to easily synchronize your websites to user-friendly mobile apps.</p>
                </div>
            </div>
            
            <!-- Second Row -->
            <div class="col-lg-4 feature anim fadeInLeft" data-wow-delay="0.5s">
            	<i class="fa fa-pencil"></i>
                <div class="content">
                    <h4>Wow Graphic-designs</h4>
                    <p>We provide eloquent and retina-ready graphic designs including logos, cards, brochures, posts and UI/UX designing. </p>
                </div>
            </div>
            
        	<div class="col-lg-4 feature anim fadeInUp" data-wow-delay="0.5s">
            	<i class="fa fa-bug"></i>
                <div class="content">
                    <h4>SEO and Digital Marketing</h4>
                    <p>If getting to the top in search engines like Google and Bing is your dream, SEO is what you must be concerned about. With sectors ranging from content to marketing elements , we take care all to cover the .</p>
                </div>
            </div>
            
        	<div class="col-lg-4 feature anim fadeInRight" data-wow-delay="0.5s">
            	<i class="fa fa-code"></i>
                <div class="content">
                    <h4>Softwares and ERP</h4>
                    <p>ERPs power your business and so we develop powerful ERPs and softwares that can tackle any of your hard tasks.</p>
                </div>
            </div>
            <!-- End of second row --> 
            
        </div>
    </section><!-- .feature-list -->
    
    <section class="content-section fixed video blur">
    	<span class="shadows"></span>
        
     	<div class="video-wrapper">
        	<img src="images/design/quotes.jpg" height="900px">
     	</div><!-- .video-wrapper -->
        
    	<div class="container anim fadeInUp">
			<i class="fa fa-quote-left"></i>
        	<ul class="testimonials" id="testimonials">
            
            	<li class="ms-slide">
                	<img src="images/design/transparent.jpg" data-src="images/design/transparent.jpg" />
                	<h3 style="font-size:30px;">To become successful online, you only need to remember the following : Good Heart + Passion + Web Design + SEO + Digital Marketing + Dedication + Positiveness + Patience = Success</h3>
                	<cite><strong>Chris Dayagdag</strong> - Marketlink CEO</cite>
                </li>
                
                <li class="ms-slide">
                	<img src="images/design/transparent.jpg" data-src="images/design/transparent.jpg"  />
                	<h3>Websites promote you 24/7: No employee will do that.</h3>
                	<cite><strong>Paul Cookson</strong> - Author</cite>
                </li>
                
                <li class="ms-slide">
                	<img src="images/design/transparent.jpg" data-src="images/design/transparent.jpg"  />
                	<h3>Good marketing makes the company look smart. Great marketing makes the customer feel smart.</h3>
                	<cite><strong>Joe Chernov</strong> - InsightSquared CMO</cite>
                </li>
                
            </ul><!-- .testimonials -->
            <i class="fa fa-quote-right"></i>
        </div><!-- .container -->
        
        <!-- Optional Nav
        <div class="ms-nav-prev" id="tPrev"></div>
        <div class="ms-nav-next" id="tNext"></div>
        -->
        
    </section><!-- .content-section -->
    
    <section class="content-section anim fadeInDown" data-wow-delay="0.25s">
        <div class="container">
            <h1><i class="fa fa-pencil"></i>OUR <span>WORK</span></h1>
              <p>Our Work defines us and we at Webcounsella are proud of all the great Projects we have built and the Relationships we have made with our clients.</p>
        </div>
    </section>
  
    <section class="portfolio">
    	<div class="container">
        	<div class="filter anim fadeInDown" data-wow-delay="0.55s">
            	<ul id="filters">
                    <li><a class="btn btn-bordered hot btn-sm" role="button" data-filter="*">All</a></li>
                    <li><a class="btn btn-bordered btn-sm" role="button" data-filter=".work">Websites</a></li>
                    <li><a class="btn btn-bordered btn-sm" role="button" data-filter=".projects">Designs</a></li>
                </ul>
            </div>
            <!-- Standard button -->
        </div><!-- container -->
         <div class="gallary">
         	<div class="preview">
            	<i class="fa fa-spinner fa-spin"></i>
            </div>
            
            <ul>
            
                <li class="work">
                   	<a href="images/pf4.png" id="desc" data-icon="fa-desktop" data-lightbox="image1" data-title="Harder Electric(https://www.harderelectric.com/)">
                        <img src="images/pf4.png" />
                    </a>
                </li>
                
                <li class="projects">
                   	<a href="images/pf21.png" id="desc" data-icon="fa-pencil" data-lightbox="image1">
                        <img src="images/pf21.png" />
                    </a>
                </li>
                
                
                <li class="work">
                   	<a href="images/pf14.png" id="desc" data-icon="fa-desktop" data-lightbox="image1" data-title="Major Brands(http://www.majorbrands.in/">
                        <img src="images/pf14.png" />
                    </a>
                </li>
				
				 <li class="projects">
                   	<a href="images/pf24.jpg" id="desc" data-icon="fa-pencil" data-lightbox="image1">
                        <img src="images/pf24.jpg" />
                    </a>
                </li>
                <!-- End of row -->
                
                <li class="work">
                   	<a href="images/pf15.png" id="desc" data-icon="fa-desktop" data-lightbox="image1" data-title="Nexgeno(https://www.nexgeno.com/home)">
                        <img src="images/pf15.png" />
                    </a>
                </li>
                
                 <li class="projects">
                   	<a href="images/pf22.png" id="desc" data-icon="fa-pencil" data-lightbox="image1">
                        <img src="images/pf22.png" />
                    </a>
                </li>
                
                 <li class="projects">
                   	<a href="images/pf23.png" id="desc" data-icon="fa-pencil" data-lightbox="image1">
                        <img src="images/pf23.png" />
                    </a>
                </li>
                
                <li class="work">
                   	<a href="images/pf16.png" id="desc" data-icon="fa-desktop" data-lightbox="image1" data-title="DreemBox(https://www.dreembox.com/)">
                        <img src="images/pf16.png" />
                    </a>
                </li>
                
                <li class="work">
                   	<a href="images/pf17.png" id="desc" data-icon="fa-desktop" data-lightbox="image1" data-title="The Dental Specialists(http://www.thedentalspecialists.in/)">
                        <img src="images/pf17.png" />
                    </a>
                </li>
                
                 <li class="projects">
                   	<a href="images/pf25.jpg" id="desc" data-icon="fa-pencil" data-lightbox="image1">
                        <img src="images/pf25.jpg" />
                    </a>
                </li>
                
                 <li class="projects">
                   	<a href="images/pf20.png" id="desc" data-icon="fa-pencil" data-lightbox="image1">
                        <img src="images/pf20.png" />
                    </a>
                </li>
                
                <li class="work">
                   	<a href="images/pf18.png" id="desc" data-icon="fa-desktop" data-lightbox="image1" data-title="Career Builder(https://www.careerbuilder.co.in/)">
                        <img src="images/pf18.png" />
                    </a>
                </li>
				
				<li class="work">
                   	<a href="images/pf19.png" id="desc" data-icon="fa-desktop" data-lightbox="image1" data-title="Travel Guru(https://www.travelguru.com/)">
                        <img src="images/pf19.png" />
                    </a>
                </li>
				
				<li class="work">
                   	<a href="images/pf3.png" id="desc" data-icon="fa-desktop" data-lightbox="image1" data-title="Omvapt(https://omvapt.com/)">
                        <img src="images/pf3.png" />
                    </a>
                </li>
				
				<li class="work">
                   	<a href="images/pf1.png" id="desc" data-icon="fa-desktop" data-lightbox="image1" data-title="Stylopedia(http://www.stylopediaa.in/)">
                        <img src="images/pf1.png" />
                    </a>
                </li>
                
            </ul>
            
            <div class="clearfix"></div>
        </div>
    </section><!-- portfolio -->
    
    <section class="content-section anim fadeInDown" data-wow-delay="0.25s">
        <div class="container">
            <h1><i class="fa fa-rocket"></i>OUR BADASS <span>TEAM</span></h1>
          	<p>
                The great services would not have been remotley possible if it was not for the effort exerted 
                by our amazing and talented team, check them out.
       		</p>
        </div>
    </section><!-- .content-section -->
    
    <div class="team-leader-block clearfix" >
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-03s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="images/sharat.jpg" alt="" style="width:290px;height:290px">
          <ul style="color:white;margin-top:-50px">
            <li><h5>SHARAT SAWHNEY</h5></li>
            <li><h6>CEO</h6></li>
            
          </ul>
        </div>
        
      </div>
      <div class="team-leader-box">
        <div class="team-leader  wow fadeInDown delay-06s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="images/shivam.jpg" alt="" style="width:290px;height:290px">
          <ul style="color:white;margin-top:-50px">
            <li><h5>SHIVAM GARG</h5></li>
            <li><h6>COO</h6></li>
            
          </ul>
        </div>
        
      </div>
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-09s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="images/jatin.jpg" alt="" style="width:290px;height:290px">
          <ul style="color:white;margin-top:-50px">
            <li><h5>JATIN AGGARWAL</h5></li>
            <li><h6>CDO</h6></li>
            
          </ul>
        </div>
        
      </div>
    </div>

    <section class="content-section anim fadeInDown">
        <div class="container">
            <h1><i class="fa fa-pencil-square-o"></i>CONTACT <span>US</span></h1>
         	<p>
              	Our primary concern is dealing with our customers and making sure that they are satisfied.
               	Any questions, demands, or concerns you may have are very important to us.
       		</p>
        </div>
    </section><!-- .content-section -->
   
    <section class="content-section form contact light">
    	<div class="container">
        	
            <span id="message"></span><!-- remove #message to stop floating jQuery messages -->
            
            <form method="post" name="contact">
                <div class="col-lg-5 anim fadeInLeft">
                
                    <span class="input-group">
                        <i class="fa fa-user"></i>
                        <input type="text" name="contactName" id="contactName" class="lg" placeholder="Name" />
                    </span><!-- .input-group -->
                    
                    <span class="input-group">
                        <i class="fa fa-envelope"></i>
                        <input type="text" name="contactEmail" id="contactAddress" class="lg" placeholder="Email Address" />
                    </span><!-- .input-group -->
                    
                   	<span class="input-group">
                        <i class="fa fa-phone"></i>
                        <input type="text" name="contactNumber" id="contactNumber" class="lg" placeholder="Contact Number" />
                    </span><!-- .input-group -->
                    
                </div><!-- .col-5 -->
                
                <div class="col-lg-7 anim fadeInRight">
                
                 	<span class="input-group">
                        <textarea name="contactMessage" id="contactMessage" class="lg" placeholder="Any Message(Optional)"></textarea>
                    </span><!-- .input-group -->
                    
                    <span class="input-group">
                    	<button type="submit" class="submit" id="submit_contact" data-loading-text="SENDING...">SEND</button>
                    </span><!-- .input-group -->
                </div>
            </form>
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
    
    <script language="javascript" src="js/jquery-1.11.0.min.js"></script>
    <!-- Easing core JavaScript -->
	<script language="javascript" src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap core JavaScript -->
    <script language="javascript" src="js/bootstrap.min.js"></script>
    <!-- Master slider core JavaScript -->
	<script language="javascript" src="js/masterslider.min.js"></script>
    <!-- Master slider staff core JavaScript -->
    <script language="javascript" src="js/masterslider.staff.carousel.dev.js"></script>
    <!-- WOW core JavaScript -->
    <script language="javascript" src="js/wow.min.js"></script>
    <!-- Waypoints core JavaScript -->
	<script language="javascript" src="js/waypoints.min.js"></script>
    <!-- Underscore core JavaScript -->
    <script language="javascript" src="js/underscore-min.js"></script>
    <!-- jQuery Backstretch core -->
    
    <!-- jQuery color core JavaScript -->
    <script language="javascript" src="js/jquery.animation.js"></script>
    <!-- Isotope core JavaScript -->
    <script language="javascript" src="js/jquery.isotope.min.js"></script>
	<!-- Stellar core JavaScript -->
    <script language="javascript" src="js/jquery.stellar.min.js"></script>
    <!-- Contact core JavaScript -->
    
    <!-- NiceScroll core Javascript -->
    
    <!-- Retina core JavaScript -->
    <script language="javascript" src="js/retina-1.1.0.min.js"></script>
    <!-- Nivo Slider JavaScript -->
    <script language="javascript" src="js/jquery.nivo.slider.pack.js"></script>
    <!-- Video core JavaScript -->
    <script language="javascript" src="js/video.js"></script>
    <!-- OWL Carousel core JavaScript -->
    <script language="javascript" src="js/owl.carousel.min.js"></script>
    <!-- twitterfeed core JavaScript -->
    <script language="javascript" src="js/jquery.twitterfeed.js"></script>
    <!-- Lightbox core JavaScript -->
    <script language="javascript" src="js/lightbox.min.js"></script>
  	<!-- Everything else -->
    <script language="javascript" src="js/custom.js"></script>

    <script type="text/javascript" language="javascript">
	<!--
	jQuery(document).ready(function($) {
		
		/************************
		****** MasterSlider *****
		*************************/
		// Calibrate slider's height
		var sliderHeight = 790; // Smallest hieght allowed (default height)
		if ( $('#masterslider').data('height') == 'fullscreen' ) {
			var winHeight = $(window).height();
			sliderHeight = winHeight > sliderHeight ? winHeight : sliderHeight;
		}
		
		// Initialize the main slider
		var slider = new MasterSlider();
		slider.setup('masterslider', {
			space:0,
			fullwidth:true,
			autoplay:true,
			overPause:false,
			width:1024,
			height:sliderHeight
		});
		// adds Arrows navigation control to the slider.
		slider.control('bullets',{autohide:false  , dir:"h"});
		
		var teamslider = new MasterSlider();
		teamslider.setup('teamslider' , {
			loop:true,
			width:300,
			height:290,
			speed:20,
			view:'stffade',
			grabCursor:false,
			preload:0,
			space:29
		});
		teamslider.control('slideinfo',{insertTo:'#staff-info'});
		
		$(".team .ms-nav-next").click(function() {
			teamslider.api.next();  
		});
		
		$(".team .ms-nav-prev").click(function() {
			teamslider.api.previous();  
		});
		
		
		
	});
	
	
	
	// -->
	</script>
</body>
</html>