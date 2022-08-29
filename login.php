<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: admin.php");
    exit;
}
 
// Include config file
require_once "connection.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
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
        
        if($stmt = mysqli_prepare($conn, $sql)){
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
                            $_SESSION["usertype"] = $usertype;                           
                            
                            // Redirect user to welcome page
                            if($usertype==1){
                              header("location: admin.php");
                            }
                            else{
                              header("location: admin1.php");
                            }
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid mt-2" >
        <div class="row">
          <div class="col-2">
            <div class="">
                <img src="image/logo1.jpg" alt="logo">
            </div>
          </div>
          <div class="col-sm-9">
            <h3 class="display-6">Amhara Industrial Park Development Corporation</h3>
          </div>
          <div class="col-1 mt-2">
            <a class="btn btn-primary" href="index.php">Home</a>
          </div>
        </div>
        <hr>  
        
      </div>
      <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

    <div class="container p-5 my-5 mt-5 bg-light border card  col-sm-4 rounded text-dark text-center">
      <div class="mb-3 ">
        <img src="image/logo.jpg" class="rounded-circle" alt="logo" width="100" height="100" >
      </div>
      <hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="mb-2 ">
            <label for="username">User Name:</label>
            <input type="text" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" id="username" placeholder="Enter User Name" name="username" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>          
          </div>
          <div class="mb-2 ">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="pwd" placeholder="Enter password" name="password">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
          </div>
          <div class="form-check mb-3">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
          <a href="register.php"><button class="btn btn-primary">Register</button></a>
        </form>
      </div>
    

      <script src="js/bootstrap.bundle.js"></script>
</body>
</html>


