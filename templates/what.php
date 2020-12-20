<!DOCTYPE html>
<html>
<head>
	<title>About PCTECHIE</title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
#short {font-size: 11px}	
p{color: black}
h3 {color:black;font-family: times;}
body { background-color:black;font-family: times;}
html  { background-size: cover;}

#medbig {
	font-size: 35px;
  color: blue;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body style="background-color:aliceblue">
<div>

<!--HEADERS -->
<header class="w3-hover-greyscale w3-top">

			<div  class="w3-bar w3-blue ">
			  <a href="/pctechie.php" class="w3-bar-item w3-button w3-padding w3-animate-right">My-PC-TECHIE</a>

			  <a id= "headbar" href="#" class="w3-bar-item w3-button w3-hover-white w3-right w3-mobile w3-animate-left w3-hide-small">Do
			  		<div id="short">Services</div>

			  </a>
			  <!--<a href="#" class="w3-bar-item w3-button w3-hover-white w3-right w3-mobile w3-animate-left w3-hide-small">Services</a>-->
			  <a id= "headbar" href="#" class="w3-bar-item w3-button w3-hover-white w3-right w3-mobile w3-animate-left w3-hide-small">We
			  		<div id="short">Team</div>

			  </a>
			  <!--<a href="#" class="w3-bar-item w3-button w3-hover-white w3-right w3-mobile w3-animate-left w3-hide-small">Pricing</a>-->
			  <a  id= "headbar" href="/what.php" class="w3-bar-item w3-button w3-hover-white w3-right w3-mobile w3-animate-left w3-hide-small">What
			  		<div id="short">About Us</div>

			  </a>

			  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="myFunction()">&#9776;</a>
			</div>

		<div id="demo" class="w3-bar-block w3-blue w3-hide w3-hide-large w3-hide-medium">
			<a href="#" class="w3-bar-item w3-hover-white w3-right w3-mobile w3-button">Services</a>
			<a href="#" class="w3-bar-item w3-hover-white w3-right w3-mobile w3-button">Team</a>
			 <!-- <a href="#" class="w3-bar-item w3-hover-white w3-right w3-mobile w3-button">Customer Reviews</a>
			    <a href="#" class="w3-bar-item w3-hover-white w3-right w3-mobile w3-button">Pricing</a>-->
			<a href="/what.php" class="w3-bar-item w3-hover-white w3-right w3-mobile w3-button">About Us</a>

		</div>
</header>

<!--HEADERS CLSOED-->

<?php require 'navigation_pctechie.php'; ?>
</div><br><br>
<!-- SIDEBAR -->
<!--
<div class="w3-sidebar w3-bar-block w3-blue w3-xxlarge" style="width:70px">
  <a href="/pctechie.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a> 
  <a href="what.php" class="w3-bar-item w3-button"><i class="fa fa-vcard-o"></i></a> 
  <a href="/we.php" class="w3-bar-item w3-button"><i class="fa fa-group"></i></a> 
  <a href="/do.php" class="w3-bar-item w3-button"><i class="fa fa-wrench"></i></a> 
  <a href="/contactus_pctechie.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a> 
</div>
-->
<!-- SIDEBAR CLOSING -->

<!--CONTENT-->
<div class="w3-row ">
	<div class="w3-half w3-center"  ><br><br><br><br><br><br><br><br><br><br><span id="medbig" style="display:none;">What</span>
	<i id="short" style="display:block;">&nbsp&nbsp is pctechie?</i>

	</div><br><br>
	<div class=" w3-panel  w3-leftbar w3-border-blue w3-half">
		
			<p class="a0" style="display:none;">PCTECHIE.IN  is  a  Team of certified and experienced   Computer Professionals specializing in 
			Online Troubleshooting and Repairs For  all  Brands of  Desktops & Laptops  .</p>
			<p class="a1"style="display:none;">We Use Latest State of The Art Web Based Tools which allow Remote Access of The Laptops & Desktops Giving You The Comfort and Transparency of Service In Your Home and Office
			Without Taking The system to a Repair shop . </p>
			<p class="a2"style="display:none;">From Complex Trouble shooting Issues Namely Windows Installation, Blue and Black Screen Repair to Not So Complex Issues Like Clean Up and Tune Up , The Tech Supporter Team which has a Combined Experience of More Than 50 Years Is Successfully Delivering Results in a Challenging environment.</p>
			<p class="a3"style="display:none;">PCTECHIE.IN Team Currently Provides Online and Real Time   Software and Technical Support  Service to Residential Customers and Sole Proprietors in United States , Canada  ,United Kingdom & Mexico  .</p>

			<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-blue">Our Business Model</button>			
			 <div id="id01" class="w3-modal">
			    <div class="w3-modal-content w3-card-4">
			      <header class="w3-container w3-blue"> 
			        <span onclick="document.getElementById('id01').style.display='none'" 
			        class="w3-button w3-display-topright">&times;</span>
			        <h2> A Satisfied Customer is the Best Advertisement </h2>
			      </header>
			      <div class="w3-container w3-black">
			        <p>Our Business Model Works on The S.T.E.P   Philosophy</p>

                     S- Security <br>
                     T- Transparency <br>
                     E- Ease of access and Doing Business<br>
                     P-privacy <br>


				<p>You Can Call us or write To us for Your Computer Related Needs and the Technical al Team
				Will Respond within Business Hours At the Earliest.</p>
			        
			      </div>
			      <footer class="w3-container w3-blue">
			        <p>
				support@pctechie.in <br>
				1-845-213-1523</p>
			      </footer>
			    </div>
                     



		

	</div>

	</div>

<script>

$(document).ready(function(){
    $("#medbig").fadeIn(4000);

})

        $("p.a0").fadeIn(2000, function(){
            $("p.a1").fadeIn(2000, function(){
                $("p.a2").fadeIn(2000, function(){
                    $("p.a3").fadeIn(2000);
                })
            })
        })




</script>


</body>
</html>