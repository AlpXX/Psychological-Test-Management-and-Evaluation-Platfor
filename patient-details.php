<?php
include 'includes/connect.php';
$p_id = $_SESSION["p_id"];

if(!isset($_SESSION["loggedin_patient"]) && $_SESSION["loggedin_patient"] !== true){
  header("location: register.php");
  exit;
}


$result = mysqli_query($con, "SELECT * FROM patient where p_id= '$p_id'");
while($row = mysqli_fetch_array($result)){
  extract($row);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Edit Details</title>

  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
   <style type="text/css">
  </style> 
</head>

<body>
 
  <?php
    include 'includes/header-patient.php';
  ?>
  </header>
 
  <div id="main">
    <div class="wrapper">

    <?php
    include 'includes/sidebar-patient.php';
  ?>

      <section id="content">

        <div id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">User Details</h5>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <p class="caption">Edit your details here.</p>
          <div class="divider"></div>
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">Details</h4>
              </div>
              <div>
                <div class="card-panel">
                  <div class="row">
                    <form class="formValidate" id="formValidate" method="post" action="routers/patient-edit-details.php" novalidate="novalidate"class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-communication-contacts prefix"></i>
                          <input name="identity_number" id="identity_number" type="text" value="<?php echo $p_identity;?>" data-error=".errorTxt1">
                          <label for="identity_number" class="">Identity Number</label>
              <div class="errorTxt1"></div>
                        </div>
                      </div>          
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-social-person prefix"></i>
                          <input name="name" id="name" type="text" value="<?php echo $p_name;?>" data-error=".errorTxt2">
                          <label for="name" class="">Name</label>
               <div class="errorTxt2"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-social-person prefix"></i>
                          <input name="surname" id="email" type="text" value="<?php echo $p_surname;?>" data-error=".errorTxt3">
                          <label for="surname" class="">Surname</label>
              <div class="errorTxt3"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-social-people prefix"></i>
                      <?php 
                        if (strtolower($p_gender)=="male"){
                         echo '<input type="radio" id="male" name="gender" value="male" checked="checked">                        
                          <label for="male">Male</label><br>';
                          echo '<input type="radio" id="female" name="gender" value="female">
                          <label for="female">Female</label><br>';
                          
                       }
                        if (strtolower($p_gender)=="female"){
                         echo '<input type="radio" id="male" name="gender" value="male">                        
                          <label for="male">Male</label><br>';
                          echo '<input type="radio" id="female" name="gender" value="female" checked="checked">
                          <label for="female">Female</label><br>';
                          
                      	}
                      	
                  		?>
                        
              <div class="errorTxt4"></div>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-social-cake prefix"></i>
                          <input name="age" id="phone" type="number" value="<?php echo $p_age;?>" data-error=".errorTxt5">
                          <label for="age" class="">Age</label>
              <div class="errorTxt5"></div>
                        </div>
                      </div>            
                      <div class="row">
                        <div class="input-field col s12">
                          <i class="mdi-communication-phone prefix"></i>
                          <input name="phone" id="phone" type="text" value="<?php echo $p_phone;?>" data-error=".errorTxt6">
                          <label for="Phone" class="">Phone</label>
              <div class="errorTxt6"></div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                            <button class="btn cyan waves-effect waves-light right" style="margin-right: 80px" type="submit" name="editinfo">Edit
                              <i class="mdi-content-send right"></i>
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            <div class="divider"></div>
            
          </div>

      </section>
  </div>

 <?php include "includes/footer.php"?>

    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
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
