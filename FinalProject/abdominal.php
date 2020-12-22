<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>Children's Health Prediction</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" type="text/css" href="css/fullpage.min.css">

    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/templatemo-style.css">

    <link rel="stylesheet" href="css/responsive.css">

    </head>
    
    <body>
    
	<div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <header id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <a href="#" id="logo" title="Elegance by TemplateMo">
                        Welcome
                    </a>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
								<li data-menuanchor="" class="active"><a href="index.php">Home</a></li>
                                    <li data-menuanchor=""><a href="tips.php">Healthy Tips</a></li>
                                    <li data-menuanchor="slide03"><a href="possible.php">Possible Diseases</a></li>
                                    <li data-menuanchor="slide04"><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <video autoplay muted loop id="myVideo">
          <source src="images/video-bg.mp4" type="video/mp4">
        </video>

        <div id="fullpage" class="fullpage-default">
		
            <div class="section animated-row" data-section="slide01">
                
                    <h3>Abdominal Pain in Children</h3>
					<form action="f-abdominal.php" method="post">
						<h5>Pain is</h5>
						<div class="container">
						  <div class="row">
							<div class="col-sm">
							</div>
							<div class="col-sm">
								<input type="checkbox" name="accomp[]" value="Crampy">
								<label for="male">Crampy</label><br>
								<input type="checkbox" name="accomp[]" value="Dull">
								<label for="female">Dull</label><br>
							</div>
							<div class="col-sm">
								<input type="checkbox" name="accomp[]" value="Extreme">
								<label for="male">Extreme</label><br>
								<input type="checkbox" name="accomp[]" value="Located in lower body">
								<label for="male">Located in lower body</label>
							</div>
							<div class="col-sm">
							</div>
						  </div>
						</div>
						<br>
						<h5>Onset is</h5>
						<div class="container">
						  <div class="row">
							<div class="col-sm">
							</div>
							<div class="col-sm">
								<input type="radio" name="accomp[]" value="Recent (hours to days)">
								<label for="male">Recent (hours to days)</label><br>
							</div>
							<div class="col-sm">
								<input type="radio" name="accomp[]" value="Sudden (minutes to hours)">
								<label for="male">Sudden (minutes to hours)</label>
							</div>
							<div class="col-sm">
							</div>
						  </div>
						</div>
						<h5>Accompanied by</h5>
						<div class="container">
						  <div class="row">
							<div class="col-sm">
							</div>
							<div class="col-sm">
								<input type="checkbox" name="accomp[]" value="Constipation">
								<label for="male">Constipation</label><br>
								<input type="checkbox" name="accomp[]" value="Diarrhea">
								<label for="male">Diarrhea</label><br>
								<input type="checkbox" name="accomp[]" value="Fever">
								<label for="male">Fever</label>
							</div>
							<div class="col-sm">
								<input type="checkbox" name="accomp[]" value="Lump in Abdomen">
								<label for="male">Lump in Abdomen</label><br>
								<input type="checkbox" name="accomp[]" value="Nausea or Vomiting">
								<label for="male">Nausea or Vomiting</label><br>
								<input type="checkbox" name="accomp[]" value="Rash">
								<label for="male">Rash</label><br>
							</div>
							<div class="col-sm">
							</div>
						  </div>
						</div>
						<input type="submit" name="submit" class="btn" value="Submit"><br>
						</form>

						
                
            </div>
		</div>
		
	</div>
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

    <script src="js/fullpage.min.js"></script>

    <script src="js/scrolloverflow.js"></script>

    <script src="js/owl.carousel.min.js"></script>

    <script src="js/jquery.inview.min.js"></script>

    <script src="js/form.js"></script>

    <script src="js/custom.js"></script>



  </body>
</html>