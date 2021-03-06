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
                      <a id="adminanchor" href="admin_login.php"><span id="admin">Admin</a>
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
if(! isset($_SESSION["admin"]) || empty($_SESSION["admin"]))
{
  ?>
   <script>
   retain_admin();
</script>
   <?php
}
else{
  ?>
  <script>
  var admin = "<?php echo $_SESSION["admin"];?>";
  change_status_admin(admin);
  </script>
  <?php
}
?>
            <div class="tagline">
              <h1>X-Port, Your Ultimate Destination Of Fashion & Style</h1>
            </div>
            <br>
<div class="login-forms">
    <form class="card" method="POST" onsubmit="return validateProduct();" name="addproduct" action="product-add.php" enctype="multipart/form-data">
        <div class="card-header bg-dark text-white">
            Add product
        </div>
<div class="card-body">
        <div class="form-group">
          <label>Product code</label><br>
          <input type="text" class="form-control" name="productcode" placeholder="Enter product code">
        </div>
        <div class="form-group">
          <label>Category</label><br>
          <input type="text" class="form-control" name="category" placeholder="Enter category">
          <small class="form-text text-muted">
            'n' or 'j' or 's' for new arrival, jackets or shoes respectively.
        </small>
        </div>
        <div class="form-group">
            <label>Price</label><br>
            <input type="text" class="form-control" name="price" placeholder="Enter price">
          </div>
          <div class="form-group">
            <label>Upload image</label><br>
            <input type="file" name="image" placeholder="select image">
          </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary" >Add</button>
    </div>
      </form>
</div>

      <br> 

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
  <div class="footer-copyright text-center y-3">?? 2020 Copyright:
    <a href="index.php"> X-port</a>
  </div>
</hr>
</footer>

</body>
</html>
