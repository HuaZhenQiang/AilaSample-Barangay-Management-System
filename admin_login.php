HTMLResult Skip Results Iframe

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  

  <link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />

  <meta name="apple-mobile-web-app-title" content="CodePen">

  <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

  <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />



  
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>


  <title>CodePen - Responsive Login + Signup form </title>

  <link rel="canonical" href="https://codepen.io/h26k2/pen/GyBevz">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Responsive Signup with login form</title>
  <link rel="stylesheet" href="index.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  
  
  
  <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat|Quicksand');

    *{
      font-family: 'quicksand',Arial, Helvetica, sans-serif;
      box-sizing: border-box;
    }

    body{
      background:#fff;
    }

    .form-modal{
      position:relative;
      width:450px;
      height:auto;
      margin-top:4em;
      left:50%;
      transform:translateX(-50%);
      background:#fff;
      border-top-right-radius: 20px;
      border-top-left-radius: 20px;
      border-bottom-right-radius: 20px;
      box-shadow:0 3px 20px 0px rgba(0, 0, 0, 0.1)
    }

    .form-modal button{
      cursor: pointer;
      position: relative;
      text-transform: capitalize;
      font-size:1em;
      z-index: 2;
      outline: none;
      background:#fff;
      transition:0.2s;
    }

    .form-modal .btn{
      border-radius: 20px;
      border:none;
      font-weight: bold;
      font-size:1.2em;
      padding:0.8em 1em 0.8em 1em!important;
      transition:0.5s;
      border:1px solid #ebebeb;
      margin-bottom:0.5em;
      margin-top:0.5em;
    }

    .form-modal .login , .form-modal .signup{
      background:#57b846;
      color:#fff;
    }

    .form-modal .login:hover , .form-modal .signup:hover{
      background:#222;
    }

    .form-toggle{
      position: relative;
      width:100%;
      height:auto;
    }

    .form-toggle button{
      width:50%;
      float:left;
      padding:1.5em;
      margin-bottom:1.5em;
      border:none;
      transition: 0.2s;
      font-size:1.1em;
      font-weight: bold;
      border-top-right-radius: 20px;
      border-top-left-radius: 20px;
    }

    .form-toggle button:nth-child(1){
      border-bottom-right-radius: 20px;
    }

    .form-toggle button:nth-child(2){
      border-bottom-left-radius: 20px;
    }

    #login-toggle{
      background:#57b846;
      color:#ffff;
    }

    .form-modal form{
      position: relative;
      width:90%;
      height:auto;
      left:50%;
      transform:translateX(-50%);  
    }

    #login-form , #signup-form{
      position:relative;
      width:100%;
      height:auto;
      padding-bottom:1em;
    }

    #signup-form{
      display: none;
    }


    #login-form button , #signup-form button{
      width:100%;
      margin-top:0.5em;
      padding:0.6em;
    }

    .form-modal input{
      position: relative;
      width:100%;
      font-size:1em;
      padding:1.2em 1.7em 1.2em 1.7em;
      margin-top:0.6em;
      margin-bottom:0.6em;
      border-radius: 20px;
      border:none;
      background:#ebebeb;
      outline:none;
      font-weight: bold;
      transition:0.4s;
    }

    .form-modal input:focus , .form-modal input:active{
      transform:scaleX(1.02);
    }

    .form-modal input::-webkit-input-placeholder{
      color:#222;
    }


    .form-modal p{
      font-size:16px;
      font-weight: bold;
    }

    .form-modal p a{
      color:#57b846;
      text-decoration: none;
      transition:0.2s;
    }

    .form-modal p a:hover{
      color:#222;
    }


    .form-modal i {
      position: absolute;
      left:10%;
      top:50%;
      transform:translateX(-10%) translateY(-50%); 
    }

    .fa-google{
      color:#dd4b39;
    }

    .fa-linkedin{
      color:#3b5998;
    }

    .fa-windows{
      color:#0072c6;
    }

    .-box-sd-effect:hover{
      box-shadow: 0 4px 8px hsla(210,2%,84%,.2);
    }

    @media only screen and (max-width:500px){
      .form-modal{
        width:100%;
      }
    }

    @media only screen and (max-width:400px){
      i{
        display: none!important;
      }
    }
  </style>

  <script>
    window.console = window.console || function(t) {};
  </script>

  
  
</head>

