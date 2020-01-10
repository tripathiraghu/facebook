<?php
session_start();
$username = $_COOKIE['fname'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello <?php echo $username; ?> </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Forum&display=swap" rel="stylesheet"> 



<style type="text/css">
	hr{
		margin-top: 9px;
		margin-bottom: 9px;
	}
	.postConatiner .row .col-1	 img{
		width: 60px;
		height: 60px;
		border-radius: 50px;
		border: 1px solid white;


	}
	.postConatiner .row .col-11{
	padding-left: 31px;
	margin-top: -3px;
	}

	.postConatiner .row .col-11 h4{
		color: black;
		font-family: 'Baloo Bhai', cursive;
		margin-bottom: -7px;
	}

	.postConatiner .row .col-11 h6{
		/*color: black;*/
		
margin-bottom: -1px;
   font-family: 'Forum', cursive;


	}
</style>
</head>
<body>
<!-- top bar -->
<div class="topBar fixed-top" style="background:  #1c0f11; color: white; 	display:flex;">
	<div class="logo col-lg-4  ">
		<p>The Facebook</p>
	</div>

	<div class="search col-lg-4">
	
	<form method="post" action="search.php" name="fr3">
	 <div class="form-row">
    <div class="form-group col-md-10 " style="margin-top: 35px;">
      <input type="text" name="search" class="form-control" id="Search" placeholder="Search">
    </div>
       <div class="form-group col-md-2" style="margin-top:30px;">
    	     
    	<button  type="submit" class="btn " style="width:100%;margin-left:0px;height: 100%; border-radius: 800px; font-size: 25px; background-color:#fff; "><i class="fa fa-search" aria-hidden="true"></i></button>
 
    </div>
	</div>
	  </form>
</div>

<div class="menu col-lg-4" style="margin-top: 3%; font-size: 20px; color: white;">
<a href="feed.php" style="color: white;">Home </a>|
<a href="profile.php" style="color: white;">Profile </a>|
<a href="Settings.php" style="color: white;">Settings </a>|
<a href="Logout.php" style="color: white;"	>Logout</a>



</div>


</div>





<!-- top bar ends -->
<!-- main Feed start here -->

<div class="container" style="margin-top: 10%;">
<div class="row">
	
<div class="left col-2">
	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</div>



<div class="center col-8">
<div class="post-section">
<form action="post.php" method="post">
  <textarea name="msg" rows="3" cols="10" style="width: 100%;" placeholder="what's on your mind, <?php echo $username; ?> "></textarea>
<button class="btn" type="submit" style="background-color: #1c0f11; color: white;" ><i class="fa fa-newspaper-o" aria-hidden="true"></i>
 Post</button>
</form>
</div>
<hr>
<br>

<!-- something -->

<?php

include 'connection.php';
$sql_tab = "SELECT * FROM post  ORDER BY sno DESC";
$dt = mysqli_query($con, $sql_tab);
$s = mysqli_num_rows($dt);
while ($row = mysqli_fetch_array($dt, MYSQLI_ASSOC)) {



$name = $row['username'];

$post = $row['post'];


$time = $row['time'];
$proflieImage = $row['profileImage'];

// echo $name;
// echo  "<br>";

// echo $post;
// echo  "<br>";
// echo $time;
// echo  "<br>";
//echo "<img src = ".$proflieImage.">";

// main styling



echo "<div class="."postConatiner ".">";
echo "<div class="."row".">";
echo "<div class="."col-1".">";
echo "<img src = ".$proflieImage.">";
echo "</div>";
echo "<div class="."col-11".">";

echo "<h4>".$name."</h4>";
//echo "<br>";
echo "<h6>".$time."</h6>";

echo "<h2>".$post."</h2>";


echo "</div>";
echo "</div>";

echo "</div>";
echo "<hr>";

echo "<div class="."row".">";
echo "<div class="."col-4".">";
?>
<button class="btn-block btn">
<i class="fa fa-thumbs-up" aria-hidden="true"></i>

<?php
echo "Like";
echo "</button>";
echo "</div>";

echo "<div class="."col-4".">";
?>
<button class="btn-block btn">
<i class="fa fa-comment" aria-hidden="true"></i>


<?php
echo "Comments";
echo "</button>";
echo "</div>";

echo "<div class="."col-4".">";
?>
<button class="btn-block btn">
<i class="fa fa-share" aria-hidden="true"></i>


<?php
echo "Share";
echo "</button>";
echo "</div>";


echo "</div>";

echo "<hr>";

echo "<br>";echo "<br>";

}

?>
</div>
<!-- somethng  -->






















<!-- right side part -->


<div class="ri8 col-2">
	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.	
</div>


</div>


</div>

<!-- main feed ends here -->

</body>
</html>
<!-- testing section -->


<h1>welcome to your feed</h1>
<?php
	

echo $_COOKIE['fname'];


?>