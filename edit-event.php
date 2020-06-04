<?php
require_once "db.php";


if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
	header("location: index.php");
	exit;
  }

$id = $_POST['id'];
$title = $_POST['title'];
$start = $_POST['start'];
$end = $_POST['end'];

$sqlUpdate = "UPDATE tbl_events SET title='" . $title . "',start='" . $start . "',end='" . $end . "' WHERE id=" . $id;
mysqli_query($conn, $sqlUpdate)
mysqli_close($conn);

?>