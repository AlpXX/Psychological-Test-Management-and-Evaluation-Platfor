<?php
    include 'includes/connect.php';
	session_destroy();
	header("location: index.php");
?>