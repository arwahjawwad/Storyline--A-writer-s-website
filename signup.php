<?php 
	include('server.php')
?>

<html>
<head>
<title>
	Sign Up Page
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

.signup
{
	z-index:1;
	position:absolute;
	top:20%;
	left:7.7%;
	font-size:18.5px;
	font-weight:bold;
	font-family:"Courier New", Courier, monospace;
	color:white;
	letter-spacing:3px;
}
.signup span
{
 	padding-left:13px;
	background-color: black;
}

#join
{
	position:absolute;
	z-index:1;
	top:110%;
	left:78%;
	width:130px;
	height:50px;
	background-color:black;
	color:white;
	font-size:18px;
	font-weight:bold;
	font-family:"Courier New", Courier, monospace;
	border:3px grey solid;
}
#join:hover
{
	background-color:white;
	color:black;
	border:3px black solid;
}

#popular
{
	z-index:2;
	position:absolute;
	top:14%;
	left:70%;
	font-size:40px;
	font-family:"Courier New", Courier, monospace;
	background-color: white;
	border:2px solid black;
}
.signup
{
background-color:lightgrey;
padding:20px;
border:3px solid black;
left:23%;
position:absolute;
top:15%;

}
</style>
</head>
<body>
<img id="background" src="background1.png"></img>


<div class="trending">
<form class="signup" action="signup.php" method="post">
<span> NAME </span>
<input name="name" id="name" type="text" placeholder="Enter your name" required></input>
<br> <br>
<span> EMAIL </span>
<input name="email" id="email" type="text" placeholder="Enter your email address" required></input>
<span> PASSWORD </span>
<input name="password" id="password" type="password" placeholder="Required length: 8" required></input>
<br> <br>
<span> AGE </span>
<input name="age" id="age" type="text"></input>
<br> <br>
<span> NATIONALITY </span>
<input name="nation" id="nation" type="text"></input>
<br> <br>
<span> ABOUT YOURSELF </span> <br> <br>
<textarea name="about" rows="10" cols="50" placeholder="Hobbies, iterests, personality etc."></textarea>
<button id="join" name="join"> DONE! </button>
</form>
</div>

</body>
</html>