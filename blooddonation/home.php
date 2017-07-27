<html><head>
<title>HOME</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
  <style>
   body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4{
  position: relative;
  opacity: 1.65;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("image1.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("02.jpg");
  min-height: 100%;
}

.bgimg-3 {
  background-image: url("par3.jpg");
  min-height: 100%;
}
.bgimg-4 {
  background-image: url("par4.jpg");
  min-height: 200px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}
 #demo{
  text-align: center;
  font-size: 60px;
}
.caption span.border {
  background-color: #C6FF00;
  color: black;
  padding: 18px;
  font-size: 55px;
  letter-spacing: 10px;
}
#p1{
	text-align: center;
	padding-top: 20px;
	color: #ffffff;
	font-family: Montserrat, sans-serif;
	font-size: 35px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}.navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #C6FF00;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: black !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
   #demo{
  text-align: center;
  font-size: 60px;
  color: #FF8F00;
}
 #h31{
 	text-align: center;
 	font-family: Montserrat, sans-serif;
	font-size: 30px;

 }
 #h32{
 	text-align: center;
 	font-family: Montserrat, sans-serif;
	font-size: 30px;
	color: white;

 }
 #p3{
 	text-align: center;
 	color: black;
 	font-family: sans-serif;
 	font-size: 30px;
 }
 #p8{
 	color: white;
 	font-family:sans-serif;
 	font-size: 20px;
 }
 footer {
      background-color: #C6FF00;
      color: black;
      padding: 32px;
  }
  footer a {
      color: #2d2d30;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  } 
  #pf{
  	color: black;
  }
  .i1{
    width: 100%;
  }
  #b1{
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
  horizontal-align:50px;


  }
</style></head>
<body  id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand s1" href="../home.php"><img src="logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="donor.php">BE A DONOR</a></li>
        
        <li><a href="../contact.php">CONTACT</a></li>
        
      </ul>
    </div>
  </div>
</nav>
<div class="bgimg-1">
  <div class="caption">
   <span class="border">BLOOD DONATION CAMP</span>
   <p id="p1">Because every drop counts</p>
  </div>
</div>
<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 id="h31">TICK TOCK! TICK TOCK! TICK TOCK!</h3>
  <p id="demo"></p>
  <script>
// Set the date we're counting down to
var countDownDate = new Date("Jun 11, 2017 10:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
<p id="p3">VENUE:Red Cross Society Hall</p>
<p id="p3">TIME:10a.m.</p>
</div>
<div class="bgimg-2">
  <div class="caption">
   
  </div>
</div>
<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 id="h31">BE A DONOR</h3>
  <p id="p3">Register and donate blood!</p>
  </div>
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p id="pf">Copyright:Shishu Bihar Alumni Association</p> 
</footer>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
</body></html>