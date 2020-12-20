{% load static %}

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script>

		function myFunction() {
		  var x = document.getElementById("demo");
		  if (x.className.indexOf("w3-show") == -1) {
		    x.className += " w3-show";
		  } else { 
		    x.className = x.className.replace(" w3-show", "");
		  }
		}
	</script>
</head>
<body>

<header class=" w3-top">
<button onclick="window.location.href='/code'">Continue</button>
			<div  class="w3-bar w3-blue ">
			  <div class="w3-bar-item"><a class=" w3-button w3-blue w3-xlarge w3-padding w3-animate-right"href="" >PCTECHIE.IN </a>
			  <div class="w3-tiny"> 1-845-213-1523 ||SUPPORT@PCTECHIE.IN </div>
			  </div>

			  <a id= "headbar" href="/do.php" class="w3-bar-item w3-button w3-hover-white w3-right  w3-xlarge w3-mobile w3-animate-left w3-hide-small">Do
			  		<div id="short" class="w3-medium">Services</div>

			  </a>
			  <!--<a href="#" class="w3-bar-item w3-button w3-hover-white w3-right w3-mobile w3-animate-left w3-hide-small">Services</a>-->
			  <a id= "headbar" href="/we.php" class="w3-bar-item w3-button w3-hover-white w3-right w3-xlarge w3-mobile w3-animate-left w3-hide-small">We
			  		<div id="short" class="w3-medium">Team</div>

			  </a>
			  <!--<a href="#" class="w3-bar-item w3-button w3-hover-white w3-right w3-mobile w3-animate-left w3-hide-small">Pricing</a>-->
			  <a  id= "headbar" href="/what" class="w3-bar-item w3-button w3-hover-white w3-right w3-xlarge w3-mobile w3-animate-left w3-hide-small">What
			  		<div id="short" class="w3-medium">About Us</div>

			  </a>

			  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
			</div>

			<div id="demo" class="w3-bar-block w3-blue w3-hide w3-hide-large w3-hide-medium">
<a href="/do.php" class="w3-bar-item w3-hover-white w3-right w3-mobile w3-button">Services</a>
			  <a href="/we.php" class="w3-bar-item w3-hover-white w3-right w3-mobile w3-button">Team</a>
			 <!-- <a href="#" class="w3-bar-item w3-hover-white w3-right w3-mobile w3-button">Customer Reviews</a>
			    <a href="#" class="w3-bar-item w3-hover-white w3-right w3-mobile w3-button">Pricing</a>-->
			  <a href="/what.php" class="w3-bar-item w3-hover-white w3-right w3-mobile w3-button">About Us</a>

			</div>


		</header>

</body>
</html>



<?php if(2>1){ ?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>PCTECHIE</title>

	</head>
<style>


#foot {
	font-size: 12px;
  text-align: center;
  font-family:  Times;
  color: white;
}
#subhead {
	font-size: 14px;
  text-align: center;
  font-family:  Times;
  color: blue;
}

#headbar {
	font-size: 22px;
	
  text-align: Times;
  color: white;
}
#band {
	font-size: 11px;
  text-align: center;
  font-family:  Times;
  color: white;
  

}

#short {font-size: 11px;
      font-family:  Times;

}	
h3 {color:white;font-family: times;}
body { background-color:white;font-family: times;}

html  { background-size: cover;}



</style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<body>

	


<div class="w3-row w3-padding-32 w3-mobile ">
	
	<div class="w3-third w3-panel  w3-container  w3-padding-32">
		
				<img src='{% static "appceo/logo_pctechie.jpg" %}'  class="w3-round-small  " alt="Norway" style="width:100% ">
	</div>
	<div class="w3-twothird w3-content w3-container w3-padding  w3-animate-zoom">
		<!--<img src="logo_pctechie.jpg" class="w3-round-small " alt="Norway" style="width:55% ">-->
		<div class="container w3-row w3-padding">
		<div class="w3-container w3-content w3-center w3-padding"  id="band"><br><br><br><br><br>
		    <!--<h3 class="w3-wide w3-label w3-padding">Who are We?</h3>-->
			<h3 class="w3-justify w3-panel w3-card w3-text-black  w3-padding  w3-xlarge " >PCTECHIE.IN  is  a  Team of certified and experienced   Service Provider Professionals who specialize in Online Repair Support  and Troubleshooting  services  For  all  Brands of  Desktops & Laptops. </h3><hr>
			<marquee  width="100%" behavior="scroll"  class=" w3-text-blue w3-large"  >|| PHONE: USA & CANADA: 1-845-213-1523 || EMAIL : SUPPORT@PCTECHIE.IN ||</marquee>
			
	</div>
	</div>
