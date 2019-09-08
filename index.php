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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="typeahead.min.js"></script>
    <script src="../js/imagezoom.js"></script>
    <script src="../js/search.js"></script>
    <script src="../js/searchbar.js"></script>
    <style>
        .panel-footer {
            background-color: white;
        }
    </style>
  </head>
  <body>
<header>
  <div class="jumbotron">
     <!--<?php
      $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
      $sql = "SELECT * FROM image WHERE image_id = 5";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_array($result);
      echo "<img src='".$row["image"]."' class='img-responsive' style='width:100%' alt='Image'>";
    ?>-->
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
  <!--<div id="search_container">
          <input type="text" name="product" id="product" autocomplete="off">
          <div id="results"></div>
        </div>
        <script type="text/javascript">
          $(document).ready(function(){
            $("#product").keyup(function(){
              var query = $(this).val();
              if (query != "") {
                $.ajax({
                        url: 'search.php',
                        method: 'POST',
                        data: {query:query},
                        success: function(data)
                        {
                          $('#results').html(data);
                          $('#results').css('display', 'block');
                            $("#product").focusout(function(){
                                $('#results').css('display', 'none');
                            });
                            $("#product").focusin(function(){
                                $('#results').css('display', 'block');
                            });
                        }
                });
              } else {
                    $('#results').css('display', 'none');
              }
            });
          });
        </script>-->
  <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">NEW</div>
            <div class="panel-body">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 24";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' class='img-responsive' style='width:100%' alt='Image'>";
              ?>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">NEW</div>
            <div class="panel-body">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 30";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' class='img-responsive' style='width:100%' alt='Image'>";
              ?>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="panel panel-default">
            <div class="panel-heading">NEW</div>
            <div class="panel-body">
              <?php
              $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
              $sql = "SELECT * FROM other WHERE image_id = 19";
              $result = mysqli_query($db, $sql);
              $row = mysqli_fetch_array($result);
              echo "<img src='".$row["image"]."' class='img-responsive' style='width:100%' alt='Image'>";
              ?>
            </div>
          </div>
        </div>
      </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <footer class="container-fluid text-center">
      <p>Online Store Copyright</p>  
      <form class="form-inline">Get deals:
        <input type="email" class="form-control" size="50" placeholder="Email Address">
        <button type="button" class="btn btn-default">Sign Up</button>
      </form>
    </footer>      
</body>
</html>