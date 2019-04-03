<?php
session_start();

// initializing variables
$name = "";
$message = "";
$likes = 0;
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'user');

$user_check_query0 = "CREATE TABLE IF NOT EXISTS answers (ansid REAL PRIMARY KEY AUTO_INCREMENT, qstnid REAL NOT NULL references questions(qid), ansauname TEXT NOT NULL references users(name), ansmessage VARCHAR(300) UNIQUE NOT NULL, likes REAL NOT NULL);";
$result = mysqli_query($db, $user_check_query0);

$queid= NULL;
@$queid= $_GET['question_id'];
if (isset($_POST['submitans'.$queid])) {
// receive all input values from the form
$name = mysqli_real_escape_string($db, $_POST['unameans'.$queid]);

$message = mysqli_real_escape_string($db, $_POST['messageans'.$queid]);


if (empty($message)) { array_push($errors, "Enter answer before submitting"); }

// $msg_check_query = "SELECT * FROM questions WHERE qmessage='$message' LIMIT 1";
// $result = mysqli_query($db, $msg_check_query);
// $existing = mysqli_fetch_assoc($result);

// if ($existing) { // if same question exists
//   if ($user['email'] === $email) {
//     array_push($errors, "Email already exists");
//   }
// }   


$query = "INSERT INTO answers (qstnid, ansauname, ansmessage, likes) 
        VALUES($queid, '$name', '$message', '$likes')";
  mysqli_query($db, $query);
  header('Location: forumpage.php');
}
session_destroy();

?>
