<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('config.php');
   

    //fetch department names from the department table
   
    $sql = "SELECT ITEM FROM `search`";
	 $result = mysql_query($sql);
    $dname_list = array();
    while($row = mysql_fetch_array($result))
    {
        $dname_list[] = $row['ITEM'];
    }
    echo json_encode($dname_list);
?>
</body>
</html>