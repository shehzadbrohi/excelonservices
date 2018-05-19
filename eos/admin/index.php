<?php    session_start(); 
  include 'myclasses/myclasses.php';   
  $obj = new eos(); 
    $obj->con(); 
    ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login - Excel On Services </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

 
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" method="post">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" placeholder="User ID" autofocus name="txtu">
            <input type="password" class="form-control" placeholder="Password" name="txtp">
         
            <button class="btn btn-lg btn-login btn-block" type="submit"  name="btn">Sign in</button>
    
        </div>

     

      </form>
<?php 
    if (isset($_POST['btn'])) {
//login
      $obj->login($_POST['txtu'],md5($_POST['txtp']));
    }
   ?>
    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
