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
  $_SESSION['mobile'] = $_POST['mobile'];
  $_SESSION['movieId'] = $_POST['movieId'];
  $_SESSION['movieDay'] = $_POST['movieDay'];
  $_SESSION['movieHour'] = $_POST['movieHour'];
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['seatsSTA'] = $_POST['seatsSTA'];
  $_SESSION['seatsSTP'] = $_POST['seatsSTP'];
  $_SESSION['seatsSTC'] = $_POST['seatsSTC'];
  $_SESSION['seatsFCA'] = $_POST['seatsFCA'];
  $_SESSION['seatsFCP'] = $_POST['seatsFCP'];
  $_SESSION['seatsFCC'] = $_POST['seatsFCC'];
}

function printPost() {
	echo 'Name: ' . $_POST['name'] . '<br>';
	echo 'Email: ' . $_POST['email'] . '<br>';
	echo 'SeatsSTA: ' . $_POST['seatsSTA'] . '<br>';
	echo 'Show inputted data dor debugging';
}


?>