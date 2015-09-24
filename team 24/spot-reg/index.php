<!DOCTYPE html>
<?php
ini_set('display_errors','off');
include("config.php");
if(isset($_POST['submit']))
{
		$name = mysql_real_escape_string($_POST['name']);
		$gender = mysql_real_escape_string($_POST['gender']);
		$college = mysql_real_escape_string($_POST['college']);
		$course = mysql_real_escape_string($_POST['course']);
		$email = mysql_real_escape_string($_POST['email']);	
		$mobile = mysql_real_escape_string($_POST['mobile']);	
		$query1=mysql_query("INSERT INTO `spot_entry` (`id`,`name`,`gender`,`college`,`course`,`email`,`mobile`,`created_date`)
					VALUES(`id`,'$name','$gender','$college','$course','$email','$mobile',now())" );
// for unique mobile number										
if($query1===FALSE)
{
echo '<script type="text/javascript">alert("Mobile Number Already Exists!!!" );</script>';
}
}
//Genertaing Id
if($query1)
{
	$qry="select id from spot_entry where name='$name' and mobile='$mobile' and email='$email'";
$result=mysql_query($qry);
if($row=mysql_fetch_row($result));
{
$xianze='X2KF'.$row[0];

	echo '<script type="text/javascript">alert("Your Unique ID is : '.$xianze.'" );</script>';
}
}
//Searching Process
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
	echo '<script type="text/javascript">alert("XID NOT REGISTERED" );</script>';
}
}

//Inserting Process
if(isset($_POST['insert']))
{
 $term = mysql_real_escape_string($_REQUEST['term']);    
	 $sql = "SELECT * FROM registration WHERE id LIKE '%".$term."%'";
     $r_query = mysql_query($sql);
if ($q_row = mysql_fetch_array($r_query))
 {
	$insert=mysql_query("insert into spot_search(id,name,gender,college,course,email,mobile,created_date) select id,name,gender,college,course,email,mobile,created_date from registration where id='$term'");
if($insert===TRUE)
  {
		echo '<script type="text/javascript">alert("REGISTRATION SUCCESSFUL" );</script>';
  }
if($insert===FALSE)
  {
		echo '<script type="text/javascript">alert("Details alrady Exists" );</script>';
  }
 }
else 
 {
	echo '<script type="text/javascript">alert("Enter Vaild XID" );</script>'; 
 } 

}

	//Dump----conform table
$conform1=mysql_query("INSERT INTO conform SELECT * FROM spot_entry where id not in(select id from conform)");
$conform2=mysql_query("INSERT INTO conform SELECT * FROM spot_search where id not in(select id from conform)");
	//End----coform table
?>
<html>
<head>
<title>Spot Registration Form</title>
<link rel="shortcut icon" type="image/x-icon" href="images/logo_title.png" />
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
            <div align="right">
            <form  action="Admin/index.php" method="post">
            <input class="buttom" 
            style=" background: #4b8df9; display: inline-block; padding: 5px 10px 6px; color: #fbf7f7; text-decoration: none; font-weight: bold; line-height: 1; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; -moz-box-shadow: 0 1px 3px #999; -webkit-box-shadow: 0 1px 3px #999; box-shadow: 0 1px 3px #999; text-shadow: 0 -1px 1px #222; border: none; position: relative; cursor: pointer; font-size: 14px; font-family:Verdana, Geneva, sans-serif;" 
            id="submit" value="Admin" type="submit"> 	 
   </form> 
   </div>
            
				<h1><span></span>Spot Registration Form</h1>
                <div class="forms">
                <form  action="#" method="post"> 
                <input  type="text" name="term" placeholder="Enter ID"   />
	  <input class="buttom" name="search" id="submit" tabindex="5" value="SEARCH" type="submit">
      <input class="buttom" name="insert" id="submit" tabindex="5" value="ADD" type="submit"> <br />
	  </form>
      </div>
            </header>       
      <div  class="form">
    		<form id="contactform" action="index.php" method="post"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" type="text"> 
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
            <input id="mobile" name="mobile" maxlength="10" placeholder="Enter Unique mobile number" required="" type="text"> <br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Register" type="submit"> 	 
   </form> 
</div>      
</div>

</body>
</html>
