<?php
include '../includes/connect.php';
$identity_number = ($_POST['identity_number']);



if(isset($_POST['details'])){
    $sql="SELECT * FROM patient WHERE p_identity= $identity_number";
    $result=mysqli_query($con, $sql);
}

if(mysqli_num_rows($result)>0){
        extract($result);
        header("location: ../details.php");
        
    }
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
        //header("location: ../register.php");
    }


?>