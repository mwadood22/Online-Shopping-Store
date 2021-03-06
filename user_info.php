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

            <div class="container">
        <div class="col-lg-12">
            <br>
            <h1 class="text-grey text-center">User Information</h1>
            <br>
            <br>

            <table class="table table-striped table-hover table-bordered text-center m-auto">
                <tr>

                        <th class="text-center">Name</th>
                        <th class="text-center">Age</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Update</th>
                        
                </tr>
        <?php
                include 'connection.php';
                $obj1=new MyClass1();
                $conn = $obj1->OpenCon();
                $name = $_SESSION["id"];
                try
        {
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $ql = $conn->prepare("select * from user WHERE userid = $name");
                if($ql->execute())
                {
                  while($res = $ql->fetch()){

        ?>

                <tr>

                        <td><?php echo $res['name']; ?></td>
                        <td><?php echo $res['age']; ?></td>
                        <td><?php echo $res['email']; ?></td>
                        <td><?php echo $res['password']; ?></td>
                        <td><button class="btn-primary btn"> <a href="update_user.php?userid=<?php echo $res['userid']; ?>" class="text-white"> Update </a> </button></td>
                </tr>
                <?php
                }
              }
            }
              catch (PDOException $e){
                echo "Error: ".$e->getMessage();
            } 
                $obj1->CloseCon($conn);
                ?>

            </table>
            <br><br>
            <div class="text-center">
            <button class="btn-primary btn" onclick="location.href = 'logout.php';" type="submit" name="submit" >Logout</button>
            </div>
            </div>
            </div>
<br><br>

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
