<?php
// Initialize the session
session_start(); 
// Create database connection
$db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
  <title>GoSmart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="typeahead.min.js"></script>
    <script src="../js/imagezoom.js"></script>
  </head>
  <body>
<header>
  <div class="jumbotron">
    <div class="container text-center">
      <h1>GoSmart</h1>
      <p>Get your house ready for the future!</p>
    </div>
  </div>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            echo '<a class="navbar-brand" href="../welcome.php" >GoSmart</a>';
        } else {
            echo '<a class="navbar-brand" href="../index.php" >GoSmart</a>';
        }
        ?>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
        <?php
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            echo '<li><a href="../welcome.php">Home</a></li>';
        } else {
            echo '<li><a href="../index.php">Home</a></li>';
        }
        ?>
          <li class="dropdown"><a href="product.php" button class="btn btn-secondary dropdown-toggle" id="dropdownMenu5" data-toggle="dropdown" aria-haspopup="true" style="text-align:left">Products</a><div class="dropdown-menu">
          <div id="div1"><a class="dropdown-item" href="google.php">Google</a></div><br>
          <div id="div2"><a class="dropdown-item" href="apple.php">Apple</a></div><br>
          <div id="div3"><a class="dropdown-item" href="amazon.php">Amazon</a></div><br>
          <div id="div4"><a class="dropdown-item" href="other.php">Other Brands</a></div>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="nav navbar-nav navbar-right">        
        <?php  
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
            echo '<li class="dropdown"><a href="#" button class="btn btn-secondary dropsown-toggle" data-toggle="dropdown" aria-haspopup="true" style="text-align:left"><span class="glyphicon glyphicon-user"></span> Account</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="reset-password.php">Reset Password</a><br>
            </div></li>
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>';
            
        } else {
            echo '<li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            <li><a href="register.php"><span class="glyphicon glyphicon-pencil"></span> Sign Up</a></li>
            </div>
          </div>';
        }
        ?>
    </div>
  </nav>
  <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Amazon Echo Dot</div>
            <div class="panel-body">
            <a href="amazon/echodot.php">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM amazon WHERE image_id = 1";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' class='img-responsive' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Amazon Echo Dot</div>
            <input type="submit" class="btn btn-default" value="Submit">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Amazon Echo Show 5</div>
            <div class="panel-body">
            <a href="amazon/echoshow5.php">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM amazon WHERE image_id = 2";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' class='img-responsive' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Amazon Echo Show 5</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Amazon Echo Show</div>
            <div class="panel-body">
            <a href="amazon/echoshow.php">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM amazon WHERE image_id = 3";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' class='img-responsive' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Amazon Echo Show</div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Amazon Echo</div>
            <div class="panel-body">
            <a href="amazon/echo.php">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM amazon WHERE image_id = 4";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' class='img-responsive' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Amazon Echo</div>
            <input type="submit" class="btn btn-default" value="Submit">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Amazon Echo Input</div>
            <div class="panel-body">
            <a href="amazon/echoinput.php">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM amazon WHERE image_id = 5";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' class='img-responsive' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Amazon Echo Input</div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">Amazon Echo Sub</div>
            <div class="panel-body">
            <a href="amazon/echosub.php">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM amazon WHERE image_id = 6";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' class='img-responsive' style='width:100%' alt='Image'>";
              ?></a>
            </div>
            <div class="panel-footer">Amazon Echo Sub</div>
          </div>
        </div>
      </div>
    </div><br><br>
  <footer class="container-fluid text-center">
      <p>Online Store Copyright</p>  
      <form class="form-inline">Get deals:
        <input type="email" class="form-control" size="50" placeholder="Email Address">
        <button type="button" class="btn btn-default">Sign Up</button>
      </form>
    </footer>      
</body>
</html>