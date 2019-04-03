<?php

$db = mysqli_connect('localhost', 'root', '', 'user');

$query = "INSERT INTO articles(auname, filename, imgname) VALUES ("a", "atkins.txt", "atkins.jpg");";
mysqli_query($db, $query);
$query = "INSERT INTO articles(auname, filename, imgname) VALUES ("a", "keto.txt", "keto.jpg");";
mysqli_query($db, $query);
$query = "INSERT INTO articles(auname, filename, imgname) VALUES ("a", "zone.txt", "zone.jpg");";
mysqli_query($db, $query);
$query = "INSERT INTO articles(auname, filename, imgname) VALUES ("a", "vegan.txt", "vegan.jpg");";
mysqli_query($db, $query);
$query = "INSERT INTO articles(auname, filename, imgname) VALUES ("a", "vegetarian.txt", "vegetarian.jpg");";
mysqli_query($db, $query);
$query = "INSERT INTO articles(auname, filename, imgname) VALUES ("a", "ww.txt", "ww.jpg");";
mysqli_query($db, $query);
$query = "INSERT INTO articles(auname, filename, imgname) VALUES ("a", "raw.txt", "raw.jpg");";
mysqli_query($db, $query);
$query = "INSERT INTO articles(auname, filename, imgname) VALUES ("a", "south.txt", "south.jpg");";
mysqli_query($db, $query);
$query = "INSERT INTO articles(auname, filename, imgname) VALUES ("a", "medi.txt", "medi.jpg");";
mysqli_query($db, $query);

?>