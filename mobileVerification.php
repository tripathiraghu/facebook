<!DOCTYPE html>
<html>
<head>
	<title>Verify Your Mobile NUmber Please</title>
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
<body style="background-color: #e3e3e3">
<div class="send" style="width: 30%; box-shadow: 5px 5px; border: 1px solid grey; padding: 2%; border-radius: 40px; background-color: white;margin-left: 
30%;" align="center">
<h1>Enter Your Number</h1>
<form>
    <input type="text" id="number" placeholder="+91876*******">
    <div id="recaptcha-container"></div>
    <button type="button" onclick="phoneAuth();">Send Code</button>
</form>
</div>

<br>
<div class="verify" style="width: 30%; box-shadow: 5px 5px; border: 1px solid grey; padding: 1%; border-radius: 40px; background-color: white;margin-left: 
30%;" align="center" >
<h1>Enter Verification code</h1>
<form>
    <input type="text" id="verificationCode" placeholder="Enter verification code">
    <button type="button" onclick="codeverify();">Verify</button>

</form>
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
       alert("Message sent" + confirmationResult);

        
        
    }).catch(function (error) {
        alert(error.message);
    });
}
function codeverify() {
    var code=document.getElementById('verificationCode').value;
    

    coderesult.confirm(code).then(function (result) {
        alert("Successfully registered");
        var user=result.user;
        console.log(user);
        
    }).catch(function (error) {
        alert(error.message);
    });
}
</script>

</body>
</html>