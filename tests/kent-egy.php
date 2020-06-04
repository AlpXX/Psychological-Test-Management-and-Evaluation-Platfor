<?php
include '../includes/connect.php';
if(!isset($_SESSION["loggedin_patient"]) && $_SESSION["loggedin_patient"] !== true){
	header("location: register.php");
	exit;
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>KENT TEST</title>
	
	<style type="text/css">
		body, button {
			  font-family: Georgia,Times,"Times New Roman",serif
			}


			.container {
			  width: 30em;
			  margin: 4em auto;
			}

			.question {			  
			  margin-bottom: 0.1em;
			}
			.button {

			}
			.answers {
				padding: 18px 20px;
  				margin: 8px 0;
  				box-sizing: border-box;
  				border: 2px solid red;
  				border-radius: 4px;
  				width:100%;
			}
	</style>
</head>

<body>

	<h1 style="margin: 50px"><center>WELCOME, YOU CAN START THE TEST</center></h1>
	<form style="padding-bottom: 300px" action="../evaluation/kent-egy-evaluation.php" method="POST">
		<div class="container">
		  <div class="question">
		    <p>1.  What is used when building a house?</p>
		    Your answer:<br><br> 		    		   
		  </div>
		  <div class="options">
		  				<input class='answers' type="text" name="cevap1-1"> 
		    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p>2.  Where is the sand used?</p>
			Your answer:<br><br> 	    		   
		  </div>
		  <div class="options">
		  				<input class='answers' type="text" name="cevap2-1">	    
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p>3.  If a flag is waving to the south, from which side does the wind blow?</p>
			Your answer:<br><br> 	    		   	    		   
		  </div>
		  <div class="options">
					    <input class='answers' type="text" name="cevap3-1"> 	
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p>4.  Tell me the names of some bird</p>
			Your answer:<br><br> 	    		   
		  </div>
		  <div class="options">
		    			<input class='answers' type="text" name="cevap4-1">
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p>5.  At what time of day is your shadow shortest?</p>
			Your answer:<br><br> 	    		   	    		   
		  </div>
		  <div class="options">	
		 			    <input class='answers' type="text" name="cevap5-1"> 		    
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p>6.  Say the names of some big cities </p>
			Your answer:<br><br> 
		    		   
		  </div>
		  <div class="options">
		    <input class='answers' type="text" name="cevap6-1">
		  </div>
		  </div>
		  
		  <div class="container">
		  <div class="question">
		    <p>7.  Why does the moon appear larger than the stars?</p>
			Your answer:<br><br> 		    		    
		  </div>
		  <div class="options">
		  		<input class='answers' type="text" name="cevap7-1">
		   				 
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p>8.  Which mine does the magnet attract?</p>
			Your answer:<br><br> 		    		   	    		   
		  </div>
		  <div class="options">
		    			<input class='answers' type="text" name="cevap8-1">	
		  </div>
		  
		  <div class="container">
		  <div class="question">
		    <p>9.  If your shadow falls to the north east, what side is the sun on?</p>
			Your answer:<br><br> 	    		   		    		   
		  </div>
		  <div class="options">
		   				 <input class='answers' type="text" name="cevap9-1"> 
		  </div>
		  
		  <div class="container">
		  <div class="question">
		    <p>10.  How many ends does the star on the Turkish flag have?</p>
			Your answer:<br><br> 		    		   		    		   
		  <div class="options">
		    			<input class='answers' type="number" name="cevap10-1"> 
		  </div>
		  <br><br>

		  <input type="submit" name="complete_test" value="Complete Test" style="padding:5px" onclick="Message()">
		</form>
		<script>function Message(){
        alert("Test successfully completed.")}</script> 
</body>

</html>
