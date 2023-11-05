<?php include "../components/header.php"; ?>
 <div class="search-box">
     <div class="form-container">
        <h1>SEARCH FLIGHT</h1>
        <a href="#" class="close-btn">&times;</a>
      <div class="form-group">
        <label for="place">Where From</label>
        <input type="text" placeholder="Where from" name="name" id="wh-frm">
       </div>
  
       <div class="form-group">
        <label for="where to">Where to</label>
        <input type="text" placeholder="Where to" name="name" id="wh-to">
       </div>
       
       <div class="form-group">
        <label for="date">Departure Date</label>
        <input type="date" placeholder="Departure date" name="dpt-date" id="dpt-date">
       </div>
      <a href="#" class="search-btn" id="sch-btn">Search</a>
     </div>
  </div>



  <div class="searcher-container">
    <div class="search">
       <div class="search-circle">
         <a href="#">Searching...</a>
         <span class="top"></span>
         <span class="bottom"></span>
         <span class="right"></span>
         <span class="left"></span>
       </div>
       <a href="#" class="hero-btn" id="abort-me">Abort</a>
    </div>
</div>


<!-- ------------------------------main--------------------------------- -->
<main>
 <section class="section-a" id="section-a">
    <h1>About Flights to Meru</h1>
    <p>Summary info about Kenyan flight prices, duration and airlines</p>
    <div class="flights-list">
      <div class="col">
        <h2>BEST ONE-WAY PRICE</h2>
        <a href="#">$240</a>
         <p>The best one-way flight price to Kenya from United States in the last 72 hours is $240 (Los Angeles to Nairobi Narita).</p>
      </div>
      <div class="col">
        <h2>BEST ROUND-TRIP PRICE</h2>
        <a href="#">$742</a>
         <p>
          The best round-trip flight price to Kenya from United States in the last 72 hours is $517 (Los Angeles to Nairobi Narita).</p>
      </div>
      <div class="col">
        <h2>FASTEST FLIGHT TIME</h2>
        <a href="#">$766</a>
         <p>The fastest flight to Kenya from United States takes 11h 45m (Los Angeles to Nairobi Narita).</p>
      </div>
      <div class="col">
        <h2>OPERATED BY</h2>
        <a href="#">5 AIRLINES</a>
         <p>There are 4 airlines operating flights to Kenya, including American Airlines, Air Canada and Delta.</p>
      </div>
    </div>

 

 </section>
 
<section class="section-b" id="section-b">
  <div class="section-wrapper">
    <h1>Kenya flights insights and trends</h1>
    <p>Explore insights for your Kenya flight to craft the best travel plan</p>
    <div class="insights-row">
       <div class="col">
         <h2 class="sub-h2">How much are flights to Kenya?</h2>
         <p>Flights to Kenya have been found on momondo for as low as $16 per ticket recently. However, the average price tends to be $2,825 and anything for $2,742 or less is a good deal. $48,443 is the most expensive flight we’ve seen in the past week, though you may be able to avoid this price depending on what airport you fly from, what airline you choose, and how far in advance you book your flights.</p>
         <p>See prices from</p>
         <a href="#" class="hero-btn">Nakuru</a>
       </div>
       <div class="col">
         <h2 class="sub-h2">What are the most popular cities to visit in Kenya?</h2>
         <p>Kenya is full of interesting cities to visit if you’re interested in touring the country. The majority of our users (2,083%) visit Nairobi more than other cities in the country, but other popular cities in Kenya include Osaka and Okinawa.</p>
       </div>
    </div>
  </div>

  <div class="data-representation">
   <div class="col">
     <div class="img-wrapper">
       <img src="../images/mombasa.jpg" alt="">
       <h2 class="sub-h2">What are the most popular cities to visit in Kenya?</h2>
       <p>Kenya is full of interesting cities to visit if you’re interested in touring the country. The majority of our users (2,083%) visit Nairobi more than other cities in the country, but other popular cities in Kenya include Osaka and Okinawa</p>
     </div>
     <p></p>
   </div>
   <div class="col">
    <div class="img-wrapper">
      <img src="../images/grap7.jpeg" alt="">
      <h2 class="sub-h2">Our data from the last decades.</h2>
     <p>Data is one of the most valuable assets any organization can have. Our data solutions are perfect for anyone who wants to understand the aviation industry better. Discover what high-quality aviation data can do for your business.

IATA is the trade association for the world’s airlines. Carrying 83% of the world’s air traffic, we represent over 300 airlines in 120 countries, including the world’s leading passenger and cargo airlines.  

Our standard of excellence extends to the tools and resources we provide. IATA works directly with airlines and aviation stakeholders, offering you the most accurate and comprehensive aviation data available, all through streamlined platforms. </p>
    </div>
    <p></p>
  </div>
  <div class="col">
    <div class="img-wrapper">
      <img src="../images/ethiopia.jpg" alt="">
      <h2 class="sub-h2">We at all don't believe in loses</h2>
     <p>The state-owned carrier increased its fleet by 11 passenger planes, bringing the total to 140, and converted two into cargo planes, bringing the total number of cargo planes to 15, Mesfin said.

Ethiopian Airlines introduced seven new international destinations, including Copenhagen, Atlanta, and Karachi during the budget year.

Earlier this month Mesfin said the company was evaluating possible Airbus (AIR.PA) and Boeing (BA.N) wide-body plane orders and was expecting to make a decision by the end of the year.</p>
    </div>
  </div>
  </div>

</section>

