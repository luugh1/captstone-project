<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us | Talk to us at BrandIt</title>
    <meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="./assets/fontawesome/css/fontawesome.css" />
    <link rel="stylesheet" href="./assets/fontawesome/css/brands.css" />
    <link rel="stylesheet" href="./assets/fontawesome/css/solid.css" />
    <link rel="stylesheet" href="./assets/fontawesome/css/regular.css" />
    <link rel="stylesheet" href="./assets/css/contact.css" />

</head>

<?php require_once("component/header.php"); ?>

<main class="container-fluid">
    <section class="row mb-5">
        <div class="top-heading col-12 d-flex justify-content-center align-content-center">
            <div class="welcome-text-container d-flex flex-column">
                <h2 class="">Hi 👋 there!</h2>
                <section class="animation">
                    <div class="first">
                        <p>LET'S COLLABORATE</p>
                    </div>
                    <div class="second">
                        <p>LET'S US HELP YOU</p>
                    </div>
                    <div class="third">
                        <p>HERE FOR YOU</p>
                    </div>
                </section>
            </div>

        </div>
    </section>

    <div class="container">
        <section class="row mb-5">
            <div class="col-12 d-flex justify-content-center">
                <h3>Let's Start a Conversation</h3>
            </div>
        </section>
        <div class="row mb-5">
            <div class="col-md-6">
                <h3>Ask how we can help you:</h3>
                <p>
                    <span class="subtitle mb-2 d-block ">Create an effective sitemap and Information
                        Architecure</span>
                    <span>Our world class requirement questionaire, developed by our expertss here at BranDit helps you
                        capture the essence of your business,
                        understand and target your desired audience. </span>
                </p>
            </div>
            <div class="col-md-6">
                <p>Please note: all fields are required</p>
                <form>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">First Name <span>*</span></label>
                        <input type="text" class="form-control" id="firstname" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name <span>*</span></label>
                        <input type="text" class="form-control" id="lastname" required>
                    </div>
                    <div class="mb-3">
                        <label for="companyName" class="form-label">Company Name (optional)</label>
                        <input type="text" class="form-control" id="companyName">
                    </div>
                    <div class="mb-3">
                        <label for="companyName" class="form-label">Job Title (optional)</label>
                        <input type="text" class="form-control" id="companyName">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span>*</span></label>
                        <input type="email" class="form-control" id="email" required>
                    </div>


                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="notification-check" required>
                        <label class="form-check-label" for="notification-check">I'd like to receive more information
                            about
                            BranDit Offers;
                            I understand and agree to the privacy policy. <span>*</span></label>
                    </div>

                    <div class="d-grid mb-3">
                        <button type="submit" class="btn  submit-btn">Send Message</button>
                    </div>

                </form>

            </div>

        </div>

        <section class="row mb-5">
            <div class="col-md-4">
                <div class="contact-method visit card">
                    <div class="card-body d-flex flex-column justify-content-end align-items-center">
                        <p class="contact-method-text" data-shadow="Call US">Call Us</p>
                        <p class="contact-mthod-value text-center">200 University Ave W, Waterloo, ON N2L 3G1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-method fax card">
                    <div class="card-body d-flex flex-column justify-content-end align-items-center">

                        <p class="subtitle">Fax</p>
                        <p class="d-flex flex-column">
                            <span>US: +1 487-789-8754</span>
                            <span>CA: +1 487-789-8754</span>
                            <span>EU: +1 487-789-8754</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-method email card">
                    <div class="card-body d-flex flex-column justify-content-end align-items-center">

                        <p>Call</p>
                        <p class="d-flex flex-column">
                            <span>US: +1 487-789-8754</span>
                            <span>CA: +1 487-789-8754</span>
                            <span>EU: +1 487-789-8754</span>
                        </p>
                    </div>
                </div>
            </div>

        </section>
    </div>

</main>

<?php include_once("component/footer.php"); ?>