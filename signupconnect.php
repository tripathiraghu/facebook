<?php
session_start();
include 'connection.php';





$name=$_POST['name'];
$email=$_POST['email'];
$password1=$_POST['password1'];

$sql_tab="SELECT * FROM userdetail WHERE email='$email'";
$dt=mysqli_query($con,$sql_tab);
$a=mysqli_num_rows($dt);
echo $a;
if ($a>0){
$message = "Sorry But This Email Id Already Used By Some User Please Provide Different Email";
echo "<script type='text/javascript'>
alert('$message');

</script>";
echo "<script type='text/javascript'>
window.location= 'index.php';

</script>
";

}
  
else{
$sql_tab="insert into  userdetail (name, email, password) values ('$name','$email','$password1')";

mysqli_query($con,$sql_tab);

$_SESSION['name']=$name;
$_SESSION['email']=$email;






header ("location:photoUpload.php");


}


// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();

//   }

// elseif(
// $sql_tab="SELECT * FROM userdetail WHERE email='$email' ")

//  {
//    	header ("location:feed.php");
//  }
  
// else{
// 	header("index.php");
// } 


?>