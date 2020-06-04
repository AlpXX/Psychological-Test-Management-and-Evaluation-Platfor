
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Logout</title>
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection"> 
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>
<body class="cyan">
<div class="input-field col s12 center">
<p class="center login-form-text" style="color:white">You have succesfully logged out!</p>
<a href="register.php" class="center login-form-text" style="color:black"> <h6>Click here to sign up for another patient.<h6/></a>

<?php
  session_start();
	session_destroy();    
?>

</div>
</div>