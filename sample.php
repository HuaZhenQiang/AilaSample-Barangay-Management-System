<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BMS</title>

  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

  <!--css file-->
  <!-- <link rel="stylesheet" href="style.css"> -->
  
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .white-text {
      color: white;
    }

    .header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      background-color: #002a5b;
      padding: 5px 20px;
      display: flex;
      align-items: center;
    }

    /*.header {
      overflow: hidden;
      background-color: #002a5b;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      display: flex;
      align-items: center;
      padding: 5px 20px;
    }*/

    .header img {
      height: 50px;
      width: auto;
    }

    .header .title {
      margin-left: 20px;
      color: white;
    }

    .header a {
      color: white;
      text-decoration: none;
      padding: 10px;
      margin-left: auto;
    }

    .sidebar::before {
      content: "";
      position: absolute;
      top: -11%;
      left: 0;
      width: 100%; 
      height: 18%; 
      background-image: url('img/bc11.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      z-index: 1;
      opacity: 1;
      transition: opacity 0.4s ease;
    }

    .sidebar {
     display: flex;
     flex-direction: column;
     width: 260px;
     margin: 60px 0 0 0;
     position: fixed;
     top: 60px; 
     left: 0;
     height: calc(100vh - 60px); 
     background-color: #FFFFFF;
     transition: all 0.5s ease;
     z-index: 100;
     color: #00000;
     opacity: 1;
   }

   .container {
    display: grid;
    grid-template-columns: 1fr 3fr;
  }

  img {
    max-width: 100%;
    height: auto;
  }

  .sidebar .logo,
  .sidebar .nav-list {
    top: 0%;
    position: relative;
    z-index: 1; 
  }

  .sidebar .logo {
    height: 60px;
    display: flex;
    width: 100%;
    align-items: center;
    padding: 20px;
    position: fixed;
    top: 0; 
  }

  .sidebar .logo img {
    height: 40px;
    width: 40px;
    border-radius: 50%;
    margin-right: 10%;
    margin-left: -0.5%;
    margin-top: 11%;
  }

  .sidebar .logo .user {
    font-size: 16px; 
    font-weight: 600;
  }

  .sidebar .logo p {
    font-size: 12px;
    color: #777777; 
    margin-top: 5px; 
  }

  .sidebar .nav-list {
    height: 100%;
    overflow: auto;
    margin-top: 40px;
    /*padding: 0px 0 0px 0;*/
  }

  .sidebar.close .nav-list {
    overflow: visible;
  }

  .sidebar .nav-list::-webkit-scrollbar {
    display: none;
  }

  .sidebar .nav-list li {
    position: relative;
    list-style: none;
    transition: all 0.4s ease;
    overflow: hidden; 
  }

  .sidebar .nav-list li:hover {
    background-color: #002a5b;
    /*padding-left: 3%;*/
    color: white;
  }

  .sidebar .nav-list li:hover .link-name {
    color: white;
  }

  .sidebar .nav-list li a {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: #000000; 
    transition: all 0.4s ease;
  }

  .sidebar .nav-list li:hover a {
    color: white;
  }

  .sidebar .nav-list li:hover i {
    color: white;
  }

  .sidebar .nav-list li::before {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: inherit;
    border-radius: inherit;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    z-index: -1;
  }

  .sidebar .nav-list li .icon-link {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .sidebar.close .nav-list li .icon-link {
    display: flex;
    justify-content: flex-end;
    align-items: center;
  }

  .sidebar .nav-list li i.arrow {
    margin-left: 5px; 
    visibility: visible;
  }

  .sidebar .nav-list li i {
    height: 50px;
    min-width: 60px;
    text-align: center;
    line-height: 50px;
    color: #000000;
    font-size: 19px;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .sidebar .nav-list li i:hover {
    color: #fff;
  }

  .sidebar.close .nav-list li i.arrow {
    display: none;
  }

  .sidebar .nav-list li.show i.arrow {
    transform: rotate(-90deg);
  }

  .sidebar .nav-list li a .link-name {
    margin-left: 5px; 
    color: #000000;
    font-size: 16px;
    font-weight: 350;
    transition: all 0.4s ease;
  }

  .sidebar .nav-list li .arrow {
    margin-left: 1px;
  }

  .sidebar.close .nav-list li a .link-name {
    opacity: 0;
    pointer-events: none;
  }

  .sidebar .nav-list li .sub-menu {
    padding: 6px 6px 14px 80px;
    margin-top: -10px;
    background: #FFFFFF;
    position: absolute;
    top: 0;
    left: 100%;
    border-radius: 0 1px 1px 0;
    transition: all 0.3s ease;
    display: none;
  }

  .sidebar .nav-list li.show .sub-menu {
    display: block;
  }

  .sidebar.close .nav-list li .sub-menu {
    opacity: 0;
    pointer-events: none;
  }

  .sidebar .nav-list li:hover .sub-menu {
    top: 0;
    opacity: 1;
    pointer-events: auto;
    transition: all 0.4s ease;
  }

  .sidebar .nav-list li .sub-menu a {
    color: #fff;
    font-size: 12px;
    padding: 4px 0;
    white-space: nowrap;
    opacity: 0.6;
    transition: all 0.3s ease;
  }

  .sidebar .nav-list li .sub-menu a:hover {
    opacity: 1;
    text-decoration: underline;
  }

  .sidebar .nav-list li .sub-menu .link-name {
    display: none;
  }

  .sidebar.close .nav-list li .sub-menu .link-name {
    font-size: 15px;
    opacity: 1;
    display: block;
  }

  .sidebar .nav-list li .sub-menu.blank {
    padding: 3px 20px 6px 16px;
    opacity: 0;
    pointer-events: none;
  }

  .sidebar .nav-list li:hover .sub-menu.blank {
    top: 50%;
    transform: translateY(-50%);
  }

  .logout {
    position: fixed;
    bottom: 0;
    width: 260px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #002a5b;
    padding: 5px 0;
    transition: all 0.5s ease;

     margin: 60px 0 0 0;
/*     top: -60px; */
     left: 0;
  }

  .sidebar.close .logout {
    background-color: none;
    width: 60px;
  }

  .home-section {
    position: relative;
    margin-left: 260px;
    margin-top: 4%;
    height: calc(100vh - 60px); 
    overflow: hidden;
    transition: all 0.5s ease;
    background-color: #f1f1f1;
    background-size: cover;
  }

  .content {
    position: relative;
    margin-top: 60px;
/*    height: calc(100vh - 60px);*/
    height: 100%;
    overflow: hidden;
    width: calc(100% - 260px); 
  }

  .sidebar.close ~ .content {
    width: calc(100% - 60px); 
  }

  .content-wrapper {
    overflow-y: auto;
    height: 100%;
  }

  .sidebar.close {
    width: 60px;
  }

  .sidebar.close ~ .home-section {
    margin-left: 60px;
  }

  .home-section .home-content {
    display: flex;
    height: 60px;
    align-items: center;
  }

  .home-section .home-content i,
  .home-section .home-content .text {
    color: #523d38;
    font-size: 20px;
  }

  .home-section .home-content i {
/*    margin: 0 15px;*/
    cursor: pointer;
  }

  .home-content {
/*    background: #F1F1F1;*/
    position: fixed;
    top: 9%;
    padding: 20px;
    z-index: 2; 
  }

  @media (max-width: 768px) {
    .sidebar.close .nav-list li .sub-menu {
      display: none;
    }

      /*.sidebar {
        width: 78px;
      }

      .home-section {
        left: 62px;
        width: calc(100% - 60px);
        z-index: 100;
      }*/

      sidebar {
        width: 100%;
      }

      .home-section {
        margin-left: 0;
      }

      .content {
        width: 100%;
      }

    }

    .h4 {
      text-transform: uppercase;
      font-weight: bold;
      font-size: 1.2em; 
    }

    body {
      background: url('img/') no-repeat center center fixed;
      background-size: 100%;
    }
  </style>


  <script>
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
      } else if (h == 0) {
        h = 12;
      }

      m = checkTime(m);
      s = checkTime(s);
      document.getElementById('txt').innerHTML = month + " " + day + ", " + year + " <br> " + h + ":" + m + ":" + s + " " + ampm;
      var t = setTimeout(startTime, 500);
    }

    function checkTime(i) {
      if (i < 10) { i = "0" + i };
      return i;
    }



    document.addEventListener("DOMContentLoaded", function () {
      let btn = document.querySelector(".fa-bars-menu");
      let sidebar = document.querySelector(".sidebar");

      btn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
        sidebar.classList.toggle("expanded");
      });

      let arrows = document.querySelectorAll(".arrow");
      for (let i = 0; i < arrows.length; i++) {
        arrows[i].addEventListener("click", (e) => {
          let arrowParent = e.target.parentElement.parentElement;
          arrowParent.classList.toggle("show");
        });
      }
    });

  </script>
