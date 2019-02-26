<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="stylesheet" href="styles.css" type="text/css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />

		<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

		<!-- Fancy Box Links-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>


		<title>All in Good Taste</title>
	</head>
	<body>
		<!--Header-------------------------------------------------->
		<header class="container-fluid">
			<div class="row">
				<div class="col"></div>
					<div class="col logo">
						<img class="img-fluid fake-logo" src="fake-logo.png" alt="main page graphic">
					</div>
				<div class="col"></div>
			</div>
		</header>

		<!--Navigation-Bar--------------------------------------------->
		<nav class="navbar navbar-expand-lg sticky-top">
			<a class="navbar-brand" href="#">Home or Icon</a>
			<ul class="nav nav-pills">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Find Me!</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="https://www.instagram.com/?hl=en" target="_blank">Instagram</a>
						<a class="dropdown-item" href="https://twitter.com/?lang=en" target="_blank">Twitter</a>
						<a class="dropdown-item" href="#contact-form">Contact Me</a>
					</div>
				</li>
			</ul>
		</nav>


		<!--Start-of-Posts/Blogs-------------------------------------------------->
		<section class="container p-2">
			<div class="card card-content m-3">
				<div class="row mb-5 px-3">
					<div class="col-12">
						<h2 class="text-center">Blog Title Is So Interesting</h2>
					</div>
					<div class="col-md-8 ">
						<p class="">Every day is taco ipsum tuesday. Give me all your tacos. Tacos Al pastor/De Adobada are made of thin pork steaks seasoned with adobo seasoning, then skewered and overlapped on one another on a vertical rotisserie cooked and flame-broiled as it spins. Add in a few el Pastor with guac and diced onions. Tacos, again? This will be 5 times this week and it’s only Tuesday. Tacos for breakfast, lunch and dinner. Tacos Al pastor/De Adobada are made of thin pork steaks seasoned with adobo seasoning, then skewered and overlapped on one another on a vertical rotisserie cooked and flame-broiled as it spins.
							<br><br>Tacos, again? This will be 5 times this week and it’s only Tuesday. CARNE ASADA!! Tacos, tacos, tacos. 50 cent tacos! I’ll take 30. It’s raining tacos, from out of the sky, tacos, don’t even ask why. Give me all your tacos. Let’s do a beef and a chicken, and one with both. TACOS!! If you were a taco, would you eat yourself? You see, the refried beans are really just the adhesive necessary to apply the soft tortilla to the hard taco shell. Make it a double there pal. Let’s do a beef and a chicken, and one with both.</p>
					</div>
					<div class="col-md-4 ">
						<img class="card-img" src="beverages-brunch-cocktail-5317.jpg" alt="brunch in new mexico" />
					</div>
				</div>
			</div>
			<div class="card card-content m-3">
				<div class="row">
					<div class="col">
						<a id="button" href="arizona-clouds-dawn-248174.jpg" data-fancybox data-caption="beautiful picture">
							<img class="img-fluid" src="arizona-clouds-dawn-248174.jpg" alt="beautiful picture"/>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<p class="card-text text-center m-0">Text... its a blurb about this really nice photo</p>
					</div>
				</div>
			</div>
			<div class="card card-content m-3">
				<div class="row">
					<div class="col-md-6 ">
						<img class="img-fluid" src="plate-of-food.jpg" alt="brunch in new mexico" />
					</div>
					<div class="col-md-6 pt-3">
						<h2>Recipe Post</h2>
						<ul>
							<li>
								Preheat an oven to a bunch of temp
							</li>
							<li>
								cut stuff into chunks, season with salt and pepper
							</li>
							<li>
								do a thing, toss a salad, make a drink
							</li>
							<li>
								put the sauce on
							</li>
							<li>
								bake for a few minutes or something idk
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<!--Contact-Form-------------------------------------------------->
		<section class="container bg-secondary text-warning" id="contact-form" name="contact form">
			<form id="contact-form" action="php/mailer.php" method="post">
				<div class="form-group">
					<lable for="contactName">Name</lable>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="contactName" name="contactName" placeholder="Name">
					</div>
				</div>

				<div class="form-group">
					<lable for="contactEmail">Email</lable>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<input type="email" class="form-control" id="contactEmail" name="contactEmail" placeholder="Email">
					</div>
				</div>

				<div class="form-group">
					<lable for="contactSubject">Subject</lable>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-pencil" aria-hidden="true"></i>
						</div>
						<input type="text" class="form-control" id="contactSubject" name="contactSubject" placeholder="Subject">
					</div>
				</div>

				<div class="form-group">
					<lable for="contactMessage">Message</lable>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"></span>
							<i class="fa fa-comment" aria-hidden="true"></i>
						</div>
						<textarea type="form-control" rows="5" class="form-control" id="contactMessage" name="contactMessage" placeholder="Message"></textarea>
					</div>
				</div>

				<!-- reCAPTCHA -->
				<div class="g-recaptcha" data-sitekey="6LfOEpQUAAAAAPOFlREZfqsC4CNH7DMxhTxzRRYx"></div>
				<!-- Buttons -->
				<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
				<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
			</form>
			<div id="output-area"></div>
		</section>

		<!--Footer-------------------------------------------------->
		<footer class="container-fluid p-5">
			<div class="row">
				<div class="col">
					<a href="#">
						<img src="#" alt="icon for instagram">
					</a>
					<a href="#">
						<img src="#" alt="icon for twitter">
					</a>
					<a href="index.php">
						<img src="#" alt="icon for homepage">
					</a>
				</div>
			</div>
		</footer>
	</body>
</html>