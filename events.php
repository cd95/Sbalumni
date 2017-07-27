<html>
<head>
<title>EVENTS</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
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
  background-image: url("par1.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("par2.jpg");
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
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}
#p1{
	text-align: center;
	padding-top: 20px;
	color: #ffffff;
	font-family: Montserrat, sans-serif;
	font-size: 25px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
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
 #h31{
 	text-align: center;
 	font-family: Montserrat, sans-serif;
	font-size: 15px;

 }
 #p2{
 	text-align: center;
 	font-family: Montserrat, sans-serif;
	font-size: 35px;
 }
  .s1{
  	padding-bottom:40px;
  }

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
	<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="s1 navbar-brand" href="home.php"><img src="logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="home.php">HOME</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="gallery.php">GALLERY</a></li>
        <li><a href="events.php">EVENTS</a></li>
        <li><a href="contact.php">CONTACT</a></li>
        
      </ul>
    </div>
  </div>
</nav>
<a href="vipralapta/home.php"><div class="bgimg-1">
  <div class="caption">
   <span class="border">VIPRALAPTA</span>
   <p id="p1">The School level debate competition</p>
  </div>
</div></a>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 id="h31">VIPRALAPTA DATE</h3>
  <p id="p2">30th June,2017 (Saturday)</p>
</div>

<a href="anubhab/home.php"><div class="bgimg-2">
  <div class="caption">
   <span class="border">ANUBHAB</span>
   <p id="p1">An evening with Maroons & Whites</p>
  </div>
</div></a>
<div style="position:relative;">
  <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <p id="demo"></p>
<h3 id="h31">ANUBHAB DATE</h3>
<p id="p2">2nd July,2017 (Sunday)</p>
</div>
</div>


<a href="blooddonation/home.php"><div class="bgimg-3">
  <div class="caption">
    <span class="border">BLOOD DONATION CAMP</span>
   <p id="p1">Because every drop counts!</p>
  </div>
</div></a>

<div style="position:relative;">
  <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <p id="demo"></p>
<h3 id="h31">BLOOD DONATION CAMP DATE</h3>
<p id="p2">11th June,2017 (Sunday)</p>
</div>
</div>

<div class="bgimg-4">
  <div class="caption">
    <span class="border">LET'S MAKE THESE EVENTS A GRAND SUCCESS!</span>
  </div>
</div>
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

</body>

</html>