</head>

<body onload="startTime()">

  <div class="header">
    <i class="fas fa-bars" style="margin-right: 2%; color: white;"></i>
    <!-- <span class="text">BMS</span> -->
    <img src="img/logo.png" alt="Iloilo City Seal">
    <div class="title">
      <!-- <i class="fas fa-bars-menu" id="btn"></i> -->
      <span class="h4">Barangay Buntatala</span>
      <br>
      <span class="d-none d-md-block" style="text-transform: uppercase;">Jaro, Iloilo City</span>
      <!-- <span class="d-none d-sm-none">Jaro, Iloilo City</span> -->
    </div>
    <div id="txt" style="color: white; margin-left: auto; text-align: center;"></div>
  </div>


  <div class="sidebar close">
    <div class="logo">
      <img src="img/samp.png" alt="me" >
      <!-- <span class="user">Ira Jude</span>
        <p>iju.tajanlangit@gmail.com</p> -->
      <!-- <i class="ri-store-3-fill"></i>
        <span class="logo-name">BMS</span> -->
      </div>
      <!-- <div class="userN">
        <p>Ira Jude Tajanlangit</p>
      </div> -->

      <ul class="nav-list">
        <li>
          <a href="#">
            <i class="ri-dashboard-2-line"></i>
            <span class="link-name">Dashboard</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Dashboard</a></li>
          </ul>
        </li>


        <li>
          <a href="#">
            <i class="ri-command-line"></i>
            <span class="link-name">Announcement</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Announcement</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="ri-group-line"></i>
            <span class="link-name">Officials</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Officials</a></li>
          </ul>
        </li>


        <li>
          <a href="#">
            <i class="ri-article-line"></i>
            <span class="link-name">Issuance Details</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Issuance Details</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="bx bx-category-alt"></i>
            <span class="link-name">Content Management</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Content Management</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="ri-edit-fill"></i>
            <span class="link-name" style="margin-right:30%;">Records</span>
            <i class="fas fa-caret-down arrow"></i>
          </a>

          <ul class="sub-menu">
            <li>
              <a href="#" class="link-name">Records</a>
            </li>

            <li>
              <a href="trainings&benefits.html">Tranings and Benefits</a>
            </li>
          </ul>

        </li>

        <li>
          <a href="#">
            <i class="ri-presentation-fill"></i>
            <span class="link-name">Monitoring Request</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Monitoring Request</a></li>
          </ul>
        </li>

        <!-- <li>
          <a href="#">
            <i class="ri-logout-box-line"></i>
            <span class="link-name">Logout</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="logout.php" class="link-name">Logout</a></li>
          </ul>
        </li> -->

        <li>
          <div class="logout">
            <a href="form.html">
              <i class="ri-logout-box-line" style="color:white;"></i>
              <span class="link-name" style="color: white;">Logout</span>
            </a>

            <ul class="sub-menu blank">
              <li><a href="form.html" class="link-name">Logout</a></li>
            </ul>
          </div>
        </li>

      </ul>
    </div>


    <div class="home-section">
      <div class="home-content">
      <!-- <i class="fas fa-bars"></i>
        <span class="text">BMS</span> -->
        <h1 >Sample Request</h1>
      </div>
    </div>


    <script>
      let btn = document.querySelector(".fa-bars");
      let sidebar = document.querySelector(".sidebar");

      btn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
      });

      let arrows = document.querySelectorAll(".arrow");
      for (var i = 0; i < arrows.length; i++) {
        arrows[i].addEventListener("click", (e) => {
          let arrowParent = e.target.parentElement.parentElement;

          arrowParent.classList.toggle("show");
        });
      }
    </script>
  </body>
  </html>