<body translate="no">
  <div class="form-modal">
    
    <div class="form-toggle">
      <button id="login-toggle" onclick="toggleLogin()">log in</button>
      <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
    </div>

    <div id="login-form">
      <div>
        <input type="text" id="email" placeholder="Enter email "/>
        <input type="password" id=" password" placeholder="Enter password"/>
        <input type="submit"  id="login" class="btn login" value="Login">
        <p><a href="javascript:void(0)">Forgotten account</a></p>
        <hr/>
        <button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i> sign in with google</button>
        <button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> sign in with linkedin</button>
        <button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i> sign in with microsoft</button>
      </div>
    </div>

    <div id="signup-form">
      <div>
        
        <input type="text" id="username" name="username" placeholder="Choose username"/>
        <input type="email" id="email" name="email" placeholder="Enter your email"/>
        <input type="password" id="password" name="password" placeholder="Create password"/>
        <input type="submit" id="signUp" class="btn signup" value="Sign Up ">
        <p>Clicking <strong>create account</strong> means that you are agree to our <a href="javascript:void(0)">terms of services</a>.</p>
        <hr/>
        <button type="button" class="btn -box-sd-effect"> <i class="fa fa-google fa-lg" aria-hidden="true"></i> sign up with google</button>
        <button type="button" class="btn -box-sd-effect"> <i class="fa fa-linkedin fa-lg" aria-hidden="true"></i> sign up with linkedin</button>
        <button type="button" class="btn -box-sd-effect"> <i class="fa fa-windows fa-lg" aria-hidden="true"></i> sign up with microsoft</button>
      </div>
    </div>

  </div>
  
  <script id="rendered-js" >
    function toggleSignup() {
      document.getElementById("login-toggle").style.backgroundColor = "#fff";
      document.getElementById("login-toggle").style.color = "#222";
      document.getElementById("signup-toggle").style.backgroundColor = "#57b846";
      document.getElementById("signup-toggle").style.color = "#fff";
      document.getElementById("login-form").style.display = "none";
      document.getElementById("signup-form").style.display = "block";
    }

    function toggleLogin() {
      document.getElementById("login-toggle").style.backgroundColor = "#57B846";
      document.getElementById("login-toggle").style.color = "#fff";
      document.getElementById("signup-toggle").style.backgroundColor = "#fff";
      document.getElementById("signup-toggle").style.color = "#222";
      document.getElementById("signup-form").style.display = "none";
      document.getElementById("login-form").style.display = "block";
    }
//# sourceURL=pen.js
  </script>
  <script type="module">
  // Import the functions you need from the SDKs you need
 // import { initializeApp } from 

    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js";
    import { getDatabase, set, ref, update } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-database.js";
    import { getAuth, createUserWithEmailAndPassword, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-auth.js";

  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
    const firebaseConfig = {
      apiKey: "AIzaSyD6saE1sgNNYA4DSlMu_JoFfltzYhPMZtc",
      authDomain: "vridhipages-auth.firebaseapp.com",
      databaseURL: "https://vridhipages-auth-default-rtdb.firebaseio.com",
      projectId: "vridhipages-auth",
      storageBucket: "vridhipages-auth.appspot.com",
      messagingSenderId: "376345254551",
      appId: "1:376345254551:web:fdc413c334956764fae7d2"
    };

    const app = initializeApp(firebaseConfig);
    const database = getDatabase(app); 
    const auth = getAuth();

    const signUpButton = document.getElementById("signUp");
    signUp.addEventListener('click',(e) => {
      var email = document.getElementById('email').value;
      var username = document.getElementById('username').value;
      var password = document.getElementById('password').value;

      createUserWithEmailAndPassword(auth, email, password)
      .then((userCredential) => {
    // Signed in 
        const user = userCredential.user;
        set(ref(database,'users/'+ user.uid),{
          username:username,email:email})
        alert('You are succesfully registered')
    // ...
      })
      .catch((error) => {
        const errorCode = error.code;
        const errorMessage = error.message;
        alert (errorMessage);
    // ..
      });
    });
    
    login.addEventListener('click',(e) => {
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;

      signInWithEmailAndPassword(auth, email, password)
      .then((userCredential) => {
    // Signed in 
        const user = userCredential.user;
        const dt = new Date()
    // ...
        update(ref(database,'users/'+ user.uid),{
          last_login:dt})
        alert('You are succesfully logged in')
    // ...
      })
    })
    .catch((error) => {
      const errorCode = error.code;
      const errorMessage = error.message;
      alert (errorMessage);
    });});
  </script>
</body>

</html>



Resources1× 0.5× 0.25×Rerun