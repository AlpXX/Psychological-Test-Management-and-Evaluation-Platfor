<?php
include '../includes/connect.php';
$identity_number = ($_POST['identity_number']);
$name = ucfirst($_POST['name']);
$surname = ucfirst($_POST['surname']);
$gender = ucfirst($_POST['gender']);
$age = ($_POST['age']);
$phone = $_POST['phone'];
/*
$_SESSION["identity_number"]=$identity_number;
$_SESSION["name"]=$name;
$_SESSION["surname"]=$surname;
$_SESSION["gender"]=$gender;
$_SESSION["age"]=$age;
$_SESSION["phone"]=$phone; */


if(isset($_POST["register"])){

    $sql = "INSERT INTO patient (p_identity,p_name, p_surname, p_gender, p_age, p_phone) VALUES ('$identity_number','$name', '$surname', '$gender','$age', '$phone');";
    $result=mysqli_query($con, $sql);
    //header("location: ../patient-page.php");
   
}
/*if(mysqli_affected_rows($result)>0){
        
}*/
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    //header("location: ../register.php");
}


$sql2 = "SELECT p_id, p_name,p_surname FROM patient WHERE p_identity='$identity_number' AND p_name='$name' AND p_surname='$surname' AND p_gender='$gender' AND p_age='$age' AND p_phone='$phone';";

$result2=mysqli_query($con, $sql2);

while($row = mysqli_fetch_array($result2)){
        
        echo $row['p_id'];
        echo $row['p_name'];
        echo $row["p_surname"];

        $_SESSION["p_id"]=$row['p_id'];
        $_SESSION["p_name"]=$row['p_name'];
        $_SESSION["p_surname"]=$row['p_surname'];
        $_SESSION["loggedin_patient"] = true;

       
}
 header("location: ../patient-page.php");





?>