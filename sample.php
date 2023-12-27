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
  </head>
  <body>

    <div class="header">
      <i class="fas fa-bars" style="margin-right: 2%;"></i>
      <!-- <span class="text">BMS</span> -->
    <img src="img/logo.png" alt="Iloilo City Seal">
    <div class="title">
      <i class="fas fa-bars-menu" id="btn"></i>
      <span class="h4">Barangay Buntatala</span><br>
      <span class="d-none d-md-block">Jaro, Iloilo City</span>
      <span class="d-none d-sm-none">Jaro, Iloilo City</span>
    </div>
    <div id="txt" style="color: white; margin-left: auto; text-align: center;"></div>
  </div>

    <div class="sidebar close">
      <div class="logo">
        <i class="ri-store-3-fill"></i>
        <span class="logo-name">BMS</span>
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
          <div class="icon-link">
            <a href="#">
                <i class="ri-article-line"></i>
              <span class="link-name">Blogs</span>
            </a>
            <i class="fas fa-caret-down arrow"></i>
          </div>

          <ul class="sub-menu">
            <li><a href="#" class="link-name">Blogs</a></li>
            <li><a href="#">New Blog Post</a></li>
            <li><a href="blog.html">Saved Blogs</a></li>
            <li><a href="#">Drafts</a></li>
          </ul>
        </li>

        <li>
          <div class="icon-link">
            <a href="#">
                <i class="ri-presentation-fill"></i>
              <span class="link-name">Offers</span>
            </a>
            <i class="fas fa-caret-down arrow"></i>
          </div>

          <ul class="sub-menu">
            <li><a href="#" class="link-name">Offers</a></li>
            <li><a href="trainings&benefits.html">Tranings and Benefits</a></li>
            <li><a href="#">Courses</a></li>
          </ul>
        </li>

        <li>
          <div class="icon-link">
            <a href="#">
                <i class="ri-briefcase-4-line"></i>
              <span class="link-name">Management</span>
            </a>
            <i class="fas fa-caret-down arrow"></i>
          </div>

          <ul class="sub-menu">
            <li><a href="#" class="link-name">Management</a></li>
            <li><a href="inventory.html">Inventory</a></li>
            <li><a href="#">Analytics</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="ri-question-line"></i>
            <span class="link-name">Help</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Help</a></li>
          </ul>
        </li>

        <li>
          <a href="#">
            <i class="ri-settings-4-line"></i>
            <span class="link-name">Settings</span>
          </a>

          <ul class="sub-menu blank">
            <li><a href="#" class="link-name">Settings</a></li>
          </ul>
        </li>
        
        <li>
            <a href="#">
                <i class="ri-information-line"></i>
              <span class="link-name">About</span>
            </a>
  
            <ul class="sub-menu blank">
              <li><a href="#" class="link-name">About</a></li>
            </ul>
        </li>
        
        <li>
          <div class="logout">
                <a href="form.html">
                    <i class="ri-logout-box-line"></i>
                    <span class="link-name">Logout</span>
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
