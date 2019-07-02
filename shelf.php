<?php
session_start();
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
	left:6.55%;
}
#main #Profile
{
	position:absolute;
	left:12.37%;
}
#main #Chat
{
	position:absolute;
	left:19.58%;
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

#background
{
z-index:-1;
width:100%;
}

h1
{
	font-family:"Courier New", Courier, monospace;
	position:absolute;
	top:15%;
	left:28%;
	font-size:42px;
}

#logo
{
	z-index:1;
	position:absolute;
	height:25%;
	width:16%;
	top:11%;
	left:58%;	
}

#new
{

	position:absolute;
	top:22px;
	position:absolute;
	left:81.5%;
}

.trending img
{
z-index:2;
padding:4%;
position:absolute;
top:25%;
}

.trendin img
{
z-index:2;
padding:4%;
position:absolute;
top:65%;
}

.newstory
{
position:absolute;
left:64%;
top:74%;
}
</style>


</head>
<body>
<img id="background" src="back.jpg"></img>

<div id="main">
	<a href ="Main.php" id="home">Home</a>
	<a href ="shelf.php" id="Shelf">Shelf</a>
	<a href ="Profile.php" id="Profile">Profile</a>
	<a href ="chat.php" id="Chat">Discussions</a>
	<a href ="Front.php" id="logout">Logout</a>
</div>


<h1> Storyline Library </h1>
<img id="logo" src="logo.png"></img>

<a href="writing.php" id="new"> <img height="68px" width="68px"" src="pen.png"></img> </a>

<div class="trending"></a>
<a href="when we collided.html"><img src="collided.jpg" width="150px"></a>
<a href="pile of stuff.html"><img src="stuff.jpg" width="150px" style="left:20%;"></a>
<a href="night circus.html"><img src="circus.jpg" width="156px" style="left:40%;"></a>
<a href="The names.html"><img src="names.jpg" width="150px" style="left:60%;"></a>
<a href="interesting.html"><img src="manifesto.jpg" width="150px" style="left:80%;"></a>
</div>

<div class="trendin"></a>
<a href="summer.html"><img src="summer.jpg" width="150px"></a>
<a href="the hate.html"><img src="hate.jpg" width="150px" style="left:20%;"></a>
<a href="ostrich.html"><img src="ostrich.jpg" width="156px" style="left:40%;"></a>
</div>

<?php
if (!empty($_SESSION['title'])){ 
echo "<div class='newstory'> <a href='story.php'><img style='width:150px;height:243.5px;' src='".$_SESSION['image']."'></a></div>";
}
?>

</body>
</html>