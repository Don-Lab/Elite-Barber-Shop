<DOCTYPE! html>
<head>
	<title>Elite Barber Shop</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="barber.css">
  <link rel="shortcut icon" href="Images/">
</head>
<body>
<!--Name-->
<div class="row">
	<div class="col-12">
    <a name="home"></a>
	<section class="paraMain">
		<div class="row">
				<div class="col-12">
					<div id="nav">
						<ul>
							<li><a href="#home">Home <span class="fa fa-home"></span></a></li>
							<li><a href="#serv">Services <span class="fa fa-list-alt"></span></a></li>
							<li><a href="#loc">Location <span class="fa fa-map-marker"></span></a></li>
							<li><a href="#con">Contact <span class="fa fa-phone"></span></a></li>
							<li class="promo"></li>
						</ul>
					</div>
				</div>
			</div>
		<div class="paraInnerMain">
			<center><img src="Images/Elite Logo1.png" class="logo" alt="Elite Barber Shop Logo"></center>
		</div>
		</div>
	</section>
	</div>
</div>
<!--Reviews-->
<div class="row">
	<div class="col-12">
		<h3 class="title">Reviews</h3>
	</div>
</div>
<div class="row">
	<div class="col-4">
		<div class="rev">
			<div class="star"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
			<p>"Best barber in town!"</p>
			<p class="name"><strong>- Signer</strong></p>
		</div>
	</div>
	
	<div class="col-4">
		<div class="rev">
			<div class="star"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
			<p>"Friendly, skilled, talented!"</p>
			<p class="name"><strong>- Signer</strong></p>
		</div>
	</div>
	
	<div class="col-4">
		<div class="rev">
			<div class="star"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
			<p>"Hands down, best service I ever had!"</p>
			<p class="name"><strong>- Signer</strong></p>
		</div>
	</div>
</div>
<!--Services-->
<div class="row">
	<div class="col-12">
    <a name="serv"></a>
	<section class="paraSer">
		<div class="paraInner">
			<h2><span class="header">Services</span></h2>
		</div>
	</section>
	</div>
</div>
<div class="row">
	<div class="col-12">
		<button class="accordion">Hair Cuts <span class="fa fa-caret-down"></span></button>
			<div class="panel">
				<h3>Hair Cuts</h3>
 				<p>Do you need a trim or want a whole new hairstyle? Come in and let me trim your hair to your specifications!</p>
			</div>

		<button class="accordion">Hot Towel Facial <span class="fa fa-caret-down"></span></button>
			<div class="panel">
				<h3>Facial</h3>
				<p>Are the muscles in you face tense? Is your skin dry? Drive out and let me help your face relax with a hot towel treatment!</p>
			</div>

		<button class="accordion">Shave <span class="fa fa-caret-down"></span></button>
			<div class="panel">
				<h3>Shave</h3>
 				<p>Do you have unruly facial hair? Do you just want something fresh? Sit down and let me mold your mane into the look that suits you!</p>
			</div>
		<button class="accordion">Image Gallery <span class="fa fa-caret-down"></span></button>
			<div class="panel">
				<h3>Image Gallery</h3>
 				<p></p>
			</div>
	</div>
</div>
<!--Location-->	
<div class="row">
	<div class="col-12">
    <a name="loc"></a>
	<section class="paraLoc">
		<div class="paraInner">
			<h2><span class="header">Location</span></h2>
		</div>
	</section>
	</div>
</div>
<div class="row">
	<div class="col-6">
	<div class="textBoxLoc">
		<h3 class="title">Google Maps</h3>
		<div class="mapCon">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3776.247811903637!2d-84.56163158466977!3d38.20968717968249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88423f7484e5bfeb%3A0x539df5e465cd8fed!2s112+E+Main+St%2C+Georgetown%2C+KY+40324!5e1!3m2!1sen!2sus!4v1473444186293" frameborder="0" style="border:0" allowfullscreen class="map"></iframe>

		<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
		</div>
	</div>
	</div>
	<div class="col-6">
		<div class="textBoxLoc">
			<h3 class="title">Street View</h3>
			<center><img src="Images/streetview.jpg" class="street" alt="Street View"></center>
		</div>
	</div>
