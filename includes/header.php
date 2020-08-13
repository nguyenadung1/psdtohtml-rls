<?php 
	define("url", "img/") ;
	define("home","http://localhost/dungbootstrap/")

?>
<!DOCTYPE html>
<html>
<head>
	<title>RSL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="text/css" href="img/icon.png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<header class="row">
			<div class="col-lg-3">
			</div>
			<div class="col-lg-6 text-center logo-header">
				<a href=""><img src="img/lgt.png"></a>
			</div>
			<div class="col-lg-3 text-right contact-top">
				<b>PH (03) 9532 1357</b>
				<p>1 STATION ST HIGHETT VIC</p>
			</div>
		</header>
		<div id="main">
			<nav class="navbar navbar-expand-lg navbar-light">
		  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    		<span class="navbar-toggler-icon"></span>
		  		</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
			    	<ul class="nav flex-column flex-lg-row">
						<li class="nav-item"><a href="<?php echo home ?>" class="nav-link">&nbsp;</a></li>
						<li class="nav-item"><a href="" class="nav-link">ABOUT US</a></li>
						<li class="nav-item"><a href="" class="nav-link">MEMBERSHIP</a></li>
						<li class="nav-item"><a href="" class="nav-link">RESTAURANT</a></li>
						<li class="nav-item"><a href="" class="nav-link">SPORT&GAMING</a></li>
						<li class="nav-item"><a href="" class="nav-link">GALLERY</a></li>
						<li class="nav-item"><a href="" class="nav-link">CONTACT</a></li>
						<li class="nav-item">
							<form class="align-items-center d-flex flex-column justify-content-center h-100">
								<input type="text" name="search">
							</form>
						</li>
					</ul>
			  	</div>
			</nav>

			<!-- <nav>
				<ul class="nav">
					<li class="nav-item"><a href="#" class="nav-link">&nbsp;</a></li>
					<li class="nav-item"><a href="" class="nav-link">ABOUT US</a></li>
					<li class="nav-item"><a href="" class="nav-link">MEMBERSHIP</a></li>
					<li class="nav-item"><a href="" class="nav-link">RESTAURANT</a></li>
					<li class="nav-item"><a href="" class="nav-link">SPORT&GAMING</a></li>
					<li class="nav-item"><a href="" class="nav-link">GALLERY</a></li>
					<li class="nav-item"><a href="" class="nav-link">CONTACT</a></li>
					<li class="nav-item"><a href="" class="search nav-link">&nbsp;</a></li>
				</ul>
			</nav> -->
			<!-- <div class="mobile-nav">
				<a href="javascript:void(0);" class="mobile-menu" onclick="myFunction()">
			        MENU
			    </a>
			    <ul id="myLinks">
			        <li><a href="">HOME</a></li>
					<li><a href="">ABOUT US</a></li>
					<li><a href="">MEMBERSHIP</a></li>
					<li><a href="">RESTAURANT</a></li>
					<li><a href="">SPORT&GAMING</a></li>
					<li><a href="">GALLERY</a></li>
					<li><a href="">CONTACT</a></li>
					<li><a href="" class="border-none">SEARCH</a></li>
			    </ul>
			</div> -->