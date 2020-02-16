<?php 
include 'tools.php';
//if ( empty( $_SESSION['email'] || $_SESSION['name'] )) //|| $_SESSION['movie'] || $_SESSION['seats'] ) // ... == seats and cust checks
//{
//	header('Location: index.php');
//	exit;
//}
  
	;?>

<style>
p {
	size:150%;
	font-weight: bold;
}

table {
  border-collapse: collapse;
  width: 70%;
  margin-bottom: 25px;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 5px;
}

tr:nth-child(even) {
  background-color: grey;
}
</style>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Order completed</title>
	
</head>

<body>
<p>
  Lunardo Cinema <br>
  Email: info@lunardo.com <br>
  Tel: +61 3 9925 5110 <br>
  Address: La Trobe St, Melbourne <br>
</p>

<table>
    <caption>Customer Details</caption>
    <tr>
        <td> </td>
        <th scope="col" class="title">Details</th>
    </tr>
    <tr>
        <th scope="row">Name</th>
        <td><?php echo $_SESSION['name'] ?></td>
    </tr>
    <tr>
        <th scope="row">Email</th>
        <td><?php echo $_SESSION['email'] ?></td>
    </tr>
    <tr>
        <th scope="row">Mobile</th>
        <td>Pending</td>
    </tr>
</table>
<br>
<table>
    <caption>Booking Details</caption>
    <tr>
        <td> </td>
        <th scope="col" class="title">Booking Details</th>
        <th scope="col" class="title">Quantity</th>
    </tr>
     <tr>
        <th scope="row"></th>
        <td>Code: ACT = Star Wars: The Rise of Skywalker [M]<br>ANM = Frozen 2<br>RMC = The Aeronauts<br>AHF = Jojo Rabbit</td>
        <td>Pending</td>
    </tr>
    <tr>
        <th scope="row">SeatsSTA</th>
        <td></td>
        <td><?php echo $_SESSION['seatsSTA'] ?></td>
    </tr>
    <tr>
        <th scope="row">SeatsFCA</th>
        <td></td>
        <td>Pending</td>
    </tr>
   <tr>
        <th scope="row">SeatsFCP</th>
        <td></td>
        <td>Pending</td>
    </tr>
    <tr>
        <th scope="row">SeatsFCC</th>
        <td></td>
        <td>Pending</td>
    </tr>
</table>
<p>
	Total: $ 
</p>
<p>
Thank you for order!
</p>



<?php
$var =  $_SESSION['name'];
$list = array (
  array("$var"),
  array("Glenn", "Quagmire", "Oslo", "Norway")
);


$file = fopen("ordernew.txt","a");
//flock($file, LOCK_SH);
foreach ($list as $line) {
  fputcsv($file, $line);
}
//flock($file, LOCK_UN);
fclose($file);
?>

</body>
</html>