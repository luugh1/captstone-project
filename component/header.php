<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $currentScript = basename($_SERVER["PHP_SELF"]);
    $scriptName = pathinfo($currentScript, PATHINFO_FILENAME);
    $page_name = ($scriptName === "index") ? "Home" : $scriptName;
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/css/splide.min.css"
        integrity="sha512-KhFXpe+VJEu5HYbJyKQs9VvwGB+jQepqb4ZnlhUF/jQGxYJcjdxOTf6cr445hOc791FFLs18DKVpfrQnONOB1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/services-page.css">
    <link rel="stylesheet" href="assets/css/stylesheet.css">
    
    
    <title><?= ucwords($page_name); ?> | Brandit</title>
</head>


<body>
    <div class="wrapper">
        <div class="topbar"><span>Promotional Discount 30% on any service</span></div>
        <header id="header">
            <div class="brand-logo">
                <span><img src="assets/images/brands-images/Brandit Logo-01.png"></span>
            </div>
            <nav>
                <ul>
                    <li><a href="./">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="./contact.php">Contact us</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="./admin.php">admin</a></li>
                </ul>

                <ul class="membership">
                    <li><a href="./sign-up.php">Register</a></li>
                    <li><a href="./login.php">Login</a></li>
                </ul>
            </nav>
        </header>
