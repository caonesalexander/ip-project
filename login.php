<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
  header("location: welcomepage.php");
  exit;
}

// Include config file
require_once "connection.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Check if username is empty
  if (empty(trim($_POST["username"]))) {
    $username_err = "Please enter username.";
  } else {
    $username = trim($_POST["username"]);
  }

  // Check if password is empty
  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter your password.";
  } else {
    $password = trim($_POST["password"]);
  }

  // Validate credentials
  if (empty($username_err) && empty($password_err)) {
    // Prepare a select statement
    $sql = "SELECT id, username, password FROM users WHERE username = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      // Set parameters
      $param_username = $username;

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // Store result
        mysqli_stmt_store_result($stmt);

        // Check if username exists, if yes then verify password
        if (mysqli_stmt_num_rows($stmt) == 1) {
          // Bind result variables
          mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
          if (mysqli_stmt_fetch($stmt)) {
            if (password_verify($password, $hashed_password)) {
              // Password is correct, so start a new session
              session_start();

              // Store data in session variables
              $_SESSION["loggedin"] = true;
              $_SESSION["id"] = $id;
              $_SESSION["username"] = $username;

              // Redirect user to welcome page
              header("location: product.php");
            } else {
              // Password is not valid, display a generic error message
              $login_err = "Invalid username or password.";
            }
          }
        } else {
          // Username doesn't exist, display a generic error message
          $login_err = "Invalid username or password.";
        }
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }

      // Close statement
      mysqli_stmt_close($stmt);
    }
  }

  // Close connection
  mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Technomatics</title>

  <link rel="shortcut icon" type="image/jpg" href="tech.png" />
  <link rel="stylesheet" href="css/login.css">
</head>

<body>

  <nav class="navbar">
    <div class="navbar_container">
      <a href="about.html"><img src="technologo.png" id="navbar_logo"></a>
      <div class="navbar_toggle" id="mobile-menu">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>
      <ul class="navbar_menu">
        <li class="navbar_item">
          <a href="product.php" class="navbar_links">Products</a>
        </li>
        <li class="navbar_item">
          <a href="about.php" class="navbar_links">About</a>
        </li>
        <li class="navbar_item">
          <a href="contact.php" class="navbar_links">Contact Us</a>
        </li>
        <li class="navbar_btn">
          <a href="signup.php" class="button">Sign Up</a>
        </li>
        <li class="navbar_btn">
          <a href="login.php" class="button">Login</a>
        </li>
      </ul>
    </div>
  </nav>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h3>Login</h3>

    <label for="username">Username</label>
    <input type="text" placeholder="Email or Phone" id="username" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
    <span class="invalid-feedback"><?php
                                    if (!empty($login_err)) {
                                      echo '<div class="alert alert-danger">' . $login_err . '</div>';
                                    }
                                    ?><?php echo $username_err; ?></span>

    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
    <span class="invalid-feedback"><?php
                                    if (!empty($login_err)) {
                                      echo '<div class="alert alert-danger">' . $login_err . '</div>';
                                    }
                                    ?><?php echo $password_err; ?></span>
    <button type="submit" value="Login">Log In</button>
    <br>
    <p class="message">Don't have an account? <a href="signup.html">Sign Up</a>
  </form>
  </nav>