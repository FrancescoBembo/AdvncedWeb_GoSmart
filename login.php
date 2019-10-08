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
        // What prepare statment does is to create a SQL template to be called repeatly to increase efficiency
        // Prepared statements reduce parsing time as the preparation on the query is done only once (although the statement is executed multiple times)
        // Bound parameters minimize bandwidth to the server as you need send only the parameters each time, and not the whole query
        // Prepared statements are very useful against SQL injections, because parameter values, which are transmitted later using a different protocol, 
        // need not be correctly escaped. If the original statement template is not derived from external input, SQL injection cannot occur.
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
                            header("location: welcome.php?login=success");
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
<?php
require "header.php";
?>
<div class="text-center" data-gr-c-s-loaded="true">
  <div class="form-signin">
  <?php
            $db = mysqli_connect("localhost", "id10588493_admin", "123456", "id10588493_gosmart");
            $sql = "SELECT * FROM image WHERE image_id = 1";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($result);
            echo "<img src='".$row["image"]."' class='img-responsive'>";
            ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
<?php
require "footer.php";
?>