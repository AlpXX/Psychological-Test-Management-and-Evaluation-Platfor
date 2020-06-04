<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>Register</title>

  
  
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">

    <style type="text/css">

  </style> 
</head>

<body class="cyan">

  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="formValidate" id="formValidate" method="post" action="routers/register-router.php" novalidate="novalidate" class="col s12">
        <div class="row">
          <div class="input-field col s12 center">
            <h4>Register</h4>
            <p class="center">Please fill the information requested below.</p>           
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-contacts prefix"></i>
            <input name="identity_number" id="identitiy_number" type="text"  data-error=".errorTxt1">
            <label for="identity_number">Identity Number</label>
			<div class="errorTxt1"></div>			
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person prefix"></i>
            <input name="name" id="name" type="text" data-error=".errorTxt2">
            <label for="name">Name</label>
			<div class="errorTxt2"></div>			
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person prefix"></i>
            <input name="surname" id="surname" type="text" data-error=".errorTxt3">
            <label for="surname">Surname</label>
			<div class="errorTxt3"></div>			
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-people prefix"></i>            			
			  <input type="radio" id="male" name="gender" value="male">
			  <label for="male">Male</label><br>
			  <input type="radio" id="female" name="gender" value="female">
			  <label for="female">Female</label><br>
			       
           </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-cake prefix"></i>
            <input name="age" id="age" type="number" data-error=".errorTxt5">
            <label for="age">Age</label>
      <div class="errorTxt5"></div>     
          </div>
        </div>     
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-phone prefix"></i>
            <input name="phone" id="phone" type="text" data-error=".errorTxt6">
            <label for="phone">Phone</label>
			<div class="errorTxt6"></div>			
          </div>
        </div>		
        <div class="row">
          <div class="input-field col s12">
          
          <button class="btn red darken-3 waves-effect waves-light col s12" type="submit" id="register" name="register">Register
              </button>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up"> - - - - - - Are you a doctor? - - - - - - <br><a href="index.php">Login</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>


  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
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


