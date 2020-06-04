<?php
include '../includes/connect.php';

$p_id = $_POST["p_id"];
$identity_number = $_POST['identity_number'];
$name = ucfirst($_POST['name']);
$surname = ucfirst($_POST['surname']);
$gender = ucfirst($_POST['gender']);
$age = $_POST['age'];
$phone = $_POST['phone'];


if(isset($_POST["editpatient"])){
    $sql="UPDATE patient SET p_identity='$identity_number', p_name='$name',p_surname='$surname', p_gender='$gender', p_age='$age', p_phone='$phone' WHERE p_id='$p_id'";
    $result=mysqli_query($con, $sql);
    header("location: ../details.php?variable1=$p_id");
   
}


?>
