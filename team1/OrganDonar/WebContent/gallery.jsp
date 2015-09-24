<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Office - Gallery Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2036 Blue Office
http://www.tooplate.com/view/2036-blue-office
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />
<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-->
<!--////// END  \\\\\\\-->

<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->

</head>
<body class="subpage">

<div id="tooplate_wrapper">

	<div id="tooplate_sidebar">
        <div id="site_title"><a href="#"><span></span></a></div>
        
        <div id="home_service">
        	<div class="home_service_box"><span class="service1"></span><h5><a href="#">Service One</a></h5>Integer sit amet nulla vitae urna porttitor quis et tellus.</div>
            <div class="home_service_box"><span class="service2"></span><h5><a href="#">Service Two</a></h5>
            Morbi lectus erat, tempus ac mattis eu, fringilla id elit.</div>
            <div class="home_service_box"><span class="service3"></span><h5><a href="#">Service Three</a></h5>Nulla quam mi, faucibus non laoreet nec.</div>
        </div>
        
        <div class="sidebar_box">
        	<h4>Newsletter</h4>	
			
			<div id="newsletter_box">
			<form action="#" method="get">			
			Please enter your email address to subscribe our newsletter.<br />
			<input type="text" id="newsletter_email" name="newsletter_email" class="newsletter_email" />				           
            <input type="submit" name="submit_subscribe" id="submit_subscribe" value="Subscribe" />
            </form>
			</div>	
			
            <div class="cleaner"></div>
        </div>
        
      	<div class="sidebar_box sbb_last">
            <strong>Company Name</strong><br />
            172-168 Curabitur massa ipsum, <br />
            Proin dignissim molestie, 15500<br />
            Venenatis ut turpis<br />
        	<b>Email:</b> <a href="mailto:info@yoursite.com">info@yoursite.com</a>		
		</div>
	</div> <!-- end of sidebar -->
    
    <div id="tooplate_main">
    	
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.jsp">Home</a></li>
                <li><a href="about.jsp">About Us</a></li>
                <li><a href="services.jsp">Registration</a></li>
                <li><a href="gallery.jsp" class="current">Gallery</a></li>
                <li><a href="contact.jsp">Contact</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
        
        <div id="content_title_box">
	        <h2>Our Gallery</h2>
			<p>
			Every year in India, nearly 5 lakh people suffering from 
			organ failure die due to unavailability of organs. 
			</p>
        </div>
        
        <div id="tooplate_content">
        	<div id="gallery">
			
            	<div class="gallery_box">
                	<div class="left">
                    	<a href="images/organ/gallery.jpg" class="pirobox" title="Project 1">
                    	<img src="images/organ/gallery.jpg" alt="Project 01" /></a>
                    </div>
                    <div class="right">
                        <h5> Carry your organ donor registration card all the time</h5>
                        <p>Only registering is not enough, it is advised that you carry the donor card with you all the time and keep your family informed about the decision.  <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                        <div class="btn_more float_r"><a href="#"><span>&raquo;</span> Read more</a></div>
                    </div>
					
                    <div class="cleaner"></div>
                </div>
                
                <div class="gallery_box">
                    <div class="left">
                    	<a href="images/organ/gallery1.jpg" class="pirobox" title="Project 2">
                    	<img src="images/organ/gallery1.jpg" alt="Project 02" /></a>
                    </div>
                    <div class="right">
                      <h5>
						But, not every donor's organs can be used for transplantation after death</h5>
                      <p>Vital organs like heart, kidneys, lungs, liver, intestines and pancreas can be transplanted only after a person has been declared brain dead. In the case of death due to cardiac arrest, that is when the heart stops beating, one can only donate tissues such as eyes, bones, skin, cornea, heart valves etc.</p>
                       <div class="btn_more float_r"><a href="#"><span>&raquo;</span> Read more</a></div>
                    </div>
               		<div class="cleaner"></div>
                </div>
                
                <div class="gallery_box">
                	<div class="left">
                		<a href="images/organ/gallery2.jpg" class="pirobox" title="Project 3">
                		<img src="images/organ/gallery2.jpg" alt="Project 03" /></a>
                    </div>
                    <div class="right">
                    	<h5>You can change your mind at any time</h5>
	                  <p>Registering for organ donation is not a one-way route. At any moment after getting yourself registered as an organ donor, you can tear the card off and inform your family that you have changed your mind.</p>
        		        <div class="btn_more float_r"><a href="#"><span>&raquo;</span> Read more</a></div>
                  	</div>
                    <div class="cleaner"></div>
                </div>
                
                <div class="gallery_box">
                	<div class="left">
               			<a href="images/organ/gallery3.jpeg" class="pirobox" title="Project 4">
               			<img src="images/organ/gallery3.jpeg" alt="Project 04" /></a>
                    </div>
					<div class="right">
                    	<h5>No donation takes place without family's consent</h5>
                		<p>Even if you are a registered organ donor, in India, the rule states that no organ transplantation can happen if your next of kin does not permit.</p>
		              <div class="btn_more float_r"><a href="#"><span>&raquo;</span> Read more</a></div>
                    </div>
					
                    <div class="cleaner"></div>
                </div>
				
        	</div> <!-- end of Gallery -->
        </div> <!-- end of content -->
    
    </div> <!-- end of content -->
	
    <div class="cleaner"></div>    
</div> <!-- end of wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">

        <a href="index.html">Home</a> | <a href="about.html">About Us</a> | <a href="services.html">Services</a> | <a href="gallery.html">Gallery</a> | <a href="contact.html">Contact</a> <br /><br />
        
        Copyright © 2048 <a href="#">Company Name</a> - Design: <a href="http://www.tooplate.com">tooplate</a>
		
    </div>
</div>

</body>
</html>