<!DOCTYPE html>
<html>
<head>
	<title>Verify Your Mobile NUmber Please</title>
</head>
<body>

<h1>Enter number to create account</h1>
<form>
    <input type="text" id="number" placeholder="+91876*******">
    <div id="recaptcha-container"></div>
    <button type="button" onclick="phoneAuth();">SendCode</button>
</form><br>
<h1>Enter Verification code</h1>
<form>
    <input type="text" id="verificationCode" placeholder="Enter verification code">
    <button type="button" onclick="codeverify();">Verify</button>

</form>



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
<script src="auth.js" type="text/javascript"></script>

</body>
</html>