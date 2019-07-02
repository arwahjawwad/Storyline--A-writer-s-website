<?php
session_start();

// initializing variables 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'storyline');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $title = mysqli_real_escape_string($db, $_POST['title']);
  $story = mysqli_real_escape_string($db, $_POST['story']);
  $genre = mysqli_real_escape_string($db, $_POST['genre']);


  // Finally, register user if there are no errors in the form

  	$query = "INSERT INTO stories (title, story, genre, image) 
  			  VALUES('$title', '$story','$genre','book.jpg')";
  	mysqli_query($db, $query);
  	$_SESSION['title'] = $title;
	$_SESSION['story'] = $story;
	$_SESSION['image'] = "book.jpg";
  	header('location: Shelf.php');
}
