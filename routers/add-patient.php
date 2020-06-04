<?php
include '../includes/connect.php';

$identity_number = $_POST['identity_number'];
$name = ucfirst($_POST['name']);
$surname = ucfirst($_POST['surname']);
$gender = ucfirst($_POST['gender']);
$age = $_POST['age'];
$phone = $_POST['phone'];


if(isset($_POST["addpatient"])){

    $sql = "INSERT INTO patient (p_identity,p_name, p_surname, p_gender, p_age, p_phone) VALUES ('$identity_number','$name', '$surname', '$gender','$age', '$phone');";
    $result=mysqli_query($con, $sql);
    header("location: ../patients.php");
   
}

?>