</div>
<!--Contact-->
<div class="row">
	<div class="col-12">
    <a name="con"></a>
	<section class="paraCon">
		<div class="paraInner">
			<h2><span class="header">Contact</span></h2>
		</div>
	</section>
	</div>
</div>
<div class="row">
	<div class="col-6">
		<div class="textBoxCon">
			<h3 class="title">Hours of Operation</h3>
			<div id="times">
			<ul>
				<li>Tuesday-Wedsnesday: 9:00 A.M. - 5:00 P.M.</li>
				<li>Thursday-Friday: 9:00 A.M. - 6:00 P.M.</li>
				<li>Saturday: 9:00 A.M. - 3:00 P.M.</li>
				<li>Sunday-Monday: Closed</li>
			</ul>
			</div>
		</div>
	</div>
	<div class="col-6">
		<div class="textBoxCon">
		<h3 class="title">Contact</h3>
			<div id="times">
			<ul>
				<li><span class="fa fa-user"></span> Person</li>
				<li><span class="fa fa-phone"></span> Phone Number</li>
				<li><span class="fa fa-envelope"></span> Email</li>
				<li><span class="fa fa-map"></span> Street Address<br /> City, State AreaCode</li>
			</ul>
		</div>
	</div>
</div>
</div>
<div class="row">
	<div class="col-6">
		<div class="textBoxCon">
			<h3 class="title">Social Media</h3>
			<div id="timesSoc">
			<ul>
				<li><a href="https://www.facebook.com/Elite-Barber-Shop-1690990447846266/info"><span class="fa fa-facebook-square fa-5x"></span></a></li>
				<li><a href="https://twitter.com/TheBarberRome?lang=en"><span class="fa fa-twitter-square fa-5x"></span></a></li>
			</ul>
			</div>
		</div>
	</div>
	<div class="col-6">
		<div class="textBoxCon">
			<h3 class="title">Email Person!</h3>
			<div class="panelF">
			<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<center><span class="label">Name:</span> <input class="input" name="name"></center>
				<br />
				<center><span class="label">Email:</span> <input class="input" name="email"></center>
				<br />
				<center><span class="label">Subject:</span> <input class="input" name="sub"></center>
				<br />
				<center><span class="label">Content:</span> 
				<br />
				<textarea class="inputText" name="text"></textarea></center>
				<br />
				<center><input type="submit" class="button"></center>
			</form>
			</div>
		</div>
	</div>
</div>

<!--footer-->	
<div class="footer">
	<div class="row">
    	<div class="col-12">
            <div id="footNav">
            	<center><ul>
                	<li><a href="#home">Home</a></li>
					<li><a href="#serv">Services</a></li>
					<li><a href="#loc">Location</a></li>
					<li><a href="#con">Contact</a></li>
                </ul></center>
            </div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<h4 class="titleFoot">&copy;<span id="year"></span> FCCTC/Stilio Development</h4>
        </div>
		<div class="col-12">
			<h5 class="titleFootPromo">Promo Code: #StraightRazor</h5>
    </div>
</div>

<script src="barber.js"></script>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = test_input($_POST["name"]);
		$email = test_input($_POST["email"]);
		$sub = test_input($_POST["sub"]);
		$text = test_input($_POST["text"]);
	}
	function test_input($data) {
		$data = htmlspecialchars($data);
		$data = trim($data);
		$data = stripslashes($data);
		return $data;
	}
	
	if ($sub == "" || $sub == null) {
		return false;
	}
	if ($text == "" || $text == null) {
		return false;
	}
	if ($email == "" || $email == null) {
		return false;
	}
	
	mail("email@web.com", $sub, $text, "From: ". $email);
?>
</body>
</html>