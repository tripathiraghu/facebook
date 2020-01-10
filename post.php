<?php
session_start();
include 'connection.php';

$post=$_POST['msg'];
$username = $_COOKIE['fname'];
$profileImage = $_SESSION['profileImage'];



$sql_tab="INSERT INTO `post` (`sno`, `username`, `post`, `time`, `profileImage`) VALUES (NULL, '$username', '$post', CURRENT_DATE, '$profileImage')";

mysqli_query($con,$sql_tab);

header ("location:feed.php");






?>