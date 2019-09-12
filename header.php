<?php
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
    <link rel="stylesheet" type="text/css" href="../styles/login.css">
    <link rel="stylesheet" type="text/css" href="../styles/signup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGSKubr8zQZdyapHs8aQ60cVwzYP94EKE&callback=myMap"></script>
    <script src="typeahead.min.js"></script>
    <script src="../js/imagezoom.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/searchbar.js"></script>
  </head>
  <body>
<header>
    <a href="index.php">
     <?php
      $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
      $sql = "SELECT * FROM image WHERE image_id = 4";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_array($result);
      echo "<img src='".$row["image"]."' style='width:100%' alt='Image'>";
    ?>
    </a>
</header>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" >GoSmart</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
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
            echo '
            <li><input type="text" id="myInput" size="30" onkeyup="showResult(this.value)">
                 <div id="livesearch"></div>
                 <script>showResult(str)</script></li>
            <li class="dropdown"><a href="#" button class="btn btn-secondary dropsown-toggle" data-toggle="dropdown" aria-haspopup="true" style="text-align:left"><span class="glyphicon glyphicon-user"></span> Account</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="reset-password.php">Reset Password</a><br>
            </div></li>
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>';
            
        } else {
            echo '
            <li><input type="text" id="myInput" size="30" onkeyup="showResult(this.value)">
                 <div id="livesearch"></div>
                 <script>showResult(str)</script></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            <li><a href="register.php"><span class="glyphicon glyphicon-pencil"></span> Sign Up</a></li>
            </div>
          </div>';
        }
        ?>
        </div>
      </div>
    </div>
  </nav>