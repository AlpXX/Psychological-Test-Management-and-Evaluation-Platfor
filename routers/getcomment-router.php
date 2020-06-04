<?php
include '../includes/connect.php';

$p_id = $_POST['p_id'];
$comment_repby = ucfirst($_POST['comment_repby']);
$comment_mssg = ucfirst($_POST['comment_mssg']);
$comment_date = $_POST['comment_date'];


if(isset($_POST["sendcomment"])){

    $sql = "INSERT INTO comments (p_id,comment_repby, comment_mssg) VALUES ('$p_id','$comment_repby', '$comment_mssg');";
    $result=mysqli_query($con, $sql);
    header("location: ../getcomment.php?variable4=$p_id");
    echo mysqli_error($con);
   
}

?>