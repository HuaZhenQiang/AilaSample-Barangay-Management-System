<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dump</title>
  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <style>
    /*  import google fonts */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
    *{
      margin: 0;
      padding: 0;
      outline: none;
      border: none;
      text-decoration: none;
      list-style: none;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }
    body{
      background: rgb(233, 233, 233);
    }
    .container{
      display: flex;
      width: 1200px;
      margin: auto;
    }
    nav{
      position: sticky;
      top: 8%;
      left: -2%;
      bottom: 0;
      width: 280px;
      height: 92vh;
      background: #fff;
    }
    .navbar{
      width: 80%;
      margin: 0 auto;
    }

    .logo{
      margin: 2rem 0 1rem 0;
      padding-bottom: 3rem;
      display: flex;
      align-items: center;
    }
    .logo img{
      width: 50px;
      height: 50px;
      border-radius: 50%;
    }
    .logo h1{
      margin-left: 1rem;
      text-transform: uppercase;
    }

    ul{
      margin: 0 auto;
    }
    li{
      padding-bottom: 2rem;
    }
    li a{
      font-size: 16px;
      color: rgb(85, 83, 83);
    }
    .nav-item{

    }
    nav i{
      width: 50px;
      font-size: 18px;
      text-align: center;
    }

    .logout{
      position: absolute;
      bottom: 20px;
    }

/* Main Section */
.main{
  width: 100%;
}
.main-top{
  top: 0;
  width: 100%;
  z-index: 1000;
  background: #002a5b;
  padding: 10px 20px;
  text-align: center;
  font-size: 18px;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: white;
  align-items: center;
  display: flex;

}
.main-body{
  padding: 10px 10px 10px 20px;
}
h1{
  margin: 20px 10px;
}
.search_bar{
  display: flex;
  padding: 10px;
  justify-content: space-between;
}
.search_bar input{
  width: 50%;
  padding: 10px;
  border: 1px solid rgb(190, 190, 190);
}
.search_bar input:focus{
  border: 1px solid blueviolet;
}
.search_bar select{
  border: 1px solid rgb(190, 190, 190);
  padding: 10px;
  margin-left: 2rem;
}
.search_bar .filter{
  width: 300px;
}

.tags_bar{
  width: 55%;
  display: flex;
  padding: 10px;
  justify-content: space-between;
}
.tag{
  background: #fff;
  padding: 10px 15px;
  border-radius: 20px;
  display: flex;
  align-items: center;
  font-size: 13px;
  cursor: pointer;
}
.tag i{
  margin-right: 0.7rem;
}
.row{
  display: flex;
  padding: 10px;
  margin-top: 1.3rem;
  justify-content: space-between;
}
.row p{
  color: rgb(54, 54, 54);
  font-size: 15px;
}
.row p span{
  color: blueviolet;
}
.job_card{
  width: 100%;
  padding: 15px;
  cursor: pointer;
  display: flex;
  border-radius: 10px;
  background: #fff;
  margin-bottom: 15px;
  justify-content: space-between;
  border: 2px solid rgb(190, 190, 190);
  box-shadow: 0 20px 30px rgba(0, 0, 0, 0.1);
}
.job_details{
  display: flex;
}
.job_details .img{
  display: flex;
  justify-content: center;
  align-items: center;
}
.job_details .img i{
  width: 70px;
  font-size: 3rem;
  margin-left: 1rem;
  padding: 10px;
  color: rgb(82, 22, 138);
  background: rgb(216, 205, 226);
}
.job_details .text{
  margin-left: 2.3rem;
}
.job_details .text span{
  color: rgb(116, 112, 112);
}
.job_salary{
  text-align: right;
  color: rgb(54, 54, 54);
}
.job_card:active{
  border: 2px solid blueviolet;
  transition: 0.4s;
}
</style>

</head>

