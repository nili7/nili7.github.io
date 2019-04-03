<?php
	include('server.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="A place to find all your health needs">
	<meta name="Keywords" content="#">
	<meta name="author" content="FWT team">
	<title>Health&U | Become a Member</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Seymour+One" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background:url('hi1.jpg'); background-size: cover;height:100%;">
<header>
	<div class="container1">
		<div id="branding">
			<h1 style="font-family:'Advent Pro';font-size: 50px; ">Health&U</h1>

		</div>
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="Reviews.html">Diets</a></li>
				<li><a href="formpage.php">Contact us</a></li>
				<li class="current"><a href="form.php">Subscribe</a></li>
				<li><a href="forumpage.php">Forum</a></li>
			</ul>
		</nav>
	</div>
</header>
<section id="form1">
	<div class="container1">
		 <form action="form.php" method="post" class="modal-content">
		 	<div class="container1">
		 		<h1>Membership</h1>
		 		<p>Please fill in your details to become a Health&U member</p>
		 		<hr>
		 		<i class="fa fa-envelope icon"></i>
		 		<label for="email"><b>Email</b></label>
		 		<input type="text" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
		 		<i class="fa fa-user icon"></i>
		 		<label for="Name"><b>Name</b></label>
		 		<input type="text" placeholder="Enter Name" name="Name" required>
		 		<label>
		 		
		 		<label>
		 			<input type="checkbox" checked="checked" name="daily" style="margin-bottom: 15px"> Get daily notifications
		 		</label>
		 		<div class="clearfix">
		 			
		 			<button type="submit" class="subscribebtn" name="subscribe" value="subscribe">Subscribe
		 			</button>
		 		</div>
		 	</div>

        
         </form>

	</div>
</section>

<footer>
	<p>Health&U, Copyright &copy; 2019 Author : FWT Team</p>
</footer>


</body>
</html>

