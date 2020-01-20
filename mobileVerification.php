<!DOCTYPE html>
<html>
<head>
	<title>Verify Your Mobile NUmber Please</title>
    <style type="text/css">
    .verify{
      background-color:#f2f2f2;;
        padding-block: 14%;
     }   
     .verify h1{
    font-family: 'Fugaz One', cursive;


    }
    .sendBox{
      background-color:#f2f2f2;;
        padding-block: 14%;
     }
     .sendBox h1{

    font-family: 'Fugaz One', cursive;


    }
    .sendBox .inputBar{
      padding: 20px;
      border-radius: 10px;
      color: green;
      font-size: 22px;
      width: 90%;
      margin-bottom: 20px;
    }

 .verify .inputBar{
      padding: 20px;
      border-radius: 10px;
      color: green;
      font-size: 22px;
      width: 90%;
      margin-bottom: 20px;
    }
    </style>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Fugaz+One&display=swap" rel="stylesheet"> 
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-4424589604236407",
          enable_page_level_ads: true
     });
</script>
<script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>

</head>
<body style="background-color: #e3e3e3" width="100%" height="100%">
<!-- verification number block -->
<div id="numberVerify" class="verify" style="display: none; width:100%;  position:fixed;">
<div class="verify" style="width: 40%; box-shadow: 2px 2px; border: 1px solid grey;  border-radius: 10px; background-color: white;margin-left:30%;padding: 4%;" align="center">
<h1>Enter Verification code</h1>
<form>
    <input class="inputBar" type="text" id="verificationCode" placeholder="Enter verification code">

    <button type="button" class="btn btn-primary btn-lg" onclick="codeverify();">Verify</button>

</form>
</div>
</div>


<!-- phone number box -->
<div class="sendBox">
<div class="send" style="width: 30%; box-shadow: 5px 5px; border: 1px solid grey; padding: 2%; border-radius: 10px; background-color: white;margin-left: 
30%;" align="center">
<h1>Enter Your Number</h1>
<form>
    <input type="text" class="inputBar" id="number" name="mobileNumber" placeholder="+91876*******">
    <div id="recaptcha-container" ></div>
    <br>
    <br>
    <button class="btn btn-primary btn-lg" type="button" onclick="phoneAuth();" onclick="show();">Send Code</button>
</form>
</div>
</div>
<amp-auto-ads type="adsense"
              data-ad-client="ca-pub-4424589604236407">
</amp-auto-ads>
<amp-auto-ads type="adsense"
              data-ad-client="ca-pub-4424589604236407">
</amp-auto-ads>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<!-- <script src="https://www.gstatic.com/firebasejs/7.6.2/firebase-analytics.js"></script> -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCGWcJGg_QASq8XGXMUaeRgw1L16MUWRyE",
    authDomain: "thefacebook-eb660.firebaseapp.com",
    databaseURL: "https://thefacebook-eb660.firebaseio.com",
    projectId: "thefacebook-eb660",
    storageBucket: "thefacebook-eb660.appspot.com",
    messagingSenderId: "1086369885576",
    appId: "1:1086369885576:web:fc7cadb890b754b7a01e3d",
    measurementId: "G-5BK2NETLHG"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script type="text/javascript">
	window.onload=function () {
  render();
};
function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}
function phoneAuth() {
    //get the number
    var number=document.getElementById('number').value;
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
    firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
        //s is in lowercase
        window.confirmationResult=confirmationResult;
        coderesult=confirmationResult;
 sessionStorage.setItem('codecarry', coderesult);
        console.log(coderesult);
       
       
  document.getElementById("numberVerify").style.display = "block"; 

 
        
    }).catch(function (error) {
        alert(error.message);
    });
}
function codeverify() {
    var code=document.getElementById('verificationCode').value;
    

    coderesult.confirm(code).then(function (result) {
        location.href = "feed.php"; 
        var user=result.user;
        console.log(user);
        
    }).catch(function (error) {
        alert(error.message);
    });
}



// mobile number upload to php databse
// function mob(){
// $.ajax({
//         url: "save.php",
//         type: "POST",
//         data: {
//           numbers: document.getElementById('number').value;
//         }

// }



</script>


   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>