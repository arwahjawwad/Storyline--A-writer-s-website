<?php 
	include('store.php')
?>
<html>
<head>
	<title>
		Create your story
	</title>
</head>
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
	left:19.6%;
}

#background
{
height:149%;
width:99.8%;
z-index:-1;
}

#title
{
background-color:powderblue;
z-indez:2;
font-size:40px;
position:absolute;
top:14%;
left:5%;
padding-left:22%;
padding-right:35%;
padding-top:8px;
padding-botton:8px;
color:black;
border:2px dotted black;
	font-family:"Courier New", Courier, monospace;
}

form span
{
font-size:33px;
position:absolute;
top:33%;
left:5%;
z-indez:2;
background-color:#FFADD6;
padding:6px;
color:black;
border:1px black groove;
	font-family:Arial, Helvetica, sans-serif;
}

#storytitle
{
position:absolute;
top:33.3%;
left:18%;
height:7.5%;
width:25%;
background-color:lightgrey;
font-size:28px;
}

form textarea
{
position:absolute;
top:57%;
left:10%;
width:80%;
border: 2px solid black;
font-size:18px;
overflow-y: scroll;
resize:none;
}

#here
{
position:absolute;
top:45%;
left:5%;
padding-left:10px;
padding-right:10px;
background-color:#FFF88D;
}
#genre
{
position:absolute;
top:115%;
left:5%;
padding-top:5px;
padding-left:22px;
padding-right:22px;
background-color:#B8FF8D;
}

#genretext
{
position:absolute;
top:115.5%;
left:16.3%;
background-color:lightgrey;
height:7.9%;
width:20%;
font-size:24px;
}
form button
{
position:absolute;
top:130%;
left:40%;
height:7.9%;
width:20%;
font-size:26px;
background-color:#FF885F;
border:2px solid black;
}

#logout
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

#logo
{
	height:20%;
	width:11%;
	position:absolute;
top:13.6%;
left:58%;
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

<body>

<img id="background" src="background4.png"></img>

<div id="main">
	<a href ="Main.php" id="home">Home</a>
	<a href ="shelf.php" id="Shelf">Shelf</a>
	<a href ="Profile.php" id="Profile">Profile</a>
	<a href ="chat.php" id="Chat">Discussions</a>
	<a href ="Front.php" id="logout">Logout</a>
</div>

<div>
<h1 id="title"> Create your MAGIC! </h1>
<img id="logo" src="logo.png">
</div>

<form method="post" action="writing.php">
<span> Story Title </span>
<input type="text" name="title" id="storytitle"></input>
<span id="here"> Get started... </span>
<textarea name="story" rows="15"> </textarea>
<span id="genre"> Genre </span>
<input type="text" name="genre" id="genretext"></input>
<button name="submit"> Create! </button>
</form>


</body>
</html>
