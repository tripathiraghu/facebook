<!DOCTYPE html>
<html>

<head>
    <title>The Facebook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Leckerli+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <div class="header">

        <div class="logo col-lg-5  ">
            <p>The Facebook</p>
        </div>
        <div class="login col-lg-7 ">
            <form method="post" action="loginconnect.php" name="fr1">
                <div class="form-row">
                    <div class="form-group col-md-5 " style="margin-top: 15px;">
                        <label for="inputEmail4" required>Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="jhon@Deo.com">
                    </div>
                    <div class="form-group col-md-5 " style="margin-top: 15px;">
                        <label for="inputPassword4">Password</label>
                        <input type="password" name="password1" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>

                    <div class="form-group col-md-2" style="margin-top:45px;">

                        <button type="submit" class="btn " style="width:96%; background-color:#fff; ">Login</button>

                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- herder ends here -->
    <!-- main body -->

    <div class="row">
        <div class="left col-lg-6" style="height:100%;">
            <!-- <img src="images/backgroud.png" style="height: auto; position: fixed;	opacity: 0.8;"> -->
            <div class="top">

                <i class="fa fa-heart-o" style="font-size:29px;"> <span class="p">Follow Your Love Ones.</span></i>

                <i class="fa fa-comments" style="font-size:29px;"><span class="p">Message Them Any Time.</span> </i>

                <i class="fa fa-share-alt" style="font-size:29px;"><span class="p"> Share Your Photos.</span></i>

            </div>

        </div>
        <div class="right col-lg-6">
            <h2 style="font-family: 'Lato', sans-serif; text-align: center; margin-top: 22px;">Signup</h2>
            <div class="box">
                <form method="post" action="signupconnect.php" name="fr1">
                    <div class="forssm-row">
                        <div class="form-group" style="margin-top: 15px; margin-left: 10px ;margin-right: 10px;">
                            <label for="labelName">Enter Your Full Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Jhon Deo" required>
                        </div>
                        <div class="form-group" style="margin-top: 15px; margin-left: 10px ;margin-right: 10px;">
                            <label for="labelEmail" required>Enter Your Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Jhon@Deo.com">
                        </div>

                        <div class="form-group" style="margin-top: 15px;margin-left: 10px ;margin-right: 10px;">
                            <label for="inputPassword4">Password</label>
                            <input type="password" name="password1" class="form-control" id="inputPassword4" placeholder="Password">
                        </div>

                        <div class="form-group" style="margin-top: 15px; margin-left: 10px ;margin-right: 10px;">
                            <label for="inputPassword4">Password</label>
                            <input type="password" name="password2" class="form-control" id="inputPassword4" placeholder="Confirm-Password">
                        </div>
                        <button type="submit" class="btn " style="width:96%; background-color:#fff; margin:10px; ">SignUp</button>
                    </div>
                </form>

            </div>

        </div>

    </div>

    <!-- main body ends here -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>