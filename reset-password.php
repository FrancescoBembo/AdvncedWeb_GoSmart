<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to index page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter the new password.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Password must have atleast 6 characters.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm the password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
        
    // Check input errors before updating the database
    if(empty($new_password_err) && empty($confirm_password_err)){
        // Prepare an update statement
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // Set parameters
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                echo '<h1><center>Your password has been updated, you will be redirecting to the login page</center></h1>';
                echo '<meta http-equiv="Refresh" content="2; url=login.php" />';
                //header("location: login.php");
                exit();
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
        <a class="navbar-brand" href="welcome.php" >GoSmart</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="welcome.php">Home</a></li>
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
    <div class="container">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link" href="welcome.php">Cancel</a>
            </div>
        </form>
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