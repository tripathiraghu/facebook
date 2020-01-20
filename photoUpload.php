<?php
session_start();
$username = $_COOKIE['fname'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload your profile Pic <?php echo $username; ?> </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">
</head>
<body>
<div class="topBar fixed-top" style="background:  #1c0f11; color: white; 	display:flex; padding-bottom: 0px; ">
	<div class="logo col-lg-4  ">
		<p>The Facebook</p>
	</div>
</div>

<!-- top bar ends -->
<!-- main section -->
<div class="container" style="margin-top: 10%; border: 1px solid grey; padding: 4%; border-radius: 10px; text-align: center;">


	<h1>Upload Your Profile Picture</h1>
<form method="post" action="photoSave.php" name="fr1" enctype="multipart/form-data">
<div class="form-group">
<div class="container" style="margin-top: 1%; width: 50%; border: 1px solid grey; padding: 1%; border-radius: 10px; text-align: center;">
	<input type="file" name="fileToUpload" id="fileToUpload" >
	<button class="btn btn-primary btn-lg" type="submit" value="Upload Image" name="submit"> Upload</button>
</div>
</div>









<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>