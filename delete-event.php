<?php
require_once "db.php";

if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
	header("location: index.php");
	exit;
  }


$id = $_POST['id'];
$sqlDelete = "DELETE from tbl_events WHERE id=".$id;

mysqli_query($conn, $sqlDelete);
echo mysqli_affected_rows($conn);

mysqli_close($conn);
?>