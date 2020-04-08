
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/pokemon.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Titan+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  

  <title>Navbar</title>

 <style type="text/css">
   
.wrapper {font-family: Verdana, sans-serif;
background-image: url('bg.jpg');
background-repeat:no-repeat;
background-position:fixed;
background-size:cover;
color:white;
height: 600px;
}
#sign, #log{
  font-family: 'Lobster', cursive;
}

/* Slideshow container */


/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
 
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}
.stat{
  background-color: #222222;
  color: white;
  width: 100%;
  height: 400px;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  
  color: white;
}
h1{
  color: black;
  font-family: 'Titan One', cursive;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}
.my{
  text-align: center;
  font-family: 'Rubik', sans-serif;
}
 </style>


  

</head>

<body>
   
  
<div class="wrapper">
            <nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="fa fa-university" aria-hidden="true"></i>Bank Card</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">About</a></li>
      
        <li><a href="logins.php">Admin</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="signup.php" id="sign">Sign Up</a></li>
            
            
            <li role="separator" class="divider"></li>
            <li class="dropdown-header"></li>
            <li><a href="index.php" id="log">Log In</a></li>
            
          </ul>
        </li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i>Call Now</a></li>
        
      </ul>
    </div>
  </div>

</nav>
<marquee>
<h2>We'll be Seeing YOU soon!</h2></marquee>


     
  
   

<div class="bg">
<div class="slideshow-container">

<div class="mySlides">
  <h1>SEC_RITY is not complete without U!</h1>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Impedit corporis debitis deleniti exercitationem sint.</p>
  <button id="login" type="button" class="btn btn-default">Know More</button>
</div>
<div class="mySlides">

  <h1>Don’t let your trash become someone else’s treasure. Feed your shredder often.</h1>
  
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Impedit corporis debitis deleniti exercitationem sint.</p>
  <button id="login" type="button" class="btn btn-default">Know More</button>
</div>

<div class="mySlides">
  <h1>Think before you click.</h1>
  <h2></h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Impedit corporis debitis deleniti exercitationem sint.</p>
  <button id="login" type="button" class="btn btn-default">Know More</button>
</div>

<div class="mySlides">
  <h1>SEC_RITY is not complete without U!</h1>
  <h2>Cash Managements</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> Impedit corporis debitis deleniti exercitationem sint.</p>
  <button id="login" type="button" class="btn btn-default">Know More</button>
</div>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
      </div>
</div>


<div class="row">
  <div class="col-md-4 my"><img src="stat.png" height="200px">
    <h3 class="my">Statistics</h3>
    <p>Statistics plays an important role in banking. Banks make use of statistics for a number of purposes. They work on the principle that everyone who deposits their money with the banks does not withdraw it at the same time.</p>
  </div>
  <div class="col-md-4 my"><img src="stat1.jpg" height="200px">
  <h3 class="my">Security</h3>
<p>Securities include bonds, debentures, notes, options, shares, and warrants but not insurance policies, and may be traded in financial markets such as stock exchanges.</p></div>
  <div class="col-md-4 my"><img src="stat2.jpg" height="200px">
  <h3 class="my">Presentation</h3>
<p>Functions of Commercial Banks: - Primary functions include accepting deposits, granting loans, advances, cash, credit, overdraft and discounting of bills.</p></div>
</div>


<div class="stat">
  <div class="head"><h1>MAKE YOUR DREAMS COME TRUE</h1></div>
  <div class="content">
    <div class="col-md-5">
      <h2>A worker once left her ID<br>
Unattended, where all could see.<br>
It disappeared that day.<br>
And we’re sorry to say<br>
So did the company’s IP.</h2></div>
<div class="col-md-7"><img src="bgg.jpg" height="300px"></div>
  </div>
</div>
  

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!-- <script>
  </script> -->

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


</script>

</body>

</html>