<body>
  <div class="container">
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="/pic/logo.jpg" alt="">
          <h1>jobs</h1>
        </div>
        <ul>
          <li><a href="#">
            <i class="fas fa-user"></i>
            <span class="nav-item">Dashboard</span>
          </a>
        </li>
        <li><a href="#">
          <i class="fas fa-chart-bar"></i>
          <span class="nav-item">Analytics</span>
        </a>
      </li>
      <li><a href="#">
        <i class="fas fa-tasks"></i>
        <span class="nav-item">Jobs Board</span>
      </a>
    </li>
    <li><a href="#">
      <i class="fab fa-dochub"></i>
      <span class="nav-item">Documnents</span>
    </a>
  </li>
  <li><a href="#">
    <i class="fas fa-cog"></i>
    <span class="nav-item">Setting</span>
  </a>
</li>
<li><a href="#">
  <i class="fas fa-question-circle"></i>
  <span class="nav-item">Help</span>
</a>
</li>
<li><a href="#" class="logout">
  <i class="fas fa-sign-out-alt"></i>
  <span class="nav-item">Logout</span>
</a>
</li>
</ul>
</div>
</nav>

<section class="main">
  <div class="main-top">
    <p>Explore the universe!</p>
  </div>
  <div class="main-body">
    <h1>Recent Jobs</h1>

    <div class="search_bar">
      <input type="search" placeholder="Search job here...">
      <select name="" id="">
        <option>Category</option>
        <option>Web Design</option>
        <option>App Design</option>
        <option>App Development</option>
      </select>
      <select class="filter">
        <option>Filter</option>
      </select>
    </div>

    <div class="tags_bar">
      <div class="tag">
        <i class="fas fa-times"></i>
        <span>Programming</span>
      </div>
      <div class="tag">
        <i class="fas fa-times"></i>
        <span>Design</span>
      </div>
      <div class="tag">
        <i class="fas fa-times"></i>
        <span>PHP</span>
      </div>
      <div class="tag">
        <i class="fas fa-times"></i>
        <span>JavaScript</span>
      </div>
    </div>

    <div class="row">
      <p>There are more than <span>400</span> Jobs</p>
      <a href="#">See all</a>
    </div>

    <div class="job_card">
      <div class="job_details">
        <div class="img">
          <i class="fab fa-google-drive"></i>
        </div>
        <div class="text">
          <h2>UX Designer</h2>
          <span>Google Drive - Junior Post</span>
        </div>
      </div>
      <div class="job_salary">
        <h4>$6.7 - $12.5k /yr</h4>
        <span>1 days ago</span>
      </div>
    </div>

    <div class="job_card">
      <div class="job_details">
        <div class="img">
          <i class="fab fa-google"></i>
        </div>
        <div class="text">
          <h2>JavaScript Developer</h2>
          <span>Google - Senior Post</span>
        </div>
      </div>
      <div class="job_salary">
        <h4>$8.7 - $13.2k /yr</h4>
        <span>2 days ago</span>
      </div>
    </div>

    <div class="job_card">
      <div class="job_details">
        <div class="img">
          <i class="fab fa-facebook"></i>
        </div>
        <div class="text">
          <h2>Product Developer</h2>
          <span>Facbook - Manager Post</span>
        </div>
      </div>
      <div class="job_salary">
        <h4>$11 - $18.5k /yr</h4>
        <span>2 days ago</span>
      </div>
    </div>

    <div class="job_card">
      <div class="job_details">
        <div class="img">
          <i class="fab fa-git-alt"></i>
        </div>
        <div class="text">
          <h2>Programmer</h2>
          <span>Github - Juni Post</span>
        </div>
      </div>
      <div class="job_salary">
        <h4>$6 - $11.5k /yr</h4>
        <span>3 days ago</span>
      </div>
    </div>

    <div class="job_card">
      <div class="job_details">
        <div class="img">
          <i class="fab fa-youtube"></i>
        </div>
        <div class="text">
          <h2>React.js Expert</h2>
          <span>Youtube - VIP</span>
        </div>
      </div>
      <div class="job_salary">
        <h4>$12.5 - $25.5k /yr</h4>
        <span>4 days ago</span>
      </div>
    </div>
  </div>
</section>
</div>
</body>
</html>