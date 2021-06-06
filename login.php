<?php
session_start();
include "work.php";
include "connect.php";
$a=" ";
$res=register2($con);

if($res!="Success"){
  
 $a=$res;
}
else{
  $_SESSION['Email'] = $_POST['email'];

  url('info.php');
}



?>
<html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login | Feed the kitty</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="search-box">
      <input type="text" placeholder="Search here..." />
    </div>

    <div class="nav-container">
      <div class="wrapper">
        <nav>
          <a href="index.php"><img src = "images/cat.png"; height=70px; width=70px></a>
          <div class="logo">
            Login page
          </div>

          <ul class="nav-items">
            <!-- <li>
              <a href="#">login</a>
            </li> -->

            <li>
              <a href="signup.php">signup</a>
            </li>

            <!-- <li>
              <a href="#">about</a>
            </li> -->

            <li>
              <a class="nav-btn-container" href="#">
                <img class="search-btn" src="images/search-icon.svg" alt="" />
                <img class="close-btn" src="images/close-icon.svg" alt="" />
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

    <div class="header-container">
      <div class="wrapper">
        <header>
<!--           <div class="hero-content">
            <h1>We here at Feed the kitty,</h1>
            <p>
              try to bring together donors and recipients, you can register for either.
              Lets get started!  
            </p>
             <a href="#">
              Contact Us
            </a>
          </div> --> 
          <div class="container">
            <!-- <h2>It's now or never</h2> -->
            <br><br><br><br><br><br><br><br><br><br><h1><center>Login </center></h1>
  
            <form method = "POST" action="login.php">
              <div class="fields">
                <span>
                  <input placeholder="Username" type="text"  required />
              </span>
              <br />
                <span>
                  <input placeholder="Password" type="password" required  />
              </span>
              </div>
              <div class = "eee2">
              <a href="middle_index.php">Submit</a><br><br/>
                <?php
                echo $a;
                ?>
              </div>
            </form>
          </div>
          <!-- <div class="hero-image">
            <img src="images/e.jpg" alt="" / height="530" width="530">
            <div class="photo-bg"></div>
          </div> -->
        </header>

        <div class="social-icons">
          <a href="#">
            <img src="images/null.png" height="55" width="200" alt="" />
          </a>
          <a href="#">
            <img src="images/null.png" height="176" width="60" alt="" />
          </a>
          <a href="#">
            <img src="images/null.png" height="137" width="100" alt="" />
          </a>
        </div>
      </div>
    </div>

    <script src="main.js"></script>
  </body>
</html>
