<?php
include 'includes/connect.php';
$p_id = $_GET["variable3"];
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
	header("location: index.php");
	exit;
  }

$result = mysqli_query($con, "SELECT * FROM mmpi where patient_id= '$p_id'");
$error=mysqli_error($con);
echo $error;


while($row = mysqli_fetch_array($result)){
  extract($row);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>MMPI Answer Sheet</title>

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
        <h5 class="breadcrumbs-title">MMPI ANSWER SHEET</h5>
      </div>
    </div>
</div>

<div class="answer-sheet">

<div class="container">
		  <div class="question">
		    <p> 1. I like technical writing</p>	    		    		   
		  </div>
		  <div class="options">
		      <?php 
		              
		              if ($answer1=="T"){	  				
				  			echo '<input type="radio" id="1t" name="answer1" value="T" checked="checked">
					  		<label for="1t" >T</label>
					  		<input type="radio" id="1f" name="answer1" value="F">
					  		<label for="1f">F</label>';
		              }
		              if ($answer1=="F"){	  				
		                echo '<input type="radio" id="1t" name="answer1" value="T" >
		                <label for="1t" >T</label>
		                <input type="radio" id="1f" name="answer1" value="F" checked="checked" >
		                <label for="1f" >F</label>';
		                }
		                if ($answer1=="E"){	  				
		                  echo '<input type="radio" id="1t" name="answer1" value="T" >
		                  <label for="1t" >T</label>
		                  <input type="radio" id="1f" name="answer1" value="F" >
		                  <label for="1f">F</label>';
		                  }
					?>					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 2. My appetite is good</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer2=="T"){	
		  				echo '<input type="radio" id="2t" name="answer2" value="T" checked="checked" readonly>
			  			<label for="2t">T</label>
			  			<input type="radio" id="2f" name="answer2" value="F" readonly>
              			<label for="2f">F</label>';
            } 
            if ($answer2=="F"){	
		  				echo '<input type="radio" id="2t" name="answer2" value="T" readonly>
			  			<label for="2t">T</label>
			  			<input type="radio" id="2f" name="answer2" value="F" checked="checked" readonly>
              			<label for="2f">F</label>';
            }  
            if ($answer2=="E"){	
		  				echo '<input type="radio" id="2t" name="answer2" value="T" readonly>
			  			<label for="2t">T</label>
			  			<input type="radio" id="2f" name="answer2" value="F" readonly >
              			<label for="2f">F</label>';
            }  
             
			?>		    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 3. Many times I wake up in the morning vigorously and rested</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer3=="T"){	
		  				echo '<input type="radio" id="3t" name="answer3" value="T" checked="checked" >
			  			<label for="3t" >T</label>
			  			<input type="radio" id="3f" name="answer3" value="F">
              			<label for="3f">F</label>';
            } 
            if ($answer3=="F"){	
		  				echo '<input type="radio" id="3t" name="answer3" value="T" >
			  			<label for="3t">T</label>
			  			<input type="radio" id="3f" name="answer3" value="F" checked="checked">
              			<label for="3f">F</label>';
            } 
            if ($answer3=="E"){	
		  				echo '<input type="radio" id="3t" name="answer3" value="T" >
			  			<label for="3t">T</label>
			  			<input type="radio" id="3f" name="answer3" value="F" >
              			<label for="3f">F</label>';
            } 
			  	?>					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 4. I think I will love working as a librarian</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer4=="T"){	
		  				echo '<input type="radio" id="4t" name="answer4" value="T" checked="checked">
			  			<label for="4t">T</label>
			  			<input type="radio" id="4f" name="answer4" value="F">
              			<label for="4f">F</label>';
            }
            if ($answer4=="F"){	
		  				echo '<input type="radio" id="4t" name="answer4" value="T">
			  			<label for="4t">T</label>
			  			<input type="radio" id="4f" name="answer4" value="F" checked="checked">
              			<label for="4f">F</label>';
            }
            if ($answer4=="E"){	
		  				echo '<input type="radio" id="4t" name="answer4" value="T">
			  			<label for="4t">T</label>
			  			<input type="radio" id="4f" name="answer4" value="F">
              			<label for="4f">F</label>';
            }

			  ?>					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 5. I wake up easily from noise</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer5=="T"){	
		  				echo '<input type="radio" id="5t" name="answer5" value="T" checked="checked">
			  			<label for="5t">T</label>
			  			<input type="radio" id="5f" name="answer5" value="F">
              			<label for="5f">F</label>';
            }
            if ($answer5=="F"){	
		  				echo '<input type="radio" id="5t" name="answer5" value="T">
			  			<label for="5t">T</label>
			  			<input type="radio" id="5f" name="answer5" value="F" checked="checked">
              			<label for="5f">F</label>';
            }
            if ($answer5=="E"){	
		  				echo '<input type="radio" id="5t" name="answer5" value="T">
			  			<label for="5t">T</label>
			  			<input type="radio" id="5f" name="answer5" value="F">
              			<label for="5f">F</label>';
            }
			  ?>					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 6. I like to read murder news</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer6=="T"){		
		  				echo '<input type="radio" id="6t" name="answer6" value="T" checked="checked">
			  			<label for="6t">T</label>
			  			<input type="radio" id="6f" name="answer6" value="F">
			  			<label for="6f">F</label>';
            }
            if ($answer6=="F"){		
		  				echo '<input type="radio" id="6t" name="answer6" value="T">
			  			<label for="6t">T</label>
			  			<input type="radio" id="6f" name="answer6" value="F" checked="checked">
			  			<label for="6f">F</label>';
            }		
            if ($answer6=="E"){		
		  				echo '<input type="radio" id="6t" name="answer6" value="T">
			  			<label for="6t">T</label>
			  			<input type="radio" id="6f" name="answer6" value="F">
			  			<label for="6f">F</label>';
            }				
            ?>	    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 7. Often the temperature of my hands and feet is good</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer7=="T"){		
		  				echo '<input type="radio" id="7t" name="answer7" value="T" checked="checked">
			  			<label for="7t">T</label>
			  			<input type="radio" id="7f" name="answer7" value="F">
			  			<label for="7f">F</label>';
            }
            if ($answer7=="F"){		
		  				echo '<input type="radio" id="7t" name="answer7" value="T">
			  			<label for="7t">T</label>
			  			<input type="radio" id="7f" name="answer7" value="F" checked="checked">
			  			<label for="7f">F</label>';
            }		
            if ($answer7=="E"){		
		  				echo '<input type="radio" id="7t" name="answer7" value="T">
			  			<label for="7t">T</label>
			  			<input type="radio" id="7f" name="answer7" value="F">
			  			<label for="7f">F</label>';
            }				
            ?>	    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 8. My daily life is full of things that interest me</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer8=="T"){		
		  				echo '<input type="radio" id="8t" name="answer8" value="T" checked="checked">
			  			<label for="8t">T</label>
			  			<input type="radio" id="8f" name="answer8" value="F">
			  			<label for="8f">F</label>';
            }
            if ($answer8=="F"){		
		  				echo '<input type="radio" id="8t" name="answer8" value="T">
			  			<label for="8t">T</label>
			  			<input type="radio" id="8f" name="answer8" value="F" checked="checked">
			  			<label for="8f">F</label>';
            }		
            if ($answer8=="E"){		
		  				echo '<input type="radio" id="8t" name="answer8" value="T">
			  			<label for="8t">T</label>
			  			<input type="radio" id="8f" name="answer8" value="F">
			  			<label for="8f">F</label>';
            }				
            ?>	    		     
		  </div>
		</div>



		<div class="container">
		  <div class="question">
		<p> 9. Today I can work almost as well as before</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer9=="T"){		
		  				echo '<input type="radio" id="9t" name="answer9" value="T" checked="checked">
			  			<label for="9t">T</label>
			  			<input type="radio" id="9f" name="answer9" value="F">
			  			<label for="9f">F</label>';
            }
            if ($answer9=="F"){		
		  				echo '<input type="radio" id="9t" name="answer9" value="T">
			  			<label for="9t">T</label>
			  			<input type="radio" id="9f" name="answer9" value="F" checked="checked">
			  			<label for="9f">F</label>';
            }		
            if ($answer9=="E"){		
		  				echo '<input type="radio" id="9t" name="answer9" value="T">
			  			<label for="9t">T</label>
			  			<input type="radio" id="9f" name="answer9" value="F">
			  			<label for="9f">F</label>';
            }				
            ?>	    		     
		  </div>
		</div>


		<div class="container">
		  <div class="question">
		<p> 10. Often my throat seems to be clogged</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer10=="T"){		
		  				echo '<input type="radio" id="10t" name="answer10" value="T" checked="checked">
			  			<label for="10t">T</label>
			  			<input type="radio" id="10f" name="answer10" value="F">
			  			<label for="10f">F</label>';
            }
            if ($answer10=="F"){		
		  				echo '<input type="radio" id="10t" name="answer10" value="T">
			  			<label for="10t">T</label>
			  			<input type="radio" id="10f" name="answer10" value="F" checked="checked">
			  			<label for="10f">F</label>';
            }		
            if ($answer10=="E"){		
		  				echo '<input type="radio" id="10t" name="answer10" value="T">
			  			<label for="10t">T</label>
			  			<input type="radio" id="10f" name="answer10" value="F">
			  			<label for="10f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 11. People should try to understand their dreams and adjust himself</p>	    
		  </div>
		  <div class="options">
      <?php
            if ($answer11=="T"){		
		  				echo '<input type="radio" id="11t" name="answer11" value="T" checked="checked">
			  			<label for="11t">T</label>
			  			<input type="radio" id="11f" name="answer11" value="F">
			  			<label for="11f">F</label>';
            }
            if ($answer11=="F"){		
		  				echo '<input type="radio" id="11t" name="answer11" value="T">
			  			<label for="11t">T</label>
			  			<input type="radio" id="11f" name="answer11" value="F" checked="checked">
			  			<label for="11f">F</label>';
            }		
            if ($answer11=="E"){		
		  				echo '<input type="radio" id="11t" name="answer11" value="T">
			  			<label for="11t">T</label>
			  			<input type="radio" id="11f" name="answer11" value="F">
			  			<label for="11f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 12. I like police novels or mysterious novels</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer12=="T"){		
		  				echo '<input type="radio" id="12t" name="answer12" value="T" checked="checked">
			  			<label for="12t">T</label>
			  			<input type="radio" id="12f" name="answer12" value="F">
			  			<label for="12f">F</label>';
            }
            if ($answer12=="F"){		
		  				echo '<input type="radio" id="12t" name="answer12" value="T">
			  			<label for="12t">T</label>
			  			<input type="radio" id="12f" name="answer12" value="F" checked="checked">
			  			<label for="12f">F</label>';
            }		
            if ($answer12=="E"){		
		  				echo '<input type="radio" id="12t" name="answer12" value="T">
			  			<label for="12t">T</label>
			  			<input type="radio" id="12f" name="answer12" value="F">
			  			<label for="12f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 13. I work with great nervous tension</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer13=="T"){		
		  				echo '<input type="radio" id="13t" name="answer13" value="T" checked="checked">
			  			<label for="13t">T</label>
			  			<input type="radio" id="13f" name="answer13" value="F">
			  			<label for="13f">F</label>';
            }
            if ($answer13=="F"){		
		  				echo '<input type="radio" id="13t" name="answer13" value="T">
			  			<label for="13t">T</label>
			  			<input type="radio" id="13f" name="answer13" value="F" checked="checked">
			  			<label for="13f">F</label>';
            }		
            if ($answer13=="E"){		
		  				echo '<input type="radio" id="13t" name="answer13" value="T">
			  			<label for="13t">T</label>
			  			<input type="radio" id="13f" name="answer13" value="F">
			  			<label for="13f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 14. I have diarrhea once or twice a month</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer14=="T"){		
		  				echo '<input type="radio" id="14t" name="answer14" value="T" checked="checked">
			  			<label for="14t">T</label>
			  			<input type="radio" id="14f" name="answer14" value="F">
			  			<label for="14f">F</label>';
            }
            if ($answer14=="F"){		
		  				echo '<input type="radio" id="14t" name="answer14" value="T">
			  			<label for="14t">T</label>
			  			<input type="radio" id="14f" name="answer14" value="F" checked="checked">
			  			<label for="14f">F</label>';
            }		
            if ($answer14=="E"){		
		  				echo '<input type="radio" id="14t" name="answer14" value="T">
			  			<label for="14t">T</label>
			  			<input type="radio" id="14f" name="answer14" value="F">
			  			<label for="14f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 15. From time to time, I think something too shameful to say</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer15=="T"){		
		  				echo '<input type="radio" id="15t" name="answer15" value="T" checked="checked">
			  			<label for="15t">T</label>
			  			<input type="radio" id="15f" name="answer15" value="F">
			  			<label for="15f">F</label>';
            }
            if ($answer15=="F"){		
		  				echo '<input type="radio" id="15t" name="answer15" value="T">
			  			<label for="15t">T</label>
			  			<input type="radio" id="15f" name="answer15" value="F" checked="checked">
			  			<label for="15f">F</label>';
            }		
            if ($answer15=="E"){		
		  				echo '<input type="radio" id="15t" name="answer15" value="T">
			  			<label for="15t">T</label>
			  			<input type="radio" id="15f" name="answer15" value="F">
			  			<label for="15f">F</label>';
            }				
            ?>	 
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 16. Evils in life always find me</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer16=="T"){		
		  				echo '<input type="radio" id="16t" name="answer16" value="T" checked="checked">
			  			<label for="16t">T</label>
			  			<input type="radio" id="16f" name="answer16" value="F">
			  			<label for="16f">F</label>';
            }
            if ($answer16=="F"){		
		  				echo '<input type="radio" id="16t" name="answer16" value="T">
			  			<label for="16t">T</label>
			  			<input type="radio" id="16f" name="answer16" value="F" checked="checked">
			  			<label for="16f">F</label>';
            }		
            if ($answer16=="E"){		
		  				echo '<input type="radio" id="16t" name="answer16" value="T">
			  			<label for="16t">T</label>
			  			<input type="radio" id="16f" name="answer16" value="F">
			  			<label for="16f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 17. My father is a good man</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer17=="T"){		
		  				echo '<input type="radio" id="17t" name="answer17" value="T" checked="checked">
			  			<label for="17t">T</label>
			  			<input type="radio" id="17f" name="answer17" value="F">
			  			<label for="17f">F</label>';
            }
            if ($answer17=="F"){		
		  				echo '<input type="radio" id="17t" name="answer17" value="T">
			  			<label for="17t">T</label>
			  			<input type="radio" id="17f" name="answer17" value="F" checked="checked">
			  			<label for="17f">F</label>';
            }		
            if ($answer17=="E"){		
		  				echo '<input type="radio" id="17t" name="answer17" value="T">
			  			<label for="17t">T</label>
			  			<input type="radio" id="17f" name="answer17" value="F">
			  			<label for="17f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 18. I rarely constipate</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer18=="T"){		
		  				echo '<input type="radio" id="18t" name="answer18" value="T" checked="checked">
			  			<label for="18t">T</label>
			  			<input type="radio" id="18f" name="answer18" value="F">
			  			<label for="18f">F</label>';
            }
            if ($answer18=="F"){		
		  				echo '<input type="radio" id="18t" name="answer18" value="T">
			  			<label for="18t">T</label>
			  			<input type="radio" id="18f" name="answer18" value="F" checked="checked">
			  			<label for="18f">F</label>';
            }		
            if ($answer18=="E"){		
		  				echo '<input type="radio" id="18t" name="answer18" value="T">
			  			<label for="18t">T</label>
			  			<input type="radio" id="18f" name="answer18" value="F">
			  			<label for="18f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 19. I would like to know who should be in the eye when entering a new job</p>		   
		  </div>
		  <div class="options">
      <?php
            if ($answer19=="T"){		
		  				echo '<input type="radio" id="19t" name="answer19" value="T" checked="checked">
			  			<label for="19t">T</label>
			  			<input type="radio" id="19f" name="answer19" value="F">
			  			<label for="19f">F</label>';
            }
            if ($answer19=="F"){		
		  				echo '<input type="radio" id="19t" name="answer19" value="T">
			  			<label for="19t">T</label>
			  			<input type="radio" id="19f" name="answer19" value="F" checked="checked">
			  			<label for="19f">F</label>';
            }		
            if ($answer19=="E"){		
		  				echo '<input type="radio" id="19t" name="answer19" value="T">
			  			<label for="19t">T</label>
			  			<input type="radio" id="19f" name="answer19" value="F">
			  			<label for="19f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 20. I am satisfied with my sexual life</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer20=="T"){		
		  				echo '<input type="radio" id="20t" name="answer20" value="T" checked="checked">
			  			<label for="20t">T</label>
			  			<input type="radio" id="20f" name="answer20" value="F">
			  			<label for="20f">F</label>';
            }
            if ($answer20=="F"){		
		  				echo '<input type="radio" id="20t" name="answer20" value="T">
			  			<label for="20t">T</label>
			  			<input type="radio" id="20f" name="answer20" value="F" checked="checked">
			  			<label for="20f">F</label>';
            }		
            if ($answer20=="E"){		
		  				echo '<input type="radio" id="20t" name="answer20" value="T">
			  			<label for="20t">T</label>
			  			<input type="radio" id="20f" name="answer20" value="F">
			  			<label for="20f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 21. From time to time I wanted to leave the house</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer21=="T"){		
		  				echo '<input type="radio" id="21t" name="answer21" value="T" checked="checked">
			  			<label for="21t">T</label>
			  			<input type="radio" id="21f" name="answer21" value="F">
			  			<label for="21f">F</label>';
            }
            if ($answer21=="F"){		
		  				echo '<input type="radio" id="21t" name="answer21" value="T">
			  			<label for="21t">T</label>
			  			<input type="radio" id="10f" name="answer21" value="F" checked="checked">
			  			<label for="21f">F</label>';
            }		
            if ($answer21=="E"){		
		  				echo '<input type="radio" id="21t" name="answer21" value="T">
			  			<label for="21t">T</label>
			  			<input type="radio" id="21f" name="answer21" value="F">
			  			<label for="21f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 22. From time to time, I have seizures of laughter and crying that I cannot control</p>	   
		  </div>
		  <div class="options">
      <?php
            if ($answer22=="T"){		
		  				echo '<input type="radio" id="22t" name="answer22" value="T" checked="checked">
			  			<label for="22t">T</label>
			  			<input type="radio" id="22f" name="answer22" value="F">
			  			<label for="22f">F</label>';
            }
            if ($answer22=="F"){		
		  				echo '<input type="radio" id="22t" name="answer22" value="T">
			  			<label for="22t">T</label>
			  			<input type="radio" id="22f" name="answer22" value="F" checked="checked">
			  			<label for="22f">F</label>';
            }		
            if ($answer22=="E"){		
		  				echo '<input type="radio" id="22t" name="answer22" value="T">
			  			<label for="22t">T</label>
			  			<input type="radio" id="22f" name="answer22" value="F">
			  			<label for="22f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 23. Repeated nausea and vomiting distress me</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer23=="T"){		
		  				echo '<input type="radio" id="23t" name="answer23" value="T" checked="checked">
			  			<label for="23t">T</label>
			  			<input type="radio" id="23f" name="answer23" value="F">
			  			<label for="23f">F</label>';
            }
            if ($answer23=="F"){		
		  				echo '<input type="radio" id="23t" name="answer23" value="T">
			  			<label for="23t">T</label>
			  			<input type="radio" id="23f" name="answer23" value="F" checked="checked">
			  			<label for="23f">F</label>';
            }		
            if ($answer23=="E"){		
		  				echo '<input type="radio" id="23t" name="answer23" value="T">
			  			<label for="23t">T</label>
			  			<input type="radio" id="23f" name="answer23" value="F">
			  			<label for="23f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 24. Nobody understands me</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer24=="T"){		
		  				echo '<input type="radio" id="24t" name="answer24" value="T" checked="checked">
			  			<label for="24t">T</label>
			  			<input type="radio" id="24f" name="answer24" value="F">
			  			<label for="24f">F</label>';
            }
            if ($answer24=="F"){		
		  				echo '<input type="radio" id="24t" name="answer24" value="T">
			  			<label for="24t">T</label>
			  			<input type="radio" id="24f" name="answer24" value="F" checked="checked">
			  			<label for="24f">F</label>';
            }		
            if ($answer24=="E"){		
		  				echo '<input type="radio" id="24t" name="answer24" value="T">
			  			<label for="24t">T</label>
			  			<input type="radio" id="24f" name="answer24" value="F">
			  			<label for="24f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 25. I want to be a singer</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer25=="T"){		
		  				echo '<input type="radio" id="25t" name="answer25" value="T" checked="checked">
			  			<label for="25t">T</label>
			  			<input type="radio" id="25f" name="answer25" value="F">
			  			<label for="25f">F</label>';
            }
            if ($answer25=="F"){		
		  				echo '<input type="radio" id="25t" name="answer25" value="T">
			  			<label for="25t">T</label>
			  			<input type="radio" id="25f" name="answer25" value="F" checked="checked">
			  			<label for="25f">F</label>';
            }		
            if ($answer25=="E"){		
		  				echo '<input type="radio" id="25t" name="answer25" value="T">
			  			<label for="25t">T</label>
			  			<input type="radio" id="25f" name="answer25" value="F">
			  			<label for="25f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 26. I prefer to keep quiet when I'm in trouble</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer26=="T"){		
		  				echo '<input type="radio" id="26t" name="answer26" value="T" checked="checked">
			  			<label for="26t">T</label>
			  			<input type="radio" id="f" name="answer26" value="F">
			  			<label for="26f">F</label>';
            }
            if ($answer26=="F"){		
		  				echo '<input type="radio" id="26t" name="answer26" value="T">
			  			<label for="26t">T</label>
			  			<input type="radio" id="26f" name="answer26" value="F" checked="checked">
			  			<label for="26f">F</label>';
            }		
            if ($answer26=="E"){		
		  				echo '<input type="radio" id="26t" name="answer26" value="T">
			  			<label for="26t">T</label>
			  			<input type="radio" id="26f" name="answer26" value="F">
			  			<label for="26f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 27. Sometimes I feel that evil spirits have affected me</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer27=="T"){		
		  				echo '<input type="radio" id="27t" name="answer27" value="T" checked="checked">
			  			<label for="27t">T</label>
			  			<input type="radio" id="27f" name="answer27" value="F">
			  			<label for="27f">F</label>';
            }
            if ($answer27=="F"){		
		  				echo '<input type="radio" id="27t" name="answer27" value="T">
			  			<label for="27t">T</label>
			  			<input type="radio" id="27f" name="answer27" value="F" checked="checked">
			  			<label for="27f">F</label>';
            }		
            if ($answer27=="E"){		
		  				echo '<input type="radio" id="27t" name="answer27" value="T">
			  			<label for="27t">T</label>
			  			<input type="radio" id="27f" name="answer27" value="F">
			  			<label for="27f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 28. It is my principle that I respond to evil with evil</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer28=="T"){		
		  				echo '<input type="radio" id="28t" name="answer28" value="T" checked="checked">
			  			<label for="28t">T</label>
			  			<input type="radio" id="28f" name="answer28" value="F">
			  			<label for="28f">F</label>';
            }
            if ($answer28=="F"){		
		  				echo '<input type="radio" id="28t" name="answer28" value="T">
			  			<label for="28t">T</label>
			  			<input type="radio" id="28f" name="answer28" value="F" checked="checked">
			  			<label for="28f">F</label>';
            }		
            if ($answer28=="E"){		
		  				echo '<input type="radio" id="28t" name="answer28" value="T">
			  			<label for="28t">T</label>
			  			<input type="radio" id="28f" name="answer28" value="F">
			  			<label for="28f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 29. Often my stomach is sour</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer29=="T"){		
		  				echo '<input type="radio" id="29t" name="answer29" value="T" checked="checked">
			  			<label for="29t">T</label>
			  			<input type="radio" id="29f" name="answer29" value="F">
			  			<label for="29f">F</label>';
            }
            if ($answer29=="F"){		
		  				echo '<input type="radio" id="29t" name="answer29" value="T">
			  			<label for="29t">T</label>
			  			<input type="radio" id="29f" name="answer29" value="F" checked="checked">
			  			<label for="29f">F</label>';
            }		
            if ($answer29=="E"){		
		  				echo '<input type="radio" id="29t" name="answer29" value="T">
			  			<label for="29t">T</label>
			  			<input type="radio" id="29f" name="answer29" value="F">
			  			<label for="29f">F</label>';
            }				
            ?>
			</div></div>
            <div class="container">
		  <div class="question">
		<p> 30. Sometimes I want to swear</p>	    		    		   
		  </div>
		  <div class="options">
      <?php
            if ($answer30=="T"){		
		  				echo '<input type="radio" id="30t" name="answer30" value="T" checked="checked">
			  			<label for="30t">T</label>
			  			<input type="radio" id="30f" name="answer30" value="F">
			  			<label for="30f">F</label>';
            }
            if ($answer30=="F"){		
		  				echo '<input type="radio" id="30t" name="answer30" value="T">
			  			<label for="30t">T</label>
			  			<input type="radio" id="30f" name="answer30" value="F" checked="checked">
			  			<label for="30f">F</label>';
            }		
            if ($answer30=="E"){		
		  				echo '<input type="radio" id="30t" name="answer30" value="T">
			  			<label for="30t">T</label>
			  			<input type="radio" id="30f" name="answer30" value="F">
			  			<label for="30f">F</label>';
            }				
            ?>

			</div></div>
			<br><br><br><br><br>   		     
		  </div>
		</div>
		  
 </div>


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