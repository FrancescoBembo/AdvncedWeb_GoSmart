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
    
    <style>
    .row {
        display: flex;
        padding: 50px;
        align-items: center;
    }
    * {
      box-sizing: border-box;
    }
    .col {
        margin-left: 250px;
        width: 50%;
        height: 700px;
    }
    .col2 {
        margin-left: 100px;
        width: 50%;
        height: 700px;
    }
    
    .img-zoom-result {
        width: 400px;
        height: 300px;
    }
    </style>
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
            echo '<a class="navbar-brand" href="welcome.php" >GoSmart</a>';
        } else {
            echo '<a class="navbar-brand" href="index.php" >GoSmart</a>';
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
          <div id="div1"><a class="dropdown-item" href="../google.php">Google</a></div><br>
          <div id="div2"><a class="dropdown-item" href="../apple.php">Apple</a></div><br>
          <div id="div3"><a class="dropdown-item" href="../amazon.php">Amazon</a></div><br>
          <div id="div4"><a class="dropdown-item" href="../other.php">Other Brands</a></div>
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
            echo '<li><a href="../login.php"><span class="glyphicon glyphicon-user"></span> Login</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
            <li><a href="../register.php"><span class="glyphicon glyphicon-pencil"></span> Sign Up</a></li>
            </div>
          </div>';
        }
        ?>
    </div>
  </nav>

    <div class="row">
      <div class="col">
        <?php
        $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
        $sql = "SELECT * FROM google WHERE image_id = 6";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result);
        echo '<div class="img-zoom-container">
                <img id="homepodbl" src="'.$row["image"].'" style="width:500" height="400">
                <div id="myresult" class="img-zoom-result"></div>
              </div>';
        ?>
        <script>
        imageZoom("homepodbl","myresult");
        </script>
      </div>
      <div class="col2">
        <h1>Google Home</h1><br>
        <h2>FEATURES:</h2><br>
        <font size="4">
            <li>The 4th Generation 64GB Apple TV</li><br>
            <li>Up to 1808p Full HD resolution</li><br>
            <li>Integrated App Store you can explore additional content such as music, games and apps</li><br>
            <li>Equipped with a dual-microphone array and the Bluetooth 4.0 connectivity</li><br>
            <li>Controlled with the rechargeable Siri Remote</li><br>
        </font>
        <?php
        $sql = "SELECT * FROM products WHERE p_id = 2";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result);
        echo "<h2>Price: $".$row["p_price"]."</h2>";
        ?><br>
        <button style='float:left;'  class='btn btn-primary add_product' pid='$prod_id' id='$prod_id'>Add to cart</button>
      </div>
    </div>
    <br><br><br>
  <footer class="container-fluid text-center">
      <p>Online Store Copyright</p>  
      <form class="form-inline">Get deals:
        <input type="email" class="form-control" size="50" placeholder="Email Address">
        <button type="button" class="btn btn-danger">Sign Up</button>
      </form>
    </footer>      
</body>
</html>