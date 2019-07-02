<?php
session_start();
?>
<html>
<head>
<title>
	Story 
</title>
</head>
<style>
#back
{
width:100%;
height:97.2%;
}

#display
{
background-color:#F7F5CF;
border:6px solid black;
margin:1%;
width:95%;
height:90%;
position:absolute;
top:10px;
z-index:2;
}
#display h1
{
padding-left:1%;
text-decoration:underline;
}

#display p
{
padding:0% 1%;
font-size:17px;
font-family:arial;
}
</style>
<body>
<img id="back" src="background2.png">
<?php
echo "<div id='display'><h1>".$_SESSION['title']."</h1><p>".$_SESSION['story']."</p></div>";
?>
</body>
</html>