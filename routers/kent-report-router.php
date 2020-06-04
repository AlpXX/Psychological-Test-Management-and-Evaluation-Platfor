<?php
include '../includes/connect.php';



$kent_pname = ($_POST['kent_pname']);
$kent_gender = ucfirst($_POST['kent_gender']);
$kent_age = ($_POST['kent_age']);
$kent_reqby = ucfirst($_POST['kent_reqby']);
$kent_repby = ucfirst($_POST['kent_repby']);
$kent_tmethod = ($_POST['kent_tmethod']);
$kent_ttype = ($_POST['kent_ttype']);
$kent_date = $_POST['kent_date'];
$kent_title = ucfirst($_POST['kent_title']);
$kent_descrp = ucfirst($_POST['kent_descrp']);
$p_id = ($_POST['p_id']);

if(isset($_POST["kent-rep-submit"])){

    $sql = "INSERT INTO kent_report (kent_pid, kent_pname, kent_gender, kent_age, kent_reqby, kent_repby, kent_tmethod, kent_ttype, kent_date, kent_title, kent_descrp) VALUES ('$p_id','$kent_pname', '$kent_gender', '$kent_age','$kent_reqby', '$kent_repby', '$kent_tmethod', '$kent_ttype', '$kent_date','$kent_title', '$kent_descrp' );";
    
    $result=mysqli_query($con, $sql);
    echo mysqli_error($con);
    header("location: ../report-kent.php?variable5=$p_id");
   
}


?>