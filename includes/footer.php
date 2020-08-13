</div>
		<footer class="row">
			<div class="col-lg-6 footer-left">
				<div class="row">
					<div class="col-lg-5 col-md-4 footer-hours">
						<h4>
							CLUB OPENING HOURS
						</h4>
						<p>
							Mon - Thu: 10am - 4am<br>
							Fri: 10am - 6am<br>
							Sat: 9am-6am<br>
							Sun:9am-4am
						</p>
					</div>
					<div class="col-lg-4 col-md-4 footer-contact">
						<h4>CONTACT US</h4>
						<p>Ph(03)9532 1357<br>1 Station St Highett</p>
					</div>
					<div class="col-lg-3 col-md-4 footer-logo text-left">
						<img src="img/logo-footer.png">
					</div>
				</div>
			</div>
			<div class="col-lg-6 footer-right text-center">
				<div id="bot-menu">
					<ul>
					  	<li>
					     	<a href="">Home &nbsp|</a>
					  	</li>
					  	<li>
					     	<a href="">What's On &nbsp|</a>
					  	</li>
					  	<li>
					     	<a href="">Dining &nbsp|</a>
					  	</li>
					  	<li>
					     	<a href="">Facilites &nbsp|</a>
					  	</li>
					  	<li>
					     	<a href="">Functions &nbsp|</a>
					  	</li>
					  	<li>
					     	<a href="">About Us &nbsp|</a>
					  	</li>
					  	<li>
					     	<a href="">Contact Us</a>
					  	</li>
					</ul>
				</div>
				<div id="bot-menu">
					<ul>
						<li><a href=""><img src="img/fa.png"></a></li>
						<li><a href=""><img src="img/go.png"></a></li>
						<li><p>© 2015 RSL Highett. All rights reserved.   Designed by Easy Peas.</p></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
	<script>
		function myFunction2() {
		  var x = document.getElementById("myTopnav");
		  if (x.className === "topnav") {
		    x.className += " responsive";
		  } else {
		    x.className = "topnav";
		  }
		}
		function myFunction() {
		  	var x = document.getElementById("myLinks");
		  	console.log(x);
		  	if (x.style.display === "block") {
		    	x.style.display = "none";
		  	} else {
		    x.style.display = "block";
		  	}
		}
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
		  	setTimeout(carousel, 6000); 
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>