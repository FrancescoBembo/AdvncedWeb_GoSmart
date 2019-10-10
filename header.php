<?php
session_start();
// Create database connection
$link = mysqli_connect('localhost', 'id10588493_admin', '123456', 'id10588493_gosmart');
?>
<!--Cart-->
<?php
require_once ("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByID = $db_handle->runQuery("SELECT * FROM products WHERE p_id='" . $_GET["p_id"] . "'");
			$itemArray = array($productByID[0]["p_id"]=>array('p_name'=>$productByID[0]["p_name"], 'p_id'=>$productByID[0]["p_id"], 'quantity'=>$_POST["quantity"], 'p_price'=>$productByID[0]["p_price"], 'p_image'=>$productByID[0]["p_image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByID[0]["p_id"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByID[0]["p_id"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["p_id"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<!--Wishlist-->
<?php
if(!empty($_GET["action"])) {
  switch($_GET["action"]) {
    case "add":
      if(isset($_GET["action"])) {
        $productByID = $db_handle->runQuery("SELECT * FROM products WHERE p_id='" . $_GET["p_id"] . "'");
        $itemArray = array($productByID[0]["p_id"]=>array('p_name'=>$productByID[0]["p_name"], 'p_id'=>$productByID[0]["p_id"], 'quantity'=>$_POST["quantity"], 'p_price'=>$productByID[0]["p_price"], 'p_image'=>$productByID[0]["p_image"]));
        
        if(!empty($_SESSION["wish_item"])) {
          if(in_array($productByID[0]["p_id"],array_keys($_SESSION["wish_item"]))) {
            foreach($_SESSION["wish_item"] as $k => $v) {
                if($productByID[0]["p_id"] == $k) {
                  if(empty($_SESSION["wish_item"][$k]["quantity"])) {
                    $_SESSION["wish_item"][$k]["quantity"] = 0;
                  }
                  $_SESSION["wish_item"][$k]["quantity"] += $_POST["quantity"];
                }
            }
          } else {
            $_SESSION["wish_item"] = array_merge($_SESSION["wish_item"],$itemArray);
          }
        } else {
          $_SESSION["wish_item"] = $itemArray;
        }
      }
    break;
    case "remove":
      if(!empty($_SESSION["wish_item"])) {
        foreach($_SESSION["wish_item"] as $k => $v) {
            if($_GET["p_id"] == $k)
              unset($_SESSION["wish_item"][$k]);				
            if(empty($_SESSION["wish_item"]))
              unset($_SESSION["wish_item"]);
        }
      }
    break;
    case "empty":
      unset($_SESSION["wish_item"]);
    break;	
  }
  }
  ?>
  <?php
  $sql = "SELECT * FROM image WHERE image_id = 1";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_array($result);
  ?>
<!DOCTYPE php>
<php lang="en">
  <head>
    <title>GoSmart &mdash; By Mason and Francesco</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="gosmart, ait gosmart, smart home device, mason, francesco">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="icon" href="<?php echo'.$row["image"]' ?>" type="image/png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="../styles/login.css">
    <link rel="stylesheet" type="text/css" href="../styles/signup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/cart.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filter.js"></script>
    <script src="js/categories.js"></script>
  </head>
  <body>
  
<div class="site-wrap">
    <header class="site-navbar" role="banner">
      <div class="site-navbar-top">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
              <form action="search_php.php" method="post" class="site-block-top-search">
                <span class="icon icon-search2"></span>
                <input type="text" class="form-control border-0" name="search" placeholder="Search">
              </form>
            </div>

            <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
              <div class="site-logo">
              <?php
              if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                  echo '<a href="welcome.php" class="js-logo-clone">GoSmart</a>';
              } else {
                  echo '<a href="index.php" class="js-logo-clone">GoSmart</a>';
              }
              ?>
              </div>
            </div>

            <div class="col-6 col-md-4 order-3 order-md-3 text-right">
              <div class="site-top-icons">
                <ul>
                <?php
                if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                  $sql = "SELECT username FROM users";
                  $result = mysqli_query($link, $sql);
                  $row = mysqli_fetch_array($result);
                  ?>
                  <li><a href="#"><?php echo $row["username"]; ?></a></li>
                  <li><a href="wishlist.php"><span class="icon-heart"></span> </a></li>
                  <li>
                    <a href="cart.php" class="site-cart" id="cart">
                      <span class="icon-shopping_cart"></span>
                    </a>
                  </li>
                  <li><a href="logout.php"><span class=".icon-off"></span>Logout</a></li> 
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
                <?php
                } else {
                  ?>
                  <li><a href="login.php"><span class="icon-user"></span></a></li>
                  <li><a href="wishlist.php"><span class="icon-heart"></span></a></li>
                  <li>
                    <a href="cart.php" class="site-cart" id="cart">
                      <span class="icon-shopping_cart"></span>
                    </a>
                  </li>
                  <li><a href="register.php"><span class="icon-pencil"></span></a></li>
                  <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                </ul>
                <?php
                }
                ?>
              </div> 
            </div>

          </div>
        </div>
      </div> 
      <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
          <ul class="site-menu js-clone-nav d-none d-md-block">
            <?php
            if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                echo '<li class="active"><a href="welcome.php">Home</a></li>';
            } else {
                echo '<li class="active"><a href="index.php">Home</a></li>';
            }
            ?>
            <li><a href="shop.php">All Products</a></li>
            <li class="has-children">
              <a href="#">Categories</a>
              <ul class="dropdown">
                <li><a href="Amazon.php">Amazon</a></li>
                <li><a href="Apple.php">Apple</a></li>
                <li><a href="Google.php">Google</a></li>
                <li><a href="other.php">Other Brands</a></li>
              </ul>
            </li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>