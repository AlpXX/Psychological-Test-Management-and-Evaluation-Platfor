<?php
include '../includes/connect.php';


$mmpi_pname = ucfirst($_POST['mmpi_pname']);
$mmpi_gender = ucfirst($_POST['mmpi_gender']);
$mmpi_age = ($_POST['mmpi_age']);
$mmpi_reqby = ucfirst($_POST['mmpi_reqby']);
$mmpi_repby = ucfirst($_POST['mmpi_repby']);
$mmpi_tmethod = ($_POST['mmpi_tmethod']);
$mmpi_ttype = ($_POST['mmpi_ttype']);
$mmpi_date = $_POST['mmpi_date'];
$mmpi_title = ucfirst($_POST['mmpi_title']);
$mmpi_descrp = ucfirst($_POST['mmpi_descrp']);
$p_id = ($_POST['p_id']);
echo $p_id;


if(isset($_POST["mmpi-rep-submit"])){

    $sql = "INSERT INTO mmpi_report (mmpi_pid, mmpi_pname, mmpi_gender, mmpi_age, mmpi_reqby, mmpi_repby, mmpi_tmethod, mmpi_ttype, mmpi_date, mmpi_title,mmpi_descrp) 
    VALUES ('$p_id','$mmpi_pname', '$mmpi_gender', '$mmpi_age','$mmpi_reqby', '$mmpi_repby', '$mmpi_tmethod', '$mmpi_ttype', '$mmpi_date','$mmpi_title', '$mmpi_descrp' );";
    
    $result=mysqli_query($con, $sql);
    echo mysqli_error($con);
    header("location: ../report-mmpi.php?variable4=$p_id");
   
}



?>