


</head>

<body>
    <?php 
session_start();
$user=$_COOKIE['fname'];
if ($user!="") {

header("location: feed.php");
  
} else {
 header("location:loginsignup.php");
}
?>
</body>

</html>