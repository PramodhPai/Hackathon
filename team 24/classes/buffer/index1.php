<!DOCTYPE html>
<?php
ini_set('display_errors','off');
include("config.php");
 $term = mysql_real_escape_string($_REQUEST['term']);    

$sql = "SELECT * FROM registration WHERE id LIKE '%".$term."%'";
$r_query = mysql_query($sql);
if ($row = mysql_fetch_array($r_query))
{
echo '<div id="log"  style="position:fixed; top : 200px; left:550px;">';
echo '<br />---- ITEM AVAILABLE IN DSS---- ';
echo '<br /> ';
echo '<br /> ';
echo '<br /> ITEM-ID: ' .$row['name'];
echo '<br /> '; 
echo '<br /> ITEM : '.$row['gender']; 
echo '<br /> ';
echo '<br /> PRICE : '.$row['college'];
echo '<br /> ';
echo '<br /> ITEM-ID: ' .$row['course'];
echo '<br /> ';
echo '<br /> ITEM-ID: ' .$row['email'];
echo '<br /> '; 
echo '<br /> ITEM-ID: ' .$row['mobile'];
echo '<br /> '; 
echo '<br /> ';  
echo '</div>';
  }
  else
  {
echo '<div id="log"  style="position:fixed; top : 200px; left:500px;">';
echo '<br />';
echo '<br />';
echo '<br /> ';
echo'<br /> ----SORRY!!!  INVALID ITEM----';
echo '</div>';
  
  }



if(isset($_POST['submit']))
{
		$name = mysql_real_escape_string($_POST['name']);
		$gender = mysql_real_escape_string($_POST['gender']);
		$college = mysql_real_escape_string($_POST['college']);
		$course = mysql_real_escape_string($_POST['course']);
		$email = mysql_real_escape_string($_POST['email']);	
		$mobile = mysql_real_escape_string($_POST['mobile']);	
		$query1=mysql_query("INSERT INTO `registration` (`id`,`name`,`gender`,`college`,`course`,`email`,`mobile`,`created_date`)
					VALUES(`id`,'$name','$gender','$college','$course','$email','$mobile',now())")  or die(mysql_error());
if($query1)
{
	$qry="select id from registration where name='$name' and mobile='$mobile' and email='$email'";
$result=mysql_query($qry);
if($row=mysql_fetch_row($result));
$xianze='X2KF'.$row[0];

	echo '<script type="text/javascript">alert("Your Unique ID is : '.$xianze.' Please Save the ID" );</script>';
header("Refresh:10s;location:index.php");
}
//echo '<br /> YOUR ID :'.$row[0];
}

?>
<html>
<head>
<title>Registration Form</title>
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
				<h1><span></span>Registration Conformation Form</h1>
            </header>       
      <div  class="form">
    		<form id="contactform" action="index.php" method="post"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
			<p class="contact"><label for="gender" >Gender</label></p> 
			Male <input type="radio" name="gender" value="male">
			Female <input type="radio" name="gender" value="female"><br><br>
			<p class="contact"><label for="college">College Name</label></p> 
    			<input  name="college" placeholder="College Name" required="" type="text">   
           <p class="contact"><label for="course">Course</label></p> 
    			<input  name="course" placeholder="Course Name" required="" type="text">   
           
            <p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email">   
            
            <p class="contact"><label for="mobile" >Mobile No</label></p> 
            <input id="mobile" name="mobile" maxlength="10" placeholder="mobile number" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="REGISTER" type="submit"> 	 
   </form> 
</div>      
</div>

</body>
</html>
