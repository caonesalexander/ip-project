<?php
// Include config file
require_once "connection.php";

// Define variables and initialize with empty values
$username = $fullname = $password = $confirm_password = $phonenumber = "";
$username_err = $fullname_err = $password_err = $confirm_password_err = $phonenumber_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Validate Fullname
    if (empty(trim($_POST["fullname"]))) {
        $fullname_err = "Please enter a name.";
    } elseif (!preg_match('/.*[^a-zA-Z0-9_].*+$/', trim($_POST["fullname"]))) {
        $fullname_err = "Fullname can only contain letters, and underscores.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE fullname = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_fullname);

            // Set parameters
            $param_fullname = trim($_POST["fullname"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $fullname_err = "This name is already taken.";
                } else {
                    $fullname = trim($_POST["fullname"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }
    //Validate phone
    if (empty(trim($_POST["phonenumber"]))) {
        $phonenumber_err = "Please enter a number.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["phonenumber"]))) {
        $phonenumber_err = "Phone number can only contain  numbers.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE phonenumber = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_phonenumber);

            // Set parameters
            $param_phonenumber = trim($_POST["phonenumber"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $phonenumber_err = "This number is already taken.";
                } else {
                    $phonenumber = trim($_POST["phonenumber"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }


    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
        $username_err = "Username can only contain letters, numbers, and underscores.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                /* store result */
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }


    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have atleast 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($fullname_err) && empty($password_err) && empty($confirm_password_err) && empty($phonenumber_err)) {

        // Prepare an insert statement
        $sql = "INSERT INTO users (fullname,username,password,phonenumber) VALUES (?,?, ?, ?)";


        if ($stmt = mysqli_prepare($link, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_fullname, $param_username, $param_password, $param_phonenumber);

            // Set parameters
            $param_fullname = $param_fullname;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_phonenumber = $phonenumber;

            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Redirect to login page
                header("location: login.php");
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
    <link rel="stylesheet" href="css/signup.css">
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

        <h3>Sign Up</h3>


        <label for="username">Fullname</label>
        <input type="text" placeholder="Fullname" id="fullname" name="fullname" class="form-control <?php echo (!empty($fullname_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $fullname; ?>">
        <span class="invalid-feedback"><?php echo $fullname_err; ?></span>



        <label for="username">Username</label>
        <input type="text" placeholder="Username" id="username" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
        <span class="invalid-feedback"><?php echo $username_err; ?></span>


        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
        <span class="invalid-feedback"><?php echo $password_err; ?></span>



        <label for="password">Confirm Password</label>
        <input type="password" placeholder="Password" id="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>



        <label for="username">Phone Number</label>
        <input type="tel" placeholder="Phone" id="phone" name="phonenumber" class="form-control <?php echo (!empty($phonenumber_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phonenumber; ?>">
        <span class="invalid-feedback"><?php echo $phonenumber_err; ?></span>

        <button type="submit" value="Submit">Sign Up</button>
        <p class="message">Already have an account? <a href="login.html">Log in</a>
    </form>

    </nav>