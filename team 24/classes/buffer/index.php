<!DOCTYPE html>
<?php
include("config.php");
if(isset($_POST['submit']))
{
		$name = mysql_real_escape_string($_POST['name']);
		$gender = mysql_real_escape_string($_POST['gender']);
		$college = mysql_real_escape_string($_POST['college']);
		$course = mysql_real_escape_string($_POST['course']);
		$email = mysql_real_escape_string($_POST['email']);	
		$mobile = mysql_real_escape_string($_POST['mobile']);	
		$query1=mysql_query("INSERT INTO `spot_reg` (`id`,`name`,`gender`,`college`,`course`,`email`,`mobile`,`created_date`)
					VALUES(`id`,'$name','$gender','$college','$course','$email','$mobile',now())")  or die(mysql_error());
if($query1)
{
	echo '<script type="text/javascript">alert("REGISTERED SUCCESSFULLY!!!" );</script>';
header("Refresh:10s;location:index.php");
}
else echo "error";
}
if(isset($_POST['search']))
{
	 $term = mysql_real_escape_string($_REQUEST['term']);    

$sql = "SELECT * FROM registration WHERE id LIKE '%".$term."%'";
$r_query = mysql_query($sql);
if ($q_row = mysql_fetch_array($r_query))
{
	echo '<script type="text/javascript">alert("~~~~~~~~~~NAME : '.$q_row['name'].'~~~~~~~~~~ ~~~~~~~~~~COLLEGE : '.$q_row['college'].'~~~~~~~~~~ ~~~~~~~~~~MOBILE : '.$q_row['mobile'].'~~~~~~~~~~" );</script>';

}
else
{
	echo '<script type="text/javascript">alert("XID NOT FOUND" );</script>';
}
}?>
<html>
<head>
<title>Spot Registration Form</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
</head>
<body>
<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <span class="right">
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				<h1><span></span>Spot Registration Form</h1>
                <div class="forms">
                <form  action="#" method="post"> 
                <input  type="text" name="term" placeholder="Enter ID"   />
	  <input class="buttom" name="search" id="submit" tabindex="5" value="Search" type="submit"> <br />
	  </form>
      </div>
            </header>       
      <div  class="form">
    		<form id="contactform" action="index.php" method="post"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
			<p class="contact"><label for="gender">Gender</label></p> 
			Male <input type="radio" name="gender" value="male">
			Female <input type="radio" name="gender" value="female"><br><br>
			<p class="contact"><label for="college">College Name</label></p> 
    			<input  name="college" placeholder="College Name" required="" type="text">   
           <p class="contact"><label for="course">Course Name</label></p> 
    			<input  name="course" placeholder="Course Name" required="" type="text">   
           
            <p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email">   
            
            <p class="contact"><label for="mobile" >Mobile No</label></p> 
            <input id="mobile" name="mobile" maxlength="10" placeholder="mobile number" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit"> 	 
   </form> 
</div>      
</div>

</body>
</html>
