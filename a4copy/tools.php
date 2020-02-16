<?php
session_start();



if ( isset($_POST['clear-session']) ) 
  unset ( $_SESSION['email'], $_SESSION['name'], $_SESSION['seatsSTA']);

function checkName() {
$name = "";
$nameErr= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
}





function sendToSession()
{
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['name'] = $_POST['name']; 
  $_SESSION['seatsSTA'] = $_POST['seatsSTA'];
  echo 'Thank you for order, your input: ' . $_SESSION['name']. $_SESSION['email']. $_SESSION['seatsSTA'];
}

function printPost() {
	echo 'Name: ' . $_POST['name'] . '<br>';
	echo 'Email: ' . $_POST['email'] . '<br>';
}


?>