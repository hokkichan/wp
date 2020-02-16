<?php
session_start();
$email = "";
$name = "";


if ( isset($_POST['clear-session']) ) 
  unset ( $_SESSION['email'], $_SESSION['name'], $_SESSION['seatsSTA']);





function sendToSession()
{
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['name'] = $_POST['name']; 
  $_SESSION['seatsSTA'] = $_POST['seatsSTA'];
}

function printPost() {
	echo 'Name: ' . $_POST['name'] . '<br>';
	echo 'Email: ' . $_POST['email'] . '<br>';
	echo 'SeatsSTA: ' . $_POST['seatsSTA'] . '<br>';
	echo 'Show inputted data dor debugging';
}


?>