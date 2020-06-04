<?php
include 'includes/connect.php';

if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: index.php");
  exit;
}
$p_id = $_GET["variable1"];


$result = mysqli_query($con, "SELECT * FROM patient where p_id= $p_id");
while($row = mysqli_fetch_array($result)){
  extract($row);
}
$result2 = mysqli_query($con, "SELECT patient_id FROM mmpi where patient_id= '$p_id'");
$error2=mysqli_error($con);
echo $error2;

$mmpi_patient_id=-1;
while($row2= mysqli_fetch_array($result2)){
  extract($row2);
  $mmpi_patient_id=$patient_id;
}
$result3 = mysqli_query($con, "SELECT patient_id FROM kent where patient_id= '$p_id'");
$kent_patient_id=-1;

while($row3= mysqli_fetch_array($result3)){
  extract($row3);
  $kent_patient_id=$patient_id;
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
    include 'includes/header.php';
  ?>

  <?php
    include 'includes/sidebar.php';
  ?>

      <section id="content">

        <div id="breadcrumbs-wrapper">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Patient Information</h5>
              </div>
            </div>
        </div>


        <div class="container">
         
          <div class="divider"></div>
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">Details</h4>
              </div>
              <div>
                <div class="card-panel">
                  <div class="row">
                    <form class="formValidate" id="formValidate" method="post" action="routers/admin-edit-patient.php" novalidate="novalidate"class="col s12">
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
                          <input type="hidden" id="p_id" name="p_id" value="<?php echo $p_id?>" >
                          <input name="phone" id="phone" type="text" value="<?php echo $p_phone;?>" data-error=".errorTxt6">
                          <label for="Phone" class="">Phone</label>
              <div class="errorTxt6"></div>
                        </div>
                        <div class="row">
                          <div class="input-field col s12">
                           <button class="btn cyan waves-effect waves-light right" type="submit" name="editpatient" style="margin-right: 100px" onclick="Message()">Edit
                              <i class="mdi-content-send right"></i>
                            </button>
                            <br><br><br> 
                            <script>function Message(){
                          alert("Patient successfully updated.")}</script> 
                            <?php 
                            if($mmpi_patient_id ==$p_id){
                              echo '<div>';
                              echo '<a style="margin-left:40px"><b>For MMPI:</b> </a>';
                              echo "<a href=mmpi-answer-sheet.php?variable3=".$p_id.' class="btn waves-effect waves-light green darken-4" style="margin-right: 20px">See Answer Sheet</a>';
	                            echo "<a href=evaluation-mmpi-admin.php?variable2=".$p_id.' class="btn waves-effect waves-light lime darken-4" style="margin-right: 20px">Evaluation</a>';
                              echo "<a href=report-mmpi.php?variable4=".$p_id.' class="btn waves-effect waves-light blue darken-4">Write Report</a>'; 
                              echo '</div>';
                            } 
                            echo '<br>';
                            if($kent_patient_id ==$p_id){
                              echo '<div>';
                              echo '<a style="margin-left:10px"><b>For KENT-EGY:</b> </a>';
                              echo "<a href=kent-answer-sheet.php?variable10=".$p_id.' class="btn waves-effect waves-light green darken-4" style="margin-right: 20px">See Answer Sheet</a>';
	                            echo "<a href=evaluation-kent-admin.php?variable2=".$p_id.' class="btn waves-effect waves-light lime darken-4" style="margin-right: 20px">Evaluation</a>';
                              echo "<a href=report-kent.php?variable5=".$p_id.' class="btn waves-effect waves-light blue darken-4">Write Report</a>'; 
                              echo '</div>';
                            }
                            echo '<br>';
                            ?>

                            
                        
                          </div>
                        </div>
                      </div>                                                               
                    </form>
                  </div>
                </div>
              </div>         
          </div>


      </section>
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