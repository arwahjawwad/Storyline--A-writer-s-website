<html>
<head>
	<title>
		Storyline Discussions
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

#background
{
width:99.8%;
height:180%;
z-index:-1;
 background-attachment:fixed;
}

#title
{
	font-family:"Courier New", Courier, monospace;
	font-size:40px;
	position:absolute;
	top:25%;
	left:24%;
	background-color:#E5FDB8;
padding-left:5%;
padding-right:5%;
border:2px solid black;
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

div.fixed {
  position: fixed;
  bottom: 0;
  right: 0;
  height:50px;
  width: 200px;
  border: 3px solid tomato;
}

div #form
{
	height:50px;
	width:200px;
	background-color:#E5FDB8;
	font-size:28px;
	color:tomato;
}


.form-popup {
  display: none;
  position: fixed;
  bottom: -5px;
  right: 0px;
  border: 3px solid #D39AFD;
  z-index: 9;
}

.form-container {
  max-width: 300px;
  height:420px;
  padding: 10px;
  background-color: #FBFDB8;
}

.form-container input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: white;
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
form #comment
{
height:100px;
}

.displaycomment
{
z-index:2;
width:30%;
float:left;
position:relative;
bottom:143%;
left:1.4%;
background-color:powderblue;
border:2px solid tomato;
font-size:22px;
margin-right:1.3%;
margin-top:1.5%;
padding:.7%;
}

</style>
</head>
<body>

<img id="background" src="back.png"></img>

<div id="main">
	<a href ="Main.php" id="home">Home</a>
	<a href ="shelf.php" id="Shelf">Shelf</a>
	<a href ="Profile.php" id="Profile">Profile</a>
	<a href ="chat.php" id="Chat">Discussions</a>
</div>

<img src="logo.png" id="logo"></img>
<h1 id="title"> Your dose of motivation! </h1>

<div class="fixed">
	<button id="form" onclick="openForm()"> Comment! </button>
</div>

<div class="form-popup" id="myForm">
  <form action="#" method="post" class="form-container">
    <h1 align="center">--Storyline--</h1> <hr>
    <h2>Leave a comment!</h2>

    <label for="comment"><b>Comment</b></label> <br><br>
    <textarea height="80px" cols="40" type="text" name="comment" id="comment" required> </textarea> <br> <br> <br>
   
    <button type="submit" name="submit" class="btn"> Submit </button>
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

<?php
if(isset($_POST['submit'])){
	$comment = $_POST['comment'];

	$file = fopen("comment.txt", "a");
	fwrite($file, PHP_EOL.$comment);
	fclose($file);
}

        $sentence = file_get_contents("comment.txt");
	$arr = explode(PHP_EOL,$sentence);
	foreach($arr as $key=>$i)
	{
		 echo "<div class='displaycomment' align='center'> $i <br> </div>";
	}


?>




</body>
</html>