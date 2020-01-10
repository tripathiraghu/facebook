<?php
session_start();
include 'connection.php';

$email=$_POST['email'];
$password1=$_POST['password1'];



$sql_tab="SELECT * FROM userdetail WHERE email='$email' AND password='$password1'";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);
echo $a;
if ($a>0)
{
  	while($row= mysqli_fetch_array($dt,MYSQLI_ASSOC))
{

echo "Name ";

echo $row['name'];
$fname=$row['name'];



echo "  Email ";
echo $row['email'];
$em=$row['email'];

echo $row['profileImage'];
$profileImage = $row['profileImage'];
$_SESSION['profileImage']=$profileImage;
}
header ("location: feed.php");
$_SESSION['email']=$em;

setcookie("testing", $_SESSION['email'], time() +60*60*365 );
$_SESSION['email']=$_COOKIE['testing'];
$_SESSION ['name'] = $fname ;
setcookie("fname", $_SESSION['name'], time() +60*60*365 );
$_SESSION ['Name'] = $_COOKIE['fname'];

}


else
{
	$message = "sorry the E-mail and password does not exist";
echo "<script type='text/javascript'>
alert('$message');

</script>";
echo "<script type='text/javascript'>
window.location= 'index.php';

</script>
";

}


?>