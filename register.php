<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
    <style>

    .text-center {
        text-align: center!important;
    }
    .form-signup {
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
    <div class="form-signup">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         <?php
            $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
            $sql = "SELECT * FROM image WHERE image_id = 1";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($result);
            echo "<img src='".$row["image"]."' class='img-responsive'>";
            ?>
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" placeholder="Password" required="" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
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