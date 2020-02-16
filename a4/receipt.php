<?php 
include 'tools.php';
//if ( empty( $_SESSION['email'] || $_SESSION['name'] )) //|| $_SESSION['movie'] || $_SESSION['seats'] ) // ... == seats and cust checks
//{
//	header('Location: index.php');
//	exit;
//}
$sta =  $_SESSION['seatsSTA']; 
$stp =  $_SESSION['seatsSTP'];  
$stc =  $_SESSION['seatsSTC']; 
$fca =  $_SESSION['seatsFCA']; 
$fcp =  $_SESSION['seatsFCP'];
$fcc =  $_SESSION['seatsFCC'];


$total =0;
$total += $sta*20.5;
$total += $stp*18;
$total += $stc*15.5;
$total += $fca*30;
$total += $fcp*27.5;
$total += $fcc*25.0;
$tax = $total/11;
$totalBeforeTax = $total*10/11;

//Note: I have not included the calculations for discount sessions, so the calculations for discout sessions are incorrect. Thanks.
	;?>

<style>
p {
	font-weight: bold;
}

h2 {
  color: blue;
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
<h3>
  Lunardo Cinema <br>
  Email: info@lunardo.com <br>
  Tel: +61 3 9925 5110 <br>
  Address: La Trobe St, Melbourne <br>
</h3>

<table>
    <h2>Customer Details</h2>
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
        <td><?php echo $_SESSION['mobile'] ?></td>
    </tr>
</table>
<br>
<table>
    <h2>Booking Details</h2>
    <tr>
        <td> </td>
        <th scope="col" class="title">Booking Details</th>
        <th scope="col" class="title">Quantity</th>
    </tr>
     <tr>
        <th scope="row">Code: </th>
        <td>ACT = Star Wars: The Rise of Skywalker [M]<br>ANM = Frozen 2<br>RMC = The Aeronauts<br>AHF = Jojo Rabbit</td>
        <td><?php echo $_SESSION['movieId'] ?></td>
    </tr>
    <tr>
        <th scope="row">Standard Adult (STA)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsSTA'] ?></td>
    </tr>
    <tr>
        <th scope="row">Standard Concession (STP)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsSTP'] ?></td>
    </tr>
   <tr>
        <th scope="row">Standard Child (STC)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsSTC'] ?></td>
    </tr>
    <tr>
        <th scope="row">First Class Adult (FCA)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsFCA'] ?></td>
    </tr>
    <tr>
        <th scope="row">First Class Concession (FCP)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsFCP'] ?></td>
    </tr>
    <tr>
        <th scope="row">First Class Child (FCC)</th>
        <td></td>
        <td><?php echo $_SESSION['seatsFCC'] ?></td>
    </tr>
</table>
<h3>
	Total: $ <?php echo round($totalBeforeTax, 2)?><br>
  GST: $ <?php echo round($tax, 2)?><br>
  Grand Total: $ <?php echo round($total, 2)?><br>
</h3>
<h3>
Thank you for your order!
</h3>



<?php
$varName =  ($_SESSION['name']);
$varEmail =  ($_SESSION['email']);
$varMobile =  ($_SESSION['mobile']);
$varMovieId =  ($_SESSION['movieId']);
$varMovieDay =  ($_SESSION['movieDay']);
$varMovieHour =  ($_SESSION['movieHour']);
$seatsSTA =  ($_SESSION['seatsSTA']);
$seatsSTP =  ($_SESSION['seatsSTP']);
$seatsSTC =  ($_SESSION['seatsSTC']);
$seatsFCA =  ($_SESSION['seatsFCA']);
$seatsFCP =  ($_SESSION['seatsFCP']);
$seatsFCC =  ($_SESSION['seatsFCC']);


$list = array (
  array("Name", "$varName"),
  array("Email", "$varEmail"),
  array("Mobile", "$varMobile"),
  array("Movie ID", "$varMovieId"),
  array("Day", "$varMovieDay"),
  array("Hour", "$varMovieHour"),
  array("STA Qty", "$seatsSTA"),
  array("STP Qty", "$seatsSTP"),
  array("STC Qty", "$seatsSTC"),
  array("FCA Qty", "$seatsFCA"),
  array("FCP Qty", "$seatsFCP"),
  array("FCC Qty", "$seatsFCC"),
  array("Total", "$total"),
);


$file = fopen("bookings.txt","a");
//flock($file, LOCK_SH);
foreach ($list as $line) {
  fputcsv($file, $line);
}
//flock($file, LOCK_UN);
fclose($file);
?>

</body>
</html>