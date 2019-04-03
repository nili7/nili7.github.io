<?php
    include('forumq.php');
    include('foruma.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Health&U | Forum</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="style1.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
</head>
<body style="background:url('bvali.jpg') no-repeat; background-size: cover;height:100%;">
    <header style="height: 120px;">
        <div class="container1">
            <div id="branding">
                <h1 style="font-family:'Advent Pro';font-size: 50px; padding-top: 20px; ">Health&U</h1>

            </div>
            <nav style="padding-top: 20px; padding-right:10px;">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="Reviews.html">Diets</a></li>
                    <li><a href="formpage.php">Contact Us</a></li>
                    <li><a href="form.php">Subscribe</a></li>
                    <li  class="current"><a href="forumpage.php">Forum</a></li>
                </ul>
            </nav>
        </div>
    </header>

<div class="container">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1" id="logout">
            <div class="page-header">
                <h3 class="reviews">OUR FORUM</h3>
            </div>
            <div class="comment-tabs">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#comments-logout" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Discussion</h4></a></li>
                    <li><a href="#add-comment" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add a question</h4></a></li>
                </ul>
            </div>
            <div class="tab-content">              
                <div class="tab-pane active" id="comments-logout">
                    <center><table style="border: solid 1px #d3d3d3; width: 100%;" cellspacing="0px">
                        <?php
                            $db = mysqli_connect('localhost', 'root', '', 'user');
                            $user_check_query = "SELECT * FROM questions;";
                            $result = mysqli_query($db, $user_check_query);
                            $result_array = array();
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $result_array[] = $row;
                            }


                            $answer_query = "SELECT * FROM answers;";
                            $res = mysqli_query($db, $answer_query);
                            $answer_array = array();
                            while($row = mysqli_fetch_assoc($res))
                            {
                                $answer_array[] = $row;
                            }

                            // print_r($result_array);
                            foreach ($result_array as $a) 
                            {
                                echo "<tr style='border-top: solid 1px #d3d3d3;'><td style='padding-left: 20px;'><img src='veg".$a['qid'].".jpg' width= 40px style='display: inline-block;'><h2 style='display: inline-block; margin-left: 10px;'><b>".$a['qauname']."</b></h2></td></tr><tr><td style='padding-left: 72px;'><h3>".$a['qmessage']."</h3></td></tr>";
                                echo "<tr><td style='padding-left: 72px;'><input type='button' value='Reply' id='giverep".$a['qid']."' onclick='giverepf(".$a['qid'].")'></input><br><br><form action='foruma.php?question_id=".$a['qid']."' method='POST' id='ansform".$a['qid']."'><input type='text' name='unameans".$a['qid']."' placeholder='Enter your name' style='background-color: white; border: solid 1px grey;'><br><br><textarea rows='4' cols='50' input type='text' name='messageans".$a['qid']."' style='width:50%;'></textarea><br><input type='submit' value='Submit' name='submitans".$a['qid']."'></form></td></tr>";

                                foreach ($answer_array as $b) 
                                {
                                    if ($a['qid']== $b['qstnid'])
                                    {
                                        echo "<tr><td style='padding-left: 72px;'><img src='veg".$b['ansid'].".jpg' width= 40px style='display: inline-block;'><h3 style='display:inline-block; margin-left: 10px;'><b>".$b['ansauname']."</b><h3></td></tr><tr><td style='padding-left: 120px;'><h3>".$b['ansmessage']."</h3></td></tr>";
                                    }
                                }
                            }
                        ?>  
                    </table></center>
                </div>

                <div class="tab-pane" id="add-comment">
                    <form action="forumq.php" method="post" class="form-horizontal" id="commentForm" role="form"> 
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Question</label>
                            <div class="col-sm-10">
                                <input type="text" name="uname" placeholder="Enter your name"  style='background-color: white; border: solid 1px grey;'><br><br>
                                <textarea class="form-control" name="messageqstn" id="addComment" rows="5" cols="10"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">                    
                                <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment" name="submitqstn"> Submit question</button>
                            </div>
                        </div>            
                    </form>
                </div>
            
            </div>
        </div>
    </div>
</div>

<footer>
    <p style="font-size: 20px;">Health&U, Copyright &copy; 2019 Author : FWT Team</p>
</footer>
<script type="text/javascript">
    $(document).ready(function(){
        for (let i = 1; i < 6; i++) {
            let idno= '#ansform'+i;
            $(idno).hide();
        }  
    });
    function giverepf(qid1) {
        let afno= '#ansform'+qid1;
        $(afno).show();
            
        }
        // var formvar = document.createElement("form");
        // formvar.action = "foruma.php?question_id="+qid1;
        // formvar.method = 'POST';
        // formvar.id = 'ansform';

        // var textar = document.createElement("textarea");
        // textar.rows = "4";
        // textar.cols = "50";
        // textar.name = "messageans";
        // ansform.appendChild(textar);
        // ansform.appendChild(document.createElement("br"));
        // var sbut = document.createElement("input");
        // sbut.type = "button";
        // sbut.name = "submitans";
        // sbut.value = "Submit Reply";
        // ansform.appendChild(sbut);
        
     //}
</script>
</body>
</html>
