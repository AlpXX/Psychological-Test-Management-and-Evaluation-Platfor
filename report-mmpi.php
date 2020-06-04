<?php
include 'includes/connect.php';
$p_id = $_GET["variable4"];
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
  header("location: index.php");
  exit;
}


$result = mysqli_query($con, "SELECT * FROM patient where p_id= $p_id");
echo mysqli_error($con);

while($row = mysqli_fetch_array($result)){
  extract($row);
};
$mmpi_patient_id=-1;
$result2 = mysqli_query($con, "SELECT * FROM mmpi_report where mmpi_pid= $p_id");
echo mysqli_error($con);

while($row2 = mysqli_fetch_array($result2)){
  extract($row2);
  $mmpi_patient_id=$mmpi_pid;

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

        if ($mmpi_patient_id == $p_id){
        
        echo '<form class="col s12" method="post" action="routers/mmpi-report-router.php" style="margin:0px 20px" >
        <div style="padding-bottom: 18px;font-size : 24px;">TEST REPORT
        </div>';
        echo '<div style="padding-bottom: 18px;"><b>Patient Name</b>
        <span style="color: red;"> *</span><br/>';
        echo '<input type="text" name="mmpi_pname"  value ="'.$p_name.' '.$p_surname.'" style="width : 250px;" readonly/> ';
        echo '<div style="padding-bottom: 18px;"><b>Gender</b><span style="color: red;"> *</span><br/>
        <input type="text" name="mmpi_gender" value ="'.$p_gender.'" style="width : 75px;" readonly/>';
        echo'<div style="padding-bottom: 18px;"><b>Age</b><span style="color: red;"> *</span><br/>
        <input type="number" name="mmpi_age" value ="'.$p_age.'" style="width : 50px;" readonly/>';
        echo '<div style="padding-bottom: 18px;"><b>Requested by</b><span style="color: red;"> *</span><br/>
        <input type="text" name="mmpi_reqby" value ="'.$mmpi_reqby.'" style="width : 250px;" readonly/>';
        echo'<div style="padding-bottom: 18px;"><b>Reported by</b><span style="color: red;"> *</span><br/>
        <input type="text" name="mmpi_repby" value ="'.$mmpi_repby.'" style="width : 250px;" readonly/>
        </div>  ';
        echo'    
        <div style="padding-bottom: 18px;"><b>Test Method</b><br/>
        <select name="mmpi_tmethod">
          <option>Online</option>
          <option>Manual</option>
        </select>
        </div>
        <div style="padding-bottom: 18px;"><b>Test Type</b><br/>
        <select name="mmpi_ttype">
            <option>MMPI</option>         
        </select>
        </div>
        <div style="padding-bottom: 18px;"><b>Date</b><br/>
        <input type="date" name="mmpi_date" style="width: 145px" value='.date('Y-m-d').' readonly/>
        </div>
        <div style="padding-bottom: 18px;"><b>Report Title</b><span style="color: red;"> *</span><br/>
        <b><input type="text" name="mmpi_title" value ="'.$mmpi_title.'" style="width : 450px;" readonly/></b>  
        </div>
        <div style="padding-bottom: 18px;"><b>Description</b><br/>
        <textarea name="mmpi_descrp" style="width : 600px; height: 150px" rows="6" readonly>'.$mmpi_descrp.'</textarea>
        </div>
       
</form>';

      }

      else{
    
        echo '<form class="col s12" method="post" action="routers/mmpi-report-router.php" style="margin:0px 20px" >
        <div style="padding-bottom: 18px;font-size : 24px;">TEST REPORT
        </div>
        <input type="hidden" name="p_id" value="'.$p_id.'">
        <div style="padding-bottom: 18px;"><b>Patient Name</b>
        <span style="color: red;"> *</span><br/>
        <input type="text" name="mmpi_pname"  value ="'.$p_name.' '.$p_surname.'" style="width : 250px;"/>
        <div style="padding-bottom: 18px;"><b>Gender</b><span style="color: red;"> *</span><br/>
        <input type="text" name="mmpi_gender" value ="'.$p_gender.'" style="width : 75px;"/>
        <div style="padding-bottom: 18px;"><b>Age</b><span style="color: red;"> *</span><br/>
        <input type="number" name="mmpi_age" value ="'.$p_age.'" style="width : 50px;"/>
        <div style="padding-bottom: 18px;"><b>Requested by</b><span style="color: red;"> *</span><br/>
        <input type="text" name="mmpi_reqby" style="width : 250px;"/>
        </div> 
        <div style="padding-bottom: 18px;"><b>Reported by</b><span style="color: red;"> *</span><br/>
        <input type="text" name="mmpi_repby" style="width : 250px;"/>
        </div>       
        <div style="padding-bottom: 18px;"><b>Test Method</b><br/>
        <select name="mmpi_tmethod">
          <option>Online</option>
          <option>Manual</option>
        </select>
        </div>
        <div style="padding-bottom: 18px;"><b>Test Type</b><br/>
        <select name="mmpi_ttype">
            <option>MMPI</option>         
        </select>
        </div>
        <div style="padding-bottom: 18px;"><b>Date</b><br/>
        <input type="date" name="mmpi_date" style="width: 125px" value='.date('Y-m-d').'/>
        </div>
        <div style="padding-bottom: 18px;"><b>Report Title</b><span style="color: red;"> *</span><br/>
        <b><input type="text" name="mmpi_title" style="width : 450px;"/></b>  
        </div>
        <div style="padding-bottom: 18px;"><b>Description</b><br/>
        <textarea name="mmpi_descrp" style="width : 600px; height: 150px" rows="6"></textarea>
        </div>
        <div style="padding-bottom: 18px;">
          <input class="btn cyan waves-effect waves-light" name="mmpi-rep-submit" value="Save" type="submit" style="margin: 5px" />
        </div>
</form>';

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

