<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background-image: url(2.jpg);
  background-size: 100% 100%;
}

/* Header/Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: #bc1a3a;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

.navbar a {
  float: left;
  display: block;
  color: #bc1a3a;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}


/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: #bc1a3a;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background:  #bc1a3a;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
}
</style>
</head>
<body>

<div class="header">
  <h2>HOTEL LA REINE</h2>
  <P> MAKING YOUR VISIT <B>MEMORABLE</B></P>
</div>
<div class="navbar">

  <a href="#" >Home</a>
  <a href="about.php">About us</a>
  <a href="gallery.php">Gallery</a>
  <a href="fb.php" class="right">FB/TWITTER</a>
  <a href="reservation.php">Booking</a>
   <a href="contact.php">Contact Us</a>
    <a href="feedback.php">Feedback</a>
 
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>MOST PREFFERED HOTEL IN DELHI/NCR..</h2>
      <h5>Hotel la Reine considers among delhi's topmost 5 star hotels because of our hospitality and services towards our guest.</h5>
      <div class="fakeimg" style="background:url(img/4.jpg) repeat;height:300px;"></div>
      <p>Nestled in greenery in the heart of Delhi, LA REINE – a premier luxury hotel in the capital city of India,<BR> 
	  is acknowledged as the preferred ‘Residence for World Leaders and Global Icons’ for over  years.<BR>
	  The 437 room property encapsulates the luxury hotel experience with exemplary service and warm hospitality<BR>
	  soaked in Indian traditions. LA REINE has ordained industry benchmarks in safety and security;<BR>
	  It offers a wide choice of premium rooms and suites with world renowned restaurants including the iconic Bukhara,banqueting facilities,
	  spa and wellness- terming it under the finest decisions that any explorer would take!</p>
     </div>
    <div class="card">
      <h2>AWARDED AS BEST HOTEL 2019 BY TRAVELLER GOLD AWARD</h2>
      <h5></h5>
      <div class="fakeimg" STYLE="background:url(img/1.jpg) repeat; height:300px;"></div>
      <p></p>
      
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
   <h4>LA REINE'S DUBAI</h4>
  
    <div class="fakeimg" style="background:url(img/db.jpg) no-repeat; height:250px;"></div>
      <p>BEST VIEW WITH RENDERED STAY AND SERVICES.</p>
    </div>

    <div class="card">
      <h3>  OFFERS </h3>
     <ul style="list-style-type:disc;">
  <li>WIFI COVERAGE ALL OVER HOTEL</li>
  <li>LARGE CAFETERIA</li>
  <li>SPECIAL DISCOUNT ON WEEKDAYS FOR FAMILIES</li>
</ul>  

    </div>
    <div class="card">
      <marquee behavior="scroll" direction="left" scrollamount="8">  
	  <h3>BOOOK FOR ANY TYPE OF EVENT & CONFERANCE</h3>
      </marquee>
    </div>
  </div>
</div>

<div class="footer">
  <marquee behavior="scroll" direction="right" scrollamount="12">
  <h2>WEBSITE DEVELOPED BY   <a href="me.php">SHWETA SHARMA</a></h2></marquee>
</div>

</body>
</html>
