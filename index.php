<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>Welcome to Duke-Rent-a-Car!</title>
		<meta name="description" content="Best place in the New York tri-state area to rent a car!">
		<meta name="author" content="Johannes Corp.">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="icon" href="/favicon.ico?" type="image/x-icon">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		
		<!--Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300|Khula:300|Open+Sans:300" rel="stylesheet"> 
			
		<!--Include pre-requisites-->
		<link href="public/css/main.css" rel="stylesheet">
		<link href="public/css/bootstrap.css" rel="stylesheet">
		<link href="public/css/carousel.css" rel="stylesheet">
		
		<!--DateTimePicker JS includes-->
  		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
  		<script type="text/javascript" src="bower_components/moment/min/moment.min.js"></script>
  		<script type="text/javascript" src="bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

		
	</head>

	<body>
    <div class="navbar-wrapper">	
      <div class="container">
        <nav class="navbar navbar2 navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <!--span class="icon-bar"></span-->
              </button>
              <a class="navbar-brand" href="#">
              	<img src="public/img/logo.png" />
              </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav duke-menu-font">
                <li><a href="#">Cars</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                 <li><a href="https://tumblr.com" target="_blank">Blog</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    <div class="secondNav">	
      <div class="container">
       	<p class="sub-menu-font visible-lg visible-md visible-sm">We have the finest cars in New York. Reserve your car online right now!</p>   
       	<p class="sub-menu-font visible-xs">Reserve your car online right now!</p>   
		<div class="dropdown sign-in-pos">
		  <button class="btn my-btn sign-in-look dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		    Sign-In
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu my-dropdown dropdown-menu-right" aria-labelledby="dropdownMenu1">
		    <li><a href="#">Sign-In</a></li>
		    <li><a href="#">History</a></li>
		    <li><a href="#">Settings</a></li>
		  </ul>
		</div>
      </div>
      </div>
    </div>

<div class="container">    
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!--Car selector and calculator-->
	<div class="car-box">
		<div class="car-selector">
		<form method="get" action="public/cars.php">
		  <div class="sel-container">
			<h5><b>Choose Your Car Type</b></h5>
			  <select class="selectpicker" form="cars">
			    <option value="all">All Vehicles</option>
			    <option value="luxury">Luxury Vehicles</option>
			    <option value="small-to-full">Small to Full Size</option>
			    <option value="suvs-and-wagons">SUVs and Wagons</option>
			    <option value="trucks-and-vans">Trucks and Vans</option>
			  </select>
		  </div>
<hr />
		<div class="sel-container2">
			<h5><b>Pickup Location</b></h5>
					<select class="selectpicker" data-width="100%" name="pickup-location">
						<option value="Bronx">Quality Rent a Car (Bronx, NY)</option>
						<option value="Philadelphia">Quality Rent a Car (Philadelphia, PA)</option>
						<option value="JFK">JFK Airport</option>
						<option value="La-Guardia">La Guardia Airport</option>
					</select>
				</div>
<hr />
	<div class="sel-container2">
	<h5><b>Pickup Date and Time</b></h5>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" name="pickup-date"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
        </div>
    </div>
	</div>
	<div class="sel-container2">
	<h5><b>Drop-off Date and Time</b></h5>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' class="form-control" name="dropoff-date"/>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>  
        </div>
    </div>
	</div>

<hr />

		<div class="sel-container3">
			<h5><b>What's Your Age?</b></h5>
					<select class="selectpicker" data-width="100%" name="age">
						<option value="22:00">70+</option>
						<option value="51">51-69</option>
						<option value="35">35-50</option>
						<option value="18">18-34</option>
						<option value="17">Under 18</option>
					</select>
		</div>
			<button type="submit" class="btn btn-danger btn-lg">Reserve</button>
		</form>   
		</div>
</div><!--end car-box-->

		
		
		
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      
       <!--wrapper for the slides-->
      <div class="carousel-inner visible-lg visible-md visible-sm" role="listbox">
        <div class="item active">
          <!--img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide"-->
	          <img src="public/img/smaller_nyc.jpg" alt="New York">
          <div class="container">
            <div class="carousel-caption">
              <h1>Get around New York</h1>
              <p>With Duke-Rent-a-Car you can get around the Big Apple in fine style.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="public/img/philly.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>We also serve Philadelphia</h1>
              <p>Rent heavy duty vehicles from our office in the city of brotherly love.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="public/img/Cars/cars-cadillac-srx-22228.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>We have the car for you</h1>
              <p>There is a wide variety of cars for you to choose from</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Our cars</a></p>
            </div>
          </div>
        </div>
      </div>
      <!--controls for next snd prev buttons-->
      <!--a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a-->
    </div><!-- /.carousel -->
   </div><!--end of container-->

    

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

          <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Coming in from the airport? <span class="text-muted">Don't worry, we'll pick you up.</span></h2>
          <p class="lead">We weren't kidding when we said we have excellent service. Our staff will pick you up from the airport and bring you to one of our locations.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="public/img/airport-pic.jpg" alt="man airport plane">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">We have the best cars in the biz. <span class="text-muted">It's time to treat yourself.</span></h2>
          <p class="lead">For those who want to ride in style, we have plenty luxurious vehicles for you to choose from.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" src="public/img/Cars/ford_flex.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">We take major credit cards. <span class="text-muted">And Cash!</span></h2>
          <p class="lead">We also make payment easy as we accept Mastercard, Visa and Discover. If you're using cash, all we'll need is an ID and your last bill or payslip.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="public/img/credit-cards19.jpg" alt="Generic placeholder image">
        </div>
      </div>
		<hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->
  	<!-- Three columns of text below the carousel -->
    <div class="lastSec"> 
    	<div class="final-sell">
    		<h1>Why Choose <span class="abba">Duke-Rent-a-Car</span>?</h1>
    	</div>
	<div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="public/img/Document.png" alt="Generic placeholder image" width="140" height="140">
          <h3>Introducing rent-to-pay</h3>
          <p></p>
          <!--p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p-->
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="public/img/Gift.png" alt="Generic placeholder image" width="140" height="140">
          <h3>10% off for first time renters</h3>
          <p></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="public/img/Thumb_Up.png" alt="Generic placeholder image" width="140" height="140">
          <h3>Underage rental is welcome</h3>
          <p></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
	 </div><!-- last section -->

    </div><!-- /.container -->
   
   <!-- FOOTER -->
      <footer class="foots footer">
      	<div class="container">
        	<p class="pull-right"><a href="#">Back to top</a></p>
        	<p>&copy; 2016 DUKERENTACAR, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      		<span class="glyphicon glyphicon"></span>
      	</div>
      </footer>
      
		<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="public/js/bootstrap.js"></script>
	   	<script src="public/js/zabuto.js"></script>
	   	
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/i18n/defaults-*.min.js"></script>

    	<!-- Include Date Range Picker -->
		<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
	</body>
</html>