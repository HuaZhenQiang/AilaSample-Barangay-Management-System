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
  <link rel="stylesheet" href="style.css">
  
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
      overflow: hidden;
      background-color: #002a5b;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      display: flex;
      align-items: center;
      padding: 5px 20px;
    }

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
      top: 0;
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

    .sidebar .logo,
    .sidebar .nav-list {
      top: 8%;
      position: relative;
      z-index: 1; 
    }

    .sidebar {
      margin: 60px 0 0 0;
      position: absolute;
      top: 0;
      left: 0;
      width: 260px;
      height: 100vh;
      background-color: #FFFFFF;
      transition: all 0.5s ease;
      z-index: 100;
      color: #00000;
      opacity: 1;
    }

    .sidebar.close {
      width: 60px;
    }

    .sidebar .logo {
      height: 60px;
      display: flex;
      width: 100%;
      align-items: center;
      padding: 20px;
    }

    .sidebar .logo img {
      height: 40px;
      width: 40px;
      border-radius: 50%;
      margin-right: 1%;
      margin-top: -30%;
    }

    .sidebar .logo .user {
      font-size: 16px; /* Adjust the font size as needed */
      font-weight: 600;
    }

    .sidebar .logo p {
      font-size: 12px;
      color: #777777; /* Adjust the color as needed */
      margin-top: 5px; /* Adjust the margin as needed */
    }

    /*.sidebar .logo i {
      font-size: 30px;
      color: #000000;
      height: 50px;
      min-width: 60px;
      text-align: center;
      line-height: 50px;
    }

    .sidebar .logo .logo-name {
      font-size: 25px;
      color: #fff;
      font-weight: 600;
      transition: all 0.3s ease;
      transition-delay: 0.1s;
    }

    .sidebar.close .logo .logo-name {
      opacity: 0;
      pointer-events: none;
    }*/

    .sidebar .nav-list {
      height: 100%;
      padding: 30px 0 150px 0;
      overflow: auto;
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
      overflow: hidden; /* Clip the corners for a squircle effect */
    }

    .sidebar .nav-list li:hover {
      background-color: #002a5b;
/*      border-radius: 25px;*/
padding-left: 3%;
}

.sidebar .nav-list li a {
  display: flex;
  align-items: center;
  text-decoration: none;
  color: #000000; /* Set the default text color */
  transition: all 0.4s ease;
}

.sidebar .nav-list li:hover a {
  color: white; /* Change text color to white on hover */
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
  margin-left: 5px; /* Adjust the margin for spacing */
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
  margin-left: 5px; /* Adjust the margin for spacing */
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
}

.sidebar.close .logout {
  background-color: none;
  width: 60px;
}

.home-section {
  position: relative;
  height: 100vh;
  width: calc(100% - 260px);
  left: 260px;
  background-color: #f1f1f1;
  transition: all 0.5s ease;
}

.sidebar.close ~ .home-section {
  left: 60px;
  width: calc(100% - 60px);
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
  margin: 0 15px;
  cursor: pointer;
}

.home-section .home-content .text {
  white-space: nowrap;
  font-size: 20px;
  font-weight: 600;
}

.home-content {
  background: #F1F1F1;
  position: sticky;
  top: 0;
}

@media (max-width: 400px) {
  .sidebar.close .nav-list li .sub-menu {
    display: none;
  }

  .sidebar {
    width: 78px;
  }

  .sidebar.close {
    width: 0;
  }

  .home-section {
    left: 60px;
    width: calc(100% - 60px);
    z-index: 100;
  }

  .sidebar.close ~ .home-section {
    width: 100%;
    left: 0;
  }
}

</style>

<script>
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

<body>

  <div class="header">
    <i class="fas fa-bars" style="margin-right: 2%; color: white;"></i>
    <!-- <span class="text">BMS</span> -->
    <img src="img/logo.png" alt="Iloilo City Seal">
    <div class="title">
      <!-- <i class="fas fa-bars-menu" id="btn"></i> -->
      <span class="h4">Barangay Buntatala</span><br>
      <span class="d-none d-md-block">Jaro, Iloilo City</span>
      <span class="d-none d-sm-none">Jaro, Iloilo City</span>
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
