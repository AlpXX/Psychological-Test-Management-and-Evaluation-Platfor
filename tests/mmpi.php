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
	<title>MMPI-1 TEST</title>
	
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
			.instruction {
                font-family: Georgia,Times,"Times New Roman",serif;
                line-height: 250%;
                text-align: center;
                font-size: 16px;
                font-weight: bold;
            }

    </style>
</head>

<body>

<h1 style="margin: 50px"><center>WELCOME, YOU CAN START THE TEST</center></h1>
    <p class="instruction">
        On this page, you will find some numbered questions in order. Read each question and decide whether it is RIGHT OR WRONG ACCORDING TO YOUR SITUATION. Please mark the answer to each question according to your decision. If your answer to the question is correct according to your situation or most of the time, please tick "T" option. If you think the answer to the question is not correct or generally not match according to your situation, please tick the "F" option. If the question does not suit your situation or you do not know anything about it, do not put any marks on the answer. Do not forget that you will report your own opinion about yourself. If possible, try to answer all questions.
    </p>
	
	<form style="padding-bottom: 300px" action="../evaluation/mmpi-evaluation.php" method="POST">
		<div class="container">
		  <div class="question">
		    <p> 1. I like technical writing</p>	    		    		   
		  </div>
		  <div class="options">	
		  				<input type="hidden" id="1e" name="answer1" value="E" checked>	  				
		  				<input type="radio" id="1t" name="answer1" value="T">
			  			<label for="1t">T</label>
			  			<input type="radio" id="1f" name="answer1" value="F">
			  			<label for="1f">F</label>
			  			
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 2. My appetite is good</p>	    		    		   
		  </div>
		  <div class="options">
		  				<input type="hidden" id="2e" name="answer2" value="E" checked>
		  				<input type="radio" id="2t" name="answer2" value="T">
			  			<label for="2t">T</label>
			  			<input type="radio" id="2f" name="answer2" value="F">
			  			<label for="2f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 3. Many times I wake up in the morning vigorously and rested</p>	    		    		   
		  </div>
		  <div class="options">
		  				<input type="hidden" id="3e" name="answer3" value="E" checked>
		  				<input type="radio" id="3t" name="answer3" value="T">
			  			<label for="3t">T</label>
			  			<input type="radio" id="3f" name="answer3" value="F">
			  			<label for="3f">F</label>
			  						    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 4. I think I will love working as a librarian</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="4e" name="answer4" value="E" checked>
		  				<input type="radio" id="4t" name="answer4" value="T">
			  			<label for="4t">T</label>
			  			<input type="radio" id="4f" name="answer4" value="F">
			  			<label for="4f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 5. I wake up easily from noise</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="5e" name="answer5" value="E" checked>
		  				<input type="radio" id="5t" name="answer5" value="T">
			  			<label for="5t">T</label>
			  			<input type="radio" id="5f" name="answer5" value="F">
			  			<label for="5t">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 6. I like to read murder news</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="6e" name="answer6" value="E" checked>	
		  				<input type="radio" id="6t" name="answer6" value="T">
			  			<label for="6t">T</label>
			  			<input type="radio" id="6f" name="answer6" value="F">
			  			<label for="6t">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 7. Often the temperature of my hands and feet is good</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="7e" name="answer7" value="E" checked>
		  				<input type="radio" id="7t" name="answer7" value="T">
			  			<label for="7t">T</label>
			  			<input type="radio" id="7f" name="answer7" value="F">
			  			<label for="7t">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 8. My daily life is full of things that interest me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="8e" name="answer8" value="E" checked>
		  				<input type="radio" id="8t" name="answer8" value="T">
			  			<label for="8t">T</label>
			  			<input type="radio" id="8f" name="answer8" value="F">
			  			<label for="8t">F</label>
			  						    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 9. Today I can work almost as well as before</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="9e" name="answer9" value="E" checked>	
		  				<input type="radio" id="9t" name="answer9" value="T">
			  			<label for="9t">T</label>
			  			<input type="radio" id="9f" name="answer9" value="F">
			  			<label for="9t">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 10. Often my throat seems to be clogged</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="10e" name="answer10" value="E" checked>
		  				<input type="radio" id="10t" name="answer10" value="T">
			  			<label for="10t">T</label>
			  			<input type="radio" id="10f" name="answer10" value="F">
			  			<label for="10t">F</label>
			  						    		     
		  </div>
		</div>
		<div class="container">
		  <div class="question">
		    <p> 11. People should try to understand their dreams and adjust himself</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="11e" name="answer11" value="E" checked>
		  				<input type="radio" id="11t" name="answer11" value="T">
			  			<label for="11t">T</label>
			  			<input type="radio" id="11f" name="answer11" value="F">
			  			<label for="11t">F</label>
			  			

		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 12. I like police novels or mysterious novels</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="12e" name="answer12" value="E" checked>
		  				<input type="radio" id="12t" name="answer12" value="T">
			  			<label for="12t">T</label>
			  			<input type="radio" id="12f" name="answer12" value="F">
			  			<label for="12t">F</label>	
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 13. I work with great nervous tension</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="13e" name="answer13" value="E" checked>
		  				<input type="radio" id="13t" name="answer13" value="T">
			  			<label for="13t">T</label>
			  			<input type="radio" id="13f" name="answer13" value="F">
			  			<label for="13t">F</label>	
			  			

		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 14. I have diarrhea once or twice a month</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="14e" name="answer14" value="E" checked>
		  				<input type="radio" id="14t" name="answer14" value="T">
			  			<label for="14t">T</label>
			  			<input type="radio" id="14f" name="answer14" value="F">
			  			<label for="14t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 15. From time to time, I think something too shameful to say</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="15e" name="answer15" value="E" checked>
		  				<input type="radio" id="15t" name="answer15" value="T">
			  			<label for="15t">T</label>
			  			<input type="radio" id="15f" name="answer15" value="F">
			  			<label for="15t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 16. Evils in life always find me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="16e" name="answer16" value="E" checked>
		  				<input type="radio" id="16t" name="answer16" value="T">
			  			<label for="16t">T</label>
			  			<input type="radio" id="16f" name="answer16" value="F">
			  			<label for="16t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 17. My father is a good man</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="17e" name="answer17" value="E" checked>
		  				<input type="radio" id="17t" name="answer17" value="T">
			  			<label for="17t">T</label>
			  			<input type="radio" id="17f" name="answer17" value="F">
			  			<label for="17t">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 18. I rarely constipate</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="18e" name="answer18" value="E" checked>
		  				<input type="radio" id="18t" name="answer18" value="T">
			  			<label for="18t">T</label>
			  			<input type="radio" id="18f" name="answer18" value="F">
			  			<label for="18t">F</label>		   
			  			 		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 19. I would like to know who should be in the eye when entering a new job</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="19e" name="answer19" value="E" checked>
		  				<input type="radio" id="19t" name="answer19" value="T">
			  			<label for="19t">T</label>
			  			<input type="radio" id="19f" name="answer19" value="F">
			  			<label for="19t">F</label>
			  			 		    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 20. I am satisfied with my sexual life</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="20e" name="answer20" value="E" checked>
		  				<input type="radio" id="20t" name="answer20" value="T">
			  			<label for="20t">T</label>
			  			<input type="radio" id="20f" name="answer20" value="F">
			  			<label for="20t">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 21. From time to time I wanted to leave the house</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="21e" name="answer21" value="E" checked>
		  				<input type="radio" id="21t" name="answer21" value="T">
			  			<label for="21t">T</label>
			  			<input type="radio" id="21f" name="answer21" value="F">
			  			<label for="21t">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 22. From time to time, I have seizures of laughter and crying that I cannot control</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="22e" name="answer22" value="E" checked>
		  				<input type="radio" id="22t" name="answer22" value="T">
			  			<label for="22t">T</label>
			  			<input type="radio" id="22f" name="answer22" value="F">
			  			<label for="22t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 23. Repeated nausea and vomiting distress me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="23e" name="answer23" value="E" checked>
		  				<input type="radio" id="23t" name="answer23" value="T">
			  			<label for="23t">T</label>
			  			<input type="radio" id="23f" name="answer23" value="F">
			  			<label for="23t">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 24. Nobody understands me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="24e" name="answer24" value="E" checked>
		  				<input type="radio" id="24t" name="answer24" value="T">
			  			<label for="24t">T</label>
			  			<input type="radio" id="24f" name="answer24" value="F">
			  			<label for="24t">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 25. I want to be a singer</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="25e" name="answer25" value="E" checked>
		  				<input type="radio" id="25t" name="answer25" value="T">
			  			<label for="25t">T</label>
			  			<input type="radio" id="25f" name="answer25" value="F">
			  			<label for="25t">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 26. I prefer to keep quiet when I'm in trouble</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="26e" name="answer26" value="E" checked>
		  				<input type="radio" id="26t" name="answer26" value="T">
			  			<label for="26t">T</label>
			  			<input type="radio" id="26f" name="answer26" value="F">
			  			<label for="26t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 27. Sometimes I feel that evil spirits have affected me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="27e" name="answer27" value="E" checked>
		  				<input type="radio" id="27t" name="answer27" value="T">
			  			<label for="27t">T</label>
			  			<input type="radio" id="27f" name="answer27" value="F">
			  			<label for="27t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 28. It is my principle that I respond to evil with evil</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="28e" name="answer28" value="E" checked>
		  				<input type="radio" id="28t" name="answer28" value="T">
			  			<label for="28t">T</label>
			  			<input type="radio" id="28f" name="answer28" value="F">
			  			<label for="28t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 29. Often my stomach is sour</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="29e" name="answer29" value="E" checked>
		  				<input type="radio" id="29t" name="answer29" value="T">
			  			<label for="29t">T</label>
			  			<input type="radio" id="29f" name="answer29" value="F">
			  			<label for="29t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 30. Sometimes I want to swear</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="30e" name="answer30" value="E" checked>
		  				<input type="radio" id="30t" name="answer30" value="T">
			  			<label for="30t">T</label>
			  			<input type="radio" id="30f" name="answer30" value="F">
			  			<label for="30t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 31. I often have nightmares at night</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="31e" name="answer31" value="E" checked>
		  				<input type="radio" id="31t" name="answer31" value="T">
			  			<label for="31t">T</label>
			  			<input type="radio" id="31f" name="answer31" value="F">
			  			<label for="31t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 32. I find it difficult to concentrate my mind on a job</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="32e" name="answer32" value="E" checked>
		  				<input type="radio" id="32t" name="answer32" value="T">
			  			<label for="32t">T</label>
			  			<input type="radio" id="32f" name="answer32" value="F">
			  			<label for="32t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 33. Very strange and weird things have happened to me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="33e" name="answer33" value="E" checked>
		  				<input type="radio" id="33t" name="answer33" value="T">
			  			<label for="33t">T</label>
			  			<input type="radio" id="33f" name="answer33" value="F">
			  			<label for="33t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 34. I have a cough most of the time</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="34e" name="answer34" value="E" checked>
		  				<input type="radio" id="34t" name="answer34" value="T">
			  			<label for="34t">T</label>
			  			<input type="radio" id="34f" name="answer34" value="F">
			  			<label for="34t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 35. I would be more successful if others didn't prevent</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="35e" name="answer35" value="E" checked>
		  				<input type="radio" id="35t" name="answer35" value="T">
			  			<label for="35t">T</label>
			  			<input type="radio" id="35f" name="answer35" value="F">
			  			<label for="35t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 36. My health doesn't worry me much</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="36e" name="answer36" value="E" checked>
		  				<input type="radio" id="36t" name="answer36" value="T">
			  			<label for="36t">T</label>
			  			<input type="radio" id="36f" name="answer36" value="F">
			  			<label for="36t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 37. I never got into trouble because of my sexual life</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="37e" name="answer37" value="E" checked>
		  				<input type="radio" id="37t" name="answer37" value="T">
			  			<label for="37t">T</label>
			  			<input type="radio" id="37f" name="answer37" value="F">
			  			<label for="37t">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 38. When I was a teenager, I stole a little bit</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="38e" name="answer38" value="E" checked>
		  				<input type="radio" id="38t" name="answer38" value="T">
			  			<label for="38t">T</label>
			  			<input type="radio" id="38f" name="answer38" value="F">
			  			<label for="38t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 39. Sometimes I want to break something </p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="39e" name="answer39" value="E" checked>
		  				<input type="radio" id="39t" name="answer39" value="T">
			  			<label for="39t">T</label>
			  			<input type="radio" id="39f" name="answer39" value="F">
			  			<label for="39t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 40. I like sitting and dreaming most of the time, rather than doing anything else</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="40e" name="answer40" value="E" checked>
		  				<input type="radio" id="40t" name="answer40" value="T">
			  			<label for="40t">T</label>
			  			<input type="radio" id="40f" name="answer40" value="F">
			  			<label for="40t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 41. Since I couldn't recover myself, I wouldn't do anything for days, weeks or even months</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="41e" name="answer41" value="E" checked>
		  				<input type="radio" id="41t" name="answer41" value="T">
			  			<label for="41t">T</label>
			  			<input type="radio" id="41f" name="answer41" value="F">
			  			<label for="41t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 42. My family does not like the profession I chose or want to choose</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="42e" name="answer42" value="E" checked>
		  				<input type="radio" id="42t" name="answer42" value="T">
			  			<label for="42t">T</label>
			  			<input type="radio" id="42" name="answer42" value="F">
			  			<label for="42t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 43. I sleep suspiciously and uncomfortably</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="43e" name="answer43" value="E" checked>
		  				<input type="radio" id="43t" name="answer43" value="T">
			  			<label for="43t">T</label>
			  			<input type="radio" id="43f" name="answer43" value="F">
			  			<label for="43t">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 44. Often all over my head hurts</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="44e" name="answer44" value="E" checked>	
		  				<input type="radio" id="44t" name="answer44" value="T">
			  			<label for="44t">T</label>
			  			<input type="radio" id="44f" name="answer44" value="F">
			  			<label for="44t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 45. I don't always tell the truth</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="45e" name="answer45" value="E" checked>
		  				<input type="radio" id="45t" name="answer45" value="T">
			  			<label for="45t">T</label>
			  			<input type="radio" id="45f" name="answer45" value="F">
			  			<label for="45t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 46. Now I can think and measure better than ever</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="46e" name="answer46" value="E" checked>
		  				<input type="radio" id="46t" name="answer46" value="T">
			  			<label for="46t">T</label>
			  			<input type="radio" id="46f" name="answer46" value="F">
			  			<label for="46t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 47. When there is no reason in the middle, every once a week or more, all of a sudden</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="47e" name="answer47" value="E" checked>
		  				<input type="radio" id="47t" name="answer47" value="T">
			  			<label for="47t">T</label>
			  			<input type="radio" id="47f" name="answer47" value="F">
			  			<label for="47t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 48. I feel uncomfortable when something strange happens while I'm with others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="48e" name="answer48" value="E" checked>
		  				<input type="radio" id="48t" name="answer48" value="T">
			  			<label for="48t">T</label>
			  			<input type="radio" id="48f" name="answer48" value="F">
			  			<label for="48t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 49. It would be better if almost all of the laws were abolished</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="49e" name="answer49" value="E" checked>
		  				<input type="radio" id="49t" name="answer49" value="T">
			  			<label for="49t">T</label>
			  			<input type="radio" id="49f" name="answer49" value="F">
			  			<label for="49t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 50. Sometimes my soul leaves my body</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="50e" name="answer50" value="E" checked>
		  				<input type="radio" id="50t" name="answer50" value="T">
			  			<label for="50t">T</label>
			  			<input type="radio" id="50f" name="answer50" value="F">
			  			<label for="50t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 51. My health is as good as many of my friends</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="51e" name="answer51" value="E" checked>
		  				<input type="radio" id="51t" name="answer51" value="T">
			  			<label for="51t">T</label>
			  			<input type="radio" id="51f" name="answer51" value="F">
			  			<label for="51t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 52. If my schoolmates or acquaintances I have not seen for a long time do not speak to me first, I prefer to ignore them.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="52e" name="answer52" value="E" checked>
		  				<input type="radio" id="52t" name="answer52" value="T">
			  			<label for="52t">T</label>
			  			<input type="radio" id="52f" name="answer52" value="F">
			  			<label for="52t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 53. Prayers pray heal the disease</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="53e" name="answer53" value="E" checked>
		  				<input type="radio" id="53t" name="answer53" value="T">
			  			<label for="53t">T</label>
			  			<input type="radio" id="53f" name="answer53" value="F">
			  			<label for="53t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 54. Most of the people I know love me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="54e" name="answer54" value="E" checked>
		  				<input type="radio" id="54t" name="answer54" value="T">
			  			<label for="54t">T</label>
			  			<input type="radio" id="54f" name="answer54" value="F">
			  			<label for="54t">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 55. I have almost no complaints of heart and chest pain</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="55e" name="answer55" value="E" checked>
		  				<input type="radio" id="55t" name="answer55" value="T">
			  			<label for="55t">T</label>
			  			<input type="radio" id="55f" name="answer55" value="F">
			  			<label for="55t">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 56. I was punished once or twice for fleeing school as a child</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="56e" name="answer56" value="E" checked>
		  				<input type="radio" id="56t" name="answer56" value="T">
			  			<label for="56t">T</label>
			  			<input type="radio" id="56f" name="answer56" value="F">
			  			<label for="56t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 57. I quickly sincere with people</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="57e" name="answer57" value="E" checked>
		  				<input type="radio" id="57t" name="answer57" value="T">
			  			<label for="57t">T</label>
			  			<input type="radio" id="57f" name="answer57" value="F">
			  			<label for="57f">F</label>
			  			

		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 58. Things are happening which commanded in the Qur'an</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="58e" name="answer58" value="E" checked>
		  				<input type="radio" id="58t" name="answer58" value="T">
			  			<label for="58t">T</label>
			  			<input type="radio" id="58f" name="answer58" value="F">
			  			<label for="58f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 59. Many times I had to work by taking orders from those who knew less than me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="59e" name="answer59" value="E" checked>
		  				<input type="radio" id="59t" name="answer59" value="T">
			  			<label for="59t">T</label>
			  			<input type="radio" id="59f" name="answer59" value="F">
			  			<label for="59f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 60. I don't read the editorials of the newspapers every day</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="60e" name="answer60" value="E" checked>
		  				<input type="radio" id="60t" name="answer60" value="T">
			  			<label for="60t">T</label>
			  			<input type="radio" id="60f" name="answer60" value="F">
			  			<label for="60f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 61. I couldn't live a life as needed</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="61e" name="answer61" value="E" checked>
		  				<input type="radio" id="61t" name="answer61" value="T">
			  			<label for="61t">T</label>
			  			<input type="radio" id="61f" name="answer61" value="F">
			  			<label for="61f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 62. I feel a lot of burning, tickling, tingling, or numbness in some parts of my body</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="62e" name="answer62" value="E" checked>
		  				<input type="radio" id="62t" name="answer62" value="T">
			  			<label for="62t">T</label>
			  			<input type="radio" id="62f" name="answer62" value="F">
			  			<label for="62f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 63. Having no difficulty making or holding a big ablution</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="63e" name="answer63" value="E" checked>
		  				<input type="radio" id="63t" name="answer63" value="T">
			  			<label for="63t">T</label>
			  			<input type="radio" id="63f" name="answer63" value="F">
			  			<label for="63f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 64. Sometimes I get stuck with something enough to exhaust others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="64e" name="answer64" value="E" checked>
		  				<input type="radio" id="64t" name="answer64" value="T">
			  			<label for="64t">T</label>
			  			<input type="radio" id="64f" name="answer64" value="F">
			  			<label for="64f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 65. I love my dad</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="65e" name="answer65" value="E" checked>
		  				<input type="radio" id="65t" name="answer65" value="T">
			  			<label for="65t">T</label>
			  			<input type="radio" id="65f" name="answer65" value="F">
			  			<label for="65f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 66. I see things, animals or people around me that nobody else sees</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="66e" name="answer66" value="E" checked>
		  				<input type="radio" id="66t" name="answer66" value="T">
			  			<label for="66t">T</label>
			  			<input type="radio" id="66f" name="answer66" value="F">
			  			<label for="66f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 67. I would like to be as happy as others look happy</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="67e" name="answer67" value="E" checked>
		  				<input type="radio" id="67t" name="answer67" value="T">
			  			<label for="67t">T</label>
			  			<input type="radio" id="67f" name="answer67" value="F">
			  			<label for="67f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 68. I rarely feel pain in my nape</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="68e" name="answer68" value="E" checked>
		  				<input type="radio" id="68t" name="answer68" value="T">
			  			<label for="68t">T</label>
			  			<input type="radio" id="68f" name="answer68" value="F">
			  			<label for="68f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 69. I find my own breed very attractive</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="69e" name="answer69" value="E" checked>
		  				<input type="radio" id="69t" name="answer69" value="T">
			  			<label for="69t">T</label>
			  			<input type="radio" id="69f" name="answer69" value="F">
			  			<label for="69f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 70. I liked the game of "Körebe"</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="70e" name="answer70" value="E" checked>
		  				<input type="radio" id="70t" name="answer70" value="T">
			  			<label for="70t">T</label>
			  			<input type="radio" id="70f" name="answer70" value="F">
			  			<label for="70f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 71. Many people overestimate their misfortune to provide other people's interests and help.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="71e" name="answer71" value="E" checked>
		  				<input type="radio" id="71t" name="answer71" value="T">
			  			<label for="71t">T</label>
			  			<input type="radio" id="71f" name="answer71" value="F">
			  			<label for="71f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 72. I feel uncomfortable with stomach pains almost every day</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="72e" name="answer72" value="E" checked>
		  				<input type="radio" id="72t" name="answer72" value="T">
			  			<label for="72t">T</label>
			  			<input type="radio" id="72f" name="answer72" value="F">
			  			<label for="72f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 73. I am an important person</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="73e" name="answer73" value="E" checked>
		  				<input type="radio" id="73t" name="answer73" value="T">
			  			<label for="73t">T</label>
			  			<input type="radio" id="73f" name="answer73" value="F">
			  			<label for="73f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 74. I would love to be a girl most of the time (If you are a girl) I never felt sorry for being a girl</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="74e" name="answer74" value="E" checked>
		  				<input type="radio" id="74t" name="answer74" value="T">
			  			<label for="74t">T</label>
			  			<input type="radio" id="74f" name="answer74" value="F">
			  			<label for="74f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 75. I get angry from time to time</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="75e" name="answer75" value="E" checked>
		  				<input type="radio" id="75t" name="answer75" value="T">
			  			<label for="75t">T</label>
			  			<input type="radio" id="75f" name="answer75" value="F">
			  			<label for="75f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 76. Most of the time I feel sad</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="76e" name="answer76" value="E" checked>
		  				<input type="radio" id="76t" name="answer76" value="T">
			  			<label for="76t">T</label>
			  			<input type="radio" id="76f" name="answer76" value="F">
			  			<label for="76f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 77. I like to read romance novels</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="77e" name="answer77" value="E" checked>
		  				<input type="radio" id="77t" name="answer77" value="T">
			  			<label for="77t">T</label>
			  			<input type="radio" id="77f" name="answer77" value="F">
			  			<label for="77f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 78. I like poetry</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="78e" name="answer78" value="E" checked>
		  				<input type="radio" id="78t" name="answer78" value="T">
			  			<label for="78t">T</label>
			  			<input type="radio" id="78f" name="answer78" value="F">
			  			<label for="78f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 79. I don't get hurt easily</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="79e" name="answer79" value="E" checked>
		  				<input type="radio" id="79t" name="answer79" value="T">
			  			<label for="79t">T</label>
			  			<input type="radio" id="79f" name="answer79" value="F">
			  			<label for="79f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 80. Sometimes I don't give animals comfort</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="80e" name="answer80" value="E" checked>
		  				<input type="radio" id="80t" name="answer80" value="T">
			  			<label for="80t">T</label>
			  			<input type="radio" id="80f" name="answer80" value="F">
			  			<label for="80f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		<p> 81. I think I will like things like forest watchman</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="81e" name="answer81" value="E" checked>
		  				<input type="radio" id="81t" name="answer81" value="T">
			  			<label for="81t">T</label>
			  			<input type="radio" id="81f" name="answer81" value="F">
			  			<label for="81f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 82. I get defeated quickly in discussions</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="82e" name="answer82" value="E" checked>
		  				<input type="radio" id="82t" name="answer82" value="T">
			  			<label for="82t">T</label>
			  			<input type="radio" id="82f" name="answer82" value="F">
			  			<label for="82f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 83. The person who can work hard or want to work has a high chance of success.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="83e" name="answer83" value="E" checked>
		  				<input type="radio" id="83t" name="answer83" value="T">
			  			<label for="83t">T</label>
			  			<input type="radio" id="83f" name="answer83" value="F">
			  			<label for="83f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 84. I feel like I have no hope of progress anymore these days</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="84e" name="answer84" value="E" checked>
		  				<input type="radio" id="84t" name="answer84" value="T">
			  			<label for="84t">T</label>
			  			<input type="radio" id="84f" name="answer84" value="F">
			  			<label for="84f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 85. Even if I do not use it, sometimes I like others items, such as shoes and gloves, so much that I would like to touch and overshoot</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="85e" name="answer85" value="E" checked>
		  				<input type="radio" id="85t" name="answer85" value="T">
			  			<label for="85t">T</label>
			  			<input type="radio" id="85f" name="answer85" value="F">
			  			<label for="85f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 86. I have no confidence in myself</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="86e" name="answer86" value="E" checked>
		  				<input type="radio" id="86t" name="answer86" value="T">
			  			<label for="86t">T</label>
			  			<input type="radio" id="86f" name="answer86" value="F">
			  			<label for="86f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 87. I would like to be a flower seller</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="87e" name="answer87" value="E" checked>
		  				<input type="radio" id="87t" name="answer87" value="T">
			  			<label for="87t">T</label>
			  			<input type="radio" id="87f" name="answer87" value="F">
			  			<label for="87f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 88. In general, I think that life is worth living</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="88e" name="answer88" value="E" checked>
		  				<input type="radio" id="88t" name="answer88" value="T">
			  			<label for="88t">T</label>
			  			<input type="radio" id="88f" name="answer88" value="F">
			  			<label for="88f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 89. It is difficult to make people accept the truth</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="89e" name="answer89" value="E" checked>
		  				<input type="radio" id="89t" name="answer89" value="T">
			  			<label for="89t">T</label>
			  			<input type="radio" id="89f" name="answer89" value="F">
			  			<label for="89f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 90. Sometimes I leave the things I have to do today</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="90e" name="answer90" value="E" checked>
		  				<input type="radio" id="90t" name="answer90" value="T">
			  			<label for="90t">T</label>
			  			<input type="radio" id="90f" name="answer90" value="F">
			  			<label for="90f">F</label>
			  					    		     
		  </div>
		</div>
		<div class="container">
		  <div class="question">
		    <p> 91. I don't mind being mocked with me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="91e" name="answer91" value="E" checked>
		  				<input type="radio" id="91t" name="answer91" value="T">
			  			<label for="91t">T</label>
			  			<input type="radio" id="91f" name="answer91" value="F">
			  			<label for="91f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 92. I would like to be a nurse</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="92e" name="answer92" value="E" checked>
		  				<input type="radio" id="92t" name="answer92" value="T">
			  			<label for="92t">T</label>
			  			<input type="radio" id="92f" name="answer92" value="F">
			  			<label for="92f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 93. Many people are not afraid to lie to rise</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="93e" name="answer93" value="E" checked>
		  				<input type="radio" id="93t" name="answer93" value="T">
			  			<label for="93t">T</label>
			  			<input type="radio" id="93f" name="answer93" value="F">
			  			<label for="93f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 94. I'll do a lot of things that I regret later</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="94e" name="answer94" value="E" checked>
		  				<input type="radio" id="94t" name="answer94" value="T">
			  			<label for="94t">T</label>
			  			<input type="radio" id="94f" name="answer94" value="F">
			  			<label for="94f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 95. I perform my prayers almost regularly</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="95e" name="answer95" value="E" checked>
		  				<input type="radio" id="95t" name="answer95" value="T">
			  			<label for="95t">T</label>
			  			<input type="radio" id="95f" name="answer95" value="F">
			  			<label for="95f">F</label>

			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 96. I fight with my family very little</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="96e" name="answer96" value="E" checked>
		  				<input type="radio" id="96t" name="answer96" value="T">
			  			<label for="96t">T</label>
			  			<input type="radio" id="96f" name="answer96" value="F">
			  			<label for="96f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 97. Sometimes I have a strong desire to do harmful or bad things</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="97e" name="answer97" value="E" checked>
		  				<input type="radio" id="97t" name="answer97" value="T">
			  			<label for="97t">T</label>
			  			<input type="radio" id="97f" name="answer97" value="F">
			  			<label for="97f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 98. I believe in doomsday</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="98e" name="answer98" value="E" checked>
		  				<input type="radio" id="98t" name="answer98" value="T">
			  			<label for="98t">T</label>
			  			<input type="radio" id="98f" name="answer98" value="F">
			  			<label for="98f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 99. I like to participate in noisy entertainment</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="99e" name="answer99" value="E" checked>
		  				<input type="radio" id="99t" name="answer99" value="T">
			  			<label for="99t">T</label>
			  			<input type="radio" id="99f" name="answer99" value="F">
			  			<label for="99f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 100. If someone talks silly or ignorant about something I know, I'll correct him/her right away</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="100e" name="answer100" value="E" checked>
		  				<input type="radio" id="100t" name="answer100" value="T">
			  			<label for="100t">T</label>
			  			<input type="radio" id="100f" name="answer100" value="F">
			  			<label for="100f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 101. I think women should be free as much as men</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="101e" name="answer101" value="E" checked>
		  				<input type="radio" id="101t" name="answer101" value="T">
			  			<label for="101t">T</label>
			  			<input type="radio" id="101f" name="answer101" value="F">
			  			<label for="101f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 102. I do my biggest struggle with myself</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="102e" name="answer102" value="E" checked>
		  				<input type="radio" id="102t" name="answer102" value="T">
			  			<label for="102t">T</label>
			  			<input type="radio" id="102f" name="answer102" value="F">
			  			<label for="102f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 103. I have little twitching and contractions in my body</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="103e" name="answer103" value="E" checked>
		  				<input type="radio" id="103t" name="answer103" value="T">
			  			<label for="103t">T</label>
			  			<input type="radio" id="103f" name="answer103" value="F">
			  			<label for="103f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 104. I don't care whatever happens to me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="104e" name="answer104" value="E" checked>
		  				<input type="radio" id="104t" name="answer104" value="T">
			  			<label for="104t">T</label>
			  			<input type="radio" id="104f" name="answer104" value="F">
			  			<label for="104f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 105. When I am not in good mood, I have a bad temper</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="105e" name="answer105" value="E" checked>
		  				<input type="radio" id="105t" name="answer105" value="T">
			  			<label for="105t">T</label>
			  			<input type="radio" id="105f" name="answer105" value="F">
			  			<label for="105f">F</label>
			  						    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 106. Often I am afraid that I made a big mistake.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="106e" name="answer106" value="E" checked>
		  				<input type="radio" id="106t" name="answer106" value="T">
			  			<label for="106t">T</label>
			  			<input type="radio" id="106f" name="answer106" value="F">
			  			<label for="106f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 107. I'm happy most of the time</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="107e" name="answer107" value="E" checked>
		  				<input type="radio" id="107t" name="answer107" value="T">
			  			<label for="107t">T</label>
			  			<input type="radio" id="107f" name="answer107" value="F">
			  			<label for="107f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 108. Often it seems to me that my head is swollen or my nose is blocked</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="108e" name="answer108" value="E" checked>
		  				<input type="radio" id="108t" name="answer108" value="T">
			  			<label for="108t">T</label>
			  			<input type="radio" id="108f" name="answer108" value="F">
			  			<label for="108f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 109. Some people act so harshly that even if they are right, it is the opposite of what they say.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="109e" name="answer109" value="E" checked>
		  				<input type="radio" id="109t" name="answer109" value="T">
			  			<label for="109t">T</label>
			  			<input type="radio" id="109f" name="answer109" value="F">
			  			<label for="109f">F</label>
			  						    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 110. There is someone who wants to wicked me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="110e" name="answer110" value="E" checked>
		  				<input type="radio" id="110t" name="answer110" value="T">
			  			<label for="110t">T</label>
			  			<input type="radio" id="110f" name="answer110" value="F">
			  			<label for="110f">F</label>
			  					    		     
		  </div>
		</div>
		<div class="container">
		  <div class="question">
		    <p> 111. I didn't start a dangerous job just to get excited</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="111e" name="answer111" value="E" checked>
		  				<input type="radio" id="111t" name="answer111" value="T">
			  			<label for="111t">T</label>
			  			<input type="radio" id="111f" name="answer111" value="F">
			  			<label for="111f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 112. I often have to resist for the things I know right</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="112e" name="answer112" value="E" checked>
		  				<input type="radio" id="112t" name="answer112" value="T">
			  			<label for="112t">T</label>
			  			<input type="radio" id="112f" name="answer112" value="F">
			  			<label for="112f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 113. I believe that laws should be enforced</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="113e" name="answer113" value="E" checked>
		  				<input type="radio" id="113t" name="answer113" value="T">
			  			<label for="113t">T</label>
			  			<input type="radio" id="113f" name="answer113" value="F">
			  			<label for="113f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 114. I often feel like I'm in a tight circle</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="114e" name="answer114" value="E" checked>
		  				<input type="radio" id="114t" name="answer114" value="T">
			  			<label for="114t">T</label>
			  			<input type="radio" id="114f" name="answer114" value="F">
			  			<label for="114f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 115. I believe in the hereafter</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="115e" name="answer115" value="E" checked>
		  				<input type="radio" id="115t" name="answer115" value="T">
			  			<label for="115t">T</label>
			  			<input type="radio" id="115f" name="answer115" value="F">
			  			<label for="115f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 116. I enjoy the races or games I bet more</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="116e" name="answer116" value="E" checked>
		  				<input type="radio" id="116t" name="answer116" value="T">
			  			<label for="116t">T</label>
			  			<input type="radio" id="116f" name="answer116" value="F">
			  			<label for="116f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 117. Many are honest because they are more afraid of getting caught</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="117e" name="answer117" value="E" checked>	
		  				<input type="radio" id="117t" name="answer117" value="T">
			  			<label for="117t">T</label>
			  			<input type="radio" id="117f" name="answer117" value="F">
			  			<label for="117f">F</label>
			  			 		    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 118. I was sent to the manager from time to time because I ran away from the class</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="118e" name="answer118" value="E" checked>
		  				<input type="radio" id="118t" name="answer118" value="T">
			  			<label for="118t">T</label>
			  			<input type="radio" id="118f" name="answer118" value="F">
			  			<label for="118f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 119. My way of speaking is as usual (Not slower or faster, not flattered or raucous)</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="119e" name="answer119" value="E" checked>
		  				<input type="radio" id="119t" name="answer119" value="T">
			  			<label for="119t">T</label>
			  			<input type="radio" id="119f" name="answer119" value="F">
			  			<label for="119f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 120. I don't pay attention to dinner table at home as much as outside</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="120e" name="answer120" value="E" checked>
		  				<input type="radio" id="120t" name="answer120" value="T">
			  			<label for="120t">T</label>
			  			<input type="radio" id="120f" name="answer120" value="F">
			  			<label for="120f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 121. I believe that there are some schemes against me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="121e" name="answer121" value="E" checked>
		  				<input type="radio" id="121t" name="answer121" value="T">
			  			<label for="121t">T</label>
			  			<input type="radio" id="121f" name="answer111" value="F">
			  			<label for="121f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 122. I think I'm as skillful and smart as most of the people I know</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="122e" name="answer122" value="E" checked>
		  				<input type="radio" id="212t" name="answer122" value="T">
			  			<label for="122t">T</label>
			  			<input type="radio" id="122f" name="answer122" value="F">
			  			<label for="122f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 123. I believe there are those who follow me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="123e" name="answer123" value="E" checked>
		  				<input type="radio" id="123t" name="answer123" value="T">
			  			<label for="123t">T</label>
			  			<input type="radio" id="123f" name="answer123" value="F">
			  			<label for="123f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 124. Many consult to inaccurate ways to protect their interests rather than lose them</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="124e" name="answer124" value="E" checked>
		  				<input type="radio" id="124t" name="answer124" value="T">
			  			<label for="124t">T</label>
			  			<input type="radio" id="124f" name="answer124" value="F">
			  			<label for="124f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 125. I am quite uncomfortable with my stomach</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="125e" name="answer125" value="E" checked>
		  				<input type="radio" id="125t" name="answer125" value="T">
			  			<label for="125t">T</label>
			  			<input type="radio" id="125f" name="answer125" value="F">
			  			<label for="125f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 126. I like theater</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="126e" name="answer126" value="E" checked>
		  				<input type="radio" id="126t" name="answer126" value="T">
			  			<label for="126t">T</label>
			  			<input type="radio" id="126f" name="answer126" value="F">
			  			<label for="126f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 127. I know who is responsible for most of my troubles</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="127e" name="answer127" value="E" checked>
		  				<input type="radio" id="127t" name="answer127" value="T">
			  			<label for="127t">T</label>
			  			<input type="radio" id="127f" name="answer127" value="F">
			  			<label for="127f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 128. When I see blood, I'm not afraid or bad</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="128e" name="answer128" value="E" checked>
		  				<input type="radio" id="128t" name="answer128" value="T">
			  			<label for="128t">T</label>
			  			<input type="radio" id="128f" name="answer128" value="F">
			  			<label for="128f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 129. Sometimes I be sullen</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="129e" name="answer129" value="E" checked> 
		  				<input type="radio" id="129t" name="answer129" value="T">
			  			<label for="129t">T</label>
			  			<input type="radio" id="129f" name="answer129" value="F">
			  			<label for="129f">F</label>		 
			  			  		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 130. I have never spilled blood or spit blood</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="130e" name="answer130" value="E" checked>
		  				<input type="radio" id="130t" name="answer130" value="T">
			  			<label for="130t">T</label>
			  			<input type="radio" id="130f" name="answer130" value="F">
			  			<label for="130f">F</label>
			  			 		    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 131. I don't worry that I will get sick</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="131e" name="answer131" value="E" checked>
		  				<input type="radio" id="131t" name="answer131" value="T">
			  			<label for="131t">T</label>
			  			<input type="radio" id="131f" name="answer131" value="F">
			  			<label for="131f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 132. I like collecting flowers and growing flowers at home</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="132e" name="answer132" value="E" checked>
		  				<input type="radio" id="132t" name="answer132" value="T">
			  			<label for="132t">T</label>
			  			<input type="radio" id="132f" name="answer132" value="F">
			  			<label for="132f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 133. I have never engaged in abnormal sexual relations</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="133e" name="answer133" value="E" checked>
		  				<input type="radio" id="133t" name="answer133" value="T">
			  			<label for="133t">T</label>
			  			<input type="radio" id="133f" name="answer133" value="F">
			  			<label for="133f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 134. Sometimes thoughts in my head are so fast that I can't train saying</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="134e" name="answer134" value="E" checked>
		  				<input type="radio" id="134t" name="answer134" value="T">
			  			<label for="134t">T</label>
			  			<input type="radio" id="134f" name="answer134" value="F">
			  			<label for="134f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 135. If I was sure I wouldn't be noticed, I would enter the cinema without a ticket</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="135e" name="answer135" value="E" checked>
		  				<input type="radio" id="135t" name="answer135" value="T">
			  			<label for="135t">T</label>
			  			<input type="radio" id="135f" name="answer135" value="F">
			  			<label for="135f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 136. I think that anyone who does me a favor may have a hidden purpose in general</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="136e" name="answer136" value="E" checked>
		  				<input type="radio" id="136t" name="answer136" value="T">
			  			<label for="136t">T</label>
			  			<input type="radio" id="136f" name="answer136" value="F">
			  			<label for="136f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 137. I believe my family life is as good as most of the people I know</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="137e" name="answer137" value="E" checked>
		  				<input type="radio" id="137t" name="answer137" value="T">
			  			<label for="137t">T</label>
			  			<input type="radio" id="137f" name="answer137" value="F">
			  			<label for="137f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 138. Criticism breaks me a lot</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="138e" name="answer138" value="E" checked>
		  				<input type="radio" id="138t" name="answer138" value="T">
			  			<label for="138t">T</label>
			  			<input type="radio" id="138f" name="answer138" value="F">
			  			<label for="138f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 139. Sometimes I feel like I have to hurt myself or someone else</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="139e" name="answer139" value="E" checked>
		  				<input type="radio" id="139t" name="answer139" value="T">
			  			<label for="139t">T</label>
			  			<input type="radio" id="139f" name="answer139" value="F">
			  			<label for="139f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 140. I like cooking</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="140e" name="answer140" value="E" checked>
		  				<input type="radio" id="140t" name="answer140" value="T">
			  			<label for="140t">T</label>
			  			<input type="radio" id="140f" name="answer140" value="F">
			  			<label for="140f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 141. I often adjust my behavior to those around me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="141e" name="answer141" value="E" checked>
		  				<input type="radio" id="141t" name="answer141" value="T">
			  			<label for="141t">T</label>
			  			<input type="radio" id="141f" name="answer141" value="F">
			  			<label for="141f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 142. Sometimes I think I am useless</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="142e" name="answer142" value="E" checked>
		  				<input type="radio" id="142t" name="answer142" value="T">
			  			<label for="142t">T</label>
			  			<input type="radio" id="142" name="answer142" value="F">
			  			<label for="142f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 143. Whatever happened to me when I was a kid, I was in a group that kept unity</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="143e" name="answer143" value="E" checked>
		  				<input type="radio" id="143t" name="answer143" value="T">
			  			<label for="143t">T</label>
			  			<input type="radio" id="143f" name="answer143" value="F">
			  			<label for="143f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 144. I would like to be a soldier</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="144e" name="answer144" value="E" checked>
		  				<input type="radio" id="144t" name="answer144" value="T">
			  			<label for="144t">T</label>
			  			<input type="radio" id="144f" name="answer144" value="F">
			  			<label for="144f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 145. Sometimes it happens that I want to fight fist-fist with someone</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="145e" name="answer145" value="E" checked>
		  				<input type="radio" id="145t" name="answer145" value="T">
			  			<label for="145t">T</label>
			  			<input type="radio" id="145f" name="answer145" value="F">
			  			<label for="145f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 146. I am not happy unless I travel</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="146e" name="answer146" value="E" checked>
		  				<input type="radio" id="146t" name="answer146" value="T">
			  			<label for="146t">T</label>
			  			<input type="radio" id="146f" name="answer146" value="F">
			  			<label for="146f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 147. I missed many opportunities because I did not decide quickly</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="147e" name="answer147" value="E" checked>
		  				<input type="radio" id="147t" name="answer147" value="T">
			  			<label for="147t">T</label>
			  			<input type="radio" id="147f" name="answer147" value="F">
			  			<label for="147f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 148. It is my patience that others interrupt my work while working on an important job</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="148e" name="answer148" value="E" checked>
		  				<input type="radio" id="148t" name="answer148" value="T">
			  			<label for="148t">T</label>
			  			<input type="radio" id="148f" name="answer148" value="F">
			  			<label for="148f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 149. I would keep a diary</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="149e" name="answer149" value="E" checked>
		  				<input type="radio" id="149t" name="answer149" value="T">
			  			<label for="149t">T</label>
			  			<input type="radio" id="149f" name="answer149" value="F">
			  			<label for="149f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 150. I want to win rather than lose in the game</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="150e" name="answer150" value="E" checked>
		  				<input type="radio" id="150t" name="answer150" value="T">
			  			<label for="150t">T</label>
			  			<input type="radio" id="150f" name="answer150" value="F">
			  			<label for="150f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 151. Someone is trying to poison me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="151e" name="answer151" value="E" checked>
		  				<input type="radio" id="151t" name="answer151" value="T">
			  			<label for="151t">T</label>
			  			<input type="radio" id="151f" name="answer151" value="F">
			  			<label for="151f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 152. Most nights I'll fall asleep without worrying my mind</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="152e" name="answer152" value="E" checked>
		  				<input type="radio" id="152t" name="answer152" value="T">
			  			<label for="152t">T</label>
			  			<input type="radio" id="152f" name="answer152" value="F">
			  			<label for="152f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 153. In the past few years my health has been mostly good</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="153e" name="answer153" value="E" checked>
		  				<input type="radio" id="153t" name="answer153" value="T">
			  			<label for="153t">T</label>
			  			<input type="radio" id="153f" name="answer153" value="F">
			  			<label for="153t">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 154. I have never had a fit or remit</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="154e" name="answer154" value="E" checked>
		  				<input type="radio" id="154t" name="answer154" value="T">
			  			<label for="154t">T</label>
			  			<input type="radio" id="154f" name="answer154" value="F">
			  			<label for="154f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 155. I'm neither fat nor weak</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="155e" name="answer155" value="E" checked>
		  				<input type="radio" id="155t" name="answer155" value="T">
			  			<label for="155t">T</label>
			  			<input type="radio" id="155f" name="answer155" value="F">
			  			<label for="155f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 156. There were times when I could do something and then remember what I did</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="156e" name="answer156" value="E" checked>
		  				<input type="radio" id="156t" name="answer156" value="T">
			  			<label for="156t">T</label>
			  			<input type="radio" id="156f" name="answer156" value="F">
			  			<label for="156f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 157. I was often punished for no reason</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="157e" name="answer157" value="E" checked>
		  				<input type="radio" id="157t" name="answer157" value="T">
			  			<label for="157t">T</label>
			  			<input type="radio" id="157f" name="answer157" value="F">
			  			<label for="157f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 158. I cry quickly</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="158e" name="answer158" value="E" checked>
		  				<input type="radio" id="158t" name="answer158" value="T">
			  			<label for="158t">T</label>
			  			<input type="radio" id="158f" name="answer158" value="F">
			  			<label for="158f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 159. I can't understand my reading as well as before</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="159e" name="answer159" value="E" checked>
		  				<input type="radio" id="159t" name="answer159" value="T">
			  			<label for="159t">T</label>
			  			<input type="radio" id="159f" name="answer159" value="F">
			  			<label for="159f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 160. I have never felt better than I have in my life</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="160e" name="answer160" value="E" checked>
		  				<input type="radio" id="160t" name="answer160" value="T">
			  			<label for="160t">T</label>
			  			<input type="radio" id="160f" name="answer160" value="F">
			  			<label for="160f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 161. Sometimes I feel pain on my head</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="161e" name="answer161" value="E" checked>
		  				<input type="radio" id="161t" name="answer161" value="T">
			  			<label for="161t">T</label>
			  			<input type="radio" id="161f" name="answer161" value="F">
			  			<label for="161f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 162. I am very upset that someone will cleverly play me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="161e" name="answer162" value="E" checked>
		  				<input type="radio" id="162t" name="answer162" value="T">
			  			<label for="162t">T</label>
			  			<input type="radio" id="162f" name="answer162" value="F">
			  			<label for="162f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 163. I don't get tired quickly</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="163e" name="answer163" value="E" checked>
		  				<input type="radio" id="163t" name="answer163" value="T">
			  			<label for="163t">T</label>
			  			<input type="radio" id="163f" name="answer163" value="F">
			  			<label for="163f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 64. I like reading and studying on the topics I work on</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="164e" name="answer164" value="E" checked>
		  				<input type="radio" id="164t" name="answer164" value="T">
			  			<label for="164t">T</label>
			  			<input type="radio" id="164f" name="answer164" value="F">
			  			<label for="164f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 165. I like to know the important people because I see myself as an important person</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="165e" name="answer165" value="E" checked>
		  				<input type="radio" id="165t" name="answer165" value="T">
			  			<label for="165t">T</label>
			  			<input type="radio" id="165f" name="answer165" value="F">
			  			<label for="165f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 166. I'm afraid to look down from a high place</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="166e" name="answer166" value="E" checked>
		  				<input type="radio" id="166t" name="answer166" value="T">
			  			<label for="166t">T</label>
			  			<input type="radio" id="166f" name="answer166" value="F">
			  			<label for="166f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 167. It does not bother me that any of my family is in court</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="167e" name="answer167" value="E" checked>
		  				<input type="radio" id="167t" name="answer167" value="T">
			  			<label for="167t">T</label>
			  			<input type="radio" id="167f" name="answer167" value="F">
			  			<label for="167f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 168. There's something strange in my mind</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="168" name="answer168" value="E" checked>
		  				<input type="radio" id="168t" name="answer168" value="T">
			  			<label for="168t">T</label>
			  			<input type="radio" id="168f" name="answer168" value="F">
			  			<label for="168f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 169. I am not afraid to handle money</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="169" name="answer169" value="E" checked>
		  				<input type="radio" id="169t" name="answer169" value="T">
			  			<label for="169t">T</label>
			  			<input type="radio" id="169f" name="answer169" value="F">
			  			<label for="169f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 170. What others think about me doesn't bother me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="170e" name="answer170" value="E" checked>
		  				<input type="radio" id="170t" name="answer170" value="T">
			  			<label for="170t">T</label>
			  			<input type="radio" id="170f" name="answer170" value="F">
			  			<label for="170f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 171. Even if others do it, I would be annoyed with exuberance if I do</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="171e" name="answer171" value="E" checked>
		  				<input type="radio" id="171t" name="answer171" value="T">
			  			<label for="171t">T</label>
			  			<input type="radio" id="171f" name="answer171" value="F">
			  			<label for="171f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 172. I often need to cover up my shyness</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="172e" name="answer172" value="E" checked>
		  				<input type="radio" id="172t" name="answer172" value="T">
			  			<label for="172t">T</label>
			  			<input type="radio" id="172f" name="answer172" value="F">
			  			<label for="172f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 173. I liked school</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="173e" name="answer173" value="E" checked>
		  				<input type="radio" id="173t" name="answer173" value="T">
			  			<label for="173">T</label>
			  			<input type="radio" id="173f" name="answer173" value="F">
			  			<label for="173f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 174. I've never had a fainting spell</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="174e" name="answer174" value="E" checked>
		  				<input type="radio" id="174t" name="answer174" value="T">
			  			<label for="174t">T</label>
			  			<input type="radio" id="174f" name="answer174" value="F">
			  			<label for="174f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 175. I have very little or no dizziness</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="175e" name="answer175" value="E" checked>
		  				<input type="radio" id="175t" name="answer175" value="T">
			  			<label for="175t">T</label>
			  			<input type="radio" id="175f" name="answer175" value="F">
			  			<label for="175f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 176. I have no fear of the snake</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="176e" name="answer176" value="E" checked>
		  				<input type="radio" id="176t" name="answer176" value="T">
			  			<label for="176t">T</label>
			  			<input type="radio" id="176f" name="answer176" value="F">
			  			<label for="176f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 177. My mom is a good woman</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="177e" name="answer177" value="E" checked>
		  				<input type="radio" id="177t" name="answer177" value="T">
			  			<label for="177t">T</label>
			  			<input type="radio" id="177f" name="answer177" value="F">
			  			<label for="177f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 178. My memory is generally good</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="178e" name="answer178" value="E" checked>
		  				<input type="radio" id="178t" name="answer178" value="T">
			  			<label for="178t">T</label>
			  			<input type="radio" id="178f" name="answer178" value="F">
			  			<label for="178f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 179. I have problems with sexual issues</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="179e" name="answer179" value="E" checked>
		  				<input type="radio" id="179t" name="answer179" value="T">
			  			<label for="179t">T</label>
			  			<input type="radio" id="179f" name="answer179" value="F">
			  			<label for="179f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 180. I find it difficult to find a conversation topic with people I just met</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="180e" name="answer180" value="E" checked>
		  				<input type="radio" id="180t" name="answer180" value="T">
			  			<label for="180t">T</label>
			  			<input type="radio" id="180f" name="answer180" value="F">
			  			<label for="180f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		<p> 181. I like to create excitement as I get bored</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="181e" name="answer181" value="E" checked>
		  				<input type="radio" id="181t" name="answer181" value="T">
			  			<label for="181t">T</label>
			  			<input type="radio" id="181f" name="answer181" value="F">
			  			<label for="181f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 182. I'm afraid to move my mind</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="182e" name="answer182" value="E" checked>
		  				<input type="radio" id="182t" name="answer182" value="T">
			  			<label for="182t">T</label>
			  			<input type="radio" id="182f" name="answer182" value="F">
			  			<label for="182f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 183. I don't find it right to give beggars money</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="183e" name="answer183" value="E" checked>
		  				<input type="radio" id="183t" name="answer183" value="T">
			  			<label for="183t">T</label>
			  			<input type="radio" id="183f" name="answer183" value="F">
			  			<label for="183f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 184. I often hear voices that I don't know where it came from</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="184e" name="answer184" value="E" checked>
		  				<input type="radio" id="184t" name="answer184" value="T">
			  			<label for="184t">T</label>
			  			<input type="radio" id="184f" name="answer184" value="F">
			  			<label for="184f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 185. I hear as well as everyone</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="185e" name="answer185" value="E" checked>
		  				<input type="radio" id="185t" name="answer185" value="T">
			  			<label for="185t">T</label>
			  			<input type="radio" id="185f" name="answer185" value="F">
			  			<label for="185f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 186. When I try to do something, I realize that my hands are shaking many times.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="186e" name="answer186" value="E" checked>
		  				<input type="radio" id="186t" name="answer186" value="T">
			  			<label for="186t">T</label>
			  			<input type="radio" id="186f" name="answer186" value="F">
			  			<label for="186f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 187. I have no clumsiness or clumsiness in my hands</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="187e" name="answer187" value="E" checked>
		  				<input type="radio" id="187t" name="answer187" value="T">
			  			<label for="187t">T</label>
			  			<input type="radio" id="187f" name="answer187" value="F">
			  			<label for="187f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 188. I can read for a long time without my eyes getting tired</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="188e" name="answer188" value="E" checked>
		  				<input type="radio" id="188t" name="answer188" value="T">
			  			<label for="188t">T</label>
			  			<input type="radio" id="188f" name="answer188" value="F">
			  			<label for="188f">F</label>	
			  				    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 189. I often feel weakness in my whole body</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="189e" name="answer189" value="E" checked>
		  				<input type="radio" id="189t" name="answer189" value="T">
			  			<label for="189t">T</label>
			  			<input type="radio" id="189f" name="answer189" value="F">
			  			<label for="189f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 190. My head hurts very little</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="190e" name="answer190" value="E" checked>
		  				<input type="radio" id="190t" name="answer190" value="T">
			  			<label for="190t">T</label>
			  			<input type="radio" id="190f" name="answer190" value="F">
			  			<label for="190f">F</label>
			  					    		     
		  </div>
		</div>
		<div class="container">
		  <div class="question">
		    <p> 191. Sometimes I sweat a lot when I shame</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="191e" name="answer191" value="E" checked>
		  				<input type="radio" id="191t" name="answer191" value="T">
			  			<label for="191t">T</label>
			  			<input type="radio" id="191f" name="answer191" value="F">
			  			<label for="191f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 192. I almost lose my balance while walking</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="192e" name="answer192" value="E" checked>
		  				<input type="radio" id="192t" name="answer192" value="T">
			  			<label for="192t">T</label>
			  			<input type="radio" id="192f" name="answer192" value="F">
			  			<label for="192f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 193. Saman nezlesi ya da astım nöbetlerim yoktur</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="193e" name="answer193" value="E" checked>
		  				<input type="radio" id="193t" name="answer193" value="T">
			  			<label for="193t">T</label>
			  			<input type="radio" id="193f" name="answer193" value="F">
			  			<label for="193f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 194. I had seizures that I could not control my movements and speech, but I was aware of what was happening around me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="194e" name="answer194" value="E" checked>
		  				<input type="radio" id="194t" name="answer194" value="T">
			  			<label for="194t">T</label>
			  			<input type="radio" id="194f" name="answer194" value="F">
			  			<label for="194f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 195. I don't like everyone I know</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="195e" name="answer195" value="E" checked>
		  				<input type="radio" id="195t" name="answer195" value="T">
			  			<label for="195t">T</label>
			  			<input type="radio" id="195f" name="answer195" value="F">
			  			<label for="195f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 196. I like going to places I've never seen</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="196e" name="answer196" value="E" checked>
		  				<input type="radio" id="196t" name="answer196" value="T">
			  			<label for="196t">T</label>
			  			<input type="radio" id="196f" name="answer196" value="F">
			  			<label for="196f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 197. Someone is trying to rob me and take everything</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="197e" name="answer197" value="E" checked>
		  				<input type="radio" id="197t" name="answer197" value="T">
			  			<label for="197t">T</label>
			  			<input type="radio" id="197f" name="answer197" value="F">
			  			<label for="197f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 198. I dream very little</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="198e" name="answer198" value="E" checked>
		  				<input type="radio" id="198t" name="answer198" value="T">
			  			<label for="198t">T</label>
			  			<input type="radio" id="198f" name="answer198" value="F">
			  			<label for="198f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 199. Children should be taught basic facts about gender</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="199e" name="answer199" value="E" checked>
		  				<input type="radio" id="199t" name="answer199" value="T">
			  			<label for="199t">T</label>
			  			<input type="radio" id="199f" name="answer199" value="F">
			  			<label for="199f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 200. There is someone who wants to steal my ideas and thoughts</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="200e" name="answer200" value="E" checked>
		  				<input type="radio" id="200t" name="answer200" value="T">
			  			<label for="200t">T</label>
			  			<input type="radio" id="200f" name="answer200" value="F">
			  			<label for="200f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 201. I wish I wasn't so shy</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="201e" name="answer201" value="E" checked>
		  				<input type="radio" id="201t" name="answer201" value="T">
			  			<label for="201t">T</label>
			  			<input type="radio" id="201f" name="answer201" value="F">
			  			<label for="201f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 202. I see myself as a criminal who deserves punishment.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="202e" name="answer202" value="E" checked>
		  				<input type="radio" id="202t" name="answer202" value="T">
			  			<label for="202t">T</label>
			  			<input type="radio" id="202f" name="answer202" value="F">
			  			<label for="202f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 203. I would like to be a journalist</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="203e" name="answer203" value="E" checked>
		  				<input type="radio" id="203t" name="answer203" value="T">
			  			<label for="203t">T</label>
			  			<input type="radio" id="203f" name="answer203" value="F">
			  			<label for="203f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 204. If I were not a journalist, I would like to write more theater news.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="204e" name="answer204" value="E" checked>
		  				<input type="radio" id="204t" name="answer204" value="T">
			  			<label for="204t">T</label>
			  			<input type="radio" id="204f" name="answer204" value="F">
			  			<label for="204f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 205. Sometimes I can't take myself from stealing or picking things up from shops</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="205e" name="answer205" value="E" checked>
		  				<input type="radio" id="205t" name="answer205" value="T">
			  			<label for="205t">T</label>
			  			<input type="radio" id="205f" name="answer205" value="F">
			  			<label for="205f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 6. I am more religious than many</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="206e" name="answer206" value="E" checked>
		  				<input type="radio" id="206t" name="answer206" value="T">
			  			<label for="206t">T</label>
			  			<input type="radio" id="206f" name="answer206" value="F">
			  			<label for="206f">F</label>
			  						    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 207. I like various games and entertainment</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="207e" name="answer207" value="E" checked>
		  				<input type="radio" id="207t" name="answer207" value="T">
			  			<label for="207t">T</label>
			  			<input type="radio" id="207f" name="answer207" value="F">
			  			<label for="207f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 208. I like to flirt</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="208e" name="answer208" value="E" checked>
		  				<input type="radio" id="208t" name="answer208" value="T">
			  			<label for="208t">T</label>
			  			<input type="radio" id="208f" name="answer208" value="F">
			  			<label for="208f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 209. I believe that my sins will not be forgiven</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="209e" name="answer209" value="E" checked>
		  				<input type="radio" id="209t" name="answer209" value="T">
			  			<label for="209t">T</label>
			  			<input type="radio" id="209f" name="answer209" value="F">
			  			<label for="209f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 10. Everything tastes the same</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="210e" name="answer210" value="E" checked>
		  				<input type="radio" id="210t" name="answer210" value="T">
			  			<label for="210t">T</label>
			  			<input type="radio" id="210f" name="answer210" value="F">
			  			<label for="210f">F</label>
			  					    		     
		  </div>
		</div>
		<div class="container">
		  <div class="question">
		    <p> 211. I can sleep during the day but I can't sleep at night</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="211e" name="answer211" value="E" checked>
		  				<input type="radio" id="211t" name="answer211" value="T">
			  			<label for="211t">T</label>
			  			<input type="radio" id="211f" name="answer211" value="F">
			  			<label for="211f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 212. At home treats me as a child</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="212e" name="answer212" value="E" checked>
		  				<input type="radio" id="212t" name="answer212" value="T">
			  			<label for="212t">T</label>
			  			<input type="radio" id="212f" name="answer212" value="F">
			  			<label for="212f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 213. I pay attention not to step in the crevices on the pavement while walking</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="213e" name="answer213" value="E" checked>
		  				<input type="radio" id="213t" name="answer213" value="T">
			  			<label for="213t">T</label>
			  			<input type="radio" id="213f" name="answer213" value="F">
			  			<label for="213f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 214. No puffiness or pimples on my skin worth sad</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="214e" name="answer214" value="E" checked>
		  				<input type="radio" id="214t" name="answer214" value="T">
			  			<label for="214t">T</label>
			  			<input type="radio" id="214f" name="answer214" value="F">
			  			<label for="214f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 215. I used a lot of alcohol</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="215e" name="answer215" value="E" checked>
		  				<input type="radio" id="215t" name="answer215" value="T">
			  			<label for="215t">T</label>
			  			<input type="radio" id="215f" name="answer215" value="F">
			  			<label for="215f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 216. According to other families, love and friendship in our home is very low.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="216e" name="answer216" value="E" checked>
		  				<input type="radio" id="216t" name="answer216" value="T">
			  			<label for="216t">T</label>
			  			<input type="radio" id="216f" name="answer216" value="F">
			  			<label for="216f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 17. I often worry about something</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="217e" name="answer217" value="E" checked>
		  				<input type="radio" id="217t" name="answer217" value="T">
			  			<label for="217t">T</label>
			  			<input type="radio" id="217f" name="answer217" value="F">
			  			<label for="217f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 218. It does not make me sad to see animals suffer</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="218e" name="answer218" value="E" checked>
		  				<input type="radio" id="218t" name="answer218" value="T">
			  			<label for="218t">T</label>
			  			<input type="radio" id="218f" name="answer218" value="F">
			  			<label for="218f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 219. I think I will like construction contractors</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="219e" name="answer219" value="E" checked>
		  				<input type="radio" id="219t" name="answer219" value="T">
			  			<label for="219t">T</label>
			  			<input type="radio" id="219f" name="answer219" value="F">
			  			<label for="219f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 220. I love my mom/p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="220e" name="answer220" value="E" checked>
		  				<input type="radio" id="220t" name="answer220" value="T">
			  			<label for="220t">T</label>
			  			<input type="radio" id="220f" name="answer220" value="F">
			  			<label for="220f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 221. I like science</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="221e" name="answer221" value="E" checked>
		  				<input type="radio" id="221t" name="answer221" value="T">
			  			<label for="221t">T</label>
			  			<input type="radio" id="221f" name="answer221" value="F">
			  			<label for="221f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 22. Even if I can't afford it back, I would ask help from my friends</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="222e" name="answer222" value="E" checked>
		  				<input type="radio" id="222t" name="answer222" value="T">
			  			<label for="222t">T</label>
			  			<input type="radio" id="222f" name="answer222" value="F">
			  			<label for="222f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 223. I love hunting</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="223e" name="answer223" value="E" checked>
		  				<input type="radio" id="223t" name="answer223" value="T">
			  			<label for="223t">T</label>
			  			<input type="radio" id="223f" name="answer223" value="F">
			  			<label for="223f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 224. My parents don't like people I spend many times</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="224e" name="answer224" value="E" checked>
		  				<input type="radio" id="224t" name="answer224" value="T">
			  			<label for="224t">T</label>
			  			<input type="radio" id="224f" name="answer224" value="F">
			  			<label for="224f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 225. Sometimes I do a little gossip</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="225e" name="answer225" value="E" checked>
		  				<input type="radio" id="225t" name="answer225" value="T">
			  			<label for="225t">T</label>
			  			<input type="radio" id="225f" name="answer225" value="F">
			  			<label for="225f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 226. Some people in my family have habits that bother me so much</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="226e" name="answer226" value="E" checked>
		  				<input type="radio" id="226t" name="answer226" value="T">
			  			<label for="226t">T</label>
			  			<input type="radio" id="226f" name="answer226" value="F">
			  			<label for="226f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 27. People say I'm sleepwalker</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="227e" name="answer227" value="E" checked>
		  				<input type="radio" id="227t" name="answer227" value="T">
			  			<label for="227t">T</label>
			  			<input type="radio" id="227f" name="answer227" value="F">
			  			<label for="227f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 228. Sometimes I feel that I can make an unusually easy decision</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="228e" name="answer228" value="E" checked>
		  				<input type="radio" id="228t" name="answer228" value="T">
			  			<label for="228t">T</label>
			  			<input type="radio" id="228f" name="answer228" value="F">
			  			<label for="228f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 229. I would like to be a member of various clubs and associations</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="229e" name="answer229" value="E" checked>
		  				<input type="radio" id="229t" name="answer229" value="T">
			  			<label for="229t">T</label>
			  			<input type="radio" id="229f" name="answer229" value="F">
			  			<label for="229f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 230. I almost never feel my heart beating fast and my rare breath gets clogged</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="230e" name="answer230" value="E" checked>
		  				<input type="radio" id="230t" name="answer230" value="T">
			  			<label for="230t">T</label>
			  			<input type="radio" id="230f" name="answer230" value="F">
			  			<label for="230f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 231. I like to talk about gender</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="231e" name="answer231" value="E" checked>
		  				<input type="radio" id="231t" name="answer231" value="T">
			  			<label for="231t">T</label>
			  			<input type="radio" id="231f" name="answer231" value="F">
			  			<label for="231f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 232. Sometimes I get a lot of work on me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="232e" name="answer232" value="E" checked>
		  				<input type="radio" id="232t" name="answer232" value="T">
			  			<label for="232t">T</label>
			  			<input type="radio" id="232f" name="answer232" value="F">
			  			<label for="232f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 233. Although many people oppose, I defend my opinion to the end</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="233e" name="answer233" value="E" checked>
		  				<input type="radio" id="233t" name="answer233" value="T">
			  			<label for="233t">T</label>
			  			<input type="radio" id="233f" name="answer233" value="F">
			  			<label for="233f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 234. Quickly flushes and I forget quickly</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="234e" name="answer234" value="E" checked>
		  				<input type="radio" id="234t" name="answer234" value="T">
			  			<label for="234t">T</label>
			  			<input type="radio" id="234f" name="answer234" value="F">
			  			<label for="234f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 235. I am quite independent and free from family rules</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="235e" name="answer235" value="E" checked>
		  				<input type="radio" id="235t" name="answer235" value="T">
			  			<label for="235t">T</label>
			  			<input type="radio" id="235f" name="answer235" value="F">
			  			<label for="235f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 236. I often think pessimistic</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="236e" name="answer236" value="E" checked>
		  				<input type="radio" id="236t" name="answer236" value="T">
			  			<label for="236t">T</label>
			  			<input type="radio" id="236f" name="answer236" value="F">
			  			<label for="236f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 237. Almost all of my relatives understand me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="237e" name="answer237" value="E" checked>
		  				<input type="radio" id="237t" name="answer237" value="T">
			  			<label for="237t">T</label>
			  			<input type="radio" id="237f" name="answer237" value="F">
			  			<label for="237f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 238. There are times when I feel uneasy that I can't stand in my place</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="238e" name="answer238" value="E" checked>	
		  				<input type="radio" id="238t" name="answer238" value="T">
			  			<label for="238t">T</label>
			  			<input type="radio" id="238f" name="answer238" value="F">
			  			<label for="238f">F</label>		
			  			    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 239. I was disappointed in love</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="239e" name="answer239" value="E" checked>
		  				<input type="radio" id="239t" name="answer239" value="T">
			  			<label for="239t">T</label>
			  			<input type="radio" id="239f" name="answer239" value="F">
			  			<label for="239f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 240. I never mind my look</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="240e" name="answer240" value="E" checked>
		  				<input type="radio" id="240t" name="answer240" value="T">
			  			<label for="240t">T</label>
			  			<input type="radio" id="240f" name="answer240" value="F">
			  			<label for="240f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 241. I often dream about things that cannot be said to others that I keep inside/p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="241e" name="answer241" value="E" checked>
		  				<input type="radio" id="241t" name="answer241" value="T">
			  			<label for="241t">T</label>
			  			<input type="radio" id="241f" name="answer241" value="F">
			  			<label for="241f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 242. I am not considered more angry than many</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="242e" name="answer242" value="E" checked>
		  				<input type="radio" id="242t" name="answer242" value="T">
			  			<label for="242t">T</label>
			  			<input type="radio" id="242f" name="answer242" value="F">
			  			<label for="242f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 243. I got almost no pain and leakage</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="243e" name="answer243" value="E" checked>
		  				<input type="radio" id="243t" name="answer243" value="T">
			  			<label for="243t">T</label>
			  			<input type="radio" id="243f" name="answer243" value="F">
			  			<label for="243f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 244. My conduct is conducive to misunderstanding by others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="244e" name="answer244" value="E" checked>
		  				<input type="radio" id="244t" name="answer244" value="T">
			  			<label for="244t">T</label>
			  			<input type="radio" id="244f" name="answer244" value="F">
			  			<label for="244f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 245. My family finds me more wrong than I am</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="245e" name="answer245" value="E" checked>
		  				<input type="radio" id="245t" name="answer245" value="T">
			  			<label for="245t">T</label>
			  			<input type="radio" id="245f" name="answer245" value="F">
			  			<label for="245f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 246. There are often red spots on my neck</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="246e" name="answer246" value="E" checked>
		  				<input type="radio" id="246t" name="answer246" value="T">
			  			<label for="246t">T</label>
			  			<input type="radio" id="246f" name="answer246" value="F">
			  			<label for="246f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 247. I do not see love from anyone</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="247e" name="answer247" value="E" checked>
		  				<input type="radio" id="247t" name="answer247" value="T">
			  			<label for="247t">T</label>
			  			<input type="radio" id="247f" name="answer247" value="F">
			  			<label for="247f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 248. Sometimes I feel very happy when there is no reason, even when things get worse</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="248e" name="answer248" value="E" checked>
		  				<input type="radio" id="248t" name="answer248" value="T">
			  			<label for="248t">T</label>
			  			<input type="radio" id="248f" name="answer248" value="F">
			  			<label for="248f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 249. I believe there is a devil and hell in the afterlife</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="249e" name="answer249" value="E" checked>	
		  				<input type="radio" id="249t" name="answer249" value="T">
			  			<label for="249t">T</label>
			  			<input type="radio" id="249f" name="answer249" value="F">
			  			<label for="249f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 250. I don't blame people who try to grab everything they have in life</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="250e" name="answer250" value="E" checked>
		  				<input type="radio" id="250t" name="answer250" value="T">
			  			<label for="250t">T</label>
			  			<input type="radio" id="250f" name="answer250" value="F">
			  			<label for="250f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 251. There were times when I lost myself and disrupted what I was doing and was not aware of what was going on around me.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="251e" name="answer251" value="E" checked>	
		  				<input type="radio" id="251t" name="answer251" value="T">
			  			<label for="251t">T</label>
			  			<input type="radio" id="251f" name="answer251" value="F">
			  			<label for="251f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 252. Nobody cares for someone else</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="252e" name="answer252" value="E" checked>
		  				<input type="radio" id="252t" name="answer252" value="T">
			  			<label for="252t">T</label>
			  			<input type="radio" id="252f" name="answer252" value="F">
			  			<label for="252f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 253. I can treat people friendly even if I see their wrong behavior</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="253e" name="answer253" value="E" checked>
		  				<input type="radio" id="253t" name="answer253" value="T">
			  			<label for="253t">T</label>
			  			<input type="radio" id="253f" name="answer253" value="F">
			  			<label for="253f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 254. I like to be among people who joke with each other</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="254e" name="answer254" value="E" checked>
		  				<input type="radio" id="254t" name="answer254" value="T">
			  			<label for="254t">T</label>
			  			<input type="radio" id="254f" name="answer254" value="F">
			  			<label for="254f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 255. In the elections, I sometimes give my vote to people I know little</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="255e" name="answer255" value="E" checked>	
		  				<input type="radio" id="255t" name="answer255" value="T">
			  			<label for="255t">T</label>
			  			<input type="radio" id="255f" name="answer255" value="F">
			  			<label for="255f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 256. The only place of interest for newspapers is the picture humor page</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="256e" name="answer256" value="E" checked>
		  				<input type="radio" id="256t" name="answer256" value="T">
			  			<label for="256t">T</label>
			  			<input type="radio" id="256f" name="answer256" value="F">
			  			<label for="256f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 257. I believe that I will generally be successful in my work.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="257e" name="answer257" value="E" checked>
		  				<input type="radio" id="257t" name="answer257" value="T">
			  			<label for="257t">T</label>
			  			<input type="radio" id="257f" name="answer257" value="F">
			  			<label for="257f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 258. I believe in the existence of God</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="258e" name="answer258" value="E" checked>	
		  				<input type="radio" id="258t" name="answer258" value="T">
			  			<label for="258t">T</label>
			  			<input type="radio" id="258f" name="answer258" value="F">
			  			<label for="258f">F</label>	
			  			    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 259. I have difficulty starting work</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="259e" name="answer259" value="E" checked>
		  				<input type="radio" id="259t" name="answer259" value="T">
			  			<label for="259t">T</label>
			  			<input type="radio" id="259f" name="answer259" value="F">
			  			<label for="259f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 260. I was one of those who learned heavily while at school</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="260e" name="answer260" value="E" checked>	
		  				<input type="radio" id="260t" name="answer260" value="T">
			  			<label for="260t">T</label>
			  			<input type="radio" id="260f" name="answer260" value="F">
			  			<label for="260f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 261. If I was a painter, I would paint flowers</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="261e" name="answer261" value="E" checked>	
		  				<input type="radio" id="261t" name="answer261" value="T">
			  			<label for="261t">T</label>
			  			<input type="radio" id="261fe" name="answer261" value="F">
			  			<label for="261f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 262. It doesn't bother me that I'm not more beautiful</p>	    		    		   
		  </div>
		  <div class="options">
		  		<input type="hidden" id="262e" name="answer262" value="E" checked>
		  				<input type="radio" id="262t" name="answer262" value="T">
			  			<label for="262t">T</label>
			  			<input type="radio" id="262f" name="answer262" value="F">
			  			<label for="262f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 263. I sweat easily even on cold days</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="263e" name="answer263" value="E" checked>
		  				<input type="radio" id="263t" name="answer263" value="T">
			  			<label for="263t">T</label>
			  			<input type="radio" id="263f" name="answer263" value="F">
			  			<label for="263f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 264. I have complete confidence in myself</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="264e" name="answer264" value="E" checked>	
		  				<input type="radio" id="264t" name="answer264" value="T">
			  			<label for="264t">T</label>
			  			<input type="radio" id="264f" name="answer264" value="F">
			  			<label for="264f">F</label>	
			  			    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 265. It is best not to trust anyone</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="265e" name="answer265" value="E" checked>
		  				<input type="radio" id="265t" name="answer265" value="T">
			  			<label for="265t">T</label>
			  			<input type="radio" id="265f" name="answer265" value="F">
			  			<label for="265f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 266. Once a week or often, I get very excited</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="266e" name="answer266" value="E" checked>	
		  				<input type="radio" id="266t" name="answer266" value="T">
			  			<label for="266t">T</label>
			  			<input type="radio" id="266f" name="answer266" value="F">
			  			<label for="266f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 267. I find it difficult to find suitable topics to talk about when I am in the community</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="267e" name="answer267" value="E" checked>	
		  				<input type="radio" id="267t" name="answer267" value="T">
			  			<label for="267t">T</label>
			  			<input type="radio" id="267f" name="answer267" value="F">
			  			<label for="267f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 268. When I am pessimistic, an excited event gets me out of this</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="268e" name="answer268" value="E" checked>
		  				<input type="radio" id="268t" name="answer268" value="T">
			  			<label for="268t">T</label>
			  			<input type="radio" id="268f" name="answer268" value="F">
			  			<label for="268f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 269. Sometimes I scare others from myself for pleasure</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="269e" name="answer269" value="E" checked>
		  				<input type="radio" id="269t" name="answer269" value="T">
			  			<label for="269t">T</label>
			  			<input type="radio" id="269f" name="answer269" value="F">
			  			<label for="269f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 270. When I leave the house, I do not mind whether the door is locked and the window is closed.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="270e" name="answer270" value="E" checked>
		  				<input type="radio" id="270t" name="answer270" value="T">
			  			<label for="270t">T</label>
			  			<input type="radio" id="270f" name="answer270" value="F">
			  			<label for="270f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 271. I don't blame anyone who uses the purity of others in their own interests</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="271e" name="answer271" value="E" checked>
		  				<input type="radio" id="271t" name="answer271" value="T">
			  			<label for="271t">T</label>
			  			<input type="radio" id="271f" name="answer271" value="F">
			  			<label for="271f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 272. Sometimes I feel energized</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="272e" name="answer272" value="E" checked>
		  				<input type="radio" id="272t" name="answer272" value="T">
			  			<label for="272t">T</label>
			  			<input type="radio" id="272f" name="answer272" value="F">
			  			<label for="272f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 273. I feel numbness in some parts of my skin</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="273e" name="answer273" value="E" checked>
		  				<input type="radio" id="273t" name="answer273" value="T">
			  			<label for="273t">T</label>
			  			<input type="radio" id="273f" name="answer273" value="F">
			  			<label for="273f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 274. My eyesight is as strong as before</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="274e" name="answer274" value="E" checked>
		  				<input type="radio" id="274t" name="answer274" value="T">
			  			<label for="274t">T</label>
			  			<input type="radio" id="274f" name="answer274" value="F">
			  			<label for="274f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 275. Someone is controlling my mind</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="275e" name="answer275" value="E" checked>
		  				<input type="radio" id="275t" name="answer275" value="T">
			  			<label for="275t">T</label>
			  			<input type="radio" id="275f" name="answer275" value="F">
			  			<label for="275f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 276. I like kids</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="276e" name="answer276" value="E" checked>
		  				<input type="radio" id="276t" name="answer276" value="T">
			  			<label for="276t">T</label>
			  			<input type="radio" id="276f" name="answer276" value="F">
			  			<label for="276f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 277. Sometimes the cunning of a madrum entertains me so much that I wish it not to raise the collar</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="277e" name="answer277" value="E" checked>
		  				<input type="radio" id="277t" name="answer277" value="T">
			  			<label for="277t">T</label>
			  			<input type="radio" id="277f" name="answer277" value="F">
			  			<label for="277f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 278. I feel that people I do not know many times look at me critically.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="278e" name="answer278" value="E" checked>
		  				<input type="radio" id="278t" name="answer278" value="T">
			  			<label for="278t">T</label>
			  			<input type="radio" id="278f" name="answer278" value="F">
			  			<label for="278f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 279. I drink more water than necessary every day</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="279e" name="answer279" value="E" checked>
		  				<input type="radio" id="279t" name="answer279" value="T">
			  			<label for="279t">T</label>
			  			<input type="radio" id="279f" name="answer279" value="F">
			  			<label for="279f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 280. Many people make friends because they will benefit them</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="280e" name="answer280" value="E" checked>
		  				<input type="radio" id="280t" name="answer280" value="T">
			  			<label for="280t">T</label>
			  			<input type="radio" id="280f" name="answer280" value="F">
			  			<label for="280f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		<p> 281. My ears ring very little or howling</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="281e" name="answer281" value="E" checked>
		  				<input type="radio" id="281t" name="answer281" value="T">
			  			<label for="281t">T</label>
			  			<input type="radio" id="281f" name="answer281" value="F">
			  			<label for="281f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 282. I often hate family members I love sometimes</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="282e" name="answer282" value="E" checked>
		  				<input type="radio" id="282t" name="answer282" value="T">
			  			<label for="282t">T</label>
			  			<input type="radio" id="282f" name="answer282" value="F">
			  			<label for="282f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 283. If I were a newspaper reporter, I would like to write sports news the most</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="283e" name="answer283" value="E" checked>
		  				<input type="radio" id="283t" name="answer283" value="T">
			  			<label for="283t">T</label>
			  			<input type="radio" id="283f" name="answer283" value="F">
			  			<label for="283f">F</label>	
			  				    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 284. I am sure that a lot has been spoken about me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="284e" name="answer284" value="E" checked>
		  				<input type="radio" id="284t" name="answer284" value="T">
			  			<label for="284t">T</label>
			  			<input type="radio" id="284f" name="answer284" value="F">
			  			<label for="284f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 285. Sometimes I laugh at a racy joke</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="285e" name="answer285" value="E" checked>
		  				<input type="radio" id="285t" name="answer285" value="T">
			  			<label for="285t">T</label>
			  			<input type="radio" id="285f" name="answer285" value="F">
			  			<label for="285f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 286. I am happy when I am lonely</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="286e" name="answer286" value="E" checked>	
		  				<input type="radio" id="286t" name="answer286" value="T">
			  			<label for="286t">T</label>
			  			<input type="radio" id="286f" name="answer286" value="F">
			  			<label for="286f">F</label>
			  				    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 287. Few things scare me compared to my friends</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="287e" name="answer287" value="E" checked>
		  				<input type="radio" id="287t" name="answer287" value="T">
			  			<label for="287t">T</label>
			  			<input type="radio" id="287f" name="answer287" value="F">
			  			<label for="287f">F</label>	
			  				    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 288. Repeated nausea and vomiting distress me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="288e" name="answer288" value="E" checked>
		  				<input type="radio" id="288t" name="answer288" value="T">
			  			<label for="288t">T</label>
			  			<input type="radio" id="288f" name="answer288" value="F">
			  			<label for="288f">F</label>	
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 289. I always hate the law when I get rid of the punishment thanks to the skill of a criminal lawyer</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="289e" name="answer289" value="E" checked>
		  				<input type="radio" id="289t" name="answer289" value="T">
			  			<label for="289t">T</label>
			  			<input type="radio" id="289f" name="answer289" value="F">
			  			<label for="289f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 290. Çok gergin bir hava içinde çalışıyorum</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="290e" name="answer290" value="E" checked>
		  				<input type="radio" id="290t" name="answer290" value="T">
			  			<label for="290t">T</label>
			  			<input type="radio" id="290f" name="answer290" value="F">
			  			<label for="290f">F</label>
			  					    		     
		  </div>
		</div>
		<div class="container">
		  <div class="question">
		    <p> 291. One or more times in my life I felt someone was doing something to me by hypnotizing me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="291e" name="answer291" value="E" checked>
		  				<input type="radio" id="291t" name="answer291" value="T">
			  			<label for="291t">T</label>
			  			<input type="radio" id="291f" name="answer291" value="F">
			  			<label for="291f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 292. I don't start talking to them until others talk to me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="292e" name="answer292" value="E" checked>
		  				<input type="radio" id="292t" name="answer292" value="T">
			  			<label for="292t">T</label>
			  			<input type="radio" id="292f" name="answer292" value="F">
			  			<label for="292f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 293. Someone is trying to affect my mind</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="293e" name="answer293" value="E" checked>
		  				<input type="radio" id="293t" name="answer293" value="T">
			  			<label for="293t">T</label>
			  			<input type="radio" id="293f" name="answer293" value="F">
			  			<label for="293f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 294. I have never been in trouble with the law</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="294e" name="answer294" value="E" checked>
		  				<input type="radio" id="294t" name="answer294" value="T">
			  			<label for="294t">T</label>
			  			<input type="radio" id="294f" name="answer294" value="F">
			  			<label for="294f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 295. I like to read fairy tales</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="295e" name="answer295" value="E" checked>
		  				<input type="radio" id="295t" name="answer295" value="T">
			  			<label for="295t">T</label>
			  			<input type="radio" id="295f" name="answer295" value="F">
			  			<label for="295f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 296. There are times when I feel extremely joyful for no reason</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="296e" name="answer296" value="E" checked>
		  				<input type="radio" id="296t" name="answer296" value="T">
			  			<label for="296t">T</label>
			  			<input type="radio" id="296f" name="answer296" value="F">
			  			<label for="296f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 297. Sexuality thoughts bother me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="297e" name="answer297" value="E" checked>
		  				<input type="radio" id="297t" name="answer297" value="T">
			  			<label for="297t">T</label>
			  			<input type="radio" id="297f" name="answer297" value="F">
			  			<label for="297f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 298. When a few people are in trouble together, it is best to make up the same story and not avoid it to save their collar.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="298e" name="answer298" value="E" checked>
		  				<input type="radio" id="298t" name="answer298" value="T">
			  			<label for="298t">T</label>
			  			<input type="radio" id="298f" name="answer298" value="F">
			  			<label for="298f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 299. I think my feelings are intense from many people</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="299e" name="answer299" value="E" checked>
		  				<input type="radio" id="299t" name="answer299" value="T">
			  			<label for="299t">T</label>
			  			<input type="radio" id="299f" name="answer299" value="F">
			  			<label for="299f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 300. I never liked playing dolls in my life</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="300e" name="answer300" value="E" checked>
		  				<input type="radio" id="300t" name="answer300" value="T">
			  			<label for="300t">T</label>
			  			<input type="radio" id="300f" name="answer300" value="F">
			  			<label for="300f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 301. Often life is a burden to me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="301e" name="answer301" value="E" checked>
		  				<input type="radio" id="301t" name="answer301" value="T">
			  			<label for="301t">T</label>
			  			<input type="radio" id="301f" name="answer301" value="F">
			  			<label for="301f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 302. I have never been in trouble because of my sexual behavior</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="302e" name="answer302" value="E" checked>
		  				<input type="radio" id="302t" name="answer302" value="T">
			  			<label for="302t">T</label>
			  			<input type="radio" id="302f" name="answer302" value="F">
			  			<label for="302f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 303. I'm so touchy on some issues that I don't even talk about them</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="303e" name="answer303" value="E" checked>
		  				<input type="radio" id="303t" name="answer303" value="T">
			  			<label for="303t">T</label>
			  			<input type="radio" id="303f" name="answer303" value="F">
			  			<label for="303f">F</label>
			  						    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 304. Talking in front of class at school would be very difficult for me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="304e" name="answer304" value="E" checked>
		  				<input type="radio" id="304t" name="answer304" value="T">
			  			<label for="304t">T</label>
			  			<input type="radio" id="304f" name="answer304" value="F">
			  			<label for="304f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 305. I feel alone even when I'm with others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="305e" name="answer305" value="E" checked>
		  				<input type="radio" id="305t" name="answer305" value="T">
			  			<label for="305t">T</label>
			  			<input type="radio" id="305f" name="answer305" value="F">
			  			<label for="305f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 306. Showing possible understanding against me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="306e" name="answer306" value="E" checked>
		  				<input type="radio" id="306t" name="answer306" value="T">
			  			<label for="306t">T</label>
			  			<input type="radio" id="306f" name="answer306" value="F">
			  			<label for="306f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 307. I am not willing to play games that I couldn't do well</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="307e" name="answer307" value="E" checked>
		  				<input type="radio" id="307t" name="answer307" value="T">
			  			<label for="307t">T</label>
			  			<input type="radio" id="307f" name="answer307" value="F">
			  			<label for="307f">F</label>
			  						    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 308. From time to time I wanted to leave the house very much</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="308e" name="answer308" value="E" checked>
		  				<input type="radio" id="308t" name="answer308" value="T">
			  			<label for="308t">T</label>
			  			<input type="radio" id="308f" name="answer308" value="F">
			  			<label for="308f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 309. I think I can make friends as quickly as many</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="309e" name="answer309" value="E" checked>	
		  				<input type="radio" id="309t" name="answer309" value="T">
			  			<label for="309t">T</label>
			  			<input type="radio" id="309f" name="answer309" value="F">
			  			<label for="309f">F</label>
			  				    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 310. My sexual life is satisfying</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="310e" name="answer310" value="E" checked>
		  				<input type="radio" id="310t" name="answer310" value="T">
			  			<label for="310t">T</label>
			  			<input type="radio" id="310f" name="answer310" value="F">
			  			<label for="310f">F</label>
			  					    		     
		  </div>
		</div>
		<div class="container">
		  <div class="question">
		    <p> 311. In my youth years, I stole a little things</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="311e" name="answer311" value="E" checked>
		  				<input type="radio" id="311t" name="answer311" value="T">
			  			<label for="311t">T</label>
			  			<input type="radio" id="311f" name="answer311" value="F">
			  			<label for="311f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 312. I don't like being among people</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="312e" name="answer312" value="E" checked>
		  				<input type="radio" id="312t" name="answer312" value="T">
			  			<label for="312t">T</label>
			  			<input type="radio" id="312f" name="answer312" value="F">
			  			<label for="312f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 313. Anyone who leaves his valuables inadvertently in the middle and causes them to be stolen is faulty until he steals it</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="313e" name="answer313" value="E" checked>
		  				<input type="radio" id="313t" name="answer313" value="T">
			  			<label for="313t">T</label>
			  			<input type="radio" id="313f" name="answer313" value="F">
			  			<label for="313f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 314. Occasionally, I think things that are too bad to say</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="314e" name="answer314" value="E" checked>	
		  				<input type="radio" id="314t" name="answer314" value="T">
			  			<label for="314t">T</label>
			  			<input type="radio" id="314f" name="answer314" value="F">
			  			<label for="314f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 315. The bad sides of life have always given me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="315e" name="answer315" value="E" checked>
		  				<input type="radio" id="315t" name="answer315" value="T">
			  			<label for="315t">T</label>
			  			<input type="radio" id="315f" name="answer315" value="F">
			  			<label for="315f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 316. I believe almost everyone can lie to avoid getting into trouble</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="316e" name="answer316" value="E" checked>
		  				<input type="radio" id="316t" name="answer316" value="T">
			  			<label for="316t">T</label>
			  			<input type="radio" id="316f" name="answer316" value="F">
			  			<label for="316f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 317. I'm more sensitive than many people</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="317e" name="answer317" value="E" checked>
		  				<input type="radio" id="317t" name="answer317" value="T">
			  			<label for="317t">T</label>
			  			<input type="radio" id="317f" name="answer317" value="F">
			  			<label for="317f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 318. My daily life is full of things that interest me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="318e" name="answer318" value="E" checked>	
		  				<input type="radio" id="318t" name="answer318" value="T">
			  			<label for="318t">T</label>
			  			<input type="radio" id="318f" name="answer318" value="F">
			  			<label for="318f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 319. Most people don't like to bother to help others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="319e" name="answer319" value="E" checked>
		  				<input type="radio" id="319t" name="answer319" value="T">
			  			<label for="319t">T</label>
			  			<input type="radio" id="319f" name="answer319" value="F">
			  			<label for="319f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 320. Most of my dreams are about sexual issues</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="320e" name="answer320" value="E" checked>
		  				<input type="radio" id="320t" name="answer320" value="T">
			  			<label for="320t">T</label>
			  			<input type="radio" id="320f" name="answer320" value="F">
			  			<label for="320f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 321. I can easily be embarrassed</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="321e" name="answer321" value="E" checked>
		  				<input type="radio" id="321t" name="answer321" value="T">
			  			<label for="321t">T</label>
			  			<input type="radio" id="321f" name="answer321" value="F">
			  			<label for="321f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 322. I worry about money and work</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="322e" name="answer322" value="E" checked>
		  				<input type="radio" id="322t" name="answer322" value="T">
			  			<label for="322t">T</label>
			  			<input type="radio" id="322f" name="answer322" value="F">
			  			<label for="322f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 323. I had very strange and strange things happened to me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="323e" name="answer323" value="E" checked>
		  				<input type="radio" id="323t" name="answer323" value="T">
			  			<label for="323t">T</label>
			  			<input type="radio" id="323f" name="answer323" value="F">
			  			<label for="323f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 324. I never fell in love with anyone</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="324e" name="answer324" value="E" checked>
		  				<input type="radio" id="324t" name="answer324" value="T">
			  			<label for="324t">T</label>
			  			<input type="radio" id="324f" name="answer324" value="F">
			  			<label for="324f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 325. Some things my family did scared me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="325e" name="answer325" value="E" checked>
		  				<input type="radio" id="325t" name="answer325" value="T">
			  			<label for="325t">T</label>
			  			<input type="radio" id="325f" name="answer325" value="F">
			  			<label for="325f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 326. Sometimes I have seizures of laughter and crying that I cannot control</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="326e" name="answer326" value="E" checked>
		  				<input type="radio" id="326t" name="answer326" value="T">
			  			<label for="326t">T</label>
			  			<input type="radio" id="326f" name="answer326" value="F">
			  			<label for="326f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 327. My mom or dad made me obey many orders, which I did not find reasonable</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="327e" name="answer327" value="E" checked>
		  				<input type="radio" id="327t" name="answer327" value="T">
			  			<label for="327t">T</label>
			  			<input type="radio" id="327f" name="answer327" value="F">
			  			<label for="327f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 328. I have difficulty in gathering my mind on a subject or a job</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="328e" name="answer328" value="E" checked>
		  				<input type="radio" id="328t" name="answer328" value="T">
			  			<label for="328t">T</label>
			  			<input type="radio" id="328f" name="answer328" value="F">
			  			<label for="328f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 329. I hardly ever dreamed</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="329e" name="answer329" value="E" checked>
		  				<input type="radio" id="329t" name="answer329" value="T">
			  			<label for="329t">T</label>
			  			<input type="radio" id="329f" name="answer329" value="F">
			  			<label for="329f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 330. I have never had a stroke or an unusual weakness in my muscles</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="330e" name="answer330" value="E" checked>
		  				<input type="radio" id="330t" name="answer330" value="T">
			  			<label for="330t">T</label>
			  			<input type="radio" id="330f" name="answer330" value="F">
			  			<label for="330f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 331. I would be more successful if people didn't block me just because of hostility</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="331e" name="answer331" value="E" checked>
		  				<input type="radio" id="331t" name="answer331" value="T">
			  			<label for="331t">T</label>
			  			<input type="radio" id="331f" name="answer331" value="F">
			  			<label for="331f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 332. Sometimes my voice won't change or change even though I don't have a cold
 
