<?php
session_start();
$username = $_COOKIE['fname'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello <?php echo $username; ?> </title>
	<script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Forum&display=swap" rel="stylesheet"> 

<link href="https://fonts.googleapis.com/css?family=Barlow&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
<style type="text/css">
	body{
		background-color: #e9ebee;
	}
	hr{
		margin-top: 9px;
		margin-bottom: 9px;
	}

	.postConatiner{
		background-color: white;
		border-radius: 20px;
		padding: 2%;
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
		margin-bottom: -3px;
	}

	.postConatiner .row .col-11 h6{
		/*color: black;*/
		
margin-bottom: -1px;
font-size: 12px;
   font-family: 'Forum', cursive;


	}


	.postConatiner .row .col-11 p{
		font-family: 'Barlow', sans-serif;
	}

	.row .col-4 .btn{
		background-color: white;
		padding: 0px;
	}
	.row .col-4  :hover{
		color:#a60000;

		padding: 0px;
	}

	.friendsList{
		margin-top: 4%;
		padding-top: 1%;
		background-color: #4ff628;
		padding-bottom: 2%;
	}


	.friendsListDisplay{
		display: flex;
		padding: 3%;

	}
	.friendsListDisplay img{
		height: 35px;
		width: 35px;
		border-radius: 20px;
	}

	.friendsListDisplay p{
		padding-left: 1%;
		padding-top: 0%;
		line-height: 1em;
		/*font-size: auto;*/
	}
</style>
</head>
<body>
<!-- top bar -->
<div class="topBar fixed-top" style="background:  #1c0f11; color: white; 	display:flex; padding-bottom: 0px;">
	<div class="logo col-lg-4  ">
		<p>The Facebook</p>
	</div>

	<div class="search col-lg-4">
	
	<form method="post" action="search.php" name="fr3">
	 <div class="form-row">
    <div class="form-group col-md-10 " style="margin-top: 10px;margin-bottom: 0px; padding-bottom: 0px;">
      <input type="text" name="search" class="form-control" id="Search" placeholder="Search">
    </div>
       <div class="form-group col-md-2" style="margin-top:10px;margin-bottom: 0px; padding-bottom: 0px;">
    	     
    	<button  type="submit" class="btn " style="width:100%;margin-left:0px;height: 100%; padding-bottom: 0px; border-radius: 800px; font-size: 15px; background-color:#fff; "><i class="fa fa-search" aria-hidden="true"></i></button>
 
    </div>
	</div>
	  </form>
</div>

<div class="menu col-lg-4" style="margin-top: 1%; font-size: 20px; color: white; padding-bottom: 0px;">
<a href="feed.php" style="color: white;">Home </a>|
<a href="profile.php" style="color: white;">Profile </a>|
<a href="Settings.php" style="color: white;">Settings </a>|
<a href="logout.php" style="color: white;"	>Logout</a>



</div>


</div>





<!-- top bar ends -->
<!-- main Feed start here -->

<div class="container" style="margin-top: 7%;">
<div class="row">
	
<div class="left col-2" style="padding: 1%;background-color:#e9ebee; ">
	<!-- display name with user profile -->
	<div class="displayName" style="display: flex; background-color:white; color:black ;border-radius: 20px;">
		<img src=" <?php echo $_SESSION['profileImage']; ?>" style="height: 44px; width: 44px; border-radius: 50px;">
		<a href="#" style="font-size:15px; padding-left: 4%; padding-top: 2	% "> <?php echo $username; ?></a>
</div>


<!-- friends list -->
<div class="friendsList" style="background-color:white; color:black ;border-radius: 20px; display: block;">
<p style="text-align: center; font-size: 20px; font-weight:400;background-color: black;color: white; border-radius: 20px 0px 20px 0px; font-family: 'Lobster', cursive;">Friends List</p>

<!-- friend list fetching form database -->

<?php

include 'connection.php';
$sql_tab = "SELECT * FROM userdetail  ORDER BY sno DESC";
$dt = mysqli_query($con, $sql_tab);
$s = mysqli_num_rows($dt);
while ($row = mysqli_fetch_array($dt, MYSQLI_ASSOC)) {
$name = $row['name'];
$proflieImage = $row['profileImage'];

if ($name== $username) {


}
else{
	echo "<div class="."friendsListDisplay".">";
echo "<img src = ".$proflieImage.">";
echo "<p>".$name."</p>";
echo "</div>";
echo "<hr>";
}
}
?>




</div>
</div>


<div class="center col-8" style="padding-left: 5%;padding-right: 5%;">
<div class="post-section">
<form action="post.php" method="post">
  <textarea name="msg" rows="3" cols="10" style="width: 100%; border: 1px solid green; border-radius: 10px;padding-left: 2%; padding-right: 2%; padding-bottom: 2%;" placeholder="what's on your mind, <?php echo $username; ?> "></textarea>
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

echo "<p>".$post."</p>";


echo "</div>";
echo "</div>";

//echo "</div>";
echo "<hr>";

echo "<div class="."row". ">";
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
echo "</div>";
echo "<br>";

}

?>
</div>
<!-- somethng  -->






















<!-- right side part -->


<div class="ri8 col-2">
	<amp-ad width="100vw" height="320"
     type="adsense"
     data-ad-client="ca-pub-4424589604236407"
     data-ad-slot="3517771470"
     data-auto-format="rspv"
     data-full-width="">
  <div overflow=""></div>
</amp-ad>
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