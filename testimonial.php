<?php
require_once 'php/init.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="vendor/css/all.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="vendor/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;1,100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lato:ital,wght@0,100;1,100&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Tangerine&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <title>Hello, world!</title>
  </head>
  <body>
    <header>
      <header id="Home">
        <div class="container-fluid navcon">
            <div class="container">
              <nav class="navbar navbar-expand-md navbar-dark pt-md-4 mb-5">
                <img src="images/logo.png" class="logo" data-aos="fade-down" data-aos-duration="2000"/>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto color">
                  <a class="nav-item nav-link navitem" href="#">Testimonials</a>
                  <a class="nav-item nav-link active navitem" href="index.php">Home</a>
                </div>
              </div>
              </nav>
            </div>
          </div>

            <?php
            deleteT();
            editT();
            ?>

            <?php
            $view = new view();
            $view->viewData();
            $view->viewCompleteData();
            ?>
      </header>
    </header>










    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
