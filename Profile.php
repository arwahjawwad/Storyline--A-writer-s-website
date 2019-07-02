<?php
session_start();
?>
<html>
<head>
<title>
	Profile
</title>
<style>
#background
{
	z_index:-1;
	width:99.3%;
	height:98%;
	position:absolute;
	background-attachment:fixed;
}
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
	left:6.5%;
}
#main #Profile
{
	position:absolute;
	left:12.4%;
}
#main #Chat
{
	position:absolute;
	left:19.5%;
}

#new
{

	position:absolute;
	top:30px;
	left:20px;
	position:absolute;
	left:68.5%;
}

#display
{
background-color:#FFFEDF;
position:absolute;
left:13%;
top:20%;
width:50%;
height:70%;
border:3px solid black;
}

#stories
{
background-color:#FFFEDF;
position:absolute;
left:73%;
top:20%;
width:19%;
height:75%;
border:3px solid black;
overflow-y: scroll;
resize:none;
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

.avatar {
  vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  position:absolute;
  padding:3%;
  left:67%;
}

b
{
position:relative;
left:20px;
	font-family:"Courier New", Courier, monospace;
font-size:20px;
}
p
{
position:relative;
left:70px;
font-size:18px;
}

.details .aboutacho
{
width:200px;
align-text:justify;
}

.images img
{
z-index:2;
position:absolute;
left:80%;
}

</style>
</head>
<body>
<img id="background" src="background3.png"></img>

<div id="main">
	<a href ="Main.php" id="home">Home</a>
	<a href ="shelf.php" id="Shelf">Shelf</a>
	<a href ="Profile.php" id="Profile">Profile</a>
	<a href ="chat.php" id="Chat">Discussions</a>
	<a href="Front.php" id="logout"> Log Out </a>
</div>

<a href="writing.php" id="new"> <img height="80px" width="80px"" src="pen.png"></img> </a>

<div id="display">
<img src="avatar.png" class="avatar" >
<div class="details">
<?php
echo"<br><b> NAME </b>";
$name = $_SESSION['username'];
echo "<p> $name </p>";
echo"<b> EMAIL</b>";
$email = $_SESSION['email'];
echo "<p> $email </p>";
echo"<b> AGE </b>";
$age = $_SESSION['age'];
echo "<p> $age </p>";
echo"<b> NATION </b>";
$age = $_SESSION['nation'];
echo "<p> $age </p>";
echo"<b> ABOUT </b>";
$age = $_SESSION['about'];
echo "<p  class='aboutecho'> $age </p>";
?>
</div>
</div>

<div class="images">
<img src="book1.png" style="top:17%;"><br>
<img src="book3.png" style="top:39%;"><br>
<img src="book4.png" style="top:61%;">
</div>
</body>
</html>