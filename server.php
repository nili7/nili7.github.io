<?php
session_start();

// initializing variables
$name = "";
$email    = "";
$message = "";
$password = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'user');

$user_check_query0 = "CREATE TABLE IF NOT EXISTS  users(uid REAL PRIMARY KEY AUTO_INCREMENT, name TEXT NOT NULL, email VARCHAR(50) UNIQUE NOT NULL, password TEXT);";
$result = mysqli_query($db, $user_check_query0);

// REGISTER USER
if (isset($_POST['subscribe'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['Name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
 
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }

  $user_check_query = "SELECT * FROM users WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }   

  $query = "INSERT INTO users (email, name) 
          VALUES('$email', '$name')"; //, SHA1('$password')
    mysqli_query($db, $query);
    $_SESSION['name'] = $name;
    $_SESSION['success'] = "You have been subscribed";
    $message = "You have been subscribed";
    echo "<script type='text/javascript'>alert('$message');</script>";
  }

?>
