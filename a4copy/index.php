<!DOCTYPE html>
<html lang="en">
<?php include 'tools.php';?>
  <head>
    <meta charset='utf-8'>
    <title>A4 Backup Page</title>
    <style>label { display: inline-block; width:90px; }</style>
  </head>

<body>

	

<form action = "receipt.php" method="post"> 

   

<?php 
$errorsFound = 0; 


if(!empty($_POST)) 
{
if (empty ($_POST['name']))
 {
 	$errorsFound++;
 }
 if (empty ($_POST['email']))
 {
 	$errorsFound++;
 }
 else 
 {
 if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
 {
 	$errorsFound++;
 }
}
} 

?>

		<label>MovieId</label><input type=text name='movieId'/><br>
        <label>MovieDay</label><input type=text name='movie[day]'/><br>
        <label>MovieHour</label><input type=text name='movie[hour]'/><br>
        <br>
        <label>SeatsSTA</label><input type=text name='seatsSTA'/><br>
        <label>SeatsSTP</label><input type=text name='seats[STP]'/><br>
        <label>SeatsSTC</label><input type=text name='seats[STC]'/><br>
        <label>SeatsFCA</label><input type=text name='seats[FCA]'/><br>
        <label>SeatsFCP</label><input type=text name='seats[FCP]'/><br>
        <label>SeatsFCC</label><input type=text name='seats[FCC]'/><br>
        <br>
        <label>CustName</label><input type=text name='name'/><br>
        <label>CustEmail</label><input type=text name='email'/><br>
        <label>CustMobile</label><input type=text name='cust[mobile]'/><br>
        <label>CustCard</label><input type=text name='cust[card]'/><br>
        <label>CustExpiry</label><input type=text name='cust[expiry]'/><br>
        <input type="submit" value='Book'/>
        <input type="submit" value="Clear Session" name="clear-session"><br>


</form>
<?php checkName(); ?> 
<?php printPost(); ?>

<?php
//if ($errorsFound >0) {
//echo 'Number of errors found: ' . $errorsFound . '<br>';
//}
//else{
	if (!empty($_POST))
	{
		sendToSession();
	}
//}
?>

</body>
</html>