</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="332e" name="answer332" value="E" checked>
		  				<input type="radio" id="332t" name="answer332" value="T">
			  			<label for="332t">T</label>
			  			<input type="radio" id="332f" name="answer332" value="F">
			  			<label for="332f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 333. Nobody understands me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="333e" name="answer333" value="E" checked>
		  				<input type="radio" id="333t" name="answer333" value="T">
			  			<label for="333t">T</label>
			  			<input type="radio" id="333f" name="answer333" value="F">
			  			<label for="333f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 334. Sometimes I hear strange fears</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="334e" name="answer334" value="E" checked>
		  				<input type="radio" id="334t" name="answer334" value="T">
			  			<label for="334t">T</label>
			  			<input type="radio" id="334f" name="answer334" value="F">
			  			<label for="334f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 335. I can't gather my mind on a subject</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="335e" name="answer335" value="E" checked>
		  				<input type="radio" id="335t" name="answer335" value="T">
			  			<label for="335t">T</label>
			  			<input type="radio" id="335f" name="answer335" value="F">
			  			<label for="335f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 336. My patience with people quickly runs out</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="336e" name="answer336" value="E" checked>
		  				<input type="radio" id="336t" name="answer336" value="T">
			  			<label for="336t">T</label>
			  			<input type="radio" id="336f" name="answer336" value="F">
			  			<label for="336f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 337. I mostly get worried and uneasy for some things and nobody</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="337e" name="answer337" value="E" checked>
		  				<input type="radio" id="337t" name="answer337" value="T">
			  			<label for="337t">T</label>
			  			<input type="radio" id="337f" name="answer337" value="F">
			  			<label for="337f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 338. I am sure that most of my life is in more anxiety and worry than anyone's.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="338e" name="answer338" value="E" checked>
		  				<input type="radio" id="338t" name="answer338" value="T">
			  			<label for="338t">T</label>
			  			<input type="radio" id="338f" name="answer338" value="F">
			  			<label for="338f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 339. I would love to be dead most of the time</p>	    		    		   
		  </div>
		  <div class="options">
		  		<input type="hidden" id="339e" name="answer339" value="E" checked>
		  				<input type="radio" id="339t" name="answer339" value="T">
			  			<label for="339t">T</label>
			  			<input type="radio" id="339f" name="answer339" value="F">
			  			<label for="339f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 340. Sometimes I'm so excited that it's hard to fall asleep</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="340e" name="answer340" value="E" checked>
		  				<input type="radio" id="340t" name="answer340" value="T">
			  			<label for="340t">T</label>
			  			<input type="radio" id="340f" name="answer340" value="F">
			  			<label for="340f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 341. Sometimes I hear enough to disturb me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="341e" name="answer341" value="E" checked>
		  				<input type="radio" id="341t" name="answer341" value="T">
			  			<label for="341t">T</label>
			  			<input type="radio" id="341f" name="answer341" value="F">
			  			<label for="341f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 342. I immediately forget what I was told</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="342e" name="answer342" value="E" checked>
		  				<input type="radio" id="342t" name="answer342" value="T">
			  			<label for="342t">T</label>
			  			<input type="radio" id="342" name="answer342" value="F">
			  			<label for="342f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 343. I even stop and think before I decide and start work even in minor things</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="343e" name="answer343" value="E" checked>
		  				<input type="radio" id="343t" name="answer343" value="T">
			  			<label for="343t">T</label>
			  			<input type="radio" id="343f" name="answer343" value="F">
			  			<label for="343f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 344. I often change my way to avoid anyone I see</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="344e" name="answer344" value="E" checked>
		  				<input type="radio" id="344t" name="answer344" value="T">
			  			<label for="344t">T</label>
			  			<input type="radio" id="344f" name="answer344" value="F">
			  			<label for="344f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 345. What often happens is not true</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="345e" name="answer345" value="E" checked>
		  				<input type="radio" id="345t" name="answer345" value="T">
			  			<label for="345t">T</label>
			  			<input type="radio" id="345f" name="answer345" value="F">
			  			<label for="345f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 346. I have the habit of counting trivial things like bulbs in advertisements</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="346e" name="answer346" value="E" checked>
		  				<input type="radio" id="346t" name="answer346" value="T">
			  			<label for="346t">T</label>
			  			<input type="radio" id="346f" name="answer346" value="F">
			  			<label for="346f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 347. I have no enemies who really want to do evil to me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="347e" name="answer347" value="E" checked>
		  				<input type="radio" id="347t" name="answer347" value="T">
			  			<label for="347t">T</label>
			  			<input type="radio" id="347f" name="answer347" value="F">
			  			<label for="347f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 348. I try to be alert to people who show me more friendship than I expected</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="348e" name="answer348" value="E" checked>
		  				<input type="radio" id="348t" name="answer348" value="T">
			  			<label for="348t">T</label>
			  			<input type="radio" id="348f" name="answer348" value="F">
			  			<label for="348f">F</label>
			  						    		     		    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 349. I have strange and strange thoughts</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="349e" name="answer349" value="E" checked>
		  				<input type="radio" id="349t" name="answer349" value="T">
			  			<label for="349t">T</label>
			  			<input type="radio" id="349f" name="answer349" value="F">
			  			<label for="349f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 350. I hear strange things when I'm alone</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="350e" name="answer350" value="E" checked>
		  				<input type="radio" id="350t" name="answer350" value="T">
			  			<label for="350t">T</label>
			  			<input type="radio" id="350f" name="answer350" value="F">
			  			<label for="350f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 351. I'm worried and worried when I leave home, even for a small trip</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="351e" name="answer351" value="E" checked>
		  				<input type="radio" id="351t" name="answer351" value="T">
			  			<label for="351t">T</label>
			  			<input type="radio" id="351f" name="answer351" value="F">
			  			<label for="351f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 352. I was afraid of things or people that I knew wouldn't hurt me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="352e" name="answer352" value="E" checked>
		  				<input type="radio" id="352t" name="answer352" value="T">
			  			<label for="352t">T</label>
			  			<input type="radio" id="352f" name="answer352" value="F">
			  			<label for="352f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 353. I do not hesitate to enter the room where others gather and speak before</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="353e" name="answer353" value="E" checked>
		  				<input type="radio" id="353t" name="answer353" value="T">
			  			<label for="353t">T</label>
			  			<input type="radio" id="353f" name="answer353" value="F">
			  			<label for="353f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 354. I'm afraid to use very sharp and pointed things like a knife</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="354e" name="answer354" value="E" checked>
		  				<input type="radio" id="354t" name="answer354" value="T">
			  			<label for="354t">T</label>
			  			<input type="radio" id="354f" name="answer354" value="F">
			  			<label for="354f">F</label>		    		     
			  			
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 355. Sometimes I like to hurt the people I love</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="355e" name="answer355" value="E" checked>
		  				<input type="radio" id="355t" name="answer355" value="T">
			  			<label for="355t">T</label>
			  			<input type="radio" id="355f" name="answer355" value="F">
			  			<label for="355f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 356. I have more difficulty than many people to focus my attention on a topic</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="356e" name="answer356" value="E" checked>
		  				<input type="radio" id="356t" name="answer356" value="T">
			  			<label for="356t">T</label>
			  			<input type="radio" id="356f" name="answer356" value="F">
			  			<label for="356f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 357. I discontinued the job I started many times because I belittled my talent.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="357e" name="answer357" value="E" checked>
		  				<input type="radio" id="357t" name="answer357" value="T">
			  			<label for="357t">T</label>
			  			<input type="radio" id="357f" name="answer357" value="F">
			  			<label for="357f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 358. Bad and often terrible words will haunt my mind and I can't save myself from these</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="358e" name="answer358" value="E" checked>
		  				<input type="radio" id="358t" name="answer358" value="T">
			  			<label for="358t">T</label>
			  			<input type="radio" id="358f" name="answer358" value="F">
			  			<label for="358f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 359. Sometimes trivial thoughts go through my mind and bother me for daysp>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="359e" name="answer359" value="E" checked>	
		  				<input type="radio" id="359t" name="answer359" value="T">
			  			<label for="359t">T</label>
			  			<input type="radio" id="359f" name="answer359" value="F">
			  			<label for="359f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 360. Something scares me almost every day/p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="360e" name="answer360" value="E" checked>
		  				<input type="radio" id="360t" name="answer360" value="T">
			  			<label for="360t">T</label>
			  			<input type="radio" id="360f" name="answer360" value="F">
			  			<label for="360f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 361. I tend to exhaust everything</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="361e" name="answer361" value="E" checked>
		  				<input type="radio" id="361t" name="answer361" value="T">
			  			<label for="361t">T</label>
			  			<input type="radio" id="361f" name="answer361" value="F">
			  			<label for="361f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 362. I am more sensitive than many people</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="362e" name="answer362" value="E" checked>
		  				<input type="radio" id="362t" name="answer362" value="T">
			  			<label for="362t">T</label>
			  			<input type="radio" id="362f" name="answer362" value="F">
			  			<label for="362f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 363. Sometimes I liked the way I loved people hurt me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="363e" name="answer363" value="E" checked>
		  				<input type="radio" id="363t" name="answer363" value="T">
			  			<label for="363t">T</label>
			  			<input type="radio" id="363f" name="answer363" value="F">
			  			<label for="363f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 364. They say humiliating and bad words about me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="364e" name="answer364" value="E" checked>
		  				<input type="radio" id="364t" name="answer364" value="T">
			  			<label for="364t">T</label>
			  			<input type="radio" id="364f" name="answer364" value="F">
			  			<label for="364f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 365. Ev yapılırken neler kullanılır?</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="365e" name="answer365" value="E" checked>
		  				<input type="radio" id="365t" name="answer365" value="T">
			  			<label for="365t">T</label>
			  			<input type="radio" id="365f" name="answer365" value="F">
			  			<label for="365f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 366. Even if I am in people, I feel so lonely</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="366e" name="answer366" value="E" checked>
		  				<input type="radio" id="366t" name="answer366" value="T">
			  			<label for="366t">T</label>
			  			<input type="radio" id="366f" name="answer366" value="F">
			  			<label for="366f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 367. I am not afraid of fire</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="367e" name="answer367" value="E" checked>
		  				<input type="radio" id="367t" name="answer367" value="T">
			  			<label for="367t">T</label>
			  			<input type="radio" id="367f" name="answer367" value="F">
			  			<label for="367f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 368. Sometimes I avoided anyone for fear of doing or saying things that I would regret later.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="368e" name="answer368" value="E" checked>
		  				<input type="radio" id="368t" name="answer368" value="T">
			  			<label for="368t">T</label>
			  			<input type="radio" id="368f" name="answer368" value="F">
			  			<label for="368f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 369. I have not been able to do many things that need to be done because of my indecision</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="369e" name="answer369" value="E" checked>
		  				<input type="radio" id="369t" name="answer369" value="T">
			  			<label for="369t">T</label>
			  			<input type="radio" id="369f" name="answer369" value="F">
			  			<label for="369f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 370. I hate having to hurry while working</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="370e" name="answer370" value="E" checked>
		  				<input type="radio" id="370t" name="answer370" value="T">
			  			<label for="370t">T</label>
			  			<input type="radio" id="370f" name="answer370" value="F">
			  			<label for="370f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 371. I'm not an overly self-listening person</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="371e" name="answer371" value="E" checked>
		  				<input type="radio" id="371t" name="answer371" value="T">
			  			<label for="371t">T</label>
			  			<input type="radio" id="371f" name="answer371" value="F">
			  			<label for="371f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 372. I would like to do my job in the best way</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="372e" name="answer372" value="E" checked>
		  				<input type="radio" id="372t" name="answer372" value="T">
			  			<label for="372t">T</label>
			  			<input type="radio" id="372f" name="answer372" value="F">
			  			<label for="372f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 373. I'm sure there is only one true religion</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="373e" name="answer373" value="E" checked>
		  				<input type="radio" id="373t" name="answer373" value="T">
			  			<label for="373t">T</label>
			  			<input type="radio" id="373f" name="answer373" value="F">
			  			<label for="373f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 374. Occasionally my mind works harder than ever</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="374e" name="answer374" value="E" checked>
		  				<input type="radio" id="374t" name="answer374" value="T">
			  			<label for="374t">T</label>
			  			<input type="radio" id="374f" name="answer374" value="F">
			  			<label for="374f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 375. When I am very happy and work well, meeting a cheerless or troubled person completely misses my pleasure</p>	    		    		   
		  </div>
		  <div class="options">
		  		<input type="hidden" id="375e" name="answer375" value="E" checked>
		  				<input type="radio" id="375t" name="answer375" value="T">
			  			<label for="375t">T</label>
			  			<input type="radio" id="375f" name="answer375" value="F">
			  			<label for="375f">F</label>	
	    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 376. Cops are generally honest</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="376e" name="answer376" value="E" checked>
		  				<input type="radio" id="376t" name="answer376" value="T">
			  			<label for="376t">T</label>
			  			<input type="radio" id="376f" name="answer376" value="F">
			  			<label for="376f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 377. Rather than getting involved in the crowd at meetings, I sit alone or chat with a single person</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="377e" name="answer377" value="E" checked>
		  				<input type="radio" id="377t" name="answer377" value="T">
			  			<label for="377t">T</label>
			  			<input type="radio" id="377f" name="answer377" value="F">
			  			<label for="377f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 378. I don't like seeing women smoking</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="378e" name="answer378" value="E" checked>
		  				<input type="radio" id="378t" name="answer378" value="T">
			  			<label for="378t">T</label>
			  			<input type="radio" id="378f" name="answer378" value="F">
			  			<label for="378f">F</label>	
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 379. I rarely get pessimistic</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="379e" name="answer379" value="E" checked>
		  				<input type="radio" id="379t" name="answer379" value="T">
			  			<label for="379t">T</label>
			  			<input type="radio" id="379f" name="answer379" value="F">
			  			<label for="379f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 380. I can't enjoy what I do</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="380e" name="answer380" value="E" checked>
		  				<input type="radio" id="380t" name="answer380" value="T">
			  			<label for="380t">T</label>
			  			<input type="radio" id="380f" name="answer380" value="F">
			  			<label for="380f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		<p> 381. They say I'm an easy temper</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="381e" name="answer381" value="E" checked>
		  				<input type="radio" id="381t" name="answer381" value="T">
			  			<label for="381t">T</label>
			  			<input type="radio" id="381f" name="answer381" value="F">
			  			<label for="381f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 382. When I decide what I want to do, I don't take into account what others will think</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="382e" name="answer382" value="E" checked>
		  				<input type="radio" id="382t" name="answer382" value="T">
			  			<label for="382t">T</label>
			  			<input type="radio" id="382f" name="answer382" value="F">
			  			<label for="382f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 383. People often disappoint me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="383e" name="answer383" value="E" checked>
		  				<input type="radio" id="383t" name="answer383" value="T">
			  			<label for="383t">T</label>
			  			<input type="radio" id="383f" name="answer383" value="F">
			  			<label for="383f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 384. There is no one I can tell everything about myself</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="384e" name="answer384" value="E" checked>
		  				<input type="radio" id="384t" name="answer384" value="T">
			  			<label for="384t">T</label>
			  			<input type="radio" id="384f" name="answer384" value="F">
			  			<label for="384f">F</label>
			  			

		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 385. The flash of lightning is also one of my fears</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="385e" name="answer385" value="E" checked>
		  				<input type="radio" id="385t" name="answer385" value="T">
			  			<label for="385t">T</label>
			  			<input type="radio" id="385f" name="answer385" value="F">
			  			<label for="385f">F</label>	
			  				    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 386. I'm very organized and meticulous</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="386e" name="answer386" value="E" checked>
		  				<input type="radio" id="386t" name="answer386" value="T">
			  			<label for="386t">T</label>
			  			<input type="radio" id="386f" name="answer386" value="F">
			  			<label for="386f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 387. My family is too involved in every behavior</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="387e" name="answer387" value="E" checked>
		  				<input type="radio" id="387t" name="answer387" value="T">
			  			<label for="387t">T</label>
			  			<input type="radio" id="387f" name="answer387" value="F">
			  			<label for="387f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 388. I'm afraid of being alone in the dark</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="388e" name="answer388" value="E" checked>
		  				<input type="radio" id="388t" name="answer388" value="T">
			  			<label for="388t">T</label>
			  			<input type="radio" id="388f" name="answer388" value="F">
			  			<label for="388f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 389. The plans I designed seemed so full of difficulties that I had to give up these</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="389e" name="answer389" value="E" checked>	
		  				<input type="radio" id="389t" name="answer389" value="T">
			  			<label for="389t">T</label>
			  			<input type="radio" id="389f" name="answer389" value="F">
			  			<label for="389f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 390. I am very sorry that my effort to prevent someone's mistake is misunderstood</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="390e" name="answer390" value="E" checked>
		  				<input type="radio" id="390t" name="answer390" value="T">
			  			<label for="390t">T</label>
			  			<input type="radio" id="390f" name="answer390" value="F">
			  			<label for="390f">F</label>
			  					    		     
		  </div>
		</div>
		<div class="container">
		  <div class="question">
		    <p> 391. I like going to dance</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="391e" name="answer391" value="E" checked>	
		  				<input type="radio" id="391t" name="answer391" value="T">
			  			<label for="391t">T</label>
			  			<input type="radio" id="391f" name="answer931" value="F">
			  			<label for="391f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 392. I'm very afraid of the storm</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="392e" name="answer392" value="E" checked>
		  				<input type="radio" id="392t" name="answer392" value="T">
			  			<label for="392t">T</label>
			  			<input type="radio" id="392f" name="answer392" value="F">
			  			<label for="392f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 393. Horses that do not load should be beaten or whipped.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="393e" name="answer393" value="E" checked>
		  				<input type="radio" id="393t" name="answer393" value="T">
			  			<label for="393t">T</label>
			  			<input type="radio" id="393f" name="answer393" value="F">
			  			<label for="393f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 394. I often consult others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="394e" name="answer394" value="E" checked>
		  				<input type="radio" id="394t" name="answer394" value="T">
			  			<label for="394t">T</label>
			  			<input type="radio" id="394f" name="answer394" value="F">
			  			<label for="394f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 395. The future is so uncertain that a person cannot make serious plans</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="395e" name="answer395" value="E" checked>
		  				<input type="radio" id="395t" name="answer395" value="T">
			  			<label for="395t">T</label>
			  			<input type="radio" id="395f" name="answer395" value="F">
			  			<label for="395f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 396. Even when things go well, I often feel that I am indifferent to everything.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="396e" name="answer396" value="E" checked>
		  				<input type="radio" id="396t" name="answer396" value="T">
			  			<label for="396t">T</label>
			  			<input type="radio" id="396f" name="answer396" value="F">
			  			<label for="396f">F</label>
			  			

		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 397. Sometimes the difficulties overlap so much that I feel like I can't deal with them</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="397e" name="answer397" value="E" checked>
		  				<input type="radio" id="397t" name="answer397" value="T">
			  			<label for="397t">T</label>
			  			<input type="radio" id="397f" name="answer397" value="F">
			  			<label for="397f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 398. Often I wish I would be a kid again</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="398e" name="answer398" value="E" checked>
		  				<input type="radio" id="398t" name="answer398" value="T">
			  			<label for="398t">T</label>
			  			<input type="radio" id="398f" name="answer398" value="F">
			  			<label for="398f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 399. I don't get angry easily</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="399e" name="answer399" value="E" checked>
		  				<input type="radio" id="399t" name="answer399" value="T">
			  			<label for="399t">T</label>
			  			<input type="radio" id="399f" name="answer399" value="F">
			  			<label for="399f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 400. If I am given the opportunity, I can do very useful things for the world</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="400e" name="answer400" value="E" checked>
		  				<input type="radio" id="400t" name="answer400" value="T">
			  			<label for="400t">T</label>
			  			<input type="radio" id="400f" name="answer400" value="F">
			  			<label for="400f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 401. I'm never afraid of water</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="401e" name="answer401" value="E" checked>
		  				<input type="radio" id="401t" name="answer401" value="T">
			  			<label for="401t">T</label>
			  			<input type="radio" id="401f" name="answer401" value="F">
			  			<label for="401f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 402. I think long before I decide what to do</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="402e" name="answer402" value="E" checked>
		  				<input type="radio" id="402t" name="answer402" value="T">
			  			<label for="402t">T</label>
			  			<input type="radio" id="402f" name="answer402" value="F">
			  			<label for="402f">F</label>	
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 403. It is nice to live in such a period where many things are happening</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="403e" name="answer403" value="E" checked>
		  				<input type="radio" id="403t" name="answer403" value="T">
			  			<label for="403t">T</label>
			  			<input type="radio" id="403f" name="answer403" value="F">
			  			<label for="403f">F</label>
			  			
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 404. People I try to help themselves by correcting their mistakes often misunderstand my purpose</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="404e" name="answer404" value="E" checked>
		  				<input type="radio" id="404t" name="answer404" value="T">
			  			<label for="404t">T</label>
			  			<input type="radio" id="404f" name="answer404" value="F">
			  			<label for="404f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 405. I have no difficulty swallowing</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="405e" name="answer405" value="E" checked>
		  				<input type="radio" id="405t" name="answer405" value="T">
			  			<label for="405t">T</label>
			  			<input type="radio" id="405f" name="answer405" value="F">
			  			<label for="405f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 406. I often meet people who are not very knowledgeable of me even though they are called experts</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="406e" name="answer406" value="E" checked>
		  				<input type="radio" id="406t" name="answer406" value="T">
			  			<label for="406t">T</label>
			  			<input type="radio" id="406f" name="answer406" value="F">
			  			<label for="406f">F</label>	
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 407. In general I am calm and do not get angry easily</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="407e" name="answer407" value="E" checked>
		  				<input type="radio" id="407t" name="answer407" value="T">
			  			<label for="407t">T</label>
			  			<input type="radio" id="407f" name="answer407" value="F">
			  			<label for="407f">F</label>	
			  				    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 408. I can hide my feelings about some issues so much that people can hurt me unknowingly</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="408e" name="answer408" value="E" checked>
		  				<input type="radio" id="408t" name="answer408" value="T">
			  			<label for="408t">T</label>
			  			<input type="radio" id="408f" name="answer408" value="F">
			  			<label for="408f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 409. I quarreled from something very small before I got it and break the other person</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="409e" name="answer409" value="E" checked>
		  				<input type="radio" id="409t" name="answer409" value="T">
			  			<label for="409t">T</label>
			  			<input type="radio" id="409f" name="answer409" value="F">
			  			<label for="409f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 410. I like to beat huckster mine with his own gun</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="410e" name="answer410" value="E" checked>
		  				<input type="radio" id="410t" name="answer410" value="T">
			  			<label for="410t">T</label>
			  			<input type="radio" id="410f" name="answer410" value="F">
			  			<label for="410f">F</label>
			  						    		     
		  </div>
		</div>
		<div class="container">
		  <div class="question">
		    <p> 411. When I hear the success of a person I know well, I feel like I have failed</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="411e" name="answer411" value="E" checked>
		  				<input type="radio" id="411t" name="answer411" value="T">
			  			<label for="411t">T</label>
			  			<input type="radio" id="411f" name="answer411" value="F">
			  			<label for="411f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 412. I am not afraid to go to the doctor when I get sick</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="412e" name="answer412" value="E" checked>
		  				<input type="radio" id="412t" name="answer412" value="T">
			  			<label for="412t">T</label>
			  			<input type="radio" id="412f" name="answer412" value="F">
			  			<label for="412f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 413. How heavily punished I am for my sins</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="413e" name="answer413" value="E" checked>	
		  				<input type="radio" id="413t" name="answer413" value="T">
			  			<label for="413t">T</label>
			  			<input type="radio" id="413f" name="answer413" value="F">
			  			<label for="413f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 414. I take the frustrations so seriously that I can't take them out of my mind</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="414e" name="answer414" value="E" checked>
		  				<input type="radio" id="414t" name="answer414" value="T">
			  			<label for="414t">T</label>
			  			<input type="radio" id="414f" name="answer414" value="F">
			  			<label for="414f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 415. I'll be a good leader if given the opportunity</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="415e" name="answer415" value="E" checked>
		  				<input type="radio" id="415t" name="answer415" value="T">
			  			<label for="415t">T</label>
			  			<input type="radio" id="415f" name="answer415" value="F">
			  			<label for="415f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 416. I am very concerned about the health of my relatives</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="416e" name="answer416" value="E" checked>
		  				<input type="radio" id="416t" name="answer416" value="T">
			  			<label for="416t">T</label>
			  			<input type="radio" id="416f" name="answer416" value="F">
			  			<label for="416f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 417. If someone tries to get in front of me while I'm waiting in line, I'll go to him</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="417e" name="answer417" value="E" checked>
		  				<input type="radio" id="417t" name="answer417" value="T">
			  			<label for="417t">T</label>
			  			<input type="radio" id="417f" name="answer417" value="F">
			  			<label for="417f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 418. Sometimes I think I am useless</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="418e" name="answer418" value="E" checked>
		  				<input type="radio" id="418t" name="answer418" value="T">
			  			<label for="418t">T</label>
			  			<input type="radio" id="418f" name="answer418" value="F">
			  			<label for="418f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 419. I often fled school when I was little</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="419e" name="answer419" value="E" checked>	
		  				<input type="radio" id="419t" name="answer419" value="T">
			  			<label for="4219t">T</label>
			  			<input type="radio" id="419f" name="answer419" value="F">
			  			<label for="419f">F</label>
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 420. Extraordinary experiences about religion passed by my head</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="420e" name="answer420" value="E" checked>
		  				<input type="radio" id="420t" name="answer420" value="T">
			  			<label for="420t">T</label>
			  			<input type="radio" id="420f" name="answer420" value="F">
			  			<label for="420f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 421. There are very angry people in my family</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="421e" name="answer421" value="E" checked>
		  				<input type="radio" id="421t" name="answer421" value="T">
			  			<label for="421t">T</label>
			  			<input type="radio" id="421f" name="answer421" value="F">
			  			<label for="421f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 422. The work that some people have done in my family has embarrassed me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="422e" name="answer422" value="E" checked>
		  				<input type="radio" id="422t" name="answer422" value="T">
			  			<label for="422t">T</label>
			  			<input type="radio" id="422f" name="answer422" value="F">
			  			<label for="422f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 423. I love fishing</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="423e" name="answer423" value="E" checked>
		  				<input type="radio" id="423t" name="answer423" value="T">
			  			<label for="423t">T</label>
			  			<input type="radio" id="423f" name="answer423" value="F">
			  			<label for="423f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 424. I am almost always hungry</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="424e" name="answer424" value="E" checked>
		  				<input type="radio" id="424t" name="answer424" value="T">
			  			<label for="424t">T</label>
			  			<input type="radio" id="424f" name="answer424" value="F">
			  			<label for="424f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 425. I often dream</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="425e" name="answer425" value="E" checked>
		  				<input type="radio" id="425t" name="answer425" value="T">
			  			<label for="425t">T</label>
			  			<input type="radio" id="425f" name="answer425" value="F">
			  			<label for="425f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 426. It happens that sometimes I behave harshly against vulgar or annoying people</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="426e" name="answer426" value="E" checked>
		  				<input type="radio" id="426t" name="answer426" value="T">
			  			<label for="426t">T</label>
			  			<input type="radio" id="426f" name="answer426" value="F">
			  			<label for="426f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 427. I feel embarrassed and offended by racy stories</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="427e" name="answer427" value="E" checked>
		  				<input type="radio" id="427t" name="answer427" value="T">
			  			<label for="427t">T</label>
			  			<input type="radio" id="427f" name="answer427" value="F">
			  			<label for="427f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 428. I like to read the editorials of the newspapers</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="428e" name="answer428" value="E" checked>
		  				<input type="radio" id="428t" name="answer428" value="T">
			  			<label for="428t">T</label>
			  			<input type="radio" id="428f" name="answer428" value="F">
			  			<label for="428f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 429. I like to listen to lectures on serious topics</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="429e" name="answer429" value="E" checked>
		  				<input type="radio" id="429t" name="answer429" value="T">
			  			<label for="429t">T</label>
			  			<input type="radio" id="429f" name="answer429" value="F">
			  			<label for="429f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 430. I find those of the opposite sex attractive</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="430e" name="answer430" value="E" checked>
		  				<input type="radio" id="430t" name="answer430" value="T">
			  			<label for="430t">T</label>
			  			<input type="radio" id="430f" name="answer430" value="F">
			  			<label for="430f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 431. The misfortunes that can cope make me very worried</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="431e" name="answer431" value="E" checked>
		  				<input type="radio" id="431t" name="answer431" value="T">
			  			<label for="431t">T</label>
			  			<input type="radio" id="431f" name="answer431" value="F">
			  			<label for="431f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 432. I have strong political ideas</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="432e" name="answer432" value="E" checked>
		  				<input type="radio" id="432t" name="answer432" value="T">
			  			<label for="432t">T</label>
			  			<input type="radio" id="432f" name="answer432" value="F">
			  			<label for="432f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 433. I once had fictitious friends/p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="433e" name="answer433" value="E" checked>
		  				<input type="radio" id="433t" name="answer433" value="T">
			  			<label for="433t">T</label>
			  			<input type="radio" id="433f" name="answer433" value="F">
			  			<label for="433f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 434. I would like to be an auto racer</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="434e" name="answer434" value="E" checked>
		  				<input type="radio" id="434t" name="answer434" value="T">
			  			<label for="434t">T</label>
			  			<input type="radio" id="434f" name="answer434" value="F">
			  			<label for="434f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 435. I generally prefer working with women</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="435e" name="answer435" value="E" checked>
		  				<input type="radio" id="435t" name="answer435" value="T">
			  			<label for="435t">T</label>
			  			<input type="radio" id="435f" name="answer435" value="F">
			  			<label for="435f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 436. People generally want their rights to be respected rather than respecting the rights of others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="436e" name="answer436" value="E" checked>
		  				<input type="radio" id="436t" name="answer436" value="T">
			  			<label for="436t">T</label>
			  			<input type="radio" id="436f" name="answer436" value="F">
			  			<label for="436f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 437. There is no harm in taking advantage of a law without violating the law</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="437e" name="answer437" value="E" checked>
		  				<input type="radio" id="437t" name="answer437" value="T">
			  			<label for="437t">T</label>
			  			<input type="radio" id="437f" name="answer437" value="F">
			  			<label for="437f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 438. I hate some people so much when I find what they do, I say oh</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="438e" name="answer438" value="E" checked>
		  				<input type="radio" id="438t" name="answer438" value="T">
			  			<label for="438t">T</label>
			  			<input type="radio" id="438f" name="answer438" value="F">
			  			<label for="438f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 439. Having to wait makes me angry</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="439e" name="answer439" value="E" checked>
		  				<input type="radio" id="439t" name="answer439" value="T">
			  			<label for="439t">T</label>
			  			<input type="radio" id="439f" name="answer439" value="F">
			  			<label for="439f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 440. I try to keep the nice jokes in my mind to tell others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="440e" name="answer440" value="E" checked>
		  				<input type="radio" id="440t" name="answer440" value="T">
			  			<label for="440t">T</label>
			  			<input type="radio" id="440f" name="answer440" value="F">
			  			<label for="440f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 441. I like tall women</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="441e" name="answer441" value="E" checked>
		  				<input type="radio" id="441t" name="answer441" value="T">
			  			<label for="441t">T</label>
			  			<input type="radio" id="441f" name="answer441" value="F">
			  			<label for="441f">F</label>	
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 442. There were times when I couldn't sleep because of sadness</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="442e" name="answer442" value="E" checked>
		  				<input type="radio" id="442t" name="answer442" value="T">
			  			<label for="442t">T</label>
			  			<input type="radio" id="442" name="answer442" value="F">
			  			<label for="442f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 443. I gave up doing things that people thought I couldn't do properly</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="443e" name="answer443" value="E" checked>
		  				<input type="radio" id="443t" name="answer443" value="T">
			  			<label for="443t">T</label>
			  			<input type="radio" id="443f" name="answer443" value="F">
			  			<label for="443f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 444. I do not try to correct the ignorant beliefs of others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="444e" name="answer444" value="E" checked>
		  				<input type="radio" id="444t" name="answer444" value="T">
			  			<label for="444t">T</label>
			  			<input type="radio" id="444f" name="answer444" value="F">
			  			<label for="444f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 445. I liked doing exciting things when I was little</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="445e" name="answer445" value="E" checked>
		  				<input type="radio" id="445t" name="answer445" value="T">
			  			<label for="445t">T</label>
			  			<input type="radio" id="445f" name="answer445" value="F">
			  			<label for="445f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 446. I like gambling with little money</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="446e" name="answer446" value="E" checked>
		  				<input type="radio" id="446t" name="answer446" value="T">
			  			<label for="446t">T</label>
			  			<input type="radio" id="446f" name="answer446" value="F">
			  			<label for="446f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 447. The dream of my own sex in masturbation provokes me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="447e" name="answer447" value="E" checked>	
		  				<input type="radio" id="447t" name="answer447" value="T">
			  			<label for="447t">T</label>
			  			<input type="radio" id="447f" name="answer447" value="F">
			  			<label for="447f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 448. I'm disturbed by people looking at me on the street, in buses and shops</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="448e" name="answer448" value="E" checked>
		  				<input type="radio" id="448t" name="answer448" value="T">
			  			<label for="448t">T</label>
			  			<input type="radio" id="448f" name="answer448" value="F">
			  			<label for="448f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 49. I like meetings and invitations as it allows people to be together</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="449e" name="answer449" value="E" checked>
		  				<input type="radio" id="449t" name="answer449" value="T">
			  			<label for="449t">T</label>
			  			<input type="radio" id="449f" name="answer449" value="F">
			  			<label for="449f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 450. I like the enthusiasm of the crowd</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="450e" name="answer450" value="E" checked>
		  				<input type="radio" id="450t" name="answer450" value="T">
			  			<label for="450t">T</label>
			  			<input type="radio" id="450f" name="answer450" value="F">
			  			<label for="450f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 451. I forget my sadness when I am among the cheerful friends</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="451e" name="answer451" value="E" checked>	
		  				<input type="radio" id="451t" name="answer451" value="T">
			  			<label for="451t">T</label>
			  			<input type="radio" id="451f" name="answer451" value="F">
			  			<label for="451f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 452. I can't make friends</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="452e" name="answer452" value="E" checked>
		  				<input type="radio" id="452t" name="answer452" value="T">
			  			<label for="452t">T</label>
			  			<input type="radio" id="452f" name="answer452" value="F">
			  			<label for="452f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 453. When I was little I wouldn't like to join friends or peer groups in the neighborhood</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="453e" name="answer453" value="E" checked>
		  				<input type="radio" id="453t" name="answer453" value="T">
			  			<label for="453t">T</label>
			  			<input type="radio" id="453f" name="answer453" value="F">
			  			<label for="453f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 454. I can be happy to live alone in a hut in the forest or mountain</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="454e" name="answer454" value="E" checked>
		  				<input type="radio" id="454t" name="answer454" value="T">
			  			<label for="454t">T</label>
			  			<input type="radio" id="454f" name="answer454" value="F">
			  			<label for="454f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 455. I am not the subject of the rumors and speeches of the group I am in.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="455e" name="answer455" value="E" checked>
		  				<input type="radio" id="455t" name="answer455" value="T">
			  			<label for="455t">T</label>
			  			<input type="radio" id="455f" name="answer455" value="F">
			  			<label for="455f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 456. Because of their unlawful actions that people find unreasonable
