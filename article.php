<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta name="description" content="A diet review website to suggest different types of Diets">
  <meta name="Keywords" content="#">
  <meta name="author" content="FWT team">
  <title>Recipes</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>

<!--   <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> -->
  <style type="text/css">
  .user_name{
      font-size:14px;
      font-weight: bold;
  }
  .comments-list .media{
      border-bottom: 1px dotted #ccc;
  }
  </style>

</head>
<body>
<header>
  <div class="container1">
    <div id="branding">
      <h1 style="font-size: 50px; ">Health&U</h1>

    </div>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li class="current"><a href="Reviews.html">Diets</a></li>
        <li><a href="formpage.php">Contact us</a></li>
        <li><a href="form.php">Subscribe</a></li>
        <li><a href="forumpage.php">Forum</a></li>
      </ul>
    </nav>
  </div>
</header>

<div style="margin-left: 110px; margin-right: 110px;">
 
  <div  class="detail_container">
    <?php
      $db = mysqli_connect('localhost', 'root', '', 'user');
      if(isset($_GET['article_id'])){
        $artid = $_GET['article_id']; //some_value
      }
      $user_check_query = "SELECT filename, imgname FROM articles WHERE aid='$artid' LIMIT 1";
      $result = mysqli_query($db, $user_check_query);
      $user = mysqli_fetch_assoc($result);
      $myfile = fopen($user['filename'], "r") or die("Unable to open file!");
      echo fread($myfile,filesize($user['filename']));
      fclose($myfile);
      echo "<center><img src='".$user['imgname']."' height='500px'></center><br><br>";
    ?>
  </div>

  <div  class="Recipe_container">
    <img src="atk1.jpg">
      <div>
        <p><a href="https://www.atkins.com/recipes/breakfast" id="rr">Low Carb Breakfast Recipes</a></p>
      </div>
  </div>

  <div  class="Recipe_container">
    <img src="atk2.jpg">
      <div>
        <p><a href="https://www.atkins.com/recipes/entree" id="rr">Low Carb Dinner Recipes</a></p>
      </div>
  </div>

  <div  class="Recipe_container">
    <img src="atk3.jpg">
      <div>
        <p><a href="https://www.atkins.com/recipes/snacks" id="rr">Low Carb Snack Recipes</a></p>
      </div>
  </div>

  <div  class="Recipe_container">
    <img src="atk4.jpg">
      <div>
        <p><a href="https://www.atkins.com/recipes/sides" id="rr">Low Carb Appetizers Recipes</a></p>
    </div>
  </div>

  <div  class="Recipe_container">
    <img src="atk5.jpg">
      <div>
        <p><a href="https://www.atkins.com/recipes/desserts" id="rr">Low Carb Dessert Recipes</a></p>
      </div>
  </div>

  <div  class="Recipe_container">
    <img src="atk6.jpg">
      <div>
        <p><a href="https://www.atkins.com/recipes/beverages" id="rr">Low Carb Beverage Recipes</a></p>
      </div>
  </div>
</div>

<br>


<center><table style="border: solid 1px #d3d3d3; width: 80%; padding-left: 175px; padding-right:40px;" cellspacing="0px">
  <tr style="border-bottom: solid 1px #d3d3d3;">
    <td><h2>Comments</h2></td>
  </tr>
    <?php
        $db = mysqli_connect('localhost', 'root', '', 'user');
        $user_check_query = "SELECT * FROM comments;";
        $result = mysqli_query($db, $user_check_query);
        $result_array = array();
        while($row = mysqli_fetch_assoc($result))
        {
            $result_array[] = $row;
        }

        foreach ($result_array as $a) 
        {
          if ($a['artid']==$_GET['article_id']) {
            // $cid1= $a['cid'];
            // $imgno= ((int)$cid1)%6;
            echo "<tr style='border-top: solid 1px #d3d3d3;'><td style='padding-left: 20px;'><img src='veg5.jpg' width= 40px style='display: inline-block;'><h3 style='display: inline-block; margin-left: 10px;'><b>".$a['cauname']."</b></h3></td></tr><tr><td style='padding-left: 72px;'>".$a['cmessage']."</td></tr>";
          }
                                
        }
     

    echo "<tr><td><br><h4>Add a comment:</h4><form action='comments.php?article_id=".$_GET['article_id']."' method='POST' name='comform'><input type='text' name='uname' placeholder='Enter your name' style='background-color: white; width: 77%; border: solid 1px grey;'><br><textarea rows='4' cols='80' input type='text' name='messagecom'></textarea><br><input type='submit' value='Submit' name='submitcom'></form></td></tr>";
    ?>
</table></center>



<footer>
  <p>Health&U, Copyright &copy; 2019 Author : FWT Team</p>
</footer>


</body>
</html>