<!DOCTYPE html>
<?php
ini_set('display_errors','off');
include("config.php");
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
		$description = mysql_real_escape_string($_POST['description']);
		$query1=mysql_query("INSERT INTO `receiver` (`rid`,`name`,`gender`,`fathername`,`dob`,`email`,`mobile`,`address`,`organ`,`nominee`,`bloodgroup`,`description`,`created_date`,`status`)
					VALUES(`rid`,'$name','$gender','$fathername','$dob','$email','$mobile','$address','$organ','$nominee','$bloodgroup','description',now(),status)" );
// for unique mobile number										
if($query1)
{
	echo "<script>"; 
	echo "alert('Registered successfully')";
echo "</script>";
	}}
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
				<h1><center><b><font style="arial" size="5" >Registration Form for a Receiver</font></center></h1><b><br>
            </header>  
    		<form id="contactform" action="form2.php" method="post"> 
    			<table>
				<tr>
				<td><p class="contact"><label for="name">Name</label></p> </td>
				<td> </td>
    			<td><input id="name" name="name" placeholder="First and last name" required type="text"> </td>
</tr><td>			<p class="contact"><label for="gender">Gender</label></p> </td>
			<td> </td><td> <input type="radio" name="gender" value="male">Male
			 <input type="radio" name="gender" value="female">Female</td>
			</tr><td><p class="contact"><label for="fathername">Father Name</label></p> </td>
			<td> </td>
			<td><input  name="fathername" placeholder="Father Name" required type="text">   </td></tr>
           <tr><td><p class="contact"><label for="age">Date of Birth</label></p> </td>
			<td> </td><td><input  name="age" placeholder="DOB" required type="date">   </td></tr>
           <tr><td><p class="contact"><label for="mobile">Mobile No</label></p> </td>
		  <td> </td> <td><input id="mobile" name="mobile" maxlength="10" placeholder="Enter valid mobile number" required type="text"> <br></td></tr>
            <tr><td><p class="contact"><label for="email">Email</label></p> </td>
    			<td> </td><td><input id="email" name="email" placeholder="example@domain.com" required type="email">   </td>
             </tr><tr><td><p class="contact"><label for="address">Address</label></p> </td>
    			<td> </td><td><input id="address" name="address" placeholder="Address" required type="text">   </td></tr>
             <tr><td><p class="contact"><label for="organ">Organ needed</label></p> </td>
<td></td><td><select name="organ" >
			 <option value="select">Select</option>
			 <option value="Eye">Eye</option>
			 <option value="Heart">Heart</option>
			 <option value="Lung">Lung</option>
			 <option value="Liver">Liver</option>
			 <option value="Kidney">Kidney</option>
			 <option value="All">All</option></select></td></tr>
            <tr><td> <p class="contact"><label for="nominee">Nominee</label></p> </td>
    			<td> </td><td><input id="nominee" name="nominee" placeholder="Nominee" required type="text">  </td>
				</tr>
             <tr><td><p class="contact"><label for="bloodgroup">Blood group</label></p> </td>
    			<td> </td><td><input id="bloodgroup" name="bloodgroup" placeholder="bloodgroup" required type="text">  		</td></tr>
			<tr><td><p class="contact"><label for="Description">Description</label></p> </td>
    			<td> </td><td><input id="Description" name="Description" placeholder="Description" required type="text">  		</td></tr>

			<tr><td></td><td></td><td><input class="buttom" name="submit" id="submit" tabindex="5" value="Register" type="submit"> 	 </td></tr>
   </form> 
</div>      
</div>
</body>
</html>