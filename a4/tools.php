<?php
session_start();
$name = "";
$email = "";
$mobile = "";
$movieID = "";
$movieDay = "";
$movieHour = "";
$seatsSTA = "";
$seatsSTP = "";
$seatsSTC = "";
$seatsFCA = "";
$seatsFCC = "";
$seatsFCP = "";

if ( isset($_POST['clear-session']) ) 
  unset ( $_SESSION['name'], $_SESSION['email'], $_SESSION['mobile'], $_SESSION['movieId'], $_SESSION['movieDay'], $_SESSION['movieHour'], $_SESSION['seatsSTA'], $_SESSION['seatsSTP'], $_SESSION['seatsSTC'], $_SESSION['seatsFCA'], $_SESSION['seatsFCP'], $_SESSION['seatsFCC']);





function sendToSession()
{
  $_SESSION['name'] = $_POST['name']; 
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['mobile'] = $_POST['mobile'];
  $_SESSION['movieId'] = $_POST['movieId'];
  $_SESSION['movieDay'] = $_POST['movieDay'];
  $_SESSION['movieHour'] = $_POST['movieHour'];
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