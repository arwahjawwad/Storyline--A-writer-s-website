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
if (isset($_POST['join'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $nation = mysqli_real_escape_string($db, $_POST['nation']);
  $about = mysqli_real_escape_string($db, $_POST['about']);



  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO users (username, useremail, userpassword, userage, userbio, usernation) 
  			  VALUES('$username', '$email', '$password', '$age', '$about', '$nation')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
	$_SESSION['email'] = $email;
	$_SESSION['age'] = $age;
	$_SESSION['nation'] = $nation;
	$_SESSION['about'] = $about;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: Profile.php');
  }
}
