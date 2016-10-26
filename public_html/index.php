<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Font Awesome -->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css" rel="stylesheet" />

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">

		<!-- Favicon -->
		<link type="image/ico" href="images/coding.jpg" rel="shortcut icon" />

		<!-- Custom CSS Goes HERE -->
		<link rel="stylesheet" href="css/style.css" type="text/css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery - required for Bootstrap Components -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google Recaptcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- ADD YOUR CUSTOM JS FILES HERE -->
<!--		<script src="js/custom.js" type="text/javascript"></script>-->

		<title>Zac Laudick</title>
	</head>
	<body class="sfooter">
		<div class="sfooter-content">

			<!-- begin header -->
			<header>
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<!-- begin navbar -->
							<nav class="navbar navbar-inverse">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#home">Zac Laudick</a>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav navbar-right">
										<li><a href="#home"><i class="fa fa-home"></i></a></li>
										<li><a href="#portfolio">Portfolio</a></li>
										<li><a href="#contact">Contact</a></li>
									</ul>
								</div><!-- /.navbar-collapse -->

							</nav>
						</div>
					</div>
				</div>
			</header>
			<!-- welcome section -->
			<section id="home">
				<div class="container">
					<div class="text-center">
						<h1>Zac Laudick</h1>
						<p class="description">Web Developer</p>
					</div>
				</div>
			</section>

			<!-- portfolio section -->
			<section id="portfolio">
				<div class="container">
					<div class="text-center">
						<h3 id="projects">Recent/Current Projects</h3>
						<div class="projects">
							<div class="col-md-4 col-md-offset-1">
								<div class="thumbnail">
									<img src="images/dev-connect-1.png" alt="DevConnect">
									<div class="caption">
										<h4>Dev Connect</h4>
										<p>DevConnect is a social media platform designed to link non profit organizations and web developers. It's main goal is to provide low cost or free professional websites in exchange for work experience.</p>
										<p><a href="https://dev-connect.net/" target="_blank" class="btn btn-primary" role="button">View</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-2">
								<div class="thumbnail">
									<img src="images/brewhop.png" alt="BrewHop">
									<div class="caption">
										<h4>BrewHop</h4>
										<p>BrewHop is an app designed to connect you with local breweries. The app shows you general information about each brewery and a list of other breweries nearby. I'm planning to add features that allow you to sign up and follow your favorite breweries. The breweries will be able to post news and events to keep you updated on what's happening.</p>
										<p><a href="https://dry-scrubland-13046.herokuapp.com/" target="_blank" class="btn btn-primary" role="button">View</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- contact section -->
			<section id="contact">
				<div class="container">
					<div class="col-md-4">
						<h3>Contact Me</h3>
						<form id="contact-form" action="php/mailer.php" method="POST" novalidate>
							<div class="form-group">
								<label for="name">Name</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="subject">Subject</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-pencil" aria-hidden="true"></i>
									</div>
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
								</div>
							</div>
							<div class="form-group">
								<label for="message">Message</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-comment" aria-hidden="true"></i>
									</div>
									<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
								</div>
							</div>

							<!-- reCAPTCHA -->
							<div class="g-recaptcha" data-sitekey="6LfA-ikTAAAAAPXcaFMUuDP1fFrgExlMhJx0QJAx"></div>

							<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
							<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
						</form>

						<!--empty area for form error/success output-->
						<div class="row">
							<div class="col-xs-12">
								<div id="output-area"></div>
							</div>
						</div>

					</div>
					<div class="text-center col-md-4 col-md-offset-4">
						<p class="links"><a href="https://github.com/zlaudick" target="_blank"><i class="fa fa-github"></i>@zlaudick</a></p>
					</div>
				</div>
			</section>
		</div>
	</body>
</html>