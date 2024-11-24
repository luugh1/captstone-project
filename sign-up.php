<!DOCTYPE HTML>
<html>

<head>
  <title>Sign up to Brandit</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

  <link href="./assets/css/signup.css" rel='stylesheet' type='text/css' />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="./assets/fontawesome/css/fontawesome.css" />
  <link rel="stylesheet" href="./assets/fontawesome/css/brands.css" />
  <link rel="stylesheet" href="./assets/fontawesome/css/solid.css" />
  <link rel="stylesheet" href="./assets/fontawesome/css/regular.css" />

</head>

<body class="sign-in-up">
<?php require_once("component/header.php"); ?>
  <section class="page-wrapper" style="overflow: hidden">
    <h1>Welcome 👋to BranDit</h1>
    <p>Let's build together</p>
    <div class="sign-in-form">
      <div class="sign-in-top-wrapper shadow p-4">
        <div class="sign-in-form-top">
          <p><span>Sign Up to Brandit</p>
        </div>

        <div class="signin">

          <form class="row g-3 mt-4" id="sign-up-form">

            <div class="col-6">
              <label for="inputAddress" class="form-label">First Name</label>
              <input type="text" name="firstname" class="form-control" id="firstname" placeholder="John">
              <span class="text-danger" id="firstname-error"></span>
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">Last Name</label>
              <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Doe">
              <span class="text-danger" id="lastname-error"></span>
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Doe">
              <span class="text-danger" id="email-error"></span>
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Doe">
              <span class="text-danger" id="password-error"></span>
            </div>
            <div class="col-6">
              <label for="inputAddress" class="form-label">Confirm Password</label>
              <input type="password" name="verify_password" class="form-control" id="verify_password" placeholder="Doe">
              <span class="text-danger" id="verify_password-error"></span>
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Address</label>
              <input type="text" name="address" class="form-control" id="address" placeholder="1234 Main St">
              <span class="text-danger" id="address-error"></span>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn submit-btn" id="contact-btn">Sign in</button>
            </div>

          </form>
        </div>
      </div>
      <div class="new_people">
        <h4>Already have an account?</h4>
        <p>Having hands on experience in creating innovative designs,I do offer design
          solutions which harness.</p>
        <a href="./login.html">Login!</a>
      </div>



    </div>



  </section>

  <div id="signModal" class="modal-brandit">
            <div class="modal-content-brandit">
              <span class="close">&times;</span>
              <div id="message" class="g-message"></div>
            </div>
          </div>
    </div>

  <script src="./assets/js/backgrounds/three.min.js"></script>
  <script src="./assets/js/backgrounds/vanta.net.min.js"></script>
  <script src="./assets/js/backgrounds/vanta.waves.min.js"></script>
  <script src="./assets/js/backgrounds/vanta.birds.min.js"></script>
  <script>

    VANTA.BIRDS({
      el: ".page-wrapper",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00,
      backgroundColor: "#f1f1f1",
      color1: "#35403a",
      color2: "#ff6347",
      colorMode: "lerp",
      birdSize: 0.5,
      quantity: 3.00,
      backgroundAlpha: 0.38
    })
  </script>
  <script src="./assets/js/signup-script.js" type="module"></script>
  <?php include_once("component/footer.php"); ?>