should not be punished</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="456e" name="answer456" value="E" checked>
		  				<input type="radio" id="456t" name="answer456" value="T">
			  			<label for="456t">T</label>
			  			<input type="radio" id="456f" name="answer456" value="F">
			  			<label for="456f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 457. I think one should never take alcoholic beverages into your mouth</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="457e" name="answer457" value="E" checked>
		  				<input type="radio" id="457t" name="answer457" value="T">
			  			<label for="457t">T</label>
			  			<input type="radio" id="457f" name="answer457" value="F">
			  			<label for="457f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 458. My boyfriend, stepfather, etc., who were most interested in me as a child, would have been very hard on me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="458e" name="answer458" value="E" checked>
		  				<input type="radio" id="458t" name="answer458" value="T">
			  			<label for="458t">T</label>
			  			<input type="radio" id="458f" name="answer458" value="F">
			  			<label for="458f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 459. I have some bad habits that I know I can't beat with effort</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="459e" name="answer459" value="E" checked>
		  				<input type="radio" id="459t" name="answer459" value="T">
			  			<label for="459t">T</label>
			  			<input type="radio" id="459f" name="answer459" value="F">
			  			<label for="459f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 460. I used little or never alcohol</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="460e" name="answer460" value="E" checked>
		  				<input type="radio" id="460t" name="answer460" value="T">
			  			<label for="460t">T</label>
			  			<input type="radio" id="460f" name="answer460" value="F">
			  			<label for="460f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 461. It is difficult for me to leave aside what I started, even for a short time.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="461e" name="answer461" value="E" checked>
		  				<input type="radio" id="461t" name="answer461" value="T">
			  			<label for="461t">T</label>
			  			<input type="radio" id="461f" name="answer461" value="F">
			  			<label for="461f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 462. Difficulty in making or holding my little ablution</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="462e" name="answer462" value="E" checked>
		  				<input type="radio" id="462t" name="answer462" value="T">
			  			<label for="462t">T</label>
			  			<input type="radio" id="462f" name="answer462" value="F">
			  			<label for="462f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 463. I enjoyed playing "Sek Sek"</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="463e" name="answer463" value="E" checked>
		  				<input type="radio" id="463t" name="answer463" value="T">
			  			<label for="463t">T</label>
			  			<input type="radio" id="463f" name="answer463" value="F">
			  			<label for="463f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 464. I never dreamed</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="464e" name="answer464" value="E" checked>
		  				<input type="radio" id="464t" name="answer464" value="T">
			  			<label for="464t">T</label>
			  			<input type="radio" id="464f" name="answer464" value="F">
			  			<label for="464f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 465. I've been losing enthusiasm for what I've been doing a few times in my life</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="465e" name="answer465" value="E" checked>
		  				<input type="radio" id="465t" name="answer465" value="T">
			  			<label for="465t">T</label>
			  			<input type="radio" id="465f" name="answer465" value="F">
			  			<label for="465f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 466. I have not used any medication or sleeping pills except the doctor's recommendation</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="466e" name="answer466" value="E" checked>
		  				<input type="radio" id="466t" name="answer466" value="T">
			  			<label for="466t">T</label>
			  			<input type="radio" id="466f" name="answer466" value="F">
			  			<label for="466f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 467. Many times I memorize the numbers that are not important, such as cars and license plates.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="467e" name="answer467" value="E" checked>
		  				<input type="radio" id="467t" name="answer467" value="T">
			  			<label for="467t">T</label>
			  			<input type="radio" id="467f" name="answer467" value="F">
			  			<label for="467f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 468. I often get angry and sullen</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="468e" name="answer468" value="E" checked>
		  				<input type="radio" id="468t" name="answer468" value="T">
			  			<label for="468t">T</label>
			  			<input type="radio" id="468f" name="answer468" value="F">
			  			<label for="468f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 469. Others are jealous of my ideas because I thought before them</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="469e" name="answer469" value="E" checked>
		  				<input type="radio" id="469t" name="answer469" value="T">
			  			<label for="469t">T</label>
			  			<input type="radio" id="469f" name="answer469" value="F">
			  			<label for="469f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 470. I hate sex-related things</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="470e" name="answer470" value="E" checked>
		  				<input type="radio" id="470t" name="answer470" value="T">
			  			<label for="470t">T</label>
			  			<input type="radio" id="470f" name="answer470" value="F">
			  			<label for="470f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 471. I would get a broken note from school and going</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="471e" name="answer471" value="E" checked>
		  				<input type="radio" id="471t" name="answer471" value="T">
			  			<label for="471t">T</label>
			  			<input type="radio" id="471f" name="answer471" value="F">
			  			<label for="471f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 472. I would be enchanted by the fire</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="472e" name="answer472" value="E" checked>
		  				<input type="radio" id="472t" name="answer472" value="T">
			  			<label for="472t">T</label>
			  			<input type="radio" id="472f" name="answer472" value="F">
			  			<label for="472f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 473. I try to stay away from the crowd as much as possible</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="473e" name="answer473" value="E" checked>
		  				<input type="radio" id="473t" name="answer473" value="T">
			  			<label for="473t">T</label>
			  			<input type="radio" id="473f" name="answer473" value="F">
			  			<label for="473f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 474. I do not have small ablutions more often than others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="474e" name="answer474" value="E" checked>
		  				<input type="radio" id="474t" name="answer474" value="T">
			  			<label for="474t">T</label>
			  			<input type="radio" id="474f" name="answer474" value="F">
			  			<label for="474f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 475. When I get compressed, I tell you the part of the truth that won't hurt me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="475e" name="answer475" value="E" checked>
		  				<input type="radio" id="475t" name="answer475" value="T">
			  			<label for="475t">T</label>
			  			<input type="radio" id="475f" name="answer475" value="F">
			  			<label for="475f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 476. God has given me a special mission</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="476e" name="answer476" value="E" checked>
		  				<input type="radio" id="476t" name="answer476" value="T">
			  			<label for="476t">T</label>
			  			<input type="radio" id="476f" name="answer476" value="F">
			  			<label for="476f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 477. When I am equally guilty of a crime I have committed with my friends, I would rather take all the blame on me than to give them away.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="477e" name="answer477" value="E" checked>
		  				<input type="radio" id="477t" name="answer477" value="T">
			  			<label for="477t">T</label>
			  			<input type="radio" id="477f" name="answer477" value="F">
			  			<label for="477f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 478. I wish I had come from a very different family environment</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="478e" name="answer478" value="E" checked>
		  				<input type="radio" id="478t" name="answer478" value="T">
			  			<label for="478t">T</label>
			  			<input type="radio" id="478f" name="answer478" value="F">
			  			<label for="478f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 479. I do not hesitate to meet strangers</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="479e" name="answer479" value="E" checked>
		  				<input type="radio" id="479t" name="answer479" value="T">
			  			<label for="479t">T</label>
			  			<input type="radio" id="479f" name="answer479" value="F">
			  			<label for="479f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 480. I'm afraid of the dark many times</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="480e" name="answer480" value="E" checked>	
		  				<input type="radio" id="480t" name="answer480" value="T">
			  			<label for="480t">T</label>
			  			<input type="radio" id="480f" name="answer480" value="F">
			  			<label for="480f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		<p> 481. I have been sick number to get rid of something</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="481e" name="answer481" value="E" checked>
		  				<input type="radio" id="481t" name="answer481" value="T">
			  			<label for="481t">T</label>
			  			<input type="radio" id="481f" name="answer481" value="F">
			  			<label for="481f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 482. I talk to people I come across on the train, bus etc. many times.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="482e" name="answer482" value="E" checked>
		  				<input type="radio" id="482t" name="answer482" value="T">
			  			<label for="482t">T</label>
			  			<input type="radio" id="482f" name="answer482" value="F">
			  			<label for="482f">F</label>	
			  				    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 483. Our Prophet showed miracles like going up to the sky
 
