<?php
session_start();

// initializing variables
$name = "";
$message = "";
$likes = 0;
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'user');

$user_check_query0 = "CREATE TABLE comments if not exists(cid REAL PRIMARY KEY AUTO_INCREMENT, artid REAL NOT NULL references articles(aid), cauname TEXT NOT NULL references users(name), cmessage VARCHAR(50) UNIQUE NOT NULL, likes REAL NOT NULL);";
$result = mysqli_query($db, $user_check_query0);

// REGISTER USER
if (isset($_POST['submitcom'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['uname']);
  $message = mysqli_real_escape_string($db, $_POST['messagecom']);
 
  
 $query = "INSERT INTO comments (artid, cauname, cmessage, likes) 
          VALUES('".$_GET['article_id']."', '$name', '$message', '$likes')";
    mysqli_query($db, $query);
    header('Location: article.php?article_id='.$_GET['article_id']);
  }
  session_destroy();

?>
