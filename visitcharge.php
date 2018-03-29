
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
	<script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
</head>

<body onload="submitPayuForm()">

	<?php include 'nav1.php';?>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l5">
				<div class="card cyan darken-2">
					<div class="card-content white-text" style="border:2px solid black;">
						<span class="card-title black-text"><h3><b>Your Nearest Dealer</b></h3></span>
						<h3 style="color:white;"><b>Maharastra</b></h3>
						<p >
							70-72, Punjani Industrial Estate,<br/>
							Khopat, Thane(W) - 400601,<br/>
							Maharashtra, India<br/>

							<a href="mailto:vivekananda@vmechatronics.com" style="color:blue;">sales@vmechatronics.com</a><br/>
							<br/>
							Contact Person : Mr. Bharat Gupta

						</p>
					</div>

				</div>
			</div>
			<div class="col s12 m6 l4">
				<div class="row">
					<div class="col s12 m6 l12">
						<div class="card cyan darken-2" style="height:180px;border:2px solid black;">
							<div class="card-content white-text">
								<span class="card-title black-text"><h3><b>Visit Charge</b></h3></span>
								<h4><b>&#8377;1000/-</b></h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col s12 m6 l12">
						<div class="card   " style="height:180px;background-color:#0097a7;border:2px solid black;">
							<div class="card-content white-text">
								<br/>
								<center><a class="waves-effect waves-light btn-large black-text white hoverable flow-text" style="border:2px solid black;z-index:1006;font-size:1rem;"><i class="small material-icons  right" style="font-size:3rem;">local_shipping</i>Request Visit</a></center>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l3">
				<div class="card cyan darken-2" style="height:403px;border:2px solid black;">
					<div class="card-content white-text"><br/>
						<span class="card-title black-text"><h3><b>Choose us & your site visit charges will be refunded.</b></h3></span>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>