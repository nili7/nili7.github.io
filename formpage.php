<?php
    include('contact.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="descriotion" content="A gaming review website to suggest which games are the best">
	<meta name="Keywords" content="#">
	<meta name="author" content="FWT team">

	  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Health&U | Your home to good food</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
</head>
<body style="background:url('hi1.jpg') no-repeat; background-size: cover;height:100%;">
<header>
	<div class="container1">
		<div id="branding">
			<h1 style="font-family:'Advent Pro';font-size: 50px; ">Health&U</h1>

		</div>
		<nav>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="Reviews.html">Diets</a></li>
				<li class="current"><a href="formpage.php">Contact Us</a></li>
				<li><a href="form.php">Subscribe</a></li>
				<li><a href="forumpage.php">Forum</a></li>
			</ul>
		</nav>
	</div>
</header>

	<div class="container">
            <div id="form-main">
                <div id="form-div">
                    <form class="montform" id="reused_form" action="contact.php" method="POST">
                    	<center><p id="yo">CONTACT US</p></center>
                        <p class="name">
                            <input name="name" type="text" class="feedback-input" required placeholder="Name" id="name"/>
                        </p>
                        <p class="email">
                            <input name="email" type="email" required class="feedback-input" placeholder="Email" id="email" />
                        </p>
                        <p class="text11">
                            <textarea name="message" class="feedback-input" placeholder="Message" id="comment"></textarea>
                        </p>
                        <div class="submit">
                            <button type="submit" class="button-blue" name="sub">SUBMIT</button>
                        </div>
                       <div>
                            <center><p id="yo1">Our Phone: 999-999-999</p></center>
                            <center><p id="yo1">Our Email: us@mail.com</p></center>
                       </div>
                        
                    </form>
                    <div id="error_message" style="width:100%; height:100%; display:none; ">
                        <h4>
                            Error
                        </h4>
                        Sorry there was an error sending your form. 
                    </div>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div>
                </div>
            </div>
        </div>
	

<footer style=" margin-top: 800px">
	<p>Health&U, Copyright &copy; 2019 Author : FWT Team</p>
</footer>



 <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>