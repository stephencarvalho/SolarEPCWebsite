<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<title>Robotics | Industrial Automation | Renewable Energy</title>
<head>
	<!-- set the title of you site -->
	<title>Vision Mechatronics</title>
	<!-- encoding -->
	<meta charset="utf-8">
	<!-- responsiveness, scaling... -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<!-- set the descritpion of you site -->
	<meta name="description" content="Vision Mechatronics operates in segments like research and development of Robotics, Industrial Automation and Renewable Energy. Our mission is to provide our customers with complete tailor made solutions that are customized to their specific needs and requirements.">
	<!-- set author of your site -->
	<meta name="author" content="Kadbros Solutions LLP">
	<!-- IE compatibility modes -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<!-- custom styling -->
	<link href="css/style.css" rel="stylesheet">
	<!-- iconic font - FontAwesome -->
	<!-- Google font -->
	<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
	<!-- site thumbnail -->
	<link rel="image_src" href="thumbnail.png" />
	<!-- favicon -->
	<link rel="icon" type="image/ico" href="favicon.ico">
	<!--Import Google Icon Font-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>

</head>

<body>
<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"></script>

	<?php include 'nav1.php';

	$_SESSION['distance'] = 100;
	?>
	<div class="container">
		<form action="PayUMoney_form.php" method="post">
			<div class="card" style="padding:20px;border:1px dashed #0097a7;">
				<center><h1><b>Find out your site visit charge?</b></h1></center>
				<div class="row">

					<div class="input-field col s12 m5 l5 offset-l3">
						<i class="material-icons prefix">account_circle</i>
						<input id="name" type="text" name="name"   />
						<label for="name">Name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m5 l5 offset-l3">
						<i class="material-icons prefix">location_on</i>
						<input id="address" type="text" name="address"   />
						<label for="address">Address</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m5 l5 offset-l3 offset-m1">
						<select>
							<option value="Mahrashtra">Mahrashtra</option>
							<option value="Delhi">Delhi</option>
							<option value="Madhya Pradesh">Madhya Pradesh</option>
							<option value="Odisha">Odisha</option>
							<option value="Tamil Nadu">Tamil Nadu</option>
							<label>asdf</label>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 l5 offset-l3 m5">
						<i class="material-icons prefix">fiber_pin</i>
						<input id="pincode" type="text" name="pincode"  />
						<label for="pincode">Pincode</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 l5 offset-l3 m5">
						<i class="material-icons prefix">fiber_pin</i>
						<input id="pincode" type="text" name="pincode"  />
						<label for="pincode">Pincode</label>
					</div>
				</div>
				<center><input type="submit" name=""></center>
			</div>
		</form>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$('select').material_select();
		});
	</script>
</body>
</html>