</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="483e" name="answer483" value="E" checked>
		  				<input type="radio" id="483t" name="answer483" value="T">
			  			<label for="483t">T</label>
			  			<input type="radio" id="483f" name="answer483" value="F">
			  			<label for="483f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 484. I find homosexuality very disgusting</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="484e" name="answer484" value="E" checked>
		  				<input type="radio" id="484t" name="answer484" value="T">
			  			<label for="484t">T</label>
			  			<input type="radio" id="484f" name="answer484" value="F">
			  			<label for="484f">F</label>
			  						    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 485. When a man is with a woman, she generally thinks about her gender.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="485e" name="answer485" value="E" checked>
		  				<input type="radio" id="485t" name="answer485" value="T">
			  			<label for="485t">T</label>
			  			<input type="radio" id="485f" name="answer845" value="F">
			  			<label for="485f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 486. I have never seen blood in my urine</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="486e" name="answer486" value="E" checked>
		  				<input type="radio" id="486t" name="answer486" value="T">
			  			<label for="486t">T</label>
			  			<input type="radio" id="486f" name="answer486" value="F">
			  			<label for="486f">F</label>	
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 487. When I do not go on the way I work, I give up immediately</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="487e" name="answer487" value="E" checked>
		  				<input type="radio" id="487t" name="answer487" value="T">
			  			<label for="487t">T</label>
			  			<input type="radio" id="487f" name="answer487" value="F">
			  			<label for="487f">F</label>
			  				     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 488. I pray often</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="488e" name="answer488" value="E" checked>
		  				<input type="radio" id="488t" name="answer488" value="T">
			  			<label for="488t">T</label>
			  			<input type="radio" id="488f" name="answer488" value="F">
			  			<label for="488f">F</label>
			  				 		    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 489. I only sympathize with people who embrace life with their sad and troubled sides.</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="489e" name="answer489" value="E" checked>
		  				<input type="radio" id="489t" name="answer489" value="T">
			  			<label for="489t">T</label>
			  			<input type="radio" id="489f" name="answer489" value="F">
			  			<label for="489f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 490. I read several times a week</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="490e" name="answer490" value="E" checked>
		  				<input type="radio" id="490t" name="answer490" value="T">
			  			<label for="499t">T</label>
			  			<input type="radio" id="490f" name="answer490" value="F">
			  			<label for="499f">F</label>
			  					    		     
		  </div>
		</div>
		<div class="container">
		  <div class="question">
		    <p> 491. I cannot tolerate those who believe in the accuracy of only one religion</p>    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="491e" name="answer491" value="E" checked>
		  				<input type="radio" id="491t" name="answer491" value="T">
			  			<label for="491t">T</label>
			  			<input type="radio" id="491f" name="answer491" value="F">
			  			<label for="500f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 492. The thought of "Zelzele" scares me so much</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="492e" name="answer492" value="E" checked>
		  				<input type="radio" id="492t" name="answer492" value="T">
			  			<label for="482t">T</label>
			  			<input type="radio" id="492f" name="answer492" value="F">
			  			<label for="492f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 493. I prefer jobs that demand full attention to jobs that drive me to carelessness</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="493e" name="answer493" value="E" checked>
		  				<input type="radio" id="493t" name="answer493" value="T">
			  			<label for="493t">T</label>
			  			<input type="radio" id="493f" name="answer493" value="F">
			  			<label for="493f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 494. I would be very uncomfortable to be in closed and small places</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="494e" name="answer494" value="E" checked>
		  				<input type="radio" id="494t" name="answer494" value="T">
			  			<label for="494t">T</label>
			  			<input type="radio" id="494f" name="answer494" value="F">
			  			<label for="494f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 495. In general, I talk to people who I am trying to correct their defects</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="495e" name="answer495" value="E" checked>
		  				<input type="radio" id="495t" name="answer495" value="T">
			  			<label for="495t">T</label>
			  			<input type="radio" id="495f" name="answer495" value="F">
			  			<label for="495f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 496. I never see things twice (So I don't see things that are single)</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="496e" name="answer496" value="E" checked>
		  				<input type="radio" id="496t" name="answer496" value="T">
			  			<label for="496t">T</label>
			  			<input type="radio" id="496f" name="answer496" value="F">
			  			<label for="496f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 497. I like adventure stories</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="497e" name="answer497" value="E" checked>
		  				<input type="radio" id="497t" name="answer497" value="T">
			  			<label for="497t">T</label>
			  			<input type="radio" id="497f" name="answer497" value="F">
			  			<label for="497f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 498. Being outspoken is always good</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="498e" name="answer498" value="E" checked>
		  				<input type="radio" id="498t" name="answer498" value="T">
			  			<label for="498t">T</label>
			  			<input type="radio" id="498f" name="answer498" value="F">
			  			<label for="498f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 499. Sometimes I get overly sad about something that is really insignificant</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="499e" name="answer499" value="E" checked>
		  				<input type="radio" id="499t" name="answer499" value="T">
			  			<label for="499t">T</label>
			  			<input type="radio" id="499f" name="answer499" value="F">
			  			<label for="499f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 500. I immediately get an idea that seems bright to me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="500e" name="answer500" value="E" checked>
		  				<input type="radio" id="500t" name="answer500" value="T">
			  			<label for="500t">T</label>
			  			<input type="radio" id="500f" name="answer500" value="F">
			  			<label for="500f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 501. I generally prefer to do my own job rather than asking for help from others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="501e" name="answer501" value="E" checked>
		  				<input type="radio" id="501t" name="answer501" value="T">
			  			<label for="501t">T</label>
			  			<input type="radio" id="501f" name="answer501" value="F">
			  			<label for="501f">F</label>	
			  				    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 502. I like to express my opinion about any event openly to others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="502e" name="answer502" value="E" checked>	
		  				<input type="radio" id="502t" name="answer502" value="T">
			  			<label for="502t">T</label>
			  			<input type="radio" id="502f" name="answer502" value="F">
			  			<label for="502f">F</label>
			  			   		    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 503. I do not know very well whether other people's actions</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="503e" name="answer503" value="E" checked>
		  				<input type="radio" id="503t" name="answer503" value="T">
			  			<label for="503t">T</label>
			  			<input type="radio" id="503f" name="answer503" value="F">
			  			<label for="503f">F</label>
			  						    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 504. I do not hesitate to reveal these feelings to anyone I see or feel unworthy of</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="504e" name="answer504" value="E" checked>
		  				<input type="radio" id="504t" name="answer504" value="T">
			  			<label for="504t">T</label>
			  			<input type="radio" id="504f" name="answer504" value="F">
			  			<label for="504f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 505. From time to time I feel so strong and energetic that at such times, I do not need sleep for days</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="505e" name="answer505" value="E" checked>
		  				<input type="radio" id="505t" name="answer505" value="T">
			  			<label for="505t">T</label>
			  			<input type="radio" id="505f" name="answer505" value="F">
			  			<label for="505f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 506. I'm a nervous person</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="506e" name="answer506" value="E" checked>
		  				<input type="radio" id="506t" name="answer506" value="T">
			  			<label for="506t">T</label>
			  			<input type="radio" id="506f" name="answer506" value="F">
			  			<label for="506f">F</label>
			  					    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 507. When things went well, I came across people who took the lion's share to themselves but threw it on others when the mistake was made</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="507e" name="answer507" value="E" checked>
		  				<input type="radio" id="507t" name="answer507" value="T">
			  			<label for="507t">T</label>
			  			<input type="radio" id="507f" name="answer507" value="F">
			  			<label for="507f">F</label>
			  					    		     
		  </div>
		</div>
		
		<div class="container">
		  <div class="question">
		    <p> 508. My sense of smell is as good as everyone</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="508e" name="answer508" value="E" checked>
		  				<input type="radio" id="508t" name="answer508" value="T">
			  			<label for="508t">T</label>
			  			<input type="radio" id="508f" name="answer508" value="F">
			  			<label for="508f">F</label>	
			  				    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 509. Sometimes I can't call my right because of my shyness</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="509e" name="answer509" value="E" checked>
		  				<input type="radio" id="509t" name="answer509" value="T">
			  			<label for="509t">T</label>
			  			<input type="radio" id="509f" name="answer509" value="F">
			  			<label for="509f">F</label>
			  						    		     
		  </div>
		</div>
		  
		  <div class="container">
		  <div class="question">
		    <p> 510. Dirt and dirt scare and disgust me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="510e" name="answer510" value="E" checked>
		  				<input type="radio" id="510t" name="answer510" value="T">
			  			<label for="510t">T</label>
			  			<input type="radio" id="510f" name="answer510" value="F">
			  			<label for="510f">F</label>
			  					    		     
		  </div>
		</div>
		<div class="container">
		  <div class="question">
		    <p> 511. I have a dream world that I keep secret from everyone</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="511e" name="answer511" value="E" checked>
		  				<input type="radio" id="511t" name="answer511" value="T">
			  			<label for="511t">T</label>
			  			<input type="radio" id="511f" name="answer511" value="F">
			  			<label for="511f">F</label>	
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 512. I don't like to be washed</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="512e" name="answer512" value="E" checked>
		  				<input type="radio" id="512t" name="answer512" value="T">
			  			<label for="512t">T</label>
			  			<input type="radio" id="512f" name="answer512" value="F">
			  			<label for="512f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 513. I like the winter season</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="513e" name="answer513" value="E" checked>
		  				<input type="radio" id="513t" name="answer513" value="T">
			  			<label for="513t">T</label>
			  			<input type="radio" id="513f" name="answer513" value="F">
			  			<label for="513f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 514. I like women who act like men</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="514e" name="answer514" value="E" checked>
		  				<input type="radio" id="514t" name="answer514" value="T">
			  			<label for="514t">T</label>
			  			<input type="radio" id="514f" name="answer514" value="F">
			  			<label for="514f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 515. Necessary items were always available in our home (such as enough food, clothing etc.)</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="515e" name="answer515" value="E" checked>
		  				<input type="radio" id="515t" name="answer515" value="T">
			  			<label for="515t">T</label>
			  			<input type="radio" id="515f" name="answer515" value="F">
			  			<label for="515f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 516. There are people in my family who get angry quickly</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="516e" name="answer516" value="E" checked>
		  				<input type="radio" id="516t" name="answer516" value="T">
			  			<label for="516t">T</label>
			  			<input type="radio" id="516f" name="answer516" value="F">
			  			<label for="516f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 517. I can't do anything well</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="517e" name="answer517" value="E" checked>
		  				<input type="radio" id="517t" name="answer517" value="T">
			  			<label for="517t">T</label>
			  			<input type="radio" id="517f" name="answer517" value="F">
			  			<label for="517f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 518. In some cases I have been trying to look more sad than I am</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="518e" name="answer518" value="E" checked>
		  				<input type="radio" id="518t" name="answer518" value="T">
			  			<label for="518t">T</label>
			  			<input type="radio" id="518f" name="answer518" value="F">
			  			<label for="518f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 519. I have a disorder in my genital</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="519e" name="answer519" value="E" checked>
		  				<input type="radio" id="519t" name="answer519" value="T">
			  			<label for="519t">T</label>
			  			<input type="radio" id="519f" name="answer519" value="F">
			  			<label for="519f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 520. In general, I strongly advocate my views</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="520e" name="answer520" value="E" checked>
		  				<input type="radio" id="520t" name="answer520" value="T">
			  			<label for="520t">T</label>
			  			<input type="radio" id="520f" name="answer520" value="F">
			  			<label for="520f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 521. I am not worried when I am asked to speak in a group and say my opinion on a subject that I know very well</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="521e" name="answer521" value="E" checked>
		  				<input type="radio" id="521t" name="answer521" value="T">
			  			<label for="521t">T</label>
			  			<input type="radio" id="521f" name="answer521" value="F">
			  			<label for="521f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 522. I'm not afraid of spider</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="522e" name="answer522" value="E" checked>
		  				<input type="radio" id="522t" name="answer522" value="T">
			  			<label for="522t">T</label>
			  			<input type="radio" id="522f" name="answer522" value="F">
			  			<label for="522f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 523. My face almost never blushes</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="523e" name="answer523" value="E" checked>
		  				<input type="radio" id="523t" name="answer523" value="T">
			  			<label for="523t">T</label>
			  			<input type="radio" id="523f" name="answer523" value="F">
			  			<label for="523f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 524. I am not afraid that I will get disease or germs from the door knockers</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="524e" name="answer524" value="E" checked>
		  				<input type="radio" id="524t" name="answer524" value="T">
			  			<label for="524t">T</label>
			  			<input type="radio" id="524f" name="answer524" value="F">
			  			<label for="524f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 525. I get scared of some animals</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="525e" name="answer525" value="E" checked>
		  				<input type="radio" id="525t" name="answer525" value="T">
			  			<label for="525t">T</label>
			  			<input type="radio" id="525f" name="answer525" value="F">
			  			<label for="525f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 526. The future seems hopeless to me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="526e" name="answer526" value="E" checked>
		  				<input type="radio" id="526t" name="answer526" value="T">
			  			<label for="526t">T</label>
			  			<input type="radio" id="526f" name="answer526" value="F">
			  			<label for="526f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 527. My family and close relatives get along very well with each other</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="527e" name="answer527" value="E" checked>
		  				<input type="radio" id="527t" name="answer527" value="T">
			  			<label for="527t">T</label>
			  			<input type="radio" id="527f" name="answer527" value="F">
			  			<label for="527f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 528. My face does not blush more often than others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="528e" name="answer528" value="E" checked>
		  				<input type="radio" id="528t" name="answer528" value="T">
			  			<label for="528t">T</label>
			  			<input type="radio" id="528f" name="answer528" value="F">
			  			<label for="528f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 529. I would like to wear expensive dresses</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="529e" name="answer529" value="E" checked>
		  				<input type="radio" id="529t" name="answer529" value="T">
			  			<label for="529t">T</label>
			  			<input type="radio" id="529f" name="answer529" value="F">
			  			<label for="529f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 530. I often get bored for no reason and I want to cry</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="530e" name="answer530" value="E" checked>
		  				<input type="radio" id="530t" name="answer530" value="T">
			  			<label for="530t">T</label>
			  			<input type="radio" id="530f" name="answer530" value="F">
			  			<label for="530f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 531. Even if I think I have decided on a subject, someone else can easily change my mind</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="531e" name="answer531" value="E" checked>
		  				<input type="radio" id="531t" name="answer531" value="T">
			  			<label for="531t">T</label>
			  			<input type="radio" id="531f" name="answer531" value="F">
			  			<label for="531f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 532. I can bear the pain as much as others</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="532e" name="answer532" value="E" checked>
		  				<input type="radio" id="532t" name="answer532" value="T">
			  			<label for="532t">T</label>
			  			<input type="radio" id="532f" name="answer532" value="F">
			  			<label for="532f">F</label>	
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 533. I have no complaints of frequent burping</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="533e" name="answer533" value="E" checked>
		  				<input type="radio" id="533t" name="answer533" value="T">
			  			<label for="533t">T</label>
			  			<input type="radio" id="533f" name="answer533" value="F">
			  			<label for="533f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 534. Mostly I will be the last one to give up my job</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="534e" name="answer534" value="E" checked>
		  				<input type="radio" id="534t" name="answer534" value="T">
			  			<label for="534t">T</label>
			  			<input type="radio" id="534f" name="answer534" value="F">
			  			<label for="534f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 535. I almost always have dry mouth</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="535e" name="answer535" value="E" checked>
		  				<input type="radio" id="535t" name="answer535" value="T">
			  			<label for="535t">T</label>
			  			<input type="radio" id="535f" name="answer535" value="F">
			  			<label for="535f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 536. I get angry at those who rush me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="536e" name="answer536" value="E" checked>
		  				<input type="radio" id="536t" name="answer536" value="T">
			  			<label for="536t">T</label>
			  			<input type="radio" id="536f" name="answer536" value="F">
			  			<label for="536f">F</label>	
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 537. I would like to go lion hunting in Africa</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="537e" name="answer537" value="E" checked>
		  				<input type="radio" id="537t" name="answer537" value="T">
			  			<label for="537t">T</label>
			  			<input type="radio" id="537f" name="answer537" value="F">
			  			<label for="537f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 538. I think I might like tailoring</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="538e" name="answer538" value="E" checked>
		  				<input type="radio" id="538t" name="answer538" value="T">
			  			<label for="538t">T</label>
			  			<input type="radio" id="538f" name="answer538" value="F">
			  			<label for="538f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 539. I am not afraid of the mouse</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="539e" name="answer539" value="E" checked>
		  				<input type="radio" id="539t" name="answer539" value="T">
			  			<label for="539t">T</label>
			  			<input type="radio" id="539f" name="answer539" value="F">
			  			<label for="539f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 540. There was no stroke in my face</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="540e" name="answer540" value="E" checked>
		  				<input type="radio" id="540t" name="answer540" value="T">
			  			<label for="540t">T</label>
			  			<input type="radio" id="540f" name="answer540" value="F">
			  			<label for="540f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 541. I would be very tempered that something little touches my skin</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="541e" name="answer541" value="E" checked>
		  				<input type="radio" id="541t" name="answer541" value="T">
			  			<label for="541t">T</label>
			  			<input type="radio" id="541f" name="answer541" value="F">
			  			<label for="541f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 542. So far I have not made the big ablution in black</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="542e" name="answer542" value="E" checked>
		  				<input type="radio" id="542t" name="answer542" value="T">
			  			<label for="542t">T</label>
			  			<input type="radio" id="542f" name="answer542" value="F">
			  			<label for="542f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 543. I have the feeling that something terrible will happen several times a week</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="543e" name="answer543" value="E" checked>
		  				<input type="radio" id="543t" name="answer543" value="T">
			  			<label for="543t">T</label>
			  			<input type="radio" id="543f" name="answer543" value="F">
			  			<label for="543f">F</label>
			  							    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 544. I often feel tired</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="544e" name="answer544" value="E" checked>
		  				<input type="radio" id="544t" name="answer544" value="T">
			  			<label for="544t">T</label>
			  			<input type="radio" id="544f" name="answer544" value="F">
			  			<label for="544f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 545. Sometimes I have the same dream over and over again</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="545e" name="answer545" value="E" checked>
		  				<input type="radio" id="545t" name="answer545" value="T">
			  			<label for="545t">T</label>
			  			<input type="radio" id="545f" name="answer545" value="F">
			  			<label for="545f">F</label>
			  			

		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 546. I like to read history</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="546e" name="answer546" value="E" checked>
		  				<input type="radio" id="546t" name="answer546" value="T">
			  			<label for="546t">T</label>
			  			<input type="radio" id="546f" name="answer546" value="F">
			  			<label for="546f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 547. I like meetings and crowded entertainment</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="547e" name="answer547" value="E" checked>
		  				<input type="radio" id="547t" name="answer547" value="T">
			  			<label for="547t">T</label>
			  			<input type="radio" id="547f" name="answer547" value="F">
			  			<label for="547f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 548. If possible, I wouldn't go to entertainment venues where racy tricks</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="548e" name="answer548" value="E" checked>
		  				<input type="radio" id="548t" name="answer548" value="T">
			  			<label for="548t">T</label>
			  			<input type="radio" id="548f" name="answer548" value="F">
			  			<label for="548f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 549. I am afraid and run away from the difficulties I will encounter</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="549e" name="answer549" value="E" checked>
		  				<input type="radio" id="549t" name="answer549" value="T">
			  			<label for="549t">T</label>
			  			<input type="radio" id="549f" name="answer549" value="F">
			  			<label for="549f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 550. I like to repair the door latches</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="550e" name="answer550" value="E" checked>
		  				<input type="radio" id="550t" name="answer550" value="T">
			  			<label for="550t">T</label>
			  			<input type="radio" id="550f" name="answer550" value="F">
			  			<label for="550f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 551. Sometimes I'm sure others read what's in my head</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="551e" name="answer551" value="E" checked>
		  				<input type="radio" id="551t" name="answer551" value="T">
			  			<label for="551t">T</label>
			  			<input type="radio" id="551f" name="answer551" value="F">
			  			<label for="551f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 552. I like to read scientific publications</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="552e" name="answer552" value="E" checked>
		  				<input type="radio" id="552t" name="answer552" value="T">
			  			<label for="552t">T</label>
			  			<input type="radio" id="552f" name="answer552" value="F">
			  			<label for="552f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 553. I'm afraid of staying alone in open spaces or wide squares</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="553e" name="answer553" value="E" checked>
		  				<input type="radio" id="553t" name="answer553" value="T">
			  			<label for="553t">T</label>
			  			<input type="radio" id="553f" name="answer553" value="F">
			  			<label for="553f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 554. I get bored when I drink</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="554e" name="answer554" value="E" checked>
		  				<input type="radio" id="554t" name="answer554" value="T">
			  			<label for="554t">T</label>
			  			<input type="radio" id="554f" name="answer554" value="F">
			  			<label for="554f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 555. Sometimes I feel like I'm going crazy</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="555e" name="answer555" value="E" checked>
		  				<input type="radio" id="555t" name="answer555" value="T">
			  			<label for="555t">T</label>
			  			<input type="radio" id="555f" name="answer555" value="F">
			  			<label for="555f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 556. I take great care of my costume</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="556e" name="answer556" value="E" checked>
		  				<input type="radio" id="556t" name="answer556" value="T">
			  			<label for="556t">T</label>
			  			<input type="radio" id="556f" name="answer556" value="F">
			  			<label for="556f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 557. I don't take life too seriously</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="557e" name="answer557" value="E" checked>
		  				<input type="radio" id="557t" name="answer557" value="T">
			  			<label for="557t">T</label>
			  			<input type="radio" id="557f" name="answer557" value="F">
			  			<label for="557f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 558. Many people are guilty of bad sexual activities</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="558e" name="answer558" value="E" checked>
		  				<input type="radio" id="558t" name="answer558" value="T">
			  			<label for="558t">T</label>
			  			<input type="radio" id="558f" name="answer558" value="F">
			  			<label for="558f">F</label>	
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> Midnight mostly happens when I get scared</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="559e" name="answer559" value="E" checked>
		  				<input type="radio" id="559t" name="answer559" value="T">
			  			<label for="559t">T</label>
			  			<input type="radio" id="559f" name="answer559" value="F">
			  			<label for="559f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 560. I'm very complaining about forgetting where I put something</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="560e" name="answer560" value="E" checked>
		  				<input type="radio" id="560t" name="answer560" value="T">
			  			<label for="560t">T</label>
			  			<input type="radio" id="560f" name="answer560" value="F">
			  			<label for="560f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 561. My family is a great supporter for me</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="561e" name="answer561" value="E" checked>
		  				<input type="radio" id="561t" name="answer561" value="T">
			  			<label for="561t">T</label>
			  			<input type="radio" id="561f" name="answer561" value="F">
			  			<label for="561f">F</label>
			  						    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 562. When I was a kid, the one I was most connected to and admired was a woman</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="562e" name="answer562" value="E" checked>
		  				<input type="radio" id="562t" name="answer562" value="T">
			  			<label for="562t">T</label>
			  			<input type="radio" id="562f" name="answer562" value="F">
			  			<label for="562f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 563. I like adventure stories more than love stories</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="563e" name="answer563" value="E" checked>
		  				<input type="radio" id="563t" name="answer563" value="T">
			  			<label for="563t">T</label>
			  			<input type="radio" id="563f" name="answer563" value="F">
			  			<label for="563f">F</label>	
			  				    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 564. I easily give up a job that I want to do but dislike</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="564e" name="answer564" value="E" checked>
		  				<input type="radio" id="564t" name="answer564" value="T">
			  			<label for="564t">T</label>
			  			<input type="radio" id="564f" name="answer564" value="F">
			  			<label for="564f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 565. When I am in a high place, I want to jump</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="565e" name="answer565" value="E" checked>
		  				<input type="radio" id="565t" name="answer565" value="T">
			  			<label for="565t">T</label>
			  			<input type="radio" id="565f" name="answer565" value="F">
			  			<label for="565f">F</label>
			  					    		     
		  </div>
		</div>

		<div class="container">
		  <div class="question">
		    <p> 566. I like love scenes in cinemas</p>	    		    		   
		  </div>
		  <div class="options">
		  	<input type="hidden" id="566e" name="answer566" value="E" checked>
		  				<input type="radio" id="566t" name="answer566" value="T">
			  			<label for="566t">T</label>
			  			<input type="radio" id="566f" name="answer566" value="F">
			  			<label for="566f">F</label>
			  					    		     
		  </div>
		</div>
		  <br><br>

		  <center><input type="submit" value="Complete Test" style="padding:5px" onclick="Message();"></center>
		</form>
		<script>function Message(){
        alert("Test completed succesfully!")}</script> 
</body>

</html>
