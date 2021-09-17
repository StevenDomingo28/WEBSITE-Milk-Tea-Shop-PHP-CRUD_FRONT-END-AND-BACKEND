<?php
require_once 'php/init.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Milk Tea Shop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-wdth, initial-scale=1.0">

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
                  <a class="nav-item nav-link navitem" href="testimonial.php">Testimonials</a>
                  <a class="nav-item nav-link navitem" href="#galleries">Galleries</a>
                  <a class="nav-item nav-link navitem" href="#about">About Us</a>
                  <a class="nav-item nav-link active navitem" href="#Home">Home</a>
                </div>
              </div>
              </nav>

              <div class="container">
              <div class="jumbotron jumbotron-fluid header-text">
                <div class="container">
                  <h1 class="headermain" data-aos="fade-right" data-aos-duration="2000">Tea makes everything better</h1>
                  <p class="header-p"> Happiness is a cup of tea, there’s always time for tea</p>
                  <a href="#" class="btn" data-aos="fade-left" data-aos-duration="2000"> Order Now </a>
                </div>
              </div>
          </div>
            </div>

      </header>
    </header>

    <section class="sec-info">
      <div class="container">
        <div class="row DTCard text-center text-md-left">
          <div class="col card-detail" data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1100">
            <h5 class="OTC-name p-2 p-md-0">  Happiness is a cup of tea,</h5>
            <hr class="line" data-aos="fade-down" data-aos-duration="2000">
            <p class="OTC-p text-justify p-2 p-md-0">Welcome to Fresh Milktea your number one source of
                happiness and satisfaction. we’re dedicated to serve and to let you experience
                the very best(product) that we have, with so much focus on the taste of having
                a well balanced and sweety milky beverage with a slighty twist.</p>
          <div class="sec2-btn">
            <a href="#" class="btn" data-aos="fade-left" data-aos-duration="2000"> Order Now </a>
          </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sec3-galleries" id="galleries">
      <h2 class="sec3-header"> Best Seller</h2>
      <hr class="sec3-line" data-aos="fade-down" data-aos-duration="2000">
      <div class="container pt md-5">
          <div class="row">
            <div class="col-md-4">
              <div class="card cardcon" data-aos="fade-down" data-aos-duration="2000">
                <img src="images/mt-1.png" class="card-img-top" alt="Milk Tea">
                <h4>Chachago - Cacao Drink with Ice Cream</h4>
                <div class="card-body">
                  <p class="text-justify">Who doesn’t love ice cream? Chachago’s Cacao with Ice Cream
                      drink is topped off with vanilla ice cream - satisfying every chocolate lover’s
                      sweet tooth cravings! The cacao bean’s bitter and strong notes pair well with
                      the vanilla ice cream’s sweet flavours, offering a perfectly balanced concoction
                      in our opinion!  </p>
                  <a href="#" class="btn-card"> Get yours now!</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card cardcon"data-aos="fade-down" data-aos-duration="3000">
                <img src="images/mt-2.png" class="card-img-top" alt="Milk Tea">
                <h4>Tantea - Pudding Milk Tea</h4>
                <div class="card-body">
                  <p class="text-justify">>Swap the typical pearl add-ons for pudding for a simple
                      twist to your milk tea! Pudding adds a sweet and milky flavour to your drink,
                      and is likened to creamy jelly. One big sip of Tantea’s Pudding Milk Tea
                      will have you craving for more, so take advantage of Fresh MilkTea's Buy 1 Get 1
                      offer!
                   </p>
                  <a href="#" class="btn-card"> Get yours now!</a>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card cardcon" data-aos="fade-down" data-aos-duration="2000">
                <img src="images/mt-3.png" class="card-img-top" alt="Milk Tea">
                <h4>Sakura Hanami - Choco Banana Milk Tea</h4>
                <div class="card-body">
                  <p class="text-justify">Need a healthier excuse for milk tea? Sakura
                      Hanami’s Chocolate Banana Milk Tea is the answer! This concoction is
                      more popular as a fruit shake, but works unbelievably well as milk
                      tea as well! To add to that, Fresh MilkTea is offering this specific drink
                      for just Php 76 - just book a voucher and get your drink for take
                      out or delivery! </p>
                  <a href="#" class="btn-card"> Get yours now!?</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="sec4-About" id="about">
      <div class="container">
        <h2 class="sec4-header">ABOUT US</h2>
        <hr class="line" data-aos="fade-down" data-aos-duration="2000">
        <div class="row DTCard text-center text-md-left">
          <div class="col-md-2">
            <img src="images/logo-about.png" class="ml-5" alt="team member" data-aos="zoom-out">
          </div>
          <div class="col card-detail" data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1100">
            <h5 class="OTC-name-sec4 p-2 p-md-0"> Fresh Milktea Shop</h5>
            <p class="OTC-p-sec4 text-justify p-1 p-md-0">it was founded in 2018 by Steven Domingo, Fresh MilkTea Shop
                  which has come a longway from its beginning at(location). when steven first started out his passion to
                  serve, discover, explore  and to help his parents to sustain their needs drove him to be more dedicated
                  and hardworking and let that be an inspiration to established store.
                  <br><br>
                  We are now ready to serve with so much passion and dedicated not just to work but to serve other people
                  we value our customers because you are roots of our success
              </p>
              <br>
              <p class="OTC-p-sec4 links"> Useful Links</p>
              <div class="sec4-icons">
                <a class="icons" href="#"><img src="images/fb.png"></a>
                <a class="icons" href="#"><img src="images/twitter.png"></a>
                <a class="icons" href="#"><img src="images/Instag.png"></a>
                <a class="icons" href="#"><img src="images/Ytube.png"></a>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sec5-Testimonials">
      <div class="small-container">
        <h2 class="sec4-header">Ratings from our Customers</h2>
        <hr class="line" data-aos="fade-down" data-aos-duration="2000">
        <div class="row">
          <div class="col-4">
            <img class="card-img-top" src="images/person-icon.png">
            <h4>Justin Meneses</h4>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <p class="text-justify">I really dont like milk tea but when I tried the milk tea of
              Fresh MilkTea Shop. I started to became addict on this.</p>
          </div>

          <div class="col-4">
            <img class="card-img-top"  src="images/person-icon.png">
            <h4>Shean Mercado</h4>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <p class="text-justify">This shop literaly gives my satisfaction on
                the taste of milk tea's will order again soon.</p>
          </div>

          <div class="col-4">
            <img class="card-img-top"  src="images/person-icon.png">
            <h4>Angela Isabel</h4>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <p class="text-justify">5 star for this Shop, I really love how they
              treat people when I get inside of there shop. All of the bartenders
              have very good personalities. Plus their milk tea was so delicious.</p>
          </div>

          <div class="col-4">
            <img class="card-img-top" src="images/person-icon.png">
            <h4>Cardo Jr.</h4>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <p class="text-justify">I always buy their best seller milk tea which
               is Chachago. My daughter and my Wife really loves it. 5 star for
               this. Thank you</p>
          </div>
        </div>
        </div>

    </section>
    <?php
    insertT();
    ?>
    <form class="container" action="" method="GET">
      <div class="row">
        <div class="col-md-9 form-group">
          <h4 class="Th">How was the taste?</h4>
          <input class="form-control" type="text" name="name" placeholder="Your Name" required>
          <input class="form-control" type="text" name="items" placeholder="Type your comment here" required>
        </div>
        <div class="col2-md">
          <input class="btn btn-success" type="submit" value="Add Comments">
        </div>
      </div>
    </form>

    <?php
    $view = new view();
    $view->viewCompleteData();
    ?>
    <hr>
    <footer>
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p class="text-justify">Download App for Android and IOS mobile phone</p>
            <div class="app-logo">
              <img src="images/playstore.png">
              <img src="images/appstore.png">
            </div>
          </div>
          <div class="footer-col-2">
            <img src="images/logo.png">
            <p>My success is also your success
              we hope you enjoy our tea as much as we enjoy serving them to you.</p>
          </div>
          <div class="footer-col-3">
            <h3>Useful links</h3>
            <ul>
              <li>Coupons</li>
              <li>Blog Post</li>
              <li>Return Policy</li>
              <li>Join Affiliate</li>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow Us</h3>
            <ul>
              <li>Facebook/li>
              <li>Instagram</li>
              <li>Twitter</li>
              <li>Youtube</li>
            </ul>
          </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2021 - StevePh (For Education Purposes Only)</p>
      </div>
    </footer>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
