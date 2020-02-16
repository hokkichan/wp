<?php 
include 'tools.php';
?>

<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title>A4 Backup Page</title>
    <style>
    label { display: inline-block; width:90px; }
.error {color: #FF0000;}
  </style>
  </head>

  <body>
    
    <header>
      <h1>🌕 Lunardo Cinema</h1>
    </header>

    <nav>
    </nav>

    <main>
      <h2>A4 Booking Form</h2>
      <form method='post' action='index-fallback.php'>



        <label>MovieId</label><input type=text name='movie[id]'/><br>
        <label>MovieDay</label><input type=text name='movie[day]'/><br>
        <label>MovieHour</label><input type=text name='movie[hour]'/><br>
        <br>
        <label>SeatsSTA</label><input type=text name='seats[STA]'/><br>
        <label>SeatsSTP</label><input type=text name='seats[STP]'/><br>
        <label>SeatsSTC</label><input type=text name='seats[STC]'/><br>
        <label>SeatsFCA</label><input type=text name='seats[FCA]'/><br>
        <label>SeatsFCP</label><input type=text name='seats[FCP]'/><br>
        <label>SeatsFCC</label><input type=text name='seats[FCC]'/><br>
        <br>
        <label>CustName</label><input type=text name='custName'/><span class="error">* <?php echo $nameErr;?></span><br>
        <label>CustEmail</label><input type=text name='custeEmail'/><span class="error">* <?php echo $emailErr;?></span><br>
        <label>CustMobile</label><input type=text name='cust[mobile]'/><br>
        <label>CustCard</label><input type=text name='cust[card]'/><br>
        <label>CustExpiry</label><input type=text name='cust[expiry]'/><br>



        <?php checkName(); ?>
        <?php checkName(); ?>

        <input type=submit value='Book'/>
      </form>

<?php //printPost(); ?>

    </main>

    <footer>
    </footer>
    
  </body>
</html>
