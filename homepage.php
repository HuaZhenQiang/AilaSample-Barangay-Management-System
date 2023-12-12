<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Barangay Management System</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css.map" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


  <style>
    /* The top navigation bar */
    .header {
      overflow: hidden;
      background-color: #002a5b;
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 1000;
      /* Ensure the top bar is above other elements */
      display: flex;
      align-items: center;
      padding: 5px 20px;

    }

    .header img {
      height: 50px; /* Adjust the height as needed */
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

    .header a:hover {
      background-color: #ddd;
      color: black;
    }

    /* The side navigation menu */
    .sidebar {
      margin: 60px 0 0 0;
      padding: 0; /* Adjusted to accommodate the top bar */
      width: 250px;
      background-color: #ffffff;
      position: fixed;
      height: 100%;
      overflow-y: auto;
    }

    /* Sidebar links */
    .sidebar a {
      display: block;
      color: black;
      padding: 16px;
      text-decoration: none;
    }

    /* Active/current link */
    .sidebar a.active {
      background-color: #002a5b;
      /*background-color: #04AA6D;*/
      color: white;
    }

    /* Links on mouse-over */
    .sidebar a:hover:not(.active) {
      background-color: #002a5b;
      /* background-color: #555;*/
      color: white;
    }

    div.content {
      margin-left: 250px;
      padding: 1px 16px;
      min-height: 100vh;
      background-color: #f1f1f1;
    }

    /* On screens that are less than 1000px wide, make the sidebar collapsible */
    @media screen and (max-width: 1000px) {
      .sidebar {
        width: 0;
      }

      .sidebar.show {
        width: 250px;
      }

      .sidebar a {
        padding: 16px;
        text-align: center;
      }

      .header .menu-icon {
        display: block;
      }

      .header a {
        display: none;
      }

      .header .title {
        margin-left: 0;
      }

      .header .title,
      .header .menu-icon {
        cursor: pointer;
        order: -1;
      }

      div.content {
        margin-left: 0;
      }
    }

  </style>

</head>


<body style="background: url('img/') no-repeat center center fixed; background-size: 100%;" onload="startTime()">

  <!-- Top Navigation Bar -->
  <div class="header">
    <img src="img/logo.png" alt="Iloilo City Seal">
    <div class="title">
      <span class="h4">Barangay Buntatala</span><br>
      <span class="d-none d-md-block">Jaro, Iloilo City</span>
      <span class="d-none d-sm-none">Jaro, Iloilo City</span>
    </div>
    <div id="txt" style="color: white; margin-left: auto; text-align: center;"></div>
  </div>

  <!-- Sidebar -->
  <div class="sidebar">

    <a href="#dashboard.php">
     <i class="fas fa-home"></i>
     <span class="nav-item">Dashboard</span>
   </a>
   <a href="#announcement.php">
    <i class="fas fa-bullhorn"></i>
    <span class="nav-item">Announcement</span>
  </a>
  <a href="#officials.php">
    <i class="fas fa-user"></i>
    <span class="nav-item">Officials</span>
  </a>
  <a href="#issuanceDet.php">
    <i class="fas fa-id-card"></i>
    <span class="nav-item">Issuance Details</span>
  </a>
  <a href="#contentM.php">
    <i class="fas fa-database"></i>
    <span class="nav-item">Content Management</span>
  </a>

  


  <!-- Records Dropdown -->
<div class="dropdown">
  <a class="dropdown-toggle" href="#" role="button" id="recordsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fab fa-dochub"></i>
    <span class="nav-item">Records</span>
  </a>
  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="recordsDropdown">
    <a class="dropdown-item record-link" href="#record1.php">Record 1</a>
    <a class="dropdown-item record-link" href="#record2.php">Record 2</a>
    <!-- Add more dropdown items as needed -->
  </div>
</div>
<!-- End Records Dropdown -->

<script>
  // JavaScript to add 'active' class to the corresponding dropdown item
  document.addEventListener("DOMContentLoaded", function () {
    var currentLocation = window.location.href;

    // Check each dropdown item and add 'active' class if its href matches the current location
    document.querySelectorAll('.record-link').forEach(function (item) {
      if (item.getAttribute('href') === currentLocation) {
        item.classList.add('active');
      }
    });
  });
</script>

<style>
  /* Custom CSS for dropdown highlight effect */
  .dropdown-item:hover,
  .dropdown-item:focus,
  .record-link.active {
    background-color: #002a5b;
    color: white;
  }
</style>




  <a href="#request.php">
    <i class="fas fa-folder-open"></i>
    <span class="nav-item">Monitoring of Request</span>
  </a>
  <a href="#setting.php">
    <i class="fas fa-cog"></i>
    <span class="nav-item">Setting</span>
  </a>
  <a href="#help.php">
    <i class="fas fa-question-circle"></i>
    <span class="nav-item">Help</span>
  </a>
  <a href="#logout.php">
    <i class="fas fa-sign-out-alt"></i>
    <span class="nav-item">Logout</span>
  </a>
</div>

<!-- Page content -->
<div class="content">
  Dashboard |  
</div>

<!-- Script for time -->
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
</script>

</body>
</html>