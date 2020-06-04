<?php
include 'includes/connect.php';
$p_id=$_SESSION["p_id"];

if(!isset($_SESSION["loggedin_patient"]) && $_SESSION["loggedin_patient"] !== true){
  header("location: register.php");
  exit;
}
$result2 = mysqli_query($con, "SELECT patient_id FROM mmpi where patient_id= '$p_id'");

$mmpi_patient_id=-1;
while($row2= mysqli_fetch_array($result2)){
  extract($row2);
  $mmpi_patient_id=$patient_id;
}

$kent_patient_id=-1;
$result3 = mysqli_query($con, "SELECT patient_id FROM kent where patient_id= '$p_id'");
while($row3= mysqli_fetch_array($result3)){
  extract($row3);
  $kent_patient_id=$patient_id;

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Patient Page</title>

  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">   
  <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/data-tables/css/jquery.dataTables.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  
   <style type="text/css">
  
  </style> 
</head>

<body>

  <?php
    include 'includes/header-patient.php';
  ?>

  <div id="main">
    <div class="wrapper">

      <?php
    include 'includes/sidebar-patient.php';
  ?>

      <section id="content">

        <div id="breadcrumbs-wrapper">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">TEST</h5>
              </div>
            </div>
        </div>

        <div class="container">
          <p class="caption">Please select the test to do.</p>
          <div class="divider"></div>
		  
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">Pick a test</h4>
              </div>
              <div>
                  <table class="responsive-table display" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Test Name</th>
                        <th>Test type</th>
                        <th>Number of questions</th>
                      </tr>
                    </thead>

                    <tbody>
				<?php
				$result = mysqli_query($con, "SELECT * FROM tests;");
				while($row = mysqli_fetch_array($result))
				{ 
					          extract($row);
                    echo '<tr>';
                    echo '<td>'.$row["t_name"].'</td>';
                    echo '<td>'.$row["t_type"].'</td>';
                    echo '<td>'.$row["t_totalquestion"].'</td>';
                    if($row["t_name"]=="MMPI" and $mmpi_patient_id==$p_id){
                      
                      echo '<td><a href=./tests/'.$t_name.'.php > <button class="btn cyan waves-effect waves-light " disabled type="submit" id= "details" name="details">Start Test
                      <i class="mdi-content-send right"></i>
                      </button></a></td>';
                    }
                    if($row["t_name"]=="KENT-EGY" and $kent_patient_id==$p_id){
                      
                      echo '<td><a href=./tests/'.$t_name.'.php > <button class="btn cyan waves-effect waves-light " disabled type="submit" id= "details" name="details">Start Test
                      <i class="mdi-content-send right"></i>
                      </button></a></td>';
                    }
                    if($row["t_name"]=="KENT-EGY" and $kent_patient_id!=$p_id){
                      
                      echo '<td><a href=./tests/'.$t_name.'.php > <button class="btn cyan waves-effect waves-light " type="submit" id= "details" name="details">Start Test
                      <i class="mdi-content-send right"></i>
                      </button></a></td>';

                    }
                    if($row["t_name"]=="MMPI" and $mmpi_patient_id!=$p_id){
                      
                      echo '<td><a href=./tests/'.$t_name.'.php > <button class="btn cyan waves-effect waves-light " type="submit" id= "details" name="details">Start Test
                      <i class="mdi-content-send right"></i>
                      </button></a></td>';

                    }                                        
                    echo'<tr>';      
				}
				?>
                    </tbody>
            </table>
              </div>
			  

        </div>
      </section>



  </div>

  <?php
include 'includes/footer.php';
?>


    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <script type="text/javascript" src="js/custom-script.js"></script>
    <script type="text/javascript">
    

</body>

</html>
