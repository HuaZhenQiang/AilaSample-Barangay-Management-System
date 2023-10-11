<!DOCTYPE html>
<html lang="en">
<head>
  <!--Required meta tags-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="icon" href="text/css" href="img/logo.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <!-- JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <style>

    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

    body {
      font-family:Poppins;
      /*'Poppins', sans-serif;*/
      background: #F0F8FF;
      /*background-color: #F0F8FF;*/
    }

    header {
      background-color: #002a5b;
      height:70px;
      /*  #114466*/
    }

    .sidebar {
      position: fixed;
      top: 70px;
      left: 0;
      bottom: 0;
      background-color: #212529;
      color:white;
      /*background-color: #f5f5f5;*/
      padding-top: 20px;
      width: 200px;
      z-index: 999;
    }

    /* Sidebar links */
    .sidebar a {
      display: block;
      color: white;
      padding: 10px;
      text-decoration: none;
    }

    /* Active/current link */
    .sidebar a.active {
      font-weight: none;
      background-color: #dbca13;
      /*background-color: #4f4e41;*/
      color: #fff;
      text-decoration: none;
    }

    /* Links on mouse-over */
    .sidebar a:hover:not(.active) {
      background-color: #dbca13;
      color: white;
      text-decoration: none;
    }
        /*
        #sidebar ul.components {
          padding: 20px 0;
          border-bottom: 1px solid #002a5b;
        }
        */  
    #sidebar ul li a:hover {
      color: white;
      background: #dbca13;
      /*hover in reports*/
      text-decoration: none;
    }

    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
      color: #fff;
      font-weight: bold;
      background: #4f4e41;
      /*#0077b6 hover or emphasizes the reports color*/
      text-decoration: none;
    }

    a[data-toggle="collapse"] {
      position: relative;
      /*dropdown*/
      text-decoration: none;
    }

    .dropdown-toggle::after {
      display: block;
      position: absolute;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);
      text-decoration: none;
    }

    ul ul a {
      font-size: 0.9em !important;
      padding-left: 30px !important;
      background: #dbd165; /*  #6d7fcc nav submenu under reports*/
      text-decoration: none;
    }

    @media (max-width: 991.98px) {
      .sidebar {
        top: 0;
        bottom: auto;
        height: 100vh;
        width: 0;
        transition: width 0.4s ease-in-out;
        overflow-x: hidden;
        overflow-y: auto;
        text-decoration: none;
      }

      .sidebar a {
        padding: 10px 20px;
        font-size: 18px;
      }

      .sidebar.show {
        width: 200px;
        text-decoration: none;
      }

      .content {
        margin-left: 0;
      }
    }

    .sidebar-footer {
      position: absolute;
      bottom: 0;
      width: 100%;
      background-color: #4f4e41;
      padding: 10px;
      text-align: center;
      font-size: 16px;
      color: white;
    }
  </style>

  <script>
    $(document).ready(function() {
    // Get the current URL path
      var currentPath = window.location.pathname;
    // Get the last part of the URL path (the page name)
      var currentPage = currentPath.split('/').pop();

    // Add active class to the corresponding link in the sidebar
      $('.sidebar a[href$="' + currentPage + '"]').addClass('active');
    });

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
      } else if (h==0) {
        h = 12;
      }

      m = checkTime(m);
      s = checkTime(s);

      var timeDisplay = document.getElementById('txt');
      timeDisplay.innerHTML = month + " " + day + ", " + year + "<br><span style='padding-left: 10px;'>" + h + ":" + m + ":" + s + " " + ampm + "</span>";

      var t = setTimeout(startTime, 500);
    }

    function checkTime(i) {
      if (i < 10) {
        i = "0" + i
      };
      return i;
    }
    
  </script>
</head>

<body no-repeat center center fixed onload="startTime()">
  <header class="text-light py-1 px-1">
    <div class="d-flex">
      <img src="img/logo.png" alt="Iloilo City Seal" style="height: 60px; width: auto; margin-left: 1%;">
      <div class="clearfix" style="margin-top: 0.5%; margin-left: 1%;">
        <span class="h5">REGISTRY OF DEATH ENTRIES </span><br>
        <span class="d-none d-md-block">City Civil Registry Office</span>
        <span class="d-none d-ms-none">City Civil Registry Office</span>
      </div>
    </div>
    <div class="clearfix">
      <span class="float-right" style="margin-top:-4%; margin-right: 2%;"> 
        <span id="txt"></span>
      </span>
    </div>
  </header>

  <!-- Sidebar -->
  <div class="sidebar">
    <ul class="list-unstyled components">
      <li>
        <a href="search.php"><span class="fa fa-dashboard mb-3 mt-3" style="margin-right: 3px;"></span>  DASHBOARD</a>
      </li>

      <li>
        <a href="user.php"><span class="fa fa-user mb-3" style="margin-right: 3px;"></span> ADD DATA</a>
      </li>

      <li>
        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <span class="fa fa-file-text mb-3" style="margin-right: 3px;"></span> REPORTS</a>
        <ul class="collapse list-unstyled" id="pageSubmenu">
          <li>
            <a href="currentData.php">Current Data</a>
          </li>
          <li>
            <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Select Data</a>
            <ul class="collapse list-unstyled" id="pageSubmenu2">
              <li>
                <a href="view_reg.php">By Registered Data</a>
              </li>
              <li>
                <a href="view_ddate.php">By Date of Death</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li>
        <a href="test_chart.php" style="margin-bottom: 48vh;"><span class="fa fa-desktop mb-3" style="margin-right: 3px;"></span>  CHART/GRAPH</a>
      </li>
    </ul>

    <a class="sidebar-footer" href="index.php">
      <span class="fa fa-sign-out" style="margin-right: 3px; text-align:center;"></span>
      <b>LOG OUT</b>
    </a>
  </div>
</body>
</html>

