<?php

session_start();
include("connect.php");
include("work.php");

if(isset($_SESSION['Email'])) {
$email=$_SESSION['Email'];
$name=mysqli_query($con,"SELECT Name FROM users WHERE Email='$email'");
$res=mysqli_fetch_assoc($name);
$n=$res["Name"];



}

$r=infom($con,$email);

?>


<html>
<head>
<title> Payment Portal</title>
<link rel ="stylesheet" href="css/style.css">
</head>
<body style="background-color:white;background-image:none">
<div id="block">

<!-- <img src = "images/cat.png"; height=120px; width=20px> -->
</div>
<hr>
<center><a href="index.php"><img src = "images/cat.png"; height=70px; width=70px></a>
<p style="color:navy;font-size:50px;font-family:reem kufi">Donation Details</p></center>
<center><div id="come">
<div id="form">
<form method="POST" action="middle_index.php">

<p style='color:navy;font-size:25px'><b>Hello</strong></p></b>
<p style='color:navy;font-family:impact;font-size:15px'>Please fill out the below details to carry out your Good Work</p>


<label style='color:navy;font-size:20px'>Select your NGO: </label><br/>
<select name="ngo">
<option>Sarthak Foundation</option><option>Humsafar</option><option>Pratham</option>

<option>Dada-Dadi </option>
<option>NHFDC</option>
</select>

<br/><br/>
<label style='color:navy;font-size:20px'>Account Number: </label><br/>
<input type="Number" name="number" class="inputFields" required /><br><br/>
<label style='color:navy;font-size:20px'>cvv: </label><br/>
<input type="password" name="aadhar" class="inputFields" required /><br><br/>
<label style='color:navy;font-size:20px'>Donation Amount: </label><br/>
<input type="Number" name="amount" class="inputFields" required/><p style='font-size:15px'>Example:10000,50000,100000</p>
<input type="checkbox" name="condition" required/>I have read through the website's Privacy Policy &<br/>
 Donor's Policy and Terms and Conditions to make a donation.<br><br/>
      <button onclick="document.location=middle_index.php">Submit</button><br><br/>
      




</div>
</div>
</center>

</body>
</html>