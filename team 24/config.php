<?php
$dbname = 'user';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';
mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to database");
mysql_select_db("organ");?>