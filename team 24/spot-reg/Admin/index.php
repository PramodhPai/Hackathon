<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html>

<html>

    <head>
<link rel="shortcut icon" type="image/x-icon" href="images/logo_title.png" />
        <meta charset="utf-8" />

        <title>LOGIN FORM</title>

        

        <!-- Our CSS stylesheet file -->

        <link rel="stylesheet" href="styles.css" />

        

        <!--[if lt IE 9]>

          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

        <![endif]-->

    </head>

    

<body>
<div id="print" style="position:absolute; top : 20px; left:1225px; ">
<a href="../index.php"><input type=button value='Reg-Form'style=" background: #4b8df9; display: inline-block; padding: 5px 10px 6px; color: #fbf7f7; text-decoration: none; font-weight: bold; line-height: 1; -moz-border-radius: 5px; -webkit-border-radius: 5px; border-radius: 5px; -moz-box-shadow: 0 1px 3px #999; -webkit-box-shadow: 0 1px 3px #999; box-shadow: 0 1px 3px #999; text-shadow: 0 -1px 1px #222; border: none; position: relative; cursor: pointer; font-size: 14px; font-family:Verdana, Geneva, sans-serif;"></a> 
</div>
<div style="margin:0 auto; width:300px; padding-left: 32px; margin-top:50px;">
	<?php
if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
echo '<ul class="err">';
foreach($_SESSION['ERRMSG_ARR'] as $msg) {
echo '<li>',$msg,'</li>';
}
echo '</ul>';
unset($_SESSION['ERRMSG_ARR']);
}
$remark=1;
if($remark=='success')
{
echo '<ul>';
echo '<li>'." Registration Success You can now login ".'</li>';
echo '</ul>';
}
?>
</div>


		<div id="formContainer">

			<form id="login" method="post" action="login.php">

				<a href="#" id="flipToRecover" class="flipLink">Forgot?</a>

				<input type="text" name="username" id="loginUser" placeholder="Username" />

				<input type="password" name="password" id="loginPass" placeholder="Passcode" />

				<input type="submit" name="submit" value="Login" />

			</form>

			<form id="recover" method="post" action="register.php">

				<a href="#" id="flipToLogin" class="flipLink">Forgot?</a>
				<input type="text" name="adminpass" id="loginUser" placeholder="Admin Password" style="top: 138px;" />
				<input type="text" name="regusername" id="loginEmail" placeholder="Username" />
				<input type="password" name="regpassword" id="recoverEmail" placeholder="Password" />

				<input type="submit" name="submit" value="Save" />

			</form>

		</div>



    <!-- JavaScript includes -->

	<script src="jquery-1.7.1.min.js"></script>

		<script src="script.js"></script>


    

</body>

</html>



