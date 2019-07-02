<?php
session_start();
// initializing variables
$username = "";
$email    = "";
$age="";
$nation="";
$about="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'storyline');

// REGISTER USER
if (isset($_POST['login'])) {
  // receive all input values from the form
  $logemail = mysqli_real_escape_string($db, $_POST['email_login']);
  $logpassword = mysqli_real_escape_string($db, $_POST['psw']);


  	$query = "SELECT * FROM users WHERE useremail ='$logemail' AND userpassword='$logpassword'";
  	mysqli_query($db, $query);
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
	  session_unset();
	  $data = mysqli_fetch_assoc($results);
	  foreach($data as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
  	  $_SESSION['username'] = $data['username'];
 $_SESSION['username'] = $data['username'];
 $_SESSION['email'] = $data['useremail'];
 $_SESSION['age'] = $data['userage'];
 $_SESSION['nation'] = $data['usernation'];
 $_SESSION['about'] = $data['userbio'];
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: Profile.php');
  	}else {
  		echo"<script type='text/javascript'>alert('Wrong data entered');</script>";
  	}
}
