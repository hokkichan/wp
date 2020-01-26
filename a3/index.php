<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- meta http-equiv="X-Frame-Options" content="deny" -->
    <title>Lunardo Cinema</title>

    <!-- Stylesheets, you can have more than one. -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <link id='testcss' type="text/css" rel="stylesheet" href="testing.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    
    <!-- Javascript, you can have more than one. -->
    <script type="text/javascript" src='script.js'></script>
    <script type="text/javascript" src='wireframe.js'></script>
  </head>
  
  <!--All images used in the body contained below have free copyright, or contain copyrighted materials not created by the author, and have been used pursuant to Section 40 of the Copyright Act 1968 (Commonwealth of Australia).-->
  <body>
    <header>
      <div><img class="title" src="../../media/lunardo.png" alt="Lunardo" width=280px></div>
      <p class="title1">Lunardo Cinema</p>
      <p class="title2">The Best Cinema in Town</p>
    </header>
    <div id="navbar">
 	    <ul>
  			<li><a href="#about-us">About Us</a></li>
  			<li><a href="#price">Price</a></li>
 	 		<li class="dropdown">
    			<a href="#now-showing" class="dropbtn">Now Showing</a>
    			<div class="dropdown-content">
      				<a href="#synopsis">Synopsis</a>
      				<a href="#booking">Booking</a>
    			</div>
  			</li>
		</ul>
    </div>

    <section id="about-us">
      <h2>About Us</h2>
        <p><div><br>--- Our cinema has reopened after extensive improvements and renovations!</div></p>
        <div><br>------ There are new seats and reclinable first class seats!</div>
        <div><br>--------- The projection and sound systems are upgraded with 3D Dolby Vision projection and Dolby Atmos sound! Click <a href="https://www.dolby.com/us/en/cinema">here</a> for more information.</div><br>
      		<div class ="new-seats">
        	<div class="gallery">
          		<a target="_blank" href="../../media/538.jpg">
          		<img src="../../media/538.jpg" alt="New Seats" width="100%">
          		</a>
          	<div class="desc">Comfortable New Seats!</div>
        	</div>
        	<div class="gallery">
          	<a target="_blank" href="../../media/verona-twin.jpg">
          	<img src="../../media/verona-twin.jpg" alt="First Class Seats" width="100%">
         	</a>
        	<div class="desc">Most Deluxe First Class Seats!</div>
        	</div>
      		</div>
      		<div class="gallery2">
         	<a target="_blank" href="../../media/dolby.jpg">
          	<img src="../../media/dolby.jpg" alt="3D Dolby Vision Projection with Dolby Atmos Sound" width="100%">
    		<!--Image sourced from www.dolby.com for fair use and educational purpose-->
          	</a>
        	<div class="desc"><br>3D Dolby Vision Projection with<br><br>Dolby Atmos Sound!</div>
      	</div>
    </section>

    <section id="price">
      <h2>Price</h2>
      <p><br>The Cinema offers discounted pricing weekday afternoons at 12pm (ie weekday martineé sessions, Mon - Fri and all day on Mon and Tue.</p><br>
      <table id="table-price">
  		<tr>
    	<th>Seat Type</th>
    	<th>Seat Code</th>
    	<th>All day Mon & Tue and 12pm on Wed, Thu & Fri</th>
    	<th>All day Sat & Sun and after 12pm on Wed, Thu & Fri</th>
  		</tr>
  		<tr>
    	<td>Standard Adult</td>
    	<td>STA</td>
    	<td>15.00</td>
   		<td>20.50</td>
  		</tr>
  		<tr>
    	<td>Standard Concession</td>
    	<td>STP</td>
    	<td>13.00</td>
    	<td>18.00</td>
  		</tr>
  		<tr>
    	<td>Standard Child</td>
    	<td>STC</td>
    	<td>11.00</td>
    	<td>15.50</td>
  		</tr>
  		<tr>
    	<td>First Class Child</td>
    	<td>FCA</td>
    	<td>25.00</td>
    	<td>30.00</td>
  		</tr>
  		<tr>
    	<td>First Class Concession</td>
    	<td>FCP</td>
    	<td>23.00</td>
    	<td>27.50</td>
  		</tr>
  		<tr>
    	<td>First Class Child</td>
    	<td>FCC</td>
    	<td>21.00</td>
    	<td>25.00</td>
  		</tr>
	  </table>
    </section>

<!--article--><section id='now-showing'>
<!--Movie cover images were sourced from wikipedia.com for fair use-->
	<h1 class=now-showing>Now Showing</h1><br>
		<p class=now-showing>Below are the movies that we are now showing:-</p><br>
		  <div class="row">
  			<div class="column" style="background-color:#FF4400;">
    		<p class="poster"><img src='../../media/starwars.jpg' alt='Star Wars' width=90%/></p>
  			</div>
  			<div class="column date" style="background-color:#FF5500;">
    		<h2>Star Wars:</h2>
    		<h2>The Rise of Skywalker [M]</h2>
    		<p>Mon - 12pm</p>
    		<p>Tue - 12pm</p>
    		<p>Wed - 6pm</p>
    		<p>Thu - 6pm</p>
    		<p>Fri - 6pm</p>
  			<p>Sat - 12pm</p>
    		<p>Sun - 12pm</p>
          <button onclick='toggle()'>Book now!</button>
  		    </div>
  			<div class="column" style="background-color:#FF4400;">
    		<p class="poster"><img src='../../media/frozen2.jpg' alt='Frozen 2' width=90%/></p>
  			</div>
  			<div class="column date" style="background-color:#FF5500;">
    		<h2>Frozen 2 [PG]</h2>
    		<p>Mon - Nil</p>
    		<p>Tue - Nil</p>
    		<p>Wed - 9pm</p>
    		<p>Thu - 9pm</p>
    		<p>Fri - 9pm</p>
    		<p>Sat - 6pm</p>
    		<p>Sun - 6pm</p>
  		    </div>
  			<div class="column" style="background-color:#FF5500;">
    		<p class="poster"><img src='../../media/aeronauts.jpg' alt='The Aeronauts' width=90%/></p>
  			</div>
  			<div class="column date" style="background-color:#FF4400;">
    		<h2>The Aeronauts [PG]</h2>
    		<p>Mon - 6pm</p>
    		<p>Tue - 6pm</p>
    		<p>Wed - Nil</p>
    		<p>Thu - Nil</p>
    		<p>Fri - Nil</p>
   			<p>Sat - 3pm</p>
    		<p>Sun - 3pm</p>
  		    </div>
			<div class="column" style="background-color:#FF5500;">
    		<p class="poster"><img src='../../media/jojo.jpg' alt='Jojo Rabbit' width=90%/></p>
  			</div>
  			<div class="column date" style="background-color:#FF4400;">
    		<h2>Jojo Rabbit [M]</h2>
    		<p>Mon - Nil</p>
    		<p>Tue - Nil</p>
    		<p>Wed - 12pm</p>
			  <p>Thu - 12pm</p>
    		<p>Fri - 12pm</p>
    		<p>Sat - 9pm</p>
    		<p>Sun - 9pm</p>
  		    </div>
		  </div>
	</section>

	<section id='synopsis'>
  		<h1>Synopsis</h1><br>
			<div class="row" id="synopsis-ACT">
  			  <div class="columnn">
    			<h3>Star Wars: The Rise of Skywalker [M]</h3>
    			<!--Description copied from https://www.imdb.com/title/tt2527338/ -->
    			<h4><br>Plot description:<br></h4>
    			<p><br>After Palpatine mysteriously returns, the Resistance faces the First Order once more in the final chapter of the Skywalker saga.<br></p>
    			<p><br>Director: J.J. Abrams<br></p>
    			<p><br>Writers: Chris Terrio | J.J. Abrams<br></p>
    			<p><br>Stars: Carrie Fisher | Mark Hamill | Adam Driver<br></p>
  				</div>
    			<div class="columnw">
    			<iframe width="560" height="315" src="https://www.youtube.com/embed/8Qn_spdM5Zg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  				</div>
  				<div id="synopsis-availability"><p> 
  				<h2>Availability: </h2>
				<button type="button" onclick="selectDay('ACTMon')">Mon: 12pm</button>
        <button type="button" onclick="selectDay('ACTTue')">Tue: 12pm</button>
        <button type="button" onclick="selectDay('ACTWed')">Wed: 6pm</button>
        <button type="button" onclick="selectDay('ACTThu')">Thu: 6pm</button>
        <button type="button" onclick="selectDay('ACTFri')">Fri: 6pm</button>
        <button type="button" onclick="selectDay('ACTSat')">Sat: 12pm</button>
        <button type="button" onclick="selectDay('ACTSun')">Sun: 12pm</button></p>
				</div>
  			  </div>
			</div>
	</section>

	<section id='booking'>
  		<h1>Booking Area</h1><br>
  		
      <div class="container">
  <form id='bookingform' method = "post" action="https://titan.csit.rmit.edu.au/~e54061/wp/lunardo-formtest.php" onsubmit="return validate()">
    <div class="columnn">
  <h2 id="bookingFormTitle">Movie Title - Day - Time</h2>
	<h3>To be hidden</h3>
    <input id="movie[id]" name="movie[id]" value=""></input>
    <input id="movie[day]" name="movie[day]" value=""></input>
    <input id="movie[hour]" name="movie[hour]" value=""></input>

    <h3>Standard</h3><br>
    <p><label for="seats[STA]">Standard Adult</label>
    <select id="seatsSTA" name="seats[STA]" style="height:30px" onchange="updateTotal()">
      <option value="0">Please select</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select></p><br>

    <p><label for="seats[STP]">Standard Concession</label>
    <select id="seats[STP]" name="seats[STP]" style="height:30px" onchange="updateTotal()">
      <option value="0">Please select</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select></p><br>

    <p><label for="seats[STC]">Standard Child</label>
    <select id="seats[STC]" name="seats[STC]" style="height:30px">
      <option value="0">Please select</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select></p><br>
  </div>
      <div class="columnn">
    <h3>First Class</h3><br>
    <p><label for="seats[FCA]">First Class Adult</label>
    <select id="seats[FCA]" name="seats[FCA]" style="height:30px">
      <option value="0">Please select</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select></p><br>

    <p><label for="seats[FCP]">First Class Concession</label>
    <select id="seats[FCP]" name="seats[FCP]" style="height:30px">
      <option value="0">Please select</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select></p><br>

    <p><label for="seats[FCC]">First Class Child</label>
    <select id="seats[FCC]" name="seats[FCC]" style="height:30px">
      <option value="0">Please select</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
    </select></p><br>
  </div>
<div class="columnn">
    <p><label for="subject">Name</label>
    <input type="text" id="cust[name]" name="cust[name]" placeholder="Scott Morrison" style="height:30px"></input></p><br>

    <p><label for="subject">Email</label>
    <input type="email" id="cust[email]" name="cust[email]" placeholder="xxxxxx@gmail.com" style="height:30px"></input></p><br>

    <p><label for="subject">Mobile</label>
    <input type="tel" id="cust[mobile]" name="cust[mobile]" placeholder="+04 xxxxxxxx" style="height:30px"></input></p><br>

    <p><label for="subject">Credit Card</label>
    <input type="text" id="cust[card]" name="cust[card]" placeholder="xxxx xxxx xxxx xxxxx" onchange="validateCard()" style="height:30px" ></input></p><br>

    <p><label for="subject">Expiry</label>
    <input type="month" id="cust[expiry]" name="cust[expiry]" style="height:30px"></input></p><br>
</div>
<div class="columnn">
  <div><label>Total: $</label><input type="number" id="totalPrice" name="totalPrice" value=""></div>
  <div><input type="submit" value="Order"></div>
  </form>
</div>
	</section>

      <!--</article>-->

    <footer>
      <p>This website has been created as an assignment of the course of "Web Programming" by the RMIT University. The site contains copyrighted materials not created by the author, and has been used pursuant to Section 40 of the Copyright Act 1968 (Commonwealth of Australia).</p>
      <p><br>&copy; Lunardo Cinema
      <script>
        document.write(new Date().getFullYear());
      </script>. | Email: info@lunardo.com | Tel: +61 3 9925 5110 | Address: La Trobe St, Melbourne</p>
      <p><br>Chan Hok Ki | s3831921 | Github: <a href="https://github.com/s3831921">s3831921</a> | Private repository: <a href="https://github.com/s3831921/wp">here</a> | <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
    </footer>
    
  </body>
</html>

<!--last update: 21.1.2020 2212 hrs-->