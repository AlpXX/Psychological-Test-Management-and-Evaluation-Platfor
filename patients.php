<?php
include 'includes/connect.php';

if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: index.php");
  exit;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>User List</title>

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
                <h5 class="breadcrumbs-title">PATIENT LIST</h5>
              </div>
            </div>
        </div>

        <div class="container">
          <p class="caption">Patient information, test and results</p>
          <br>
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">List of patients</h4>
              </div>
              <div>
            <table>
                    <thead>
                      <tr>
                        <th>Identity Number</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Gender</th>
                        <th>Age</th>	
                        <th>Phone</th>
                        <th>Details</th>					
                      </tr>
                    </thead>

                    <tbody>
				<?php
				$result = mysqli_query($con, "SELECT * FROM patient");
				while($row = mysqli_fetch_array($result))
				{
                    extract($row);
                    echo '<tr><td>'.$p_identity.'</td>';
                    echo '<td>'.$row["p_name"].'</td>';
                    echo '<td>'.$row["p_surname"].'</td>';
                    echo '<td>'.$row["p_gender"].'</td>';
                    echo '<td>'.$row["p_age"].'</td>';
                    echo '<td>'.$row["p_phone"].'</td>';
                    echo '<td><a href=details.php?variable1='.$p_id.'> <button class="btn cyan waves-effect waves-light " type="submit" id= "details" name="details">Details
                    <i class="mdi-content-send right"></i>
                    </button></a></td>';
                    echo'<tr>';                 										
				}
				?>
                    </tbody>
</table>
              </div>
			
		  <form class="formValidate" id="formValidate" method="post" action="routers/add-patient.php" novalidate="novalidate">
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">Add Patient</h4>
              </div>
              <div>
    <table>
                    <thead>
                      <tr>
                        <th>Identity Number</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Gender</th>
                        <th>Age</th>	
                        <th>Phone</th>
                        	
                      </tr>
                    </thead>

                    <tbody>
				<?php
					echo '<tr><td><label for="identity_number">Identity Number</label><input id="identity_number" name="identity_number" type="number" data-error=".errorTxt02"><div class="errorTxt02"></div></td>';   									
					echo '<td><label for="name">Name</label><input id="name" name="name" type="text" data-error=".errorTxt03"><div class="errorTxt03"></div></td>';   									
					echo '<td><label for="surname">Surname</label><input id="surname" name="surname" type="text" data-error=".errorTxt04"><div class="errorTxt04"></div></td>';
          echo '<td><select name="gender">
                      <option value="Male">Male</option>
                      <option value="Female" selected>Female</option>
                      
                    </select></td>';
          echo '<td><label for="age">Age</label><input id="age" name="age" type="number"></td>';
          echo '<td><label for="phone">Phone number</label><input id="phone" name="phone" type="number" data-error=".errorTxt05"><div class="errorTxt05"></div></td>';   		
			    '</tr>';					
				?>
                    </tbody>
    </table>
              </div>
			  <div class="input-field col s12">
                <button class="btn cyan waves-effect waves-light right" type="submit" id= "addpatient "name="addpatient" onclick="Message()">Add Patient
                <i class="mdi-content-send right"></i>
              </button>
          </div>
        </div>
			</form>
      

        <script>function Message(){
        alert("Patient successfully added")}</script>
  
      
          
          <div class="divider"></div>
            
          </div>
        </div>
        </div>

      </section>
    </div>

  </div>

  <?php include "includes/footer.php" ?>
    
    
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>
    	
	
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <script type="text/javascript" src="js/custom-script.js">
    $("#formValidate").validate({
        rules: {
            identity_number: {
                required: true,
                minlength: 11,
                maxlength:11,
                number:true,
            },
            name: {
                required: true,
                minlength: 3,
                text:true                		
            },
            surname: {
                required: true,
                minlength: 2,
                text:true     
            },
			      age: {
                required: true,
                minlength: 1,
                maxlength:3,
                number:true,
            },    
            phone: {
        		required: true,
        		minlength: 10,
        		maxlength:11,
        		number:true,
			},
             gender: {
                required: true,             
             },

        },
        messages: {
            identity_number: {
                required: "Enter Your Identity Number",
                minlength: "11 characters are required.",
                maxlength:"11 characters are required.",
                number:"ID cannot contains letters"
            },
            name: {
                required: "Enter Name",
                minlength: "Minimum 3 characters are required.",
                text:"Name cannot contains number"
                      
            },
            surname: {
                required: "Enter Name",
                minlength: "Minimum 2 characters are required.",
                text:"Surname cannot contains number"
            },
            gender: {
                required: "Select Your Gender"          
            },
            age: {
                required: "Select Your Age",           
            },

            phone:{
        			required: "Specify contact number.",
        			minlength: "10 characters are required.",
        			number:"Phone number cannot contains letters"
			       },		
        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     }); 
    </script>
</body>

</html>

