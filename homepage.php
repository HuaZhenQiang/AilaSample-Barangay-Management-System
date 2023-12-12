<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css.map" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css" />

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
      /* Adjusted to accommodate the top bar */
      padding: 0;
      width: 200px;
      background-color: #ffffff;
      position: fixed;
      height: 100%;
      overflow: auto;
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
/*      background-color: #04AA6D;*/
color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #002a5b;
/*      background-color: #555;*/
color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 220px;
  /* Adjusted to accommodate the sidebar width */
  padding: 1px 16px;
  height: 1000px;
  background-color: #f1f1f1;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: fixed;
  }

  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
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

    <div id="txt" style="color: white; margin-left: auto; text-align: center;"></div> <!-- Add this line for displaying date and time -->

   <!--  <a href="#home">Home</a>
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a> -->
  </div>

  <!-- Sidebar -->
  <div class="sidebar">
    <a href="#Dashboard">Dashboard</a>
    <a href="#Announcement">Announcement</a>
    <a href="#Officials">Officials</a>
    <a href="#Issuance">Issuance Details</a>
    <a href="#ContentM">Content Management</a>
    <a href="#Records">Records</a>
    <a href="#Request">Monitoring of Request</a>
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
