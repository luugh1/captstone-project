<!DOCTYPE HTML>
<html>

<head>
	<title>Sign up to Brandit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<link href="./assets/css/login.css" rel='stylesheet' type='text/css' />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
	<link rel="stylesheet" href="./assets/fontawesome/css/fontawesome.css" />
	<link rel="stylesheet" href="./assets/fontawesome/css/brands.css" />
	<link rel="stylesheet" href="./assets/fontawesome/css/solid.css" />
	<link rel="stylesheet" href="./assets/fontawesome/css/regular.css" />

</head>

<body class="sign-in-up">
<?php require_once("component/header.php"); ?>
	<section class="page-wrapper">
		<h1>Welcome 👋to BranDit</h1>
		<p>Let's build together</p>
		<div class="sign-in-form mb-5">
			<div class="sign-in-top-wrapper  p-4">
				<div class="sign-in-form-top">
					<p><span>Sign Up to Brandit</p>
				</div>

				<div class="signin">

					<form id="login-form" class="row g-3 mt-4">

						<div class="col-12">
							<label for="email" class="form-label">Email</label>
							<input type="text" name="email" class="form-control" id="email" placeholder="example@gmail.com">
							<span id="email-error" class="text-danger"></span>
						</div>
						<div class="col-12">
							<label for="password" class="form-label">Password</label>
							<input type="text" name="password" class="form-control" id="password" placeholder="******************">
							<span id="password-error" class="text-danger"></span>
						</div>

						<div class="d-grid">
						<span id="success-msg"></span>
							<button type="submit" class="btn submit-btn" id="login-btn">Sign in</button>
						</div>

						<div class="col-12">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" id="gridCheck">
								<label class="form-check-label" for="gridCheck">
									Keep me signed in
								</label>
							</div>
						</div>
</form>
				</div>
			</div>
			<div class="new_people">
				<h4>Don't have an account?</h4>
				<p>Having hands on experience in creating innovative designs,I do offer design
					solutions which harness.</p>
				<a href="./sign-up.html">SignUp!</a>
			</div>



		</div>



	</section>
	<script type="module" src="./assets/js/login-script.js"></script>
	<?php include_once("component/footer.php"); ?>
	
	<script src="./assets/js/backgrounds/three.min.js"></script>
	<script src="./assets/js/backgrounds/vanta.net.min.js"></script>
	<script>
		VANTA.NET({
			el: ".page-wrapper",
			mouseControls: true,
			touchControls: true,
			gyroControls: false,
			minHeight: 200.00,
			minWidth: 200.00,
			scale: 1.00,
			scaleMobile: 1.00,
			color: 0xb2beb5,
			backgroundColor: 0xf6f6f6,
			points: 20.00,
			maxDistance: 28.00,
			spacing: 20.00,
			points: 20.00
		})
	</script>