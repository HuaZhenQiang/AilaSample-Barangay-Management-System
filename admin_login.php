<?php
session_start();
define('BASEPATH', true);
require 'connection.php';

$error_message = '';

if (isset($_POST['Login'])) {
  try {
    $dsn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $dsn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Ensure fields are not empty
    $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

        // Retrieve the user account information for the given username.
    $sql = "SELECT id, username, password FROM user WHERE username = :username";
    $stmt = $dsn->prepare($sql);

        // Bind value.
    $stmt->bindValue(':username', $username);

        // Execute.
    $stmt->execute();

        // Fetch row.
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // If $user is FALSE.
    if ($user === false) {
      $error_message = "Invalid username or password";
    } else {
            // Compare and decrypt passwords.
      $validPassword = password_verify($passwordAttempt, $user['password']);

            // If $validPassword is TRUE, the login has been successful.
      if ($validPassword) {
                // Provide the user with a login session.
        $_SESSION['user'] = $username;
        header('location: homepage.php');
        exit;
      } else {
                // $validPassword was FALSE. Passwords do not match.
        $error_message = "Invalid username or password";
      }
    }
  } catch (PDOException $e) {
    $error_message = "Error: " . $e->getMessage();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Register</title>
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      overflow: hidden;
    }

    .wave {
      position: fixed;
      bottom: 0;
      left: 0;
      height: 100%;
      z-index: -1;
    }

    .container {
      width: 100vw;
      height: 100vh;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 7rem;
      padding: 0 2rem;
    }

    .img {
      display: flex;
      justify-content: flex-end;
      align-items: center;
    }

    .login-content {
      display: flex;
      justify-content: flex-start;
      align-items: center;
      text-align: center;
    }

    .img img {
      width: 100%;
      max-width: 500px;
    }

    form {
      width: 100%;
      max-width: 360px;
    }

    .login-content img {
      height: 100px;
    }

    .login-content h2 {
      margin: 15px 0;
      color: #333;
      text-transform: uppercase;
      font-size: 2.9rem;
    }

    .login-content .input-div {
      position: relative;
      display: grid;
      grid-template-columns: 7% 93%;
      margin: 25px 0;
      padding: 5px 0;
      border-bottom: 2px solid #d9d9d9;
    }

    .login-content .input-div.one {
      margin-top: 0;
    }

    .row {
      color: #d9d9d9;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .row i {
      transition: .3s;
    }

    .input-div > div {
      position: relative;
      height: 45px;
    }

    .input-div > div > h5 {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: #999;
      font-size: 18px;
      transition: .3s;
    }

    .input-div:before,
    .input-div:after {
      content: '';
      position: absolute;
      bottom: -2px;
      width: 0%;
      height: 2px;
      background-color: #38d39f;
      transition: .4s;
    }

    .input-div:before {
      right: 50%;
    }

    .input-div:after {
      left: 50%;
    }

    .input-div.focus:before,
    .input-div.focus:after {
      width: 50%;
    }

    .input-div.focus > div > h5 {
      top: -5px;
      font-size: 15px;
    }

    .input-div.focus > .row > i {
      color: #38d39f;
    }

    .input-div > div > input {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      border: none;
      outline: none;
      background: none;
      padding: 0.5rem 0.7rem;
      font-size: 1.2rem;
      color: #555;
      font-family: 'poppins', sans-serif;
    }

    .input-div.pass {
      margin-bottom: 4px;
    }

    a {
      display: block;
      text-align: right;
      text-decoration: none;
      color: #999;
      font-size: 0.9rem;
      transition: .3s;
    }

    a:hover {
      color: #38d39f;
    }

    .btn {
      display: block;
      width: 100%;
      height: 50px;
      border-radius: 25px;
      outline: none;
      border: none;
      background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
      background-size: 200%;
      font-size: 1.2rem;
      color: #fff;
      font-family: 'Poppins', sans-serif;
      text-transform: uppercase;
      margin: 1rem 0;
      cursor: pointer;
      transition: .5s;
    }

    .btn:hover {
      background-position: right;
    }

    /* New styling to change placeholder color */
    ::placeholder {
      color: lightgray;
    }

    @media screen and (max-width: 1050px) {
      .container {
        grid-gap: 5rem;
      }
    }

    @media screen and (max-width: 1000px) {
      form {
        width: 100%;
        max-width: 290px;
      }

      .login-content h2 {
        font-size: 2.4rem;
        margin: 8px 0;
      }

      .img img {
        max-width: 400px;
      }
    }

    @media screen and (max-width: 900px) {
      .container {
        grid-template-columns: 1fr;
      }

      .img {
        display: none;
      }

      .wave {
        display: none;
      }

      .login-content {
        justify-content: center;
      }
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
</script>
</head>

<body>
  <img class="wave" src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/wave.png">
  <div class="container">
    <div class="img">
      <img src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/bg.svg">
    </div>
    <div class="login-content">

      <!-- In your HTML form -->
      <div class="error-message">
        <?php echo $error_message; ?>
      </div>


      <form method="POST" action="">
        <img src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/avatar.svg">
        <h2 class="title">Admin Access</h2>
        <div class="input-div one">
          <div class="row">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <input type="text" required name="username" class="input" placeholder="Username">
          </div>
        </div>
        <div class="input-div pass">
          <div class="row">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <input type="password" required name="password" id="password" class="input" placeholder="Password">

            <input type="checkbox" onclick="togglePassword()">&nbsp;Show Password


            <!-- <input type="checkbox" onclick="togglePassword()">&nbsp;Show Password -->
          </div>
        </div>
        <a href="#">Forgot Password?</a>

        <div class="row button my-4">
          <input type="submit" name="Login" class="btn" value="Login">
        </div>

        <a href="admin_signup.php" style="text-align: center;">Don't have an account? Sign up</a>
        <a href="#" style="text-align: center;">Back to Homepage</a>
      </form>
    </div>
  </div>
</body>
</html>
