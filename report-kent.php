<?php
include 'includes/connect.php';
$p_id = $_GET["variable5"];

if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: index.php");
  exit;
}

$result = mysqli_query($con, "SELECT * FROM patient where p_id= $p_id");
while($row = mysqli_fetch_array($result)){
  extract($row);
}
$kent_patient_id=-1;
$result2 = mysqli_query($con, "SELECT * FROM kent_report where kent_pid= $p_id");
echo mysqli_error($con);

while($row2 = mysqli_fetch_array($result2)){
  extract($row2);
  $kent_patient_id=$kent_pid;

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <title>Reporting Page</title>

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
  <?php 
  if ($kent_patient_id == $p_id){
    echo '
    <form class="col s12" method="post" action="routers/kent-report-router.php" style="margin:0px 20px" >
        <div style="width: 400px;">
        </div>
        <div style="padding-bottom: 18px;font-size : 24px;">TEST REPORT
        </div>
        <div style="padding-bottom: 18px;"><b>Patient Name</b>
        <span style="color: red;"> *</span><br/>
        <input type="text" name="kent_pname" value ="'.$p_name.' '.$p_surname.'" style="width : 250px;"readonly/>
        <div style="padding-bottom: 18px;"><b>Gender</b><span style="color: red;"> *</span><br/>
        <input type="text" name="kent_gender" value ="'.$p_gender.'" style="width : 75px;"readonly/>
        <div style="padding-bottom: 18px;"><b>Age</b><span style="color: red;"> *</span><br/>
        <input type="number" name="kent_age" value ="'.$p_age.'" style="width : 50px;"readonly/>
        <div style="padding-bottom: 18px;"><b>Requested by</b><span style="color: red;"> *</span><br/>
        <input type="text" name="kent_reqby" value ="'.$kent_reqby.'" style="width : 250px;"readonly/>
        </div> 
        <div style="padding-bottom: 18px;"><b>Reported by</b><span style="color: red;"> *</span><br/>
        <input type="text" name="kent_repby" value ="'.$kent_repby.'" style="width : 250px;"readonly/>
        </div>       
        <div style="padding-bottom: 18px;"><b>Test Method</b><br/>
        <select name="kent_tmethod">
          <option>Online</option>
          <option>Manual</option>
        </select>
        </div>
        <div style="padding-bottom: 18px;"><b>Test Type</b><br/>
        <select name="kent_ttype">
            <option>KENT-EGY</option>          
        </select>
        </div>
        <div style="padding-bottom: 18px;"><b>Date</b><br/>
        <input type="date" name="kent_date" style="width: 125px" value='.date('Y-m-d').' readonly/>
        </div>
        <div style="padding-bottom: 18px;"><b>Report Title</b><span style="color: red;"> *</span><br/>
        <b><input type="text" name="kent_title" value ="'.$kent_title.'" style="width : 450px;" readonly/></b>  
        </div>
        <div style="padding-bottom: 18px;"><b>Description</b><br/>
        <textarea name="kent_descrp" style="width : 600px; height: 150px" rows="6" readonly>'.$kent_descrp.'</textarea>
        </div>
        
</form>

</div>';
  }
else{
  echo '
  <form class="col s12" method="post" action="routers/kent-report-router.php" style="margin:0px 20px" >
        <div style="width: 400px;">
        </div>
        <div style="padding-bottom: 18px;font-size : 24px;">TEST REPORT
        </div>
        <input type="hidden" name="p_id" value="'.$p_id.'">
        <div style="padding-bottom: 18px;"><b>Patient Name</b>
        <span style="color: red;"> *</span><br/>
        <input type="text" name="kent_pname" value ="'.$p_name.' '.$p_surname.'"style="width : 250px;"/>
        <div style="padding-bottom: 18px;"><b>Gender</b><span style="color: red;"> *</span><br/>
        <input type="text" name="kent_gender" value ="'.$p_gender.'" style="width : 75px;"/>
        <div style="padding-bottom: 18px;"><b>Age</b><span style="color: red;"> *</span><br/>
        <input type="number" name="kent_age" value ="'.$p_age.'" style="width : 50px;"/>
        <div style="padding-bottom: 18px;"><b>Requested by</b><span style="color: red;"> *</span><br/>
        <input type="text" name="kent_reqby" style="width : 250px;"/>
        </div> 
        <div style="padding-bottom: 18px;"><b>Reported by</b><span style="color: red;"> *</span><br/>
        <input type="text" name="kent_repby" style="width : 250px;"/>
        </div>       
        <div style="padding-bottom: 18px;"><b>Test Method</b><br/>
        <select name="kent_tmethod">
          <option>Online</option>
          <option>Manual</option>
        </select>
        </div>
        <div style="padding-bottom: 18px;"><b>Test Type</b><br/>
        <select name="kent_ttype">
            <option>KENT-EGY</option>          
        </select>
        </div>
        <div style="padding-bottom: 18px;"><b>Date</b><br/>
        <input type="date" name="kent_date" style="width: 135px" value='.date('Y-m-d').' />
        </div>
        <div style="padding-bottom: 18px;"><b>Report Title</b><span style="color: red;"> *</span><br/>
        <b><input type="text" name="kent_title" style="width : 450px;"/></b>  
        </div>
        <div style="padding-bottom: 18px;"><b>Description</b><br/>
        <textarea name="kent_descrp" style="width : 600px; height: 150px" rows="6"></textarea>
        </div>
        <div style="padding-bottom: 18px;">
          <input class="btn cyan waves-effect waves-light" name="kent-rep-submit" value="Save" type="submit" style="margin: 5px" />
        
</form>

     
</div>';
}

  ?>

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