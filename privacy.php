<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="css/styl.css" media="screen" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="js/script.js" type="text/javascript"></script>
      </head>
    <body>
      <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
          <hr>
          <img class="logo" href="index.php" src="graphics/logo.png">
            <div class="form-inline">
           <a class="navbar-brand" href="index.php"><h4>X-Port</h4></a>
            <ul class="navbar-nav mr-auto ml-3">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="newArrival.php">New Arrival</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="jackets.php">Jackets</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="shoes.php">Shoes</a>
                </li>
              </ul>
              <div class="social">
                <div class="dropdown">
                  <i class="fas fa-user-circle fa-lg"></i>
                  <div class="dropdown-content">
                    <a href="admin_login.php">Admin</a>
                    <a id="useranchor" href="user_login.php"><span id="user">User</a>
                  </div>
                </div>
              <a href="#"><i class="fab fa-facebook-square fa-lg"></i></a>
              <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
              <a href="#"><i class="fab fa-twitter-square fa-lg"></i></a>
              <a href="search.php"><i class="fas fa-search fa-lg"></i></a>
            </div>
            </div>
          </hr>
            </nav>
            <?php
$_SESSION["admin"] = "";
if ( ! isset($_SESSION["user"]) || empty($_SESSION["user"]) )
{
   ?>
   <script>
   retain_user();
</script>
   <?php
   
}
else{
  ?>
  <script>
  var ser ="<?php echo $_SESSION["user"];?>";
  change_status(ser);
  </script>
  <?php
}
?>


          
           <div class="tagline">
            <h1>X-Port, Your Ultimate Destination Of Fashion & Style</h1>
           </div>
               <div class="priv">
               
               <br><br><br><h2>Privacy Policy</h2><br><br>
               <p>This Privacy Policy describes how your personal information is collected, used, and shared when you visit or make
                a purchase from this site www.xport.com.pk.<br>
                When you make a purchase or attempt to make a purchase through the Site, we collect certain information from you,
                including your name, billing address, shipping address, payment information, email address, and phone number. 
                We refer to this information as “Order Information”.We use the Order Information that we collect generally to fulfill any
                orders placed through the Site (including processing your payment information, arranging for shipping, and providing you
                with invoices. <br>Our professional team always try to provide updated and accurate information on our website. However, 
                sometimes there maybe any wrong information, price and discount. We apologies for this kind of mistakes; but if you placed 
                any order in these situations, we have right to cancel the order. Please cooperate in these<br>circumstances because we would
                have to review process at our end.<br><br>Please note that we do not alter our Site’s data collection and use practices when we 
                see a Do Not Track signal from your browser.You have the right to access personal information we hold about you and to ask 
                that your personal information be corrected, updated, or deleted. If you would like to exercise this right, please contact us.<br>
                When you place an order through the Site, we will maintain your Order Information for our records unless and until you ask us
                to delete this information.We may update this privacy policy from time to time in order to reflect, for example, changes to
                 our practices or for other operational, legal or regulatory reasons.
            </p>
            </div>
                    <br>
              </div>
          
    <br><br><br>

    

    <footer class="page-footer font-small footer-dark pt-4">
      <div class="container">
        
        <div class="row mt-5">
          <div class="col-lg-2">
            <h6 class="text-uppercase font-weight-bold ">About us</h6>
            <hr class="mb-4 mt-0" style="width: 60px;">
            <p>
              <a href="who.php">Who we are</a>
            </p>
            <p>
              <a href="location.php">Store Location</a>
            </p>
          </div>
          <div class="col-lg-3">
            <h6 class="text-uppercase font-weight-bold">Support</h6>
            <hr class="mb-4 mt-0" style="width: 60px;">
            <p>
              <a href="return.php">Return & exchange</a>
            </p>
            <p>
              <a href="size.php">Size Chart</a>
            </p>
            <p>
              <a href="feedback.php">Feedback</a>
            </p>
          </div>
          <div class="col-lg-3">
            <h6 class="text-uppercase font-weight-bold ">Policy</h6>
            <hr class="mb-4 mt-0 " style="width: 60px;">
            <p>
              <a href="privacy.php">Privacy policy</a>
            </p>
            <p>
              <a href="terms.php">Terms & conditions</a>
            </p>
          </div>
          <div class=" col-lg-3">
            <h6 class="text-uppercase font-weight-bold ml-3">Find us</h6>
            <hr class="mb-4 mt-0 ml-3" style="width: 60px;">
            <p>
              <i class="fas fa-home mr-3"></i> Liberty, Lahore</p>
            <p>
              <i class="fas fa-envelope mr-3"></i> x-ports@gmail.com</p>
            <p>
              <i class="fas fa-phone mr-3"></i> + 92 421 234 567</p>
    
          </div>
        </div>
      </div>
    <hr>
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a href="#"><i class="fab fa-facebook-square fa-lg"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="#"><i class="fab fa-instagram fa-lg"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="#"><i class="fab fa-twitter-square fa-lg"></i></a>
        </li>
        
      </ul>
    </hr>
      <hr>
      <div class="footer-copyright text-center y-3">© 2020 Copyright:
        <a href="index.php"> X-port</a>
      </div>
    </hr>
    </footer>
    
        </body>
    </html>
    