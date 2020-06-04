<?php
session_start();
$conn = mysqli_connect("localhost","root","","patient_info_sys") ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>