<?php
include 'includes/connect.php';
$p_id = $_GET["variable10"];

if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
	header("location: index.php");
	exit;
  }

$result = mysqli_query($con, "SELECT * FROM kent where patient_id= '$p_id'");
$error=mysqli_error($con);
echo $error;


while($row = mysqli_fetch_array($result)){
  extract($row);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Kent Answer Sheet</title>

  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
   <style type="text/css">
  
  </style> 
</head>

<body>
  
  <?php
    include 'includes/header.php';
  ?>
  
  <?php
    include 'includes/sidebar.php';
  ?>
  <section id="content">

<div id="breadcrumbs-wrapper">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">KENT ANSWER SHEET</h5>
      </div>
    </div>
</div>

	<form style="padding-bottom: 300px" action="../evaluation/kent-egy-evaluation.php" method="POST">
		<div class="container">
		  <div class="question">
		  <p>1.  What is used when building a house?</p>
		    Your answer:<br><br> 		    		   
		  </div>
		  <div class="options">
		  				<input class='answers' type="text" name="cevap1-1" value="<?php echo $k_q1 ?>" readonly> 
		    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		  <p>2.  Where is the sand used?</p>
			Your answer:<br><br> 	    		   
		  </div>
		  <div class="options">
		  				<input class='answers' type="text" name="cevap2-1" value="<?php echo $k_q2 ?>" readonly>	    
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		  <p>3.  If a flag is waving to the south, from which side does the wind blow?</p>
			Your answer:<br><br> 	    		   	    		   
		  </div>
		  <div class="options">
					    <input class='answers' type="text" name="cevap3-1" value="<?php echo $k_q3 ?>" readonly> 	
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		  <p>4.  Tell me the names of some bird</p>
			Your answer:<br><br> 	    		   
		  </div>
		  <div class="options">
		    			<input class='answers' type="text" name="cevap4-1" value="<?php echo $k_q4 ?>" readonly>
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		  <p>5.  At what time of day is your shadow shortest?</p>
			Your answer:<br><br> 	    		   	    		   
		  </div>
		  <div class="options">	
		 			    <input class='answers' type="text" name="cevap5-1" value="<?php echo $k_q5 ?>" readonly> 		    
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		  <p>6.  Say the names of some big cities </p>
			Your answer:<br><br> 
		    		   
		  </div>
		  <div class="options">
		    <input class='answers' type="text" name="cevap6-1" value="<?php echo $k_q6 ?>" readonly>
		  </div>
		  </div>
		  
		  <div class="container">
		  <div class="question">
		  <p>7.  Why does the moon appear larger than the stars?</p>
			Your answer:<br><br> 		    		    
		  </div>
		  <div class="options">
		  		<input class='answers' type="text" name="cevap7-1" value="<?php echo $k_q7 ?>" readonly>
		   				 
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		  <p>8.  Which mine does the magnet attract?</p>
			Your answer:<br><br> 		    		   	    		   
		  </div>
		  <div class="options">
		    			<input class='answers' type="text" name="cevap8-1" value="<?php echo $k_q8 ?>" readonly>	
		  </div></div>
		  
		  <div class="container">
		  <div class="question">
		  <p>9.  If your shadow falls to the north east, what side is the sun on?</p>
			Your answer:<br><br> 	    		   		    		   
		  </div>
		  <div class="options">
		   				 <input class='answers' type="text" name="cevap9-1" value="<?php echo $k_q9 ?>" readonly> 
		  </div></div>
		  
		  <div class="container">
		  <div class="question">
		  <p>10.  How many ends does the star on the Turkish flag have?</p>
			Your answer:<br><br> 		    		   		    		   
		  <div class="options">
		    			<input class='answers' type="number" name="cevap10-1" value="<?php echo $k_q10 ?>" readonly> 
		  </div></div>
		  <br><br>

		</form>

<?php
    include 'includes/footer.php';
?>

    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
    
</body>

</html>