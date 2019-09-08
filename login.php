<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
<style>

.text-center {
    text-align: center!important;
}
.form-signin {
    width: 100%;
    max-width: 330px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.img-responsive {
    width: 175px;
    height: 175px;
    border-radius: 10px;
    margin-left: auto;
    margin-right: auto;
}



</style>

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
      </div>
    </div>
  </nav>
  

<div class="text-center" data-gr-c-s-loaded="true">
  <div class="form-signin">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <?php
            $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
            $sql = "SELECT * FROM image WHERE image_id = 1";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($result);
            echo "<img src='".$row["image"]."' class='img-responsive'>";
            ?>
    <h1 class="h3 mb-3 font-weight-normal">Please Log in</h1>
    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
            <label class="sr-only">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required="" value="<?php echo $username; ?>">
            <span class="help-block"><?php echo $username_err; ?></span>
    </div>
    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
            <label class="sr-only" >Password</label>
            <input type="password" name="password" placeholder="Password" required="" class="form-control">
            <span class="help-block"><?php echo $password_err; ?></span>
    </div>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>

  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
  <p class="mt-5 mb-3 text-muted">© 2018-2019</p>


  
    </form>
  </div>
</div>



      
   
    
    </div><br><br>
    <footer class="container-fluid text-center">
      <p>Online Store Copyright</p>  
      <form class="form-inline">Get deals:
        <input type="email" class="form-control" size="50" placeholder="Email Address">
        <button type="button" class="btn btn-danger">Sign Up</button>
      </form>
    </footer>      
</body>
</html>