<!DOCTYPE html>
<html>
<head> 
<title>totour.com/kanger</title>
	<img src="logo.png" width="100" height="100" style="background-color:red;">

<style>
     ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: Lightgreen;
}

li {
  float: left;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

li a:hover {
  background-color: Skyblue;
}
</style>




<style>
	.navbar{
	    font-size: 30px;
	    line-height: 30px;
	    margin-left: 0px;
	    color: #333;
	    text-transform: uppercase;
	    font-family: 'Bree Serif', serif;
	    text-align: center;
	}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}


.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}


@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>  


<style>
	.textcontainer {
	  width: 100%;
	  height: 100vh;
	  display: flex;
	  flex-direction: column;
	  justify-content: center;
	  align-items: center;
	  background-color: #111;
	}

	h1 {
	  font-size: 120px;
	  text-transform: uppercase;
	  font-family: 'Gambetta', serif;
	  letter-spacing: -3px;
	  transition: 700ms ease;
	  font-variation-settings: "wght" 311;
	  margin-bottom: 0.8rem;
	  color: PaleGoldenRod;
	  outline: none;
	  text-align: center;
	  background-color: #111;
	}
	
	h4 {
	  font-size: 60px;
	  font-family: 'Gambetta', serif;
	  letter-spacing: -3px;
	  transition: 700ms ease;
	  font-variation-settings: "wght" 311;
	  margin-bottom: 0.8rem;
	  color: PaleGoldenRod;
	  outline: none;
	  text-align: center;
	  background-color: #111;
	}

	h1:hover {
	  font-variation-settings: "wght" 582; 
	  letter-spacing: 1px;
	  background-color: #111;
	}

	p {
	  font-size: 1.2em;
	  line-height: 150%;
	  text-align: center;
	  color: MintCream;
	  letter-spacing: .5px;
	  background-color: #111;
	}
</style>

<ul>
   <li><a href="homepage.html">Home</a></li>
  </ul>
  <br>


</head>
<body>
	<div class="textcontainer">
  <h1>KANGER VALLEY NATIONAL PARK</h1>
  <p>
  Kanger Valley National Park in the Bastar region of Chhattisgarh is one of the most beautiful and densest national parks, well known for its biodiversity with picturesque landscape, magnificent waterfalls, very famous subterranean geomorphologic limestone caves, home for the Bastar Hill myna, the state bird of Chhattisgarh.
   </p>
</div>
<p>Have a look at some of the pictures.......</p>
	
	
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="kanger1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="kanger4.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="kanger2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="kanger3.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="kanger5.webp" style="width:100%">
</div>

</div>	
	  <br>
<br>  
     <div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>	
 <br>
<br>

<hr>
<?php
	$file=fopen("Kreview.txt","r");
	$line=fgets($file);
        $y=explode(" ",$line);
        echo"This destination has recieved $y[1] reviews and its overall rating is $y[0] stars."
?>
<hr>
<br>

<footer>
   <ul>
   <li><a href="feedback.html">Rate this Destination</a></li>
  </ul>
</footer>
</body>
</html>
