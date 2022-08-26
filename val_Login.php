<?php
# Initialize session
session_start();

# Check if user is already logged in, If yes then redirect him to index page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
  echo "<script>" . "window.location.href='./'" . "</script>";
  exit;
}

# Include connection
require_once "./lib/helpers/connection.db.php";

# Define variables and initialize with empty values
$username_err = $password_err = $login_err = "";
$username = $password = "";

# Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST["username"]))) {
    $username_err = "Please enter your username or an email id.";
  } else {
    $username = trim($_POST["username"]);
  }

  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter your password.";
  } else {
    $password = trim($_POST["password"]);
  }

  # Validate credentials 
  if (empty($username_err) && empty($password_err)) {
    # Prepare a select statement
    $sql = "SELECT id, username, password FROM users WHERE username = ? OR email = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      # Bind variables to the statement as parameters
      mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_username);

      # Set parameters
      $param_username = $username;

      # Execute the statement
      if (mysqli_stmt_execute($stmt)) {
        # Store result
        mysqli_stmt_store_result($stmt);

        # Check if user exists, If yes then verify password
        if (mysqli_stmt_num_rows($stmt) == 1) {
          # Bind values in result to variables
          mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);

          if (mysqli_stmt_fetch($stmt)) {
            # Check if password is correct
            if (password_verify($password, $hashed_password)) {

              # Store data in session variables
              $_SESSION["id"] = $id;
              $_SESSION["username"] = $username;
              $_SESSION["loggedin"] = TRUE;

              # Redirect user to index page
              echo "<script>" . "window.location.href='./'" . "</script>";
              exit;
            } else {
              # If password is incorrect show an error message
              $login_err = "The email or password you entered is incorrect.";
            }
          }
        } else {
          # If user doesn't exists show an error message
          $login_err = "Invalid username or password.";
        }
      } else {
        echo "<script>" . "alert('Oops! Something went wrong. Please try again later.');" . "</script>";
        echo "<script>" . "window.location.href='./login.php'" . "</script>";
        exit;
      }

      # Close statement
      mysqli_stmt_close($stmt);
    }
  }

  # Close connection
  mysqli_close($link);
}
?>
