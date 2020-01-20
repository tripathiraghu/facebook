<?php
session_start();
include 'connection.php';

$number=$_POST['number'];

$sql_tab="UPDATE userdetail SET mobile_number ='$number' WHERE email='$email'";
mysqli_query($con,$sql_tab);


?>