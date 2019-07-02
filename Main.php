<?php 
session_unset();
	include('server.php');

?>
<html>
<head>
	<title>
		Storyline HomePage
	</title>
<style>
#main a, #main a:visited
{
	color:white;
	background-color:black;
	border-color:white;
	position:absolute;
	top:30px;
	left:20px;
	padding:16px;
	text-decoration:none;
	font-weight:bold;
	font-family:"Courier New", Courier, monospace;
}
#main a:hover
{
	color:black;
	background-color:white;
	border-color:white;
	position:absolute;
	padding:16px;
	text-decoration:none;
	font-weight:bold;
	font-family:"Courier New", Courier, monospace;
}
#main #Shelf
{
	position:absolute;
	left:6.7%;
}
#main #Profile
{
	position:absolute;
	left:12.6%;
}
#main #Chat
{
	position:absolute;
	left:19.9%;
}
#main #new
{
	padding:10px;
	padding-left:22px;
	position:absolute;
	z-index:1;
	top:30px;
	left:85%;
	width:90px;
	height:24px;
	background-color:#A5FA5F;
	color:black;
	font-size:18px;
	font-weight:bold;
	font-family:"Courier New", Courier, monospace;
	border:3px black solid;
}
#main #old
{
	position:absolute;
	z-index:1;
	top:30px;
	left:75%;
	width:130px;
	height:50px;
	background-color:#FDD178;
	color:black;
	font-size:18px;
	font-weight:bold;
	font-family:"Courier New", Courier, monospace;
	border:3px black solid;
}
#background
{
	z_index:-1;
	width:99.3%;
	height:150%;
	position:absolute;
	background-attachment:fixed;
}
#logo
{
	z-index:1;
	position:absolute;
	height:25%;
	width:16%;
	top:11%;
	left:42%;	
}
#title
{
	z-index:2;
	position:absolute;
	top:21%;
	left:38.5%;
	font-size:60px;
	font-family:"Courier New", Courier, monospace;
}
#tagline
{
	z-index:2;
	position:absolute;
	top:34.7%;
	left:37.9%;
	font-size:25px;
	background-color:white;
	border:1px solid black;
	font-family:Arial, Helvetica, sans-serif;
}
h3
{
	z-index:1;
	position:absolute;
	top:45%;
	left:8%;
	font-size:33px;
	letter-spacing: 3px;
	font-weight:bold;
	font-family:"Courier New", Courier, monospace;
}
#about
{
	z-index:1;
	position:absolute;
	background-color:#FEFE93;
	border:2px solid black;
	max-width:30%;
	top:60%;
	left:8%;
	font-size:20px;
	padding:5px;
	margin-top:-22px;
	font-family:Arial, Helvetica, sans-serif;
}
.socialmedia img
{
	z-index:1;
	position:absolute;
}
.socialmedia #mail
{
	width:115px;
	height115px;
	top:25%;
	left:89.5%;
}
.socialmedia #twitter
{
	width:95px;
	height:95px;
	top:40%;
	left:90%;
}
.socialmedia #facebook
{
	width:127px;
	height127px;
	top:55%;
	left:88%;
}
.socialmedia #instagram
{
	width:120px;
	height120px;
	top:67%;
	left:89.4%;
}
.options a
{
	z-index:1;
	position:absolute;
	padding:14px;
	color:black;
	text-decoration:none;
	border:4px solid black;
	font-size:23px;
	font-family:Arial, Helvetica, sans-serif;
}
.options #reading:hover,.options #writing:hover
{
	background-color:white;
	color:black;
	border:4px solid black;
}
.options #reading
{
	background-color:#CD82D6;
	max-width:15%;
	top:55%;
	left:60%;
}
.options #writing
{
	background-color:#8EE8D1;
	width:10.4%;
	top:70%;
	left:60%;
	text-align:center;
}
#line
{
	z-index:2;
	position:absolute;
	top:84%;
	left:8%;
	font-size:40px;
	font-family:"Courier New", Courier, monospace;
}
.trending
{
	z-index:1;
	position:absolute;
	top:93%;
	left:10%;
	background-color:#F2F2F2;
	width: 70%;
	height:30%;
	border: 5px solid black;
	padding: 3%;
	margin: 20px;
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

.trending img
{
padding-left:6.3%;
}

#main #logout
{
	color:white;
	background-color:black;
	border-color:white;
	position:absolute;
	top:30px;
	left:88%;
	padding:18px;
	font-weight:bold;
	border:none;
	font-family:"Courier New", Courier, monospace;
}

#logout:hover
{
	border:2px solid white;
}

</style>
</head>
<body>
<img id="background" src="background.png"></img>
<img id="logo" src="logo.png"></img>

<h1 id="title"> Storyline </h1>
<h2 id="tagline">"Let your creativity run wild!"</h2>

<div id="main">
	<a href ="Main.php" id="home">Home</a>
	<a href ="shelf.php" id="Shelf">Shelf</a>
	<a href ="Profile.php" id="Profile">Profile</a>
	<a href ="chat.php" id="Chat">Discussions</a>
	<a href="Front.php" id="logout"> Log Out </a>
</div>

<h3>WHO ARE WE?</h3>
<div id="about">
	<p align="center"> Storyline is a platform for writers, authors and creators to come forward and collaborate to benifit the readers. Be an amateur or a professional, come forth, write and just let your words do their magic. </p>
</div>

<div class="socialmedia">
	<a href ="https://www.instagram.com" target="_blank"><img id="instagram" src="instagram.png"></img></a> <br> <br>
	<a href ="https://www.facebook.com" target="_blank" ><img id="facebook" src="facebook.png"></img></a> <br> <br>
	<a href ="https://www.twitter.com" target="_blank"><img id="twitter" src="twitter.png"></img></a> <br> <br>
	<a href ="https://www.gmail.com" target="_blank"><img id="mail" src="mail.png"></img></a>
</div>

<div class="options">
	<a id="reading" href="shelf.php" /a> Start Reading </a>
	<a id="writing" href="writing.php" /a> Start Writing </a>
</div>

<h1 id="line"> Our Stories: </h1>
<div class="trending"></a>
<a href="when we collided.html"><img src="collided.jpg" width="120px"></a>
<a href="pile of stuff.html"><img src="stuff.jpg" width="120px"></a>
<a href="night circus.html"><img src="circus.jpg" width="126px"></a>
<a href="ostrich.html"><img src="ostrich.jpg" width="120px"></a>
<a href="interesting.html"><img src="manifesto.jpg" width="120px"></a>
</div>

<div class="form-popup" id="myForm">
  <form action="#" method="post" class="form-container">
    <h1>--Storyline--</h1>
    <h2>Login to existing account</h2>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

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
</body>
</html>