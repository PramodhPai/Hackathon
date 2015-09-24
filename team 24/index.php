<!DOCTYPE html>

<?php
ini_set('display_errors','off');
include("config.php");
include "classes/class.phpmailer.php";
if(isset($_POST['submit']))
{
		$name = mysql_real_escape_string($_POST['name']);
		$gender = mysql_real_escape_string($_POST['gender']);
		$college = mysql_real_escape_string($_POST['college']);
		$course = mysql_real_escape_string($_POST['course']);
		$email = mysql_real_escape_string($_POST['email']);	
		$mobile = mysql_real_escape_string($_POST['mobile']);	
		$query1=mysql_query("INSERT INTO `registration` (`id`,`name`,`gender`,`college`,`course`,`email`,`mobile`,`created_date`)
					VALUES(`id`,'$name','$gender','$college','$course','$email','$mobile',now())");
// for unique mobile number										
if($query1===FALSE)
{
	echo '<script type="text/javascript">';
	echo 'alert("Mobile Number Already Exists!!!" );';
	echo 'window.location.href="index.php#service";';
    echo '</script>';
}
}
//Genertaing Id
if($query1)
{
	$qry="select user_id from donor where name='$name' and mobile='$mobile' and email='$email'";
$result=mysql_query($qry);
if($row=mysql_fetch_row($result));
{
$xianze='X2KF'.$row[0];

	echo '<script type="text/javascript">';
	echo 'alert("Your Unique ID is : '.$user_id.' Please Save the ID" );';
	echo 'window.location.href="index.php#service";';
    echo '</script>';
	
	//mailling function
	$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtpcorp.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "tmsmsvspb@gmail.com";
$mail->Password = "9042036852";
$mail->SetFrom("admin@studentportal.url.ph");
$mail->Subject = "Welcome To X!ANZE RELOADED";
$mail->Body = "Hi $name. You have successfully registered to be a part of X!ANZE RELOADED. This is your unique id &nbsp;&nbsp;$xianze. <br>For further details please contact Mr.Vinoth.M 9790301078
</br> by MindBenders</b>";
$mail->AddAddress($email);
 if(!$mail->Send()){
	echo '<script type="text/javascript">';
	echo 'alert("Enter Valid Email Address" );';
	echo 'window.location.href="index.php#service";';
    echo '</script>';
}
else{
	echo '<script type="text/javascript">';
	echo 'alert("Hi '.$name.', Check Your Inbox!!!" );';
	echo 'window.location.href="index.php#service";';
    echo '</script>';
}
//End MAilling Function

}
//echo '<br /> YOUR ID :'.$row[0];
}
	//Dump----conform table
$conform1=mysql_query("INSERT INTO conform SELECT * FROM spot_entry where id not in(select id from conform)");
$conform2=mysql_query("INSERT INTO conform SELECT * FROM spot_search where id not in(select id from conform)");
	//End----coform table
?>

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Recycle Yourself</title>
        <link rel="shortcut icon" type="image/x-icon" href="images/logo_title.png" />
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>



 <style> 
        .captionOrange, .captionBlue, .captionBlack, .captionSymbol
        {
            display: block;
            color: #fff;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
            border-radius: 4px;
        }
        .captionOrange
        {
            background: #EB5100;
            background-color: rgba(235, 81, 0, 0.6);
        }
        .captionBlue
        {
            background: #746FBD;
            background-color: rgba(21, 21, 120, 0.6);
        }
        .captionBlack
        {
            background: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .captionSymbol
        {
        	border-radius: 100px !important;
        	font-weight: 400 !important;
        	font-size: 26px !important;
            background: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .captionTextBlack
        {
        	display: block;
        	color: #000;
        	font-size: 20px;
        	line-height: 30px;
        }
        .captionTextWhite
        {
        	display: block;
        	color: #fff;
        	font-size: 20px;
        	line-height: 30px;
        }
        a.captionOrange, a.captionOrange:active, a.captionOrange:visited,a.captionTextWhite, a.captionTextWhite:active, a.captionTextWhite:visited
        {
        	color: #fff;
        	text-decoration: none;
        }
        a.captionOrange:hover
        {
            color: #eb5100;
            text-decoration: underline;
            background-color: #eeeeee;
            background-color: rgba(238, 238, 238, 0.7);
        }
        a.captionTextBlack, a.captionTextBlack:active, a.captionTextBlack:visited
        {
        	color: #000;
        	text-decoration: none;
        }
        a.captionTextWhite:hover
        {
            color: #eb5100;
            text-decoration: underline;
        }
        a.captionTextBlack:hover
        {
            color: #eb5100;
            text-decoration: underline;
        }
        .bricon
        {
            background: url(../img/browser-icons.png);
        }
    </style>
    
    <style>
        /*
        .jssorb01 div           (normal)
        .jssorb01 div:hover     (normal mouseover)
        .jssorb01 .av           (active)
        .jssorb01 .av:hover     (active mouseover)
        .jssorb01 .dn           (mousedown)
        */
        .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av
        {
            filter: alpha(opacity=70);
            opacity: .7;
            overflow:hidden;
            cursor: pointer;
            border: #000 1px solid;
        }
        .jssorb01 div { background-color: gray; }
        .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }
        .jssorb01 .av { background-color: #fff; }
        .jssorb01 .dn, .jssorb01 .dn:hover { background-color: #555555; }
    </style>
    
    <style>
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l              (normal)
        .jssora05r              (normal)
        .jssora05l:hover        (normal mouseover)
        .jssora05r:hover        (normal mouseover)
        .jssora05ldn            (mousedown)
        .jssora05rdn            (mousedown)
        */
        .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
        {
            position: absolute;
            cursor: pointer;
            display: block;
            background: url(../img/a17.png) no-repeat;
            overflow:hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05ldn { background-position: -250px -40px; }
        .jssora05rdn { background-position: -310px -40px; }
    </style>
    
    
    
	</head>

	<body class="no-trans">
    
    
    
     <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) or jssor.sliderc.mini.js (32KB, with caption, no slideshow) or jssor.sliders.mini.js (28KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.core.js"></script>
    <script type="text/javascript" src="js/jssor.utils.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
            //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

            var _SlideshowTransitions = [
                //Rotate Overlap
                { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Brother: { $Duration: 1200, $Zoom: 1, $Rotate: 1, $Easing: $JssorEasing$.$EaseSwing, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Shift: 90 } },
                //Switch
                { $Duration: 1400, x: 0.25, $Zoom: 1.5, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1400, x: -0.25, $Zoom: 1.5, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $Opacity: 2, $ZIndex: -10 } },
                //Rotate Relay
                { $Duration: 1200, $Zoom: 11, $Rotate: 1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Brother: { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Shift: 600 } },
                //Doors
                { $Duration: 1500, x: 0.5, $Cols: 2, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2, $Brother: { $Duration: 1500, $Opacity: 2 } },
                //Rotate in+ out-
                { $Duration: 1500, x: -0.3, y: 0.5, $Zoom: 1, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4], $Zoom: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 11, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },
                //Fly Twins
                { $Duration: 1500, x: 0.3, $During: { $Left: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true, $Brother: { $Duration: 1000, x: -0.3, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Rotate in- out+
                { $Duration: 1500, $Zoom: 11, $Rotate: 0.5, $During: { $Left: [0.4, 0.6], $Top: [0.4, 0.6], $Rotate: [0.4, 0.6], $Zoom: [0.4, 0.6] }, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 1, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },
                //Rotate Axis up overlap
                { $Duration: 1200, x: 0.25, y: 0.5, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1200, x: -0.1, y: -0.7, $Rotate: 0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 } },
                //Chess Replace TB
                { $Duration: 1600, x: 1, $Rows: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, x: -1, $Rows: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Chess Replace LR
                { $Duration: 1600, y: -1, $Cols: 2, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, y: 1, $Cols: 2, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Shift TB
                { $Duration: 1200, y: 1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Shift LR
                { $Duration: 1200, x: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, x: -1, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
                //Return TB
                { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },
                //Return LR
                { $Duration: 1200, x: 1, $Delay: 40, $Cols: 6, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, x: 1, $Delay: 40, $Cols: 6, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },
                //Rotate Axis down
                { $Duration: 1500, x: -0.1, y: -0.7, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, x: 0.2, y: 0.5, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 } },
                //Extrude Replace
                { $Duration: 1600, x: -0.2, $Delay: 40, $Cols: 12, $During: { $Left: [0.4, 0.6] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5 }, $Brother: { $Duration: 1000, x: 0.2, $Delay: 40, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 1028, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Round: { $Top: 0.5 } } }
            ];

            //Reference http://www.jssor.com/development/slider-with-caption-jquery.html
            //Reference http://www.jssor.com/development/reference-ui-definition.html#captiondefinition
            //Reference http://www.jssor.com/development/tool-caption-transition-viewer.html

            var captionTransitions = [];

            var t_tr = { $Duration: 700, x: -0.6, y: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine, $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            var t_tr_ib = { $Duration: 900, x: -0.6, y: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack, $Top: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };
            var t_rtt_tr = { $Duration: 700, x: -0.6, y: 0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };

            var t_rtt_360 = { $Duration: 800, $Rotate: 1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 };
            var t_clip_lr = { $Duration: 900, $Clip: 3, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            var t_zm = { $Duration: 700, $Zoom: 1, $Easing: $JssorEasing$.$EaseInCubic, $Opacity: 2 };
            var t_b_ = { $Duration: 700, y: -0.6, $Rotate: 0.05, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };

            captionTransitions["TEAM_1"] = [[t_rtt_360, t_zm], [t_zm, t_rtt_tr]];
            captionTransitions["TEAM_2"] = [t_rtt_360, t_clip_lr, t_zm, t_b_];

            captionTransitions["L|IB"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 };
            captionTransitions["L|EP"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo }, $Opacity: 2 };
            captionTransitions["L*IB"] = { $Duration: 900, x: 0.6, $Zoom: 3, $Rotate: -0.3, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Rotate: $JssorEasing$.$EaseInBack }, $Opacity: 2 };
            captionTransitions["B*IB"] = { $Duration: 900, y: -0.6, $Zoom: 3, $Rotate: -0.3, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Rotate: $JssorEasing$.$EaseInBack }, $Opacity: 2 };
            captionTransitions["T|IE*IE"] = { $Duration: 1800, y: 0.8, $Zoom: 11, $Rotate: -1.5, $Easing: { $Top: $JssorEasing$.$EaseInOutElastic, $Zoom: $JssorEasing$.$EaseInElastic, $Rotate: $JssorEasing$.$EaseInOutElastic }, $Opacity: 2, $During: { $Zoom: [0, 0.8], $Opacity: [0, 0.7] }, $Round: { $Rotate: 0.5} };
            captionTransitions["CLIP|L"] = { $Duration: 800, $Clip: 1, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            captionTransitions["CLIP|LR"] = t_clip_lr;
            captionTransitions["RTT|360"] = t_rtt_360;
            captionTransitions["RTT*JUP|BR"] = { $Duration: 1000, x: -0.5, y: -0.8, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseLinear, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Left: [0, 0.5]} };
            captionTransitions["RTT*JDN|L"] = { $Duration: 1200, x: 0.3, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseOutCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Left: [0, 0.5]} };
            captionTransitions["SPACESHIP|LB"] = { $Duration: 1000, x: 1, y: -0.1, $Zoom: 3, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuint, $Top: $JssorEasing$.$EaseInWave, $Opacity: $JssorEasing$.$EaseInQuint }, $Opacity: 2 };
            captionTransitions["SPACESHIP|RB"] = { $Duration: 1000, x: -1, y: -0.1, $Zoom: 3, $Rotate: 0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuint, $Top: $JssorEasing$.$EaseInWave, $Opacity: $JssorEasing$.$EaseInQuint }, $Opacity: 2 };
            captionTransitions["ZM"] = { $Duration: 600, $Zoom: 1, $Easing: $JssorEasing$.$EaseInCubic, $Opacity: 2 };

            var captionTransitions_childSliders = [
            //R|IB
            {$Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 }
            //B|IB
            , { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 }
            //R*|IB
            , { $Duration: 900, x: -0.6, $Zoom: 3, $Rotate: -0.3, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Rotate: $JssorEasing$.$EaseInBack }, $Opacity: 2 }
            //B*|IB
            , { $Duration: 900, y: -0.6, $Zoom: 3, $Rotate: -0.3, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Rotate: $JssorEasing$.$EaseInBack }, $Opacity: 2 }
            //R-*|IB
            , { $Duration: 900, x: -0.7, $Rotate: 0.5, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInBack }, $Opacity: 2, $During: { $Left: [0.2, 0.8]} }
            //B-*|IB
            , { $Duration: 900, y: -0.7, $Rotate: 0.5, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInBack }, $Opacity: 2, $During: { $Top: [0.2, 0.8]} }
            //CLIP|LR
            , { $Duration: 900, $Clip: 3, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 }
            //CLIP|TB
            , { $Duration: 900, $Clip: 12, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 }
            //CLIP|L
            , { $Duration: 800, $Clip: 1, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 }
            //ZM*JDN|RB
            , { $Duration: 1200, x: -0.8, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} }
            //RTT*JUP|RB
            , { $Duration: 1200, x: -0.8, y: -0.5, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} }
            //TORTUOUS|VB
            , { $Duration: 1800, y: -0.2, $Zoom: 1, $Easing: { $Top: $JssorEasing$.$EaseOutWave, $Zoom: $JssorEasing$.$EaseOutCubic }, $Opacity: 2, $During: { $Top: [0, 0.7] }, $Round: { $Top: 1.3} }
            ];

            var slider1Options = {
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $DragOrientation: 0,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: captionTransitions_childSliders,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $SpacingX: 10,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10                                   //[Optional] Vertical space between each item in pixel, default value is 0
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                }
            };

            var jssorSlider1 = new $JssorSlider$("slider1_container", slider1Options);

            var slider2Options = {
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $DragOrientation: 0,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,             //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: captionTransitions_childSliders,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $SpacingX: 10,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10                                   //[Optional] Vertical space between each item in pixel, default value is 0
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                }
            };

            var jssorSlider2 = new $JssorSlider$("slider2_container", slider2Options);

            var bannerSlider_slideshowTransitions = [
            //Fade in R
            {$Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
            , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            ];

            var slider3Options = {
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $DragOrientation: 0,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: bannerSlider_slideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $SpacingX: 10,                                  //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 10                                   //[Optional] Vertical space between each item in pixel, default value is 0
                },

                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $ActionMode: 0,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $DisableDrag: true                              //[Optional] Disable drag or not, default value is false
                }
            };

            var jssorSlider3 = new $JssorSlider$("slider3_container", slider3Options);

            function IsBrowserIe8Earlier() {
                var isBrowserIe8Earlier;

                var app = navigator.appName;
                var ua = navigator.userAgent;

                if (app == "Microsoft Internet Explorer" &&
                !!window.attachEvent && !!window.ActiveXObject) {

                    var ieOffset = ua.indexOf("MSIE");

                    browserRuntimeVersion = document.documentMode || parseFloat(ua.substring(ieOffset + 5, ua.indexOf(";", ieOffset)));

                    isBrowserIe8Earlier = browserRuntimeVersion < 8;
                }
            }

            var sliderClusterSlideshowOptions = IsBrowserIe8Earlier() ? null : {                                //[Optional] Options to specify and enable slideshow or not
                $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
            };

            var slidercOptions = {
                $AutoPlay: false,                                   //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //Allows arrow key to navigate or not
                $SlideDuration: 800,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $SlideshowOptions: sliderClusterSlideshowOptions,

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: captionTransitions,        //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2                                  //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                },

                $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $SpacingX: 4,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 4                                    //[Optional] Vertical space between each item in pixel, default value is 0
                }
            };

            var jssorSliderc = new $JssorSlider$("sliderc_container", slidercOptions);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssorSliderc.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssorSliderc.$SetScaleWidth(Math.max(Math.min(parentWidth, 960), 300));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end

            //slider cluster controller code begin
            function SliderCluster(mainSlider, autoPlayInterval) {
                var _Self = this;
                var _NestedSliders = [];
                var _NestedSliderCurrent;

                var _CaptionInCounter = 0;

                function OnChildSliderStateChange(currentIndex, progress, progressBegin, idleBegin, idleEnd, progressEnd) {
                    if (progress == idleBegin) {
                        if (!(++_CaptionInCounter % 4)) {

                            _NestedSliderCurrent && _NestedSliderCurrent.$Pause();

                            mainSlider.$Play(true);
                        }
                    }
                }

                function OnMainSliderStateChange(currentIndex, progress, progressBegin, idleBegin, idleEnd, progressEnd) {

                    _NestedSliderCurrent = _NestedSliders[currentIndex];

                    if (_NestedSliderCurrent) {
                        if (progress == idleBegin) {

                            mainSlider.$Pause();
                            _NestedSliderCurrent.$Play(true);
                        }
                        else if (progress == progressBegin) {
                            _CaptionInCounter = 0;
                            mainSlider.$Play(true);
                        }
                    }
                }

                function OnMainSliderSwipeStart(position, virtualPosition) {
                    _NestedSliderCurrent && _NestedSliderCurrent.$Pause();
                    mainSlider.$Pause();
                }

                function OnMainSliderPark(slideIndex, fromIndex) {
                    _CaptionInCounter = 0;
                    mainSlider.$Play();
                }

                _Self.$AddChildSlider = function (childSlider, slideIndex) {
                    _NestedSliders[slideIndex] = childSlider;
                    childSlider.$On($JssorSlider$.$EVT_STATE_CHANGE, OnChildSliderStateChange);
                };

                _Self.$Start = function () {
                    mainSlider.$On($JssorSlider$.$EVT_PARK, OnMainSliderPark);
                    mainSlider.$On($JssorSlider$.$EVT_STATE_CHANGE, OnMainSliderStateChange);
                    mainSlider.$On($JssorSlider$.$EVT_SWIPE_START, OnMainSliderSwipeStart);

                    mainSlider.$Play(true);
                }
            }

            var sliderCluster = new SliderCluster(jssorSliderc);
            sliderCluster.$AddChildSlider(jssorSlider1, 0);
            sliderCluster.$AddChildSlider(jssorSlider2, 1);
            sliderCluster.$AddChildSlider(jssorSlider3, 2);
            sliderCluster.$Start();

            //slider cluster controller code end
        });
    </script>
    
    
    
    
    
    <div class="loader"></div>
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<header class="header fixed clearfix navbar navbar-fixed-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">

						<!-- header-left start -->
						<!-- ================ -->
						<div class="header-left clearfix">

							<!-- logo -->
							<div class="logo smooth-scroll">
								<a href="#banner"><img id="logo" src="images/logo.png" alt="Worthy"></a>
							</div>

							<!-- name-and-slogan -->
							<div class="site-name-and-slogan smooth-scroll">
								<div class="site-name"><a href="#banner">Recycle Yourself</a></div>
								<div class="site-slogan">Be The Change...</div>
							</div>

						</div>
						<!-- header-left end -->

					</div>
					<div class="col-md-8">

						<!-- header-right start -->
						<!-- ================ -->
						<div class="header-right clearfix">

							<!-- main-navigation start -->
							<!-- ================ -->
							<div class="main-navigation animated">

								<!-- navbar start -->
								<!-- ================ -->
								<nav class="navbar navbar-default" role="navigation">
									<div class="container-fluid">

										<!-- Toggle get grouped for better mobile display -->
										<div class="navbar-header">
											<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
											</button>
										</div>

										<!-- Collect the nav links, forms, and other content for toggling -->
										<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
											<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#banner">HOME</a></li>
                                             
												<li><a href="#about">ABOUT</a></li>												
												<li><a href="#portfolio">MOTIVES</a></li>
												
                                               
                                                <li><a href="form1.php">DONOR</a>
                                                </li>
                                                <li><a href="form2.php">RECEIVER</a>
                                                </li>
												<li><a href="#contact">CONTACT</a></li>
											</ul>
										</div>

									</div>
								</nav>
								<!-- navbar end -->

							</div>
							<!-- main-navigation end -->

						</div>
						<!-- header-right end -->

					</div>
				</div>
			</div>
		</header>
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image">
            
            
            
            
            <div style="position: relative; margin-top: 10px; top: 0px; left: 0px; width:100%; text-align: center; background-image: url(img/home/back-dice-02.jpg); border-top: 1px solid gray; border-bottom: 1px solid gray; overflow: hidden;">
        <!-- Jssor Slider Begin -->
        <!-- You can move inline styles to css file or css block. --> 
        <div id="sliderc_container" style="position: relative; margin: 0 auto; width: 960px;
            height: 750px; text-align: left; overflow: hidden;">
            <style>
                /* this line can be removed, but it really helps in case of css conflicts in your page */
                .sliderc div { position: relative; margin: 0px; padding: 0px; }
            </style>
 
            <!-- Slides Container --> 
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 100px; width: 960px; height: 450px;
                overflow: hidden;">
                <div>
                    <!-- Jssor Slider Begin -->
                    <!-- You can move inline styles to css file or css block. -->
                    <div id="slider1_container" style="position: relative; top: 90px; left: 0px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px;">

                        <!-- Loading Screen -->
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                                top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px; overflow: hidden;">
                            <div>
                                <a u="image" href="http://www.jssor.com/demos/image-slider.html"><img src="img/photography/002.jpg" alt="image slider" /></a>
                                
                            </div>
                            <div>
                                <a u="image" href="http://www.jssor.com/demos/image-slider.html"><img src="img/photography/003.jpg" alt="jqeury image slider" /></a>
                                
                            </div>
                            <div>
                                <a u="image" href="http://www.jssor.com/demos/image-slider.html"><img src="img/photography/004.jpg" alt="responsive image slider" /></a>
                               
                            </div>
                            <div>
                                <a u="image" href="http://www.jssor.com/demos/image-slider.html"><img src="img/photography/005.jpg" alt="touch swipe image slider" /></a>
                               
                            </div>
                        </div>
        
                        <!-- Bullet Navigator Skin Begin -->
                        <!-- jssor slider bullet navigator skin 01 -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
                        </div>
                        <!-- Bullet Navigator Skin End -->
        
                        <!-- Arrow Navigator Skin Begin -->
                        <style>
                            /* jssor slider arrow navigator skin 02 css */
                            /*
                            .jssora02l              (normal)
                            .jssora02r              (normal)
                            .jssora02l:hover        (normal mouseover)
                            .jssora02r:hover        (normal mouseover)
                            .jssora02ldn            (mousedown)
                            .jssora02rdn            (mousedown)
                            */
                            .jssora02l, .jssora02r, .jssora02ldn, .jssora02rdn
                            {
            	                position: absolute;
            	                cursor: pointer;
            	                display: block;
                                background: url(img/a02.png) no-repeat;
                                overflow:hidden;
                            }
                            .jssora02l { background-position: -3px -33px; }
                            .jssora02r { background-position: -63px -33px; }
                            .jssora02l:hover { background-position: -123px -33px; }
                            .jssora02r:hover { background-position: -183px -33px; }
                            .jssora02ldn { background-position: -243px -33px; }
                            .jssora02rdn { background-position: -303px -33px; }
                        </style>
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora02l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora02r" style="width: 55px; height: 55px; top: 123px; right: 8px">
                        </span>
                        <!-- Arrow Navigator Skin End -->
        
                        <a style="display: none" href="http://www.jssor.com">javascript</a>
                    </div>
                    <!-- Jssor Slider End -->
                   
                    <div style="position: absolute; top: 110px; left: 640px; width: 320px; height: 250px;">
                                        </div>
                </div>
                <div>
                    <!-- Jssor Slider Begin -->
                    <!-- You can move inline styles to css file or css block. -->
                    <div id="slider2_container" style="position: relative; top: 30px; left: 360px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px; zoom: 1; filter: matrix">

                        <!-- Loading Screen -->
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                                top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
                            overflow: hidden;">
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-rotator.html"><img src="img/photography/002.jpg" alt="banner rotator" /></a>
                                
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-rotator.html"><img src="img/photography/003.jpg" alt="jquery banner rotator" /></a>
                               
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-rotator.html"><img src="img/photography/004.jpg" alt="responsive banner rotator" /></a>
                               
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-rotator.html"><img src="img/photography/005.jpg" alt="touch swipe banner rotator" /></a>
                               
                            </div>
                        </div>
        
                        <!-- Bullet Navigator Skin Begin -->
                        <!-- jssor slider bullet navigator skin 01 -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
                        </div>
                        <!-- Bullet Navigator Skin End -->
        
                        <!-- Arrow Navigator Skin Begin -->
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
                        </span>
                        <!-- Arrow Navigator Skin End -->
                        <a style="display: none" href="http://www.jssor.com">javascript</a>
                    </div>
                    <!-- Jssor Slider End -->
                    
                 

                    <div u="caption" t="ZM" t2="NO" style="position: absolute; top: 80px; left: 0px; width: 320px; height: 80px;">
                       
                       
                    </div>

                    

                    <div u="caption" t="B*IB" t2="NO" style="position: absolute; top: 260px; left: 0px; width: 320px; height: 80px;">
                       
                       
                        
                    </div>
                </div>
                <div>
                    <!-- Jssor Slider Begin -->
                    <!-- You can move inline styles to css file or css block. -->
                    <div id="slider3_container" style="position: relative; top: 90px; left: 360px; width: 600px;
                        height: 300px; overflow: hidden; border-radius: 8px;">

                        <!-- Loading Screen -->
                        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                                top: 0px; left: 0px;width: 100%;height:100%;">
                            </div>
                        </div>

                        <!-- Slides Container -->
                        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 600px; height: 300px;
                            overflow: hidden;">
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-slider.html"><img src="img/photography/002.jpg" alt="banner slider" /></a>
                               
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-slider.html"><img src="img/photography/003.jpg" alt="jquery banner slider" /></a>
                               
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-slider.html"><img src="img/photography/004.jpg" alt="responsive banner slider" /></a>
                                
                            </div>
                            <div>
                                <a u=image href="http://www.jssor.com/demos/banner-slider.html"><img src="img/photography/005.jpg" alt="touch swipe banner slider" /></a>
                               
                            </div>
                        </div>

                        <!-- ThumbnailNavigator Skin Begin -->
                        <div u="thumbnavigator" class="slider3-T" style="position: absolute; bottom: 0px; left: 0px; height:45px; width:600px;">
                            <div style="filter: alpha(opacity=40); opacity:0.4; position: absolute; display: block;
                                background-color: #000; top: 0px; left: 0px; width: 100%; height: 100%;">
                            </div>
                            <!-- Thumbnail Item Skin Begin -->
                            <div u="slides">
                                <div u="prototype" style="POSITION: absolute; WIDTH: 600px; HEIGHT: 45px; TOP: 0; LEFT: 0;">
                                    <thumbnailtemplate style="font-family: verdana; font-weight: normal; POSITION: absolute; WIDTH: 100%; HEIGHT: 100%; TOP: 0; LEFT: 0; color:#fff; line-height: 45px; font-size:20px; padding-left:10px;"></thumbnailtemplate>
                                </div>
                            </div>
                            <!-- Thumbnail Item Skin End -->
                        </div>
                        <!-- ThumbnailNavigator Skin End -->
        
                        <!-- Bullet Navigator Skin Begin -->
                        <!-- jssor slider bullet navigator skin 01 -->
                        <!-- bullet navigator container -->
                        <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
                            <!-- bullet navigator item prototype -->
                            <div u="prototype" style="POSITION: absolute; WIDTH: 12px; HEIGHT: 12px;"></div>
                        </div>
                        <!-- Bullet Navigator Skin End -->
                        
                        <!-- Arrow Navigator Skin Begin -->
                        <!-- Arrow Left -->
                        <span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 123px; left: 8px;">
                        </span>
                        <!-- Arrow Right -->
                        <span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 123px; right: 8px">
                        </span>
                        <!-- Arrow Navigator Skin End -->
                        <a style="display: none" href="http://www.jssor.com">javascript</a>
                    </div>
                    <!-- Jssor Slider End -->
                   
                

                    <div u="caption" t2="ZM" style="position: absolute; top: 120px; left: 0px; width: 320px; height: 120px;">
                                   
                       
                    </div>

                    <div u="caption" t="RTT|360" t2="NO" style="position: absolute; top: 290px; left: 0px; width: 320px; height: 80px;">
                                   
                        
                    </div>
                </div>
            </div> 
 
            <!-- Bullet Navigator Skin Begin -->
            <style>
                /* jssor slider bullet navigator skin 03 css */
                /*
                .jssorb03 div           (normal)
                .jssorb03 div:hover     (normal mouseover)
                .jssorb03 .av           (active)
                .jssorb03 .av:hover     (active mouseover)
                .jssorb03 .dn           (mousedown)
                */
                .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av
                {
                    background: url(../img/b03.png) no-repeat;
                    overflow:hidden;
                    cursor: pointer;
                }
                .jssorb03 div { background-position: -5px -4px; }
                .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
                .jssorb03 .av { background-position: -65px -4px; }
                .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
            </style>
            <!-- bullet navigator container -->
            <div u="navigator" class="jssorb03" style="position: absolute; bottom: 16px; left: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype" style="POSITION: absolute; WIDTH: 21px; HEIGHT: 21px; text-align:center; line-height:21px; color:White; font-size:12px;"><NumberTemplate></NumberTemplate></div>
            </div>
            <!-- Bullet Navigator Skin End -->
        
            <!-- Arrow Navigator Skin Begin -->
            <style>
                /* jssor slider arrow navigator skin 20 css */
                /*
                .jssora20l              (normal)
                .jssora20r              (normal)
                .jssora20l:hover        (normal mouseover)
                .jssora20r:hover        (normal mouseover)
                .jssora20ldn            (mousedown)
                .jssora20rdn            (mousedown)
                */
                .jssora20l, .jssora20r, .jssora20ldn, .jssora20rdn
                {
            	    position: absolute;
            	    cursor: pointer;
            	    display: block;
                    background: url(../img/a20.png) no-repeat;
                    overflow:hidden;
                }
                .jssora20l { background-position: -3px -33px; }
                .jssora20r { background-position: -63px -33px; }
                .jssora20l:hover { background-position: -123px -33px; }
                .jssora20r:hover { background-position: -183px -33px; }
                .jssora20ldn { background-position: -243px -33px; }
                .jssora20rdn { background-position: -303px -33px; }
            </style>
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora20l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora20r" style="width: 55px; height: 55px; top: 123px; right: 8px">
            </span>
            <!-- Arrow Navigator Skin End -->
            <a style="display: none" href="http://www.jssor.com">javascript</a>
        </div> 
        <!-- Jssor Slider End -->
    </div>
    
    
    
            
            
            
            </div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 object-non-visible" data-animation-effect="fadeIn">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center">About <span>Us</span></h1>
						<p class="lead text-center">KG College Of Arts and Science--MindBenders Association--Xianze Reloaded</p>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-6">
                            <iframe width="550" height="400" src="https://www.youtube.com/embed/HabmIA2xt30" frameborder="0" allowfullscreen></iframe>
								
								<div class="space"></div>
							</div>
                          <div class="col-md-6">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
													<center>KG COLLEGE OF ARTS AND SCIENCE</center>
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div align="justify" class="panel-body">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KG College of Arts and Science (KGCAS) was started in the year 2005 with the intent to provide quality education at the undergraduate level and post-graduate level, focusing primarily on meeting the talent requirements of the domestic and global IT and IT-enabled service providers. KG College of Arts and Science, an Institution sponsored by KG Information Systems Private Limited, is the perfect match to an Industry-Institute learning environment.  The KG College of Arts and Science is located on the KG Campus, a sprawling 40-acre campus, just 8 kms from city, which also houses the BPO, Software, Call Center operations of KGISL apart from co-location of its institute of higher learning.The placement opportunities start from the time you join such future-thinking programmes.							</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
													<center>MINDBENDERS ASSOCIATION</center>
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div align="justify" class="panel-body">
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mindbenders is a techno association holding the students from MSc Software Systems, MSc Computer Science and BSc Electronics and Communication System since 2011. The association has always been the pioneer in quelling challenges of the chosen fields through Research, Lectures, Self-Study, peers and faculty. “MINDBENDERS” organizes the technical symposium ‘XIANZE’ every year.
				
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThree">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
													<center>X!ANZE RELOADED</center>
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div align="justify" class="panel-body">
                                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xianze is back as “XIANZE RELOADED” which witnesses the tons of zest, spontaneity and innovation. Xianze is the annual techno fest of Mindbenders association in KG College of Arts and Science, Coimbatore. It is aimed at stimulating the youth to elevate aspirations, fight challenges and to achieve big. The objective is to showcase the dynamism of the youth today by providing them a platform to perform.
												
				
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		
		

		<!-- section start -->
		<!-- ================ -->
		<div class="default-bg space blue">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="text-center">PROUDLY PRESENTS !!!</h1>
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section">
			<div class="container">
				<h1 class="text-center title" >What others think</h1>
				<div id="portfolio" class="separator"></div>
					
				<div class="row object-non-visible" data-animation-effect="fadeIn">
					<div class="col-md-12">

						<!-- isotope filters start -->
						<div class="filters text-center">
							<ul class="nav nav-pills">
								<li class="active"><a href="#" data-filter="*">All</a></li>
								<li><a href="#" data-filter=".web-design">Kollywood-Actors</a></li>
								<li><a href="#" data-filter=".app-development">Bollywood-Actors</a></li>
								<li><a href="#" data-filter=".site-building">Sports</a></li>
							</ul>
						</div>
						<!-- isotope filters end -->

						<!-- portfolio items start -->
					  <div class="isotope-container row grid-space-20">
							<div class="col-sm-6 col-md-3 isotope-item web-design">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-1.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-1">
											<i class="fa fa-search-plus"></i>
											<span>GENERAL</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-1">Kollywood</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-1" tabindex="-1" role="dialog" aria-labelledby="project-1-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-1-label">Kollywood</h4>
											</div>
											<div class="modal-body">
												<h3>Madhavan</h3>
												<div class="row">
													<div class="col-md-6">
														<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The talented south actor has also decided to donate his organs after death. Madhavan has pledged to donate his eyes, heart, lungs, kidneys, liver, pancreas, bones and cartilages so that he can save the lives of others. </p>
                                                        

														
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-1.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
							</div>

							<div class="col-sm-6 col-md-3 isotope-item app-development">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-2.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-2">
											<i class="fa fa-search-plus"></i>
											<span>ENTERTAINMENT</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-2">Bollywood</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-2" tabindex="-1" role="dialog" aria-labelledby="project-2-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-2-label">Bollywood</h4>
											</div>
											<div class="modal-body">
											  <h3>Amitabh Bachchan</h3>
												<div class="row">
													<div class="col-md-6">
														<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Big B has taken a lot of social initiatives and this organ donation comes as another feather on his cap. It’s often said that charity begins from home, and the angry young man of Bollywood has set an example for many by donating his eyes. </p>
                                                        
                   								  </div>
													<div class="col-md-6">
														<img src="images/portfolio-2.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
						<div class="col-sm-6 col-md-3 isotope-item site-building">
								<div class="image-box">
									<div class="overlay-container">
										<img src="images/portfolio-4.jpg" alt="">
										<a class="overlay" data-toggle="modal" data-target="#project-4">
											<i class="fa fa-search-plus"></i>
											<span>TECHNICAL</span>
										</a>
									</div>
									<a class="btn btn-default btn-block" data-toggle="modal" data-target="#project-4">SPORTS</a>
								</div>
								<!-- Modal -->
								<div class="modal fade" id="project-4" tabindex="-1" role="dialog" aria-labelledby="project-4-label" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
												<h4 class="modal-title" id="project-4-label">Sports</h4>
											</div>
											<div class="modal-body">
												<h3>Anil kumble</h3>
												<div class="row">
													<div class="col-md-6">
														<p align="justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The former Indian cricketer has pledged to donate his eyes after death. He pointed out that there have been instances of family members who had denied donating organs of the dead donors, who’d earlier signed for the same. </p>
                                                        
													</div>
													<div class="col-md-6">
														<img src="images/portfolio-4.jpg" alt="">
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-sm btn-default" data-dismiss="modal">
close</button>
											</div>
										</div>
									</div>
								</div>
								<!-- Modal end -->
						  </div>
					  </div>
			</div>
		</div>
		<!-- section end -->

		<div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        <div class="space"></div>
        
       
	


		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">

			<!-- .footer start -->
			<!-- ================ -->
			<div class="footer section">
				<div class="container">
					<h1 class="title text-center" id="contact">Contact Us</h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-content">
								
								<ul class="list-icons">
									<li><i class="fa fa-map-marker pr-10"></i> <font color="#000066"> KG College of Arts and Science,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Saravanampatti,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Coimbatore, 641035.</font></li>
									<li><i class="fa fa-phone pr-10 "></i><font color="#000066">Vinoth.M : +91 9790301078</font></li>
									
									<li><i class="fa fa-envelope-o pr-10"></i><font color="#000066"> xianzereloaded@gmail.com</font></li>
								</ul>
								<ul class="social-links">
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
									<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
									<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
									<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<script type="text/javascript" src="http://www.webestools.com/google_map_gen.js?lati=11.083450&long=76.997202&zoom=16&width=500&height=350&mapType=normal&map_btn_normal=yes&map_btn_satelite=yes&map_btn_mixte=yes&map_small=yes&marqueur=yes&info_bulle="></script>
                                <script type="text/javascript"> 
      var myOptions = {
         zoom: 8,
         center: new google.maps.LatLng(51.49, -0.12),
         mapTypeId: google.maps.MapTypeId.ROADMAP
      };

      var map = new google.maps.Map(document.getElementById("map"), myOptions);
   </script> 
						</div>
					</div>
				</div>
			</div>
			<!-- .footer end -->

			<!-- .subfooter start -->
			<!-- ================ -->
			<div class="subfooter">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="text-center">Copyright © 2015 Hackathon by <a target="_blank" href="#">kgcas</a>.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
