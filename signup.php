<?php
include "work.php";
include "connect.php";
include ("mail.php");
$res=register($con,$mail);


?>
<html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Signin | Feed the kitty</title>
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
            Signup
          </div>

          <ul class="nav-items">
            <!-- <li>
              <a href="#">login</a>
            </li> -->

            <li>
              <a href="login.php">login</a>
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
          <div class="hero-content">
            <!-- <h1>We here at Feed the kitty,</h1>
            <p>
              try to bring together donors and recipients, you can register for either.
              Lets get started!  
            </p>
            <a href="#">
              Contact Us
            </a> -->
          </div>
          <div class="container">
            <!-- <h2>It's now or never</h2> -->
                <!-- <h1><center>Signup </center></h1> -->
            	<!-- <div id="form"> -->
				<form method = "POST" action="login.php">
              <div class="fields">
              <span>
                  <input placeholder="FullName" type="text"  required />
              </span>
              <br />
                <span>
                  <input placeholder="Username" type="text"  required />
              </span>
              <br />
                <span>
                  <input placeholder="Password" type="password" required  />
              </span>
              <br />
                <span>
                  <input placeholder=" Phone Number" type="tel" required  />
              </span>
              <br />
                <span>
                  <input placeholder="Email" type="Email" required  />
              </span>
              <br />
              <span>
              <!-- <div class="custom-select" style="width:200px;"> -->
              <label>
			        <select name="g">
              <option value="0">Status</option>  
			        <option value="C">Charity/Organisation</option>
			        <option value="F">Family</option>
              <option value="D">Donor</option>
              </label>
            </select><br><br/>
              <!-- </div> -->
              </span>
                <span>
                  <input placeholder="Account Number" type="text" required  />
              </span>
   			<!-- <label>Gender *:</label>
			<select name="g">
			<option value="M">Male</option>
			<option value="F">Female</option>
			</select><br><br/>
			<label>Birthday *:</label>
			<pre style="font-size:10px"><input type="text" name="birthday" class="inputFields" required/> Example:06/12/1996</pre> -->
			<br><input type="checkbox" name="terms" class= "checkbox" required/><h2>I agree with terms and conditions.</h2>
			<div class = "eee">
      <a href="middle_index.php">Submit</a><br><br/>
      </div>
      </div>

			<?php
			echo $res;


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