</div>


<br><br><br>

<div class="w3-container  w3-row   w3-center w3-padding"  id="band">
	    <h3 class="w3-wide w3-third w3-panel   w3-blue w3-animate-zoom w3-center" >Customer Testimonials... </h3>
</div>


	<div class="w3-row w3-display-container w3-padding" id="vid4" style="display:block">
			  				<div class="w3-display-right w3-label w3-amber w3-padding w3-spin"><h3><a href="https://www.youtube.com/channel/UC3rvKDpj4LP4zGppUP77dww/videos">More...</a></h3><br></div>



	  <div class="w3-col w3-container   w3-hover-sepia" style="width:25%">
	  		<div class="w3-card w3-padding">
		  		<header class="w3-padding"><br></header>
		  		<div class="w3-container toggle-content  open"><iframe width="100%" height="40%" src="https://www.youtube.com/embed/JlzZ8njEs5k" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		  		</div>
	  		</div>
	  		<p id="subhead" class="w3-center">Diamond Warranty Customer</p></div>

	  <div class="w3-col w3-container  w3-hover-sepia" style="width:25%">
	  		<div class="w3-card w3-padding">
		  		<header class="w3-padding"><br></header>
		  		<div class="w3-container"><iframe width="100%" height="40%" src="https://www.youtube.com/embed/lZpwf9MUOeE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		  		</div>
	  		</div>
	  		<p  id="subhead" class="w3-center">Platinum Warranty Customer</p></div>

		 <div class="w3-col w3-container  w3-hover-sepia" style="width:25%">
		<div class="w3-card w3-padding">
			<header class="w3-padding"><br></header>
			<div class="w3-container"><iframe width="100%" height="40%" src="https://www.youtube.com/embed/Q6dSdKlH_AY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<p id="subhead" class="w3-center">Platinum Warranty Customer</p></div>

	  <div class="w3-col w3-container " style="width:25%">

	  		<div class="w3-card w3-padding">

		  		<header class="w3-padding"><br></header>
		  		<div class="w3-container"><iframe width="100%" height="40%" src="https://www.youtube.com/embed/HokaTohhwPY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		  		</div>
	  		</div>
	  		<p id="subhead" class="w3-center">Diamond Warranty Customer</p>
	  	</div>

	</div>
	
	<br><br><br>
<footer id="foot">

<div class= "w3-container w3-black w3-padding w3-center">
<p> pctechie.in </p>
<p>Share Us 
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/channel/UC3rvKDpj4LP4zGppUP77dww/videos" class="fa fa-youtube"></a></p>

</footer>
</div>



 

<script>
var x = 0;
function scrolly() {
  document.getElementById("demo").innerHTML = x += 1;
}
</script>


	<script>

		function myFunction() {
		  var x = document.getElementById("demo");
		  if (x.className.indexOf("w3-show") == -1) {
		    x.className += " w3-show";
		  } else { 
		    x.className = x.className.replace(" w3-show", "");
		  }
		}
	</script>

	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  for (i = 0; i < x.length; i++) {
		    x[i].style.display = "none";  
		  }
		  myIndex++;
		  if (myIndex > x.length) {myIndex = 1}    
		  x[myIndex-1].style.display = "block";  
		  setTimeout(carousel, 2000); // Change image every 2 seconds
		}
	</script>

<script>
    
    $(document).ready(function(){
        $(document).scroll(function(){
			$("#vid4").hide(2000);

		})
    })
    
</script>


	</body>
	</html>


	<?php };?>