<?php
include '../includes/connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
if(isset($_POST["login"])){
    $sql = "SELECT * FROM doctor WHERE d_username='$username' AND d_password='$password';";
    $result=mysqli_query($con, $sql);
}
while($row = mysqli_fetch_array($result)){
    $_SESSION["d_name"]=$row["d_username"];
 

}

if(mysqli_num_rows($result)>0){
    $_SESSION["loggedin"] = true;
    header("location: ../patients.php");   
}
else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    header("location: ../index.php");
}

?>
