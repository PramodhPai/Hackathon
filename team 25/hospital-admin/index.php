<?php
session_start();
  if(isset($_SESSION['user'])!=null)
  {
      echo "<script>window.location.href='dashboard.php';</script>";
  }
  if(isset($_POST['signin'])) 
  {
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    include "db.php";
    $select=mysqli_query($con, "SELECT * FROM partners");
    $login_success=0;
    while($row=mysqli_fetch_array($select))
    {
        $dbemail=$row['email'];
        $dbpass=$row['pass'];

        if($dbemail==$email && $dbpass==$pass)
        {
          $login_success=1;
          $_SESSION['user']=$dbemail;
          echo "<script>window.location.href='dashboard.php';<script>";
        }
    }    
      echo "<script>alert('Username/Password is Wrong. Try Again!.');</script>";
      echo "<script>window.location.href='index.php';</script>";

  }


  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title> Partners Admin Panel Login</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="index2.html"><b>ORGAN</b>+</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="" method="post">
          <div class="form-group has-feedback">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="pass" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">

            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="signin" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
