
<!DOCTYPE html>
<html lang="en">
<head>
  <!--Required meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barangay Management System</title>
    <!-- CSS -->
  <link rel="icon" href="text/css" href="img/logo.png">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family:Poppins;
    }

    .container{
      max-width: 440px;
      padding: 0 20px;
      margin: 170px auto;
      max-height: 530px;
      /*  margin-top: 10%;*/
    }

    .main {
      margin-left: 35%; 
      margin-right: 10%;
      margin-top: 6%;
      width: 30%;
      position: fixed;
      align-items: center;
    }

    .wrapper{
      width: 100%;
      background: #fff;
      border-radius: 5px;
      box-shadow: 0px 4px 10px 1px rgba(0,0,0,0.1);
    }

    .wrapper .title{
      height: 90px;
      background: #0077b6;
      /*  #F6F4E6*/
      border-radius: 5px 5px 0 0;
      color: #fff;
      font-size: 30px;
      font-weight: 600;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
    }

    .wrapper form{
      padding: 30px 25px 25px 25px;
    }

    .wrapper form .row{
      height: 45px;
      margin-bottom: 15px;
      position: relative;
    }

    .wrapper form .row input{
      height: 100%;
      width: 100%;
      outline: none;
      padding-left: 60px;
      border-radius: 5px;
      border: 1px solid lightgrey;
      font-size: 16px;
      transition: all 0.3s ease;
    }

    form .row input:focus{
      border-color: #16a085;
      box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
    }

    form .row input::placeholder{
      color: #999;
    }

    .wrapper form .row i{
      position: absolute;
      width: 47px;
      height: 100%;
      color: #fff;
      font-size: 18px;
      background: #FFCE3A;
      /*  border: 1px solid #ffc107;*/
      border-radius: 5px 0 0 5px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .wrapper form .pass{
      margin: -8px 0 20px 0;
    }

    .wrapper form .pass a{
      color: #16a085;
      font-size: 17px;
      text-decoration: none;
    }

    .wrapper form .pass a:hover{
      text-decoration: underline;
    }

    .wrapper form .button input{
      color: #fff;
      font-size: 20px;
      font-weight: 500;
      padding-left: 0px;
      background: #52575D;
      /*  border: 1px solid #16a085;*/
      cursor: pointer;
      transform: translateY(15px);
    }

    form .button input:hover{
      background: #12876f;
    }

    .wrapper form .signup-link{
      text-align: center;
      margin-top: 20px;
      font-size: 17px;
    }

    .wrapper form .signup-link a{
      color: #16a085;
      text-decoration: none;
    }

    form .signup-link a:hover{
      text-decoration: underline;
    }

  </style>

  <script>
    function togglePassword() {
      var password = document.getElementById("password");
      if (password.type === "password") {
        password.type = "text";
      } else {
        password.type = "password";
      }
    }

    function startTime() {
      var today = new Date();
      var day = today.getDate();
      var monthNames = ["January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"];
        var month = monthNames[today.getMonth()];
        var year = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        var ampm = h >= 12 ? 'pm' : 'am';

        if (h > 12) {
          h = h - 12;
        }

        else if (h==0) {
          h = 12;
        }

        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML = month + " " + day + ", " + year + " <br> " + h + ":" + m + ":" + s + " " + ampm;
        var t = setTimeout(startTime, 500);
      }

      function checkTime(i) {
        if (i < 10) {i = "0" + i};
        return i;
      }
      </script>
    </head>

    <body style="background: url('img/bc16.jfif') no-repeat center center fixed; background-size: 100%;" onload="startTime()">

      <?php
      // Show error message if any
      if (isset($error_message)) {
        echo '<p style="color: red;">' . $error_message . '</p>';
      }
      ?>

      <header class="text-light py-1 px-1" style="background-color: #002a5b">
        <div class="d-flex">
          <img src="img/logo.png" alt="Iloilo City Seal" style="height: 70px; width: auto;">
          <div class="me-auto ms-3">
            <span class="h4">Barangay Buntatala</span><br>
            <span class="d-none d-md-block">Jaro, Iloilo City</span>
            <span class="d-none d-ms-none">Jaro, Iloilo City</span>
          </div>

          <div class="px-5 float-end">
            <span class><br>
              <span id="txt"></span>
            </span>
          </div>
        </div>
      </header>

      <div class="main">
        <div class="wrapper">
          <div class="title"><span>Admin Access</span></div>
          <form method="POST" action="">
            <div class="row">
              <i class="fas fa-user dark" style="color:black;"></i>
              <input type="text" required name="username" placeholder="Username">
            </div>
            <div class="row">
              <i class="fas fa-lock" style="color:black;"></i>
              <input required="required" type="password" name="password" id="password" placeholder="Password">
            </div>

            <input type="checkbox" onclick="togglePassword()">&nbsp;Show Password
            <a href="resident_login.php" style="margin-left: 25%;">Resident Login</a>

            <div class="row button my-4">
              <input type="submit" name="Login" value="Login">
            </div>
            <a href="register.php" style="margin-left: 30%;">Back to Homepage</a>
          </form>
        </div>
      </div>

      <div class="fixed-bottom text-center text-light p-1" style="font-size: 10pt;">
        <!-- opacity: 0.5; -->
        Developed by<br>Ira Jude Tajanlangit &copy; All Rights Reserved
      </div>
    </body>
</html>