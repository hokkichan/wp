<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- meta http-equiv="X-Frame-Options" content="deny" -->
    <title>Lunardo Cinema</title>

    <!-- Stylesheets, you can have more than one. -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="wireframe.css"/>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <link id='testcss' type="text/css" rel="stylesheet" href="testing.css">
    
    <!-- Javascript, you can have more than one. -->
    <!--<script src='wireframe.js'></script>-->
  </head>

  <body>

    <header>
      <div><img class = "title" src="../../media/logow.png" alt="Lunardo" height=200px /></div>
 </header>
 <div id="navbar">
 	    <ul>
        <li><a href="#about-us">About Us</a></li>
        <li><a href="#price">Price</a></li>
        <li><a href="#now-showing">Now Showing</a></li>
        <li><a href="#trailer">Trailer</a></li>
      </ul> 
  </div>
     <section id="about-us">
        	<h2>About Us</h2>
          <p><div><br>Our cinema has reopened after extensive improvements and renovations!</div></p>
          <div><br>There are new seats and reclinable first class seats!</div>
          <div><br>The projection and sound systems are upgraded with 3D Dolby Vision projection and Dolby Atmos sound! Click <a href="https://www.dolby.com/us/en/cinema">here</a> for more information.</div><br>
<div class ="new-seats">
<div class="gallery">
  <a target="_blank" href="../../media/538.jpg">
    <img src="../../media/538.jpg" alt="New Seats" width="300px">
  </a>
  <div class="desc">Comfortable New Seats!</div>
</div>

<div class="gallery">
  <a target="_blank" href="../../media/verona-twin.jpg">
    <img src="../../media/verona-twin.jpg" alt="First Class Seats" width="300px">
  </a>
  <div class="desc">Most Deluxe First Class Seats!</div>
</div>
</div>
</section><br>

      <section id="price">
      <h2>Price</h2>
      <p><br>The Cinema offers discounted pricing xxxxx</p><br>
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
<h1 class=non-showing>Now Showing</h1><br>
<p class=non-showing>Below are the movies that we are now showing:-</p><br>
<div class="row">
  <div class="column" style="background-color:#FF4400;">
    <p class="poster"><img src='../../media/starwars.jpg' alt='Star Wars' width=90%/></p>
  </div>
  <div class="column date" style="background-color:#FF5500;">
    <h2>Star Wars: The Rise of Skywalker</h2>
    <p>Mon - 12pm</p>
    <p>Tue - 12pm</p>
    <p>Wed - 6pm</p>
    <p>Thu - 6pm</p>
    <p>Fri - 6pm</p>
  	<p>Sat - 12pm</p>
    <p>Sun - 12pm</p>
  </div>
  <div class="column" style="background-color:#FF4400;">
    <p class="poster"><img src='../../media/frozen2.jpg' alt='Frozen 2' width=90%/></p>
  </div>
  <div class="column" style="background-color:#FF5500;">
    <h2>Frozen 2</h2>
    <p>Mon - Tue - Nil</p>
    <p>Wed - Fri - 9pm</p>
    <p>Sat - Sun - 6pm</p>
  </div>
  <div></div>
  <div class="column" style="background-color:#FF5500;">
    <p class="poster"><img src='../../media/aeronauts.jpg' alt='The Aeronauts' width=90%/></p>
  </div>
  <div class="column" style="background-color:#FF4400;">
    <h2>The Aeronauts</h2>
    <p>Mon - Tue - 6pm</p>
    <p>Wed - Fri - Nil</p>
    <p>Sat - Sun - 3pm</p>
  </div>
<div class="column" style="background-color:#FF5500;">
    <p class="poster"><img src='../../media/jojo.jpg' alt='Jojo Rabbit' width=90%/></p>
  </div>
  <div class="column" style="background-color:#FF4400;">
    <h2>Jojo Rabbit</h2>
    <p>Mon - Tue - Nil</p>
    <p>Wed - Fri - 12pm</p>
    <p>Sat - Sun - 9pm</p>
  </div>
</div>
</section>

<section id='trailer'>
  <h1>Trailer</h1><br>
  <p><iframe width="560" height="315" src="https://www.youtube.com/embed/8Qn_spdM5Zg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p><br><br><br>
</section>

</body>
</html>

      <!--</article>-->


    <footer>
      <p>&copy; Lunardo Cinema
      <script>
        document.write(new Date().getFullYear());
      </script>. Tel: +61 3 9925 5110 Email: info@lunardo.com</p>
      <p>Chan Hok Ki | s3831921 | Github: <a href="https://github.com/s3831921">s3831921</a><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
    </footer>
    
  </body>
</html>


    </footer>
    
  </body>
</html>
