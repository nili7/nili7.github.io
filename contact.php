<?php
session_start();

// initializing variables
$name = "";
$message = "";
$likes = 0;
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'user');

$user_check_query0 = "CREATE TABLE IF NOT EXISTS messages (mid REAL PRIMARY KEY AUTO_INCREMENT, email TEXT NOT NULL, mauname TEXT NOT NULL, message VARCHAR(300) UNIQUE NOT NULL);";
$result = mysqli_query($db, $user_check_query0);


// SUBMIT MESSAGE
if (isset($_POST['sub'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $message = mysqli_real_escape_string($db, $_POST['message']);
 
  if (empty($message)) { array_push($errors, "Enter message before submitting"); }

  // $msg_check_query = "SELECT * FROM questions WHERE qmessage='$message' LIMIT 1";
  // $result = mysqli_query($db, $msg_check_query);
  // $existing = mysqli_fetch_assoc($result);

  // if ($existing) { // if same question exists
  //   if ($user['email'] === $email) {
  //     array_push($errors, "Email already exists");
  //   }
  // }   

  $query = "INSERT INTO messages (email, mauname, message) 
          VALUES('$email', '$name', '$message')";
    mysqli_query($db, $query);

    // $_SESSION['name'] = $name;
    // $_SESSION['success'] = "You";
    // $message = "Your message has been received. We'll get back to you soon!";
    // echo "<script type='text/javascript'>alert('$message');</script>";

    header('Location: formpage.php');
  }
  session_destroy();

?>