<section class="section-c" id="section-c">
  <div class="section-c-wrapper">
    <h2 class="sub-h2">Cheapest flights to cities in Kenya</h2>
    <p>Click on the cities below to find out when it's cheapest to fly to kenya from United States</p>
 
  <div class="cities">
    <a href="#">Nakuru</a>
    <a href="#">Nairobi</a>
    <a href="#">Kampala</a>
    <a href="#">Eldoret</a>
    <a href="#">Kisumu</a>
  </div>
  <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
  <a href="#" class="hero-btn">Find flights in Nairobi</a>
</div>
</section>






<section class="section-d" id="section-d">
  <h2 class="sub-h2">Cheapest flight routes to Kenya</h2>
  <p>hese routes have the cheapest flights to kenya found by momondo users in United States</p>
  <div class="container fitcontent">
    <table>
      <thead>
        <tr>
          <td>Departing</td>
          <td>Destination</td>
          <td>Best Time</td>
          <td>Best Price</td>
        </tr>
      </thead>
        <tbody>
          <tr>
            <td>Los Angeles</td>
            <td>Meru</td>
            <td>11h 20m</td>
            <td><a href="#">$878</a></td>
          </tr>
          <tr>
            <td>Mumbai</td>
            <td>Meru</td>
            <td>08h 03m</td>
            <td><a href="#">$567</a></td>
          </tr>
          <tr>
            <td>Cairo</td>
            <td>Meru</td>
            <td>03h 20m</td>
            <td><a href="#">$240</a></td>
          </tr>
          <tr>
            <td>Beijin</td>
            <td>Meru</td>
            <td>07h 23m</td>
            <td><a href="#">$640</a></td>
          </tr>
          <tr>
            <td>Carlifonia</td>
            <td>Meru</td>
            <td>06h 20m</td>
            <td><a href="#">$818</a></td>
          </tr>
          <tr>
            <td>Johannesburg</td>
            <td>Meru</td>
            <td>05h 04m</td>
            <td><a href="#">$478</a></td>
          </tr>
          
          <tr>
            <td>London</td>
            <td>Meru</td>
            <td>06h 21m</td>
            <td><a href="#">$896</a></td>
          </tr>
          <tr>
            <td>Berlin</td>
            <td>Meru</td>
            <td>06h 24m</td>
            <td><a href="#">$676</a></td>
          </tr>
          <tr>
            <td>Dubai</td>
            <td>Meru</td>
            <td>07h 20m</td>
            <td><a href="#">$776</a></td>
          </tr>
          <tr>
            <td>Sidney</td>
            <td>Meru</td>
            <td>03h 27m</td>
            <td><a href="#">$566</a></td>
          </tr>
          <tr>
            <td>Madrid</td>
            <td>Meru</td>
            <td>09h 21m</td>
            <td><a href="#">$474</a></td>
          </tr>
          <tr>
            <td>Jerusalem</td>
            <td>Meru</td>
            <td>04h 21m</td>
            <td><a href="#">$556</a></td>
          </tr>
          <tr>
            <td>Abuja</td>
            <td>Meru</td>
            <td>03h 15m</td>
            <td><a href="#">$496</a></td>
          </tr>
          <tr>
            <td>New Delhi</td>
            <td>Meru</td>
            <td>05h 19m</td>
            <td><a href="#">$406</a></td>
          </tr>
          <tr>
            <td>Instabul</td>
            <td>Meru</td>
            <td>02h 06m</td>
            <td><a href="#">$596</a></td>
          </tr>
          <tr>
            <td>Stockholm</td>
            <td>Meru</td>
            <td>04h 15m</td>
            <td><a href="#">$496</a></td>
          </tr>
          <tr>
            <td>Hanoi</td>
            <td>Meru</td>
            <td>04h 15m</td>
            <td><a href="#">$996</a></td>
          </tr>
          <tr>
            <td>Yokoama</td>
            <td>Meru</td>
            <td>05h 45m</td>
            <td><a href="#">$996</a></td>
          </tr><tr>
            <td>Shanghai</td>
            <td>Meru</td>
            <td>05h 15m</td>
            <td><a href="#">$1096</a></td>
          </tr>
         
         
        </tbody>
       
    </table>
  </div>
</section>





<section class="section-e" id="section-e">
 <div class="section-e">
  <h1>Start planning your trip to kenya</h1>
 </div>
 <div class="destination-sites">
   <div class="destination-col">
     <div class="img-wrapper">
       <img src="../images/hotel.jpg" alt="">
       <div class="overlay">
         <h2>Hotels</h2>
         <a href="'#" class="btn">visit us</a>
       </div>
     </div>
     <h2 class="sub-h2">Start planning your trip today</h2>
     <p>Get an overview of the top hotels in the most popular neighborhoods of kenya</p>
     <a href="#">Find hotels in Kenya</a>
   </div>
   <div class="destination-col">
    <div class="img-wrapper">
      <img src="../images/beaches.jpg" alt="">
      <div class="overlay">
        <h2>Beaches</h2>
        <a href="'#" class="btn">visit us</a>
      </div>
    </div>
    <h2 class="sub-h2">Start planning your trip today</h2>
    <p>Get an overview of the top hotels in the most popular neighborhoods of kenya</p>
    <a href="#">Find hotels in Kenya</a>
  </div>
  <div class="destination-col">
    <div class="img-wrapper">
      <img src="../images/flammiggos.jpg" alt="">
      <div class="overlay">
        <h2>Tourism</h2>
        <a href="'#" class="btn">visit us</a>
      </div>
    </div>
    <h2 class="sub-h2">Start planning your trip today</h2>
    <p>Get an overview of the top hotels in the most popular neighborhoods of kenya</p>
    <a href="#">Find hotels in Kenya</a>
  </div>
 </div>
</section>

 
</main>
<!-- ------------------------------//main-------------------------------- -->

<!-- ----------------------------------footer------------------------------- -->
 <?php include"../components/footer.php"; ?>