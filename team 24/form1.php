<!DOCTYPE html>
<?php
ini_set('display_errors','off');
include("config.php");
include "classes/class.phpmailer.php";
if(isset($_POST['submit']))
{
		$name = mysql_real_escape_string($_POST['name']);
		$gender = mysql_real_escape_string($_POST['gender']);
		$fathername = mysql_real_escape_string($_POST['fathername']);
		$dob = mysql_real_escape_string($_POST['dob']);
		$email = mysql_real_escape_string($_POST['email']);	
		$mobile = mysql_real_escape_string($_POST['mobile']);
		$address = mysql_real_escape_string($_POST['address']);
		$organ = mysql_real_escape_string($_POST['organ']);
		$nominee = mysql_real_escape_string($_POST['nominee']);
		$bloodgroup = mysql_real_escape_string($_POST['bloodgroup']);
		$city = mysql_real_escape_string($_POST['city']);
		$query1=mysql_query("INSERT INTO `donor` (`user_id`,`name`,`gender`,`fathername`,`dob`,`email`,`mobile`,`address`,`organ`,`nominee`,`bloodgroup`,`created_date`)
					VALUES(`user_id`,'$name','$gender','$fathername','$dob','$email','$mobile','$address','$organ','$nominee','$bloodgroup',now())" );
// for unique mobile number			
if($query1===FALSE)
{
	echo '<script type="text/javascript">';
	echo 'alert("Mobile Number Already Exists!!!" );';
	echo 'window.location.href="form1.php";';
    echo '</script>';
}							

if($query1)
{
	$qry="select user_id from donor where name='$name' and mobile='$mobile' and email='$email'";
$result=mysql_query($qry);
if($row=mysql_fetch_row($result));
{
$xianze='X2KF'.$row[0];

	echo '<script type="text/javascript">';
	echo 'alert("Your Unique ID is : '.$xianze.' Registration successful" );';
	echo 'window.location.href="form1.php";';
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
$mail->Body = "Hi $name. You have successfully registered to be a part of Recycle Yourself. This is your unique id &nbsp;&nbsp;$xianze. ";
$mail->AddAddress($email);
 if(!$mail->Send()){
	echo '<script type="text/javascript">';
	echo 'alert("Enter Valid Email Address" );';
	
    echo '</script>';
}
else{
	echo '<script type="text/javascript">';
	echo 'alert("Hi '.$name.', Check Your Inbox!!!" );';
	
    echo '</script>';
}
//End MAilling Function
	}
}

	


$msg="You Have Successfully Registered into Recycle Yourself";

echo $url="http://dnd.vtel.in/api/sentsms.php?username=vteldemo&api_password=f14578ed97&to=".$mobile."&priority=2&sender=Alerts&message=".$msg."";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, "");
$response = curl_exec($ch);
curl_close($ch);

//var_dump($response);
//header("location:form1.php");

echo "<script>'window.location=$url';</script>";
}
//
//include("form1.php");
?>
<html>
<head>
<title>Registration Form</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all"/>
   </head>
	<body>     
      <div  class="form">
	  <center>
	  <header>           
				<h1><center><b><font style="arial" size="5" >Registration Form for a donor</font></center></h1><b><br>
            </header>  
    		<form id="contactform" action="form1.php" method="post"> 
    			<table>
				<tr>
				<td><p class="contact"><label for="name">Name</label></p> </td>
				<td> </td>
    			<td><input id="name" name="name" placeholder="First and last name" required="" type="text"> </td>
</tr><td>			<p class="contact"><label for="gender">Gender</label></p> </td>
			<td> </td><td> <input type="radio" name="gender" value="male">Male
			 <input type="radio" name="gender" value="female">Female</td>
			</tr><td><p class="contact"><label for="fathername">Father Name</label></p> </td>
			<td> </td>
			<td><input  name="fathername" placeholder="Father Name" required="" type="text">   </td></tr>
           <tr><td><p class="contact"><label for="age">Date of Birth</label></p> </td>
			<td> </td><td><input  name="age" placeholder="DOB" required="" type="date">   </td></tr>
           <tr><td><p class="contact"><label for="mobile">Mobile No</label></p> </td>
		  <td> </td> <td><input id="mobile" name="mobile" maxlength="10" placeholder="Enter valid mobile number" required="" type="text"> <br></td></tr>
            <tr><td><p class="contact"><label for="email">Email</label></p> </td>
    			<td> </td><td><input id="email" name="email" placeholder="example@domain.com" required="" type="email">   </td>
             </tr><tr><td><p class="contact"><label for="address">Address</label></p> </td>
    			<td> </td><td><input id="address" name="address" placeholder="Address" required="" type="text">   </td></tr>
             <tr><td><p class="contact"><label for="organ">Wish to donate</label></p> </td></tr>
    			<tr><td></td><td><input type="checkbox" name="organ"  value="Eye" <?php if($organ=='Eye');?>  >
            Eye<br>
         <td><input type="checkbox" name="organ" value="Heart" <?php if($organ=='Heart');?> >
            Heart<br>
			<tr><td></td><td><input type="checkbox" name="organ"  value="Lung" <?php if($organ=='Lung');?>  >
            Lung<br>
         <td><input type="checkbox" name="organ" value="Liver" <?php if($organ=='Liver');?> >
            Liver<br>

			<tr><td></td><td><input type="checkbox" name="organ"  value="Kidney" <?php if($organ=='Kidney');?>  >
            Kidney<br>
         <td><input type="checkbox" name="organ" value="All" <?php if($organ=='All');?> >
            All<br>

		</td></tr>
            <tr><td> <p class="contact"><label for="nominee">Nominee</label></p> </td>
    			<td> </td><td><input id="nominee" name="nominee" placeholder="Nominee" required="" type="text">  </td>
				</tr>
             <tr><td><p class="contact"><label for="bloodgroup">Blood group</label></p> </td>
    			<td> </td><td><input id="bloodgroup" name="bloodgroup" placeholder="bloodgroup" required="" type="text">  		</td></tr>
			<tr><td></td><td></td><td><input class="buttom" name="submit" id="submit" tabindex="5" value="Register" type="submit"> 	 </td></tr>
   </form> 
</div>      
</div>
</body>
</html>