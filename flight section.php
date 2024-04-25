<!--Flight section start-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Section</title>
    <link rel="stylesheet" href="css code\flight section.css">
</head>

<header>
  <div class="left">
      <a href="Hotel.html" class="logo">Travel</a>
  </div>
  <div class="right">
      <a href="" class="circle-button">?</a>
      <a href="Register.html" class="button">Register</a>
      <a href="Login.html" class="button">Login</a>
  </div>
</header>
  <nav>
      <div class="navbar">
          <a href="Hotel.html">Hotel</a>
          <a href="flight section.html">Flight</a>
          <a href="#">Car rentals</a>
          <a href="attraction section.html">Attractions</a>
      </div>
  </nav>

<body>
    <h1>Flight Search</h1>

    <form id="searchForm" action="flight searching bar.php" method="GET" class="form-row">
    
    <select name="departure" id="departure" >
    <option value="default" id="default" selected disabled>Departure</option>
    <option value="Kuala Lumpur" id="Kuala Lumpur">Kuala Lumpur</option>
    </select>

    <select name="destination" id="destination">
    <option value="default" id="default" selected disabled>Destination</option>
    <option value="Singapore" id="Singapore">Singapore</option>
    </select>
    <input type="date" id="date" name="date" required>
    <button type="submit">Search Flights</button>
    </form>

    <div class="flight-top">
      <div class="flight-info">
        <h3>Trending cities</h3>
        <p>Book flights to a destination popular with travelers from Malaysia</p>
      </div>
    </div>

    <div class="flight-pictures">
        <div class="pictures">
          <img src="picture\new york" alt="John F. Kennedy International Airport">
          <h3>New York</h3>
        </div>
        <div class="pictures">
          <img src="picture\London" alt="Heathrow Airport">
          <h3>London</h3>
         </div>
         <div class="pictures">
          <img src="picture\tokyo" alt="Narita International Airport">
          <h3>Tokyo</h3>
         </div>
         <div class="pictures">
          <img src="picture\sydney" alt="Kingsford Smith Airport">
          <h3>Sydney</h3>
         </div>
         <div class="pictures">
          <img src="picture\dubai">
          <h3>Dubai</h3>
         </div>
         <div class="pictures">
          <a href="flight_search.php"><img src="picture\kuala lumpur" alt="Kuala Lumpur Airport"></a>
          <h3>Kuala Lumpur</h3>
         </div>
    </div>
    
    <div class="footer">
    <h2 class="footer-heading">Services</h2>

    <div class="box-container">
        <div class="box">
            <img src="picture\hotel.png" alt="Hotel Icon">
            <h3>affordable hotel</h3>
            <p>Our 'affordable hotel' offers comfortable accommodation at reasonable prices, catering to various budgets.</p>
        </div>
        <div class="box">
            <img src="picture\food&drink.png" alt="Food & Drinks Icon">
            <h3>food & drinks</h3>
            <p>We offer catering services so you can enjoy a delicious meal in a comfortable environment!</p>
        </div>
        <div class="box">
            <img src="picture\security.png" alt="Safety Guide Icon">
            <h3>safety guide</h3>
            <p>We provide safety guidelines to ensure your safety while traveling</p>
        </div>
        <div class="box">
            <img src="picture\world.png" alt="Around the World Icon">
            <h3>around the world</h3>
            <p>We offer global services so you can travel around the world and enjoy your trip!</p>
        </div>
        <div class="box">
            <img src="picture\flight.png" alt="Faster Travel Icon">
            <h3>faster travel</h3>
            <p>We offer faster travel services so you can save time and get to your destination more easily!</p>
        </div>
        <div class="box">
            <img src="picture\adventures.png" alt="Adventures Icon">
            <h3>adventures</h3>
            <p>We offer a variety of adventurous activities for a challenging and exciting adventure experience!</p>
        </div>
    </div>
  </div>
</body>
<footer>   
  <div class="footer-img">
    <h6>Tourism Booking is the world leader in online travel</h6>
    <img src="picture\mmu.png" alt="MMU">
  </div>
</footer>
</html>
