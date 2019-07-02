<?php
	include('valid.php')
?>

<html>
<head>
<title>
	Front
</title>

<style>
#back
{
z-index:-1;
width:100.3%;
height:95%;
}

#logo
{
	z-index:1;
	position:absolute;
	height:30%;
	width:21%;
	top:28%;
	left:15%;	
}

#title
{
	z-index:2;
	position:absolute;
	top:42%;
	left:12.5%;
	font-size:65px;
	font-family:"Courier New", Courier, monospace;
}
#tagline
{
	z-index:2;
	position:absolute;
	top:58%;
	left:10.8%;
	font-size:30px;
	background-color:#CD9AFD;
	border:1px solid black;
	font-family:Arial, Helvetica, sans-serif;
}

#main #old
{
	position:absolute;
	z-index:1;
	top:30px;
	left:75%;
	width:130px;
	height:50px;
	background-color:powderblue;
	color:black;
	font-size:18px;
	font-weight:bold;
	font-family:"Courier New", Courier, monospace;
	border:3px black solid;
}

#main #new
{
	padding:10px;
	padding-left:22px;
	position:absolute;
	z-index:1;
	top:30px;
	left:85%;
	width:130px;
	height:50px;
	background-color:#A5FA5F;
	color:black;
	font-size:18px;
	font-weight:bold;
	font-family:"Courier New", Courier, monospace;
	border:3px black solid;
	text-decoration:none;
}


.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: lightgrey;
}

.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: white;
}

.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

.form-container .cancel {
  background-color: red;
}

.form-container .btn:hover {
  opacity: 1;
}

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 250px;
  position: absolute;
  top:27%;
  left:63%;
  margin: auto;
}


/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

.dots
{
position:absolute;
top:78%;
left:67%;
}


</style>
</head>
<body>
<img id="back" src="front.png">
<div class="company">
<img id="logo" src="logo.png"></img>
<h1 id="title"> Storyline </h1>
<h2 id="tagline">"Let your creativity run wild!"</h2>
</div>
<div id="main">
	<button style="cursor:pointer" id="old" onclick="openForm()"> Log In </button>
	<a href="signup.php" id="new"> Sign Up </a>
</div>

<div class="form-popup" id="myForm">
  <form action="Front.php" method="post" class="form-container">
    <h1>--Storyline--</h1>
    <h2>Login to existing account</h2>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email_login" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="login" class="btn">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="manifesto.jpg" style="width:200px">
</div>

<div class="mySlides fade">
  <img src="circus.jpg" style="width:200px">
</div>

<div class="mySlides fade">
  <img src="stuff.jpg" style="width:200px">
</div>

<div class="mySlides fade">
  <img src="summer.jpg" style="width:200px">
</div>

</div>
<br>

<div style="text-align:center" class="dots">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>


</body>
</html>