<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
$name=$_GET['name'];
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
$sql = mysql_query( "INSERT INTO registration (name,Dateofbirth, Gender, Address, PhoneNumber,Emailid,BloodGroup,Nominee,NomineeContactdetails,NomineeAddress,Nomineeemailaddress,Donate)
       VALUES ( '$name', '$name', '$name','$name','$name','$name','$name','$name','$name','$name','$name','$name' )",$conn);

mysql_select_db('donor');
if($sql )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
?>
</body>
